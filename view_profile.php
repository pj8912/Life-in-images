<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Profiles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <h2 align="center">Profiles</h2>
    <div class="mt-5 p-3">

    <?php
    $conn = mysqli_connect('localhost','root','','lii');
    $sql = "SELECT * FROM profile";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) < 1){ echo 'No Profiles Created';}
    else{
      while($row = mysqli_fetch_assoc($result)){
        echo '<div class="card col-md-2 m-auto" style="border:none">
        <a href="view_story.php?id='.$row['p_id'].'">
        <img   src="profile_pictures/'.$row['pro_pic'].'" class="img-responsive img-thumbnail card-image" /><br>
        </a>
        <p class="p-1 text-center">'.$row['pro_name'].'
          <a  class="ml-2 text-secondary" href="delete_profile.php?id='.$row['p_id'].'">
          <svg width="1em" height="0.8em" viewBox="0 0 16 16" class=" bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
          </svg>
          </a>
          </p>
        </div>
        ';

      }
    }



     ?>
   </div>
  </body>
</html>
