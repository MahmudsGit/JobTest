<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>javascript</title>
</head>
<body>

    <div style="text-align: center; padding-top: 100px; margin-left: 500px">
        <form action="" method="post">
            <table>
                <tr>
                    <td></td>
                    <td><input type="text" id="input1" placeholder="input1"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" id="input2" placeholder="input2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" id="input3" placeholder="input3"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" id="input4" placeholder="input4"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" id="input5" placeholder="input5"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="text" id="input6" placeholder="input6"></td>
                </tr>
                <tr>
                    <td>index :</td>
                    <td><input type="text" id="indexNumber" placeholder="index from remove"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" onclick="removeNode()" id="Remove">Remove</button></td>
                </tr>
            </table>
        </form>
    </div>
<script>
    function removeNode() {
        var input1 = document.getElementById('input1').value;
        var input2 = document.getElementById('input2').value;
        var input3 = document.getElementById('input3').value;
        var input4 = document.getElementById('input4').value;
        var input5 = document.getElementById('input5').value;
        var input6 = document.getElementById('input6').value;
        var indexNumber = document.getElementById('indexNumber').value;
        var arrVal = [input1,input2,input3,input4,input5,input6];
        arrVal.splice(indexNumber,2);
        document.write('<h1 style="text-align: center">'+arrVal+'</h1>');
    }
</script>
</body>
</html>
