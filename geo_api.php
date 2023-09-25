
<?php 
include('token.php');
$ip = @$_REQUEST['REMOTE_ADDR'];
    $apiUrl = file_get_contents("https://ipinfo.io/$ip?token=$token");
    $response = json_decode($apiUrl, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome !</h1>
    <h1><?=$response['city'];?></h1>
    <h1><?=$response['region'];?></h1>
    <h1><?=$response['country'];?></h1>
    <h1><?=$response['timezone'];?></h1>
</body>
</html>

<h1><?=$response['city'];?></h1>
<h1><?=$response['region'];?></h1>
<h1><?=$response['country'];?></h1>
<h1><?=$response['timezone'];?></h1>