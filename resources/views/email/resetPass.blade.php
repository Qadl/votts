<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p> <small>Kindly click on the link to reset your password</small></p>

    <p> <small><a href="{{ url('/reset_password/'.$token) }}">Click Here</a>.</small></p>


    <p> <small>Regards,</small></p>
    <p> <small>World of Votts.</small></p>
</body>

</html>