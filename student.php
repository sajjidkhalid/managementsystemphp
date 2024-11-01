<?php
$insert = false;
$ins = false;
$server = "localhost";
$username = "root";
$password = "";
$db = "student";

$connection = mysqli_connect($server,$username,$password,$db);
if(!$connection){
    die("connection is failed :" .mysqli_connect_error());
}else{
    echo "success <br>";
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $fathername = $_POST["fname"];
    $email = $_POST["email"];
    $password = $_POST["pass"];
  
    $coursename = $_POST["course"];
    $sql = "INSERT INTO `std` (`name`, `fathername`, `email`, `password`, `course`, `tstamp`) VALUES ('$name', '$fathername', '$email', '$password', '$coursename', current_timestamp())";
    $result = mysqli_query($connection,$sql);
    if($result){
        $insert = true;
    }else{
        $ins = true;
    }


}
?>
<?php
if($insert){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>success!</strong> Your record insert successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
<?php
if($ins){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>error!</strong> Your record show error due to your form not working properly.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-container{
    font-family: 'Open Sans', sans-serif;
    text-align: center;
}
.form-container .form-icon{
    color: #fff;
    background: linear-gradient(to right, #FDC006, #FEB101);
    font-size: 50px;
    line-height: 110px;
    width: 110px;
    height: 110px;
    margin: 0 auto -55px;
    border-radius: 50%;
    position: relative;
    z-index: 1;
}
.form-container .form-horizontal{
    background: linear-gradient(45deg,#fff 50%, #f9f9f9 50%);
    background-size: 20px 20px;
    padding: 75px 40px 15px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
.form-horizontal .title{
    color: #4F4F4F;
    font-size: 20px;
    text-transform: uppercase;
    padding: 0 25px;
    margin: 0 0 20px;
    display: inline-block;
    position: relative;
}
.form-horizontal .title:before,
.form-horizontal .title:after{
    content: "";
    background: #4F4F4F;
    width: 15px;
    height: 2px;
    transform: translateY(-50%);
    position: absolute;
    top: 50%;
    left: 0;
}
.form-horizontal .title:after{
    left: auto;
    right: 0;
}
.form-horizontal .form-group{ margin: 0 0 15px; }
.form-horizontal .form-group:last-of-type{
    border-top: 2px solid #e5e5e5;
    padding: 15px 15px 0;
    margin: 0 -40px 0;
}
.form-horizontal .form-control{
    background: #E6E6E6;
    font-size: 16px;
    text-align: center;
    letter-spacing: 1px;
    height: 40px;
    padding: 6px 30px;
    border-radius: 8px;
    border: none;
    box-shadow: none;
    border-top: 4px solid #CECECE;
    border-left: 4px solid #CECECE;
}
.form-horizontal .form-control:focus{ box-shadow: none; }
.form-horizontal .form-control::placeholder{ color: #6C6C6C; }
.form-horizontal .signup{
    color: #58523C;
    background-color: #FEC107;
    font-size: 22px;
    font-weight: 600;
    text-transform: uppercase;
    width: 100%;
    padding: 6px 10px;
    border: none;
    border-radius: 8px;
    box-shadow: 0 -3px 0 rgba(0,0,0,0.1) inset;
    display: block;
    transition: all 0.3s ease 0s;
}
.form-horizontal .signup:hover,
.form-horizontal .signup:focus{
    box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1) inset,0 0 10px rgba(0,0,0,0.1);
}
@media only screen and (max-width: 359px){
    .form-container .form-horizontal{
        padding-left: 20px;
        padding-right: 20px;
    }
    .form-horizontal .form-group:last-of-type{
        padding: 15px 15px 0;
        margin: 0 -20px 0;
    }
}
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">student profile</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <div class="form-container">
                    <div class="form-icon">
                        <span><i class="fa fa-file-alt"></i></span>
                    </div>
                    <form class="form-horizontal" action = "student.php" method = "post">
                        <h3 class="title">Student name</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name = "name" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name = "fname" placeholder="father name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name = "pass" placeholder="Password">
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-control" name = "course" placeholder="Course name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name = "email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <button class="btn signup">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>