<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palindrome</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>
            <?php
                if (isset($_POST['check'])) {

                    $palindrome = $_POST['number'];

                    $revPalindrome = strrev($palindrome);

                    if ($palindrome == $revPalindrome){
                        $palindromeLength = strlen($palindrome);

                        $result = 0;
                        for ($i  = 2; $i < $palindromeLength; $i++){
                            if ($palindromeLength % $i == 0){
                                $result = 1;
                                break;
                            }
                        }
                        if ($result == 0){
                            echo "Yes";
                        }else{
                            echo "$palindrome is not Prime";
                        }

                    }else{
                        echo "$palindrome is not Palindrome";
                    }
                }
            ?>
        </h1>
    </div>


    <div style="text-align: center; padding-top: 100px">
        <form action="" method="post">
            String:
            <input type="text" name="number">
            <input type="submit" name="check">

        </form>
    </div>
</body>
</html>
