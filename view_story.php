<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>view story</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <div class="row mt-5">
        <div class="mt-5 m-auto">



<?php
  if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $conn = mysqli_connect('localhost','root','','lii');

    $sql = "SELECT * FROM profile where p_id = '$id'";
    $r = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($r);

    echo'
    <div class="card m-0 " align="center" style="border:none">
    <a href="view_story.php?id='.$row['p_id'].'">
    <img  width="200" height="200"  src="profile_pictures/'.$row['pro_pic'].'" class="img-responsive img-thumbnail card-image" /><br>
    </a>
    <p class="p-1 text-center">'.$row['pro_name'].'
      <a  class="ml-2 text-secondary" href="delete_profile.php?id='.$row['p_id'].'">
      <svg width="1em" height="0.8em" viewBox="0 0 16 16" class=" bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
      </svg>
      </a>
      </p>
    </div><Br><Br>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
  </svg>
      <b>VIEW STORY</b>
</button>';

  // first carousel is profile name and picture
echo '
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content m-auto" style="width:300px">

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner" style="width:320px">

      <div class="carousel-item active">
      <img src="profile_pictures/'.$row['pro_pic'].'" width="320" height="530"  class="d-block m-auto bg-dark" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h3>'.$row['pro_name'].'</h3>
      <p>Life in images.</p>
      </div>
      </div>';
      $sql = "SELECT *  FROM  story where p_id = '$id' ";
      $result = mysqli_query($conn, $sql);
      while($rows = mysqli_fetch_assoc($result)){

        echo    '<div class="carousel-item " >
        <img src="story_images/'.$rows['image'].'" class="d-block " style="width:320px"  height="530" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>'.$rows['caption'].'</h5>
        </div>
        </div>
     
        
        ';

    }
  echo    '


</div>

<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>



</div>

    </div>
  </div>
</div>





    <a href="create_story.php?id='.$id.'" class="btn btn-success" >
    <b>CREATE STORY</b>
    </a>';

  }
  ?>
</div>

</div>
</div>


<!-- <div class="carousel-item">
  <img src="profile_pictures/user.jpg" class="d-block w-100" alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>Third slide label</h5>
    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
  </div>
  </div> -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<!-- js -->
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
