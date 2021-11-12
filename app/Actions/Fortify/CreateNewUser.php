<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Image;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobile' => ['required', 'unique:users', 'regex:/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/'],
            'image' => ['required', 'max:2048', 'mimes:jpg,JPG,bmp,BMP,png,PNG'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();


        if (request()->has('image')){
            $imageFile = request()->file('image');
            $imageName =$input['name'].time().'.'.$imageFile->getClientOriginalExtension();
            $imagePath = 'storage/UserImage/';
            $imageUrl = $imagePath.$imageName;
            Image::make($imageFile)->resize(200,200)->save($imageUrl);

            return User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'mobile' => $input['mobile'],
                'image' => $imageUrl,
                'password' => Hash::make($input['password']),
            ]);
        }


    }
}
