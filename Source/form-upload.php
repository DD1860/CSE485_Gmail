<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action="upload.php" class ="test" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
        <input type="file" name="file"><br><br><br>
        <input type="submit" name="submit" value="Upload">
    </form>
    </div>
    <style>
     .container {
         padding : 15%;
         text-align: center;
     }
    .test {
        padding : 75px;
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    }
        </style>
</body>

</html>