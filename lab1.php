<?php 
  include_once 'DBConnector.php';
  include_once 'user.php';
  $con = new DBConnector();

 if (isset($_POST["btnSave"])) {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $city=$_POST['city_name'];

    $user = new user ($first_name,$last_name,$city);
    $res = $user->save();

    if($res){
        echo "save operation was successful";
    }
    else{
        echo "An error occured";
    }
 }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>IAPLabOne</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="row">
        <div class="col">
            <h4 class="text-center" style="margin-top: 32px;">Internet Application Programming Lab1</h4>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center" style="margin-top: 66px;">
            <form method="post">
                <div class="form-group">
                    <input class="form-control" name="first_name" type="text" placeholder="Firstname">
                </div>
                <div class="form-group">
                    <input class="form-control" name="last_name" type="text" placeholder="Lastname">
                </div>
                <div class="form-group">
                    <input class="form-control" name="city_name" type="text" placeholder="City">
                </div>
                <div  class="form-group d-flex flex-column align-self-stretch">
                    <button class="btn btn-primary align-self-stretch" name="btnSave" type="submit">SAVE</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>