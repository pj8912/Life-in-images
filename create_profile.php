<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <div class="mt-5 p-4">

    <div class="col-md-5 card m-auto " >

    <form action="create_profile.php" enctype="multipart/form-data" method="post">
      <h3 class="p-2 text-center">Create Profile</h3>
      <div class="form-group">
        <input class="form-control" type="file" name="pro_pic" value="">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="pro_name" placeholder="Name">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block" name="btn">Create Profile</button>
      </div>
    </form>

  </div>


</div>
  </body>
</html>
<?php
$conn = mysqli_connect('localhost','root','','lii');
  if(isset($_POST['btn'])){
    $pro_name = $_POST['pro_name'];
    // if(isset($_FILES))
    $filename = $_FILES['pro_pic']['name'];
    $filetmp_name =$_FILES['pro_pic']['tmp_name'];
    // $file_extension = strtolower(pathinfo($_FILES["uploadFile"]["name"], PATHINFO_EXTENSION));
    move_uploaded_file($filetmp_name, 'profile_pictures/'.$filename);
    $sql = "INSERT INTO  profile(pro_name, pro_pic) VALUES('$pro_name','$filename')";
    mysqli_query($conn, $sql);
    header('location:index.php');
    exit();
  }

 ?>
