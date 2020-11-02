<?php
if(isset($_POST['s-btn'])) {

  if(isset($_POST['id'])){

    $id = $_POST['id'];
    $conn = mysqli_connect('localhost','root', '' ,'lii');


    $cap = $_POST['caption'];

    $filename = $_FILES['st_img']['name'];

    $filetmp_name = $_FILES['st_img']['tmp_name'];

    move_uploaded_file($filetmp_name, 'story_images/'.$filename);

    $sql = "INSERT INTO story (image, caption, p_id) VALUES ('$filename', '$cap', '$id') ";

    mysqli_query($conn, $sql);
    header('location:view_story.php?id='.$id);
    exit();
  }

}
?>
