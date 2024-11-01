<?php
$insert = false;
$delete = false;
$updated = false;
$server = "localhost";
$username = "root";
$password = "";
$db = "imrankhan";

$connection = mysqli_connect($server,$username,$password,$db);
if(!$connection){
    die("connection is failed :" .mysqli_connect_error());
}else{
    echo "connection successfully maked";
}
if(isset($_GET['delete'])){
    $sno = $_GET['delete'];
    $delete = true;
    $sql = "DELETE FROM `notes` WHERE `notes`.`sno` = $sno";
    $result = mysqli_query($connection,$sql);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['snoEdit'])){
        $sno = $_POST["snoEdit"];
        $title = $_POST["titleEdit"];
        $description = $_POST["descriptionEdit"];
    
        $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `notes`.`sno` = $sno";
        $result = mysqli_query($connection,$sql);
        if($result){
            $updated = true;
          }
          else{
            echo "not updated succesfully";
          }
    }
    else{

   
    $title = $_POST["title"];
    $description = $_POST["description"];

    $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ( '$title', '$description')";
    $result = mysqli_query($connection,$sql);
    if($result){
        // echo "data inserted successfully";
        $insert = true;
    }else{
        echo "data cannot inserted successfully";
    }
}
}
?>
<?php

if($insert){
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>successfully!</strong> You record has been inserted!
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}


?>
<?php

if($updated){
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>successfully!</strong> You record has been updated!
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}


?>
<?php

if($delete){
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>successfully!</strong> You record has been deleted!
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
  </head>
  <body>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action = "comment.php" method = "POST">
      <input type="hidden" name="snoEdit" id="snoEdit">
  <div class="mb-3">
    <label for="titleEdit" class="form-label">Title Note</label>
    <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
    
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a description here" id="descriptionEdit" name="descriptionEdit"></textarea>
  <label for="descriptionEdit">Note Description</label>
</div>
  
  <button type="submit" class="btn btn-primary" style = "margin-top : 23px;">Update Note</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search button</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
<form action = "comment.php" method = "POST">
  <div class="mb-3">
    <label for="title" class="form-label">Student name or id</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a description here" id="description" name="description"></textarea>
  <label for="description">Course name or details</label>
</div>
  
  <button type="submit" class="btn btn-primary" style = "margin-top : 23px;">Submit</button>
</form>
</div>

<div class="container">
<?php
// $sql = "SELECT * FROM `notes`";
// $result = mysqli_query($connection,$sql);
// while($row = mysqli_fetch_assoc($result)){
    // echo "$row";
    // echo "<br>";
    // echo $row['sno'] . "this is title" .$row['title'] . "this is description" .$row['description'];
// }
?>

<table class="table" id = "myTable">
  <thead>
    <tr>
      <th scope="col">S>No</th>
      <th scope="col">Title Note</th>
      <th scope="col">Description Note</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql = "SELECT * FROM `notes`";
$result = mysqli_query($connection,$sql);
$sno = 0;
while($row = mysqli_fetch_assoc($result)){

   $sno = $sno + 1;
    echo " <tr>
      <th scope='row'>".$sno."</th>
      <td>".$row['title']."</td>
      <td>".$row['description']."</td>
      <td><button class='edit btn btn-primary btn-sm' id = ".$row['sno'].">Edit</button><button class='delete btn btn-primary btn-sm' id =d".$row['sno'].">Delete</button></td>
    </tr>";
 
}
?>



 
   
  </tbody>
</table>
?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
  <script>let table = new DataTable('#myTable');</script>

  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element)=>{
        element.addEventListener("click",(e)=>{
            console.log("edit",);
            tr = e.target.parentNode.parentNode;
            title = tr.getElementsByTagName("td")[0].innerText;
            description = tr.getElementsByTagName("td")[0].innerText;
            console.log(title,description);
            titleEdit.value = title;
             descriptionEdit.value = description;
        $('#editModal').modal('toggle');
         snoEdit.value = e.target.id;
         console.log(e.target.id);
        })
    });


    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `comment.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>
  </body>
</html>