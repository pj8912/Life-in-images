<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Story</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

    <div class="mt-5">
    <div class="m-auto  col-md-6 text-center">
      <?php
      if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        // echo  $id;
    }
      ?>

    <form  action="upload_story.php" enctype="multipart/form-data" method="post">

      <h3 class="pb-1 text-center text-secondary">Create Story</h3>

      <div class="form-group">
        <input class="form-control" type="file" name="st_img" >
      </div>
      <div class="form-group">
        <textarea class="form-control" name="caption" rows="4" cols="20" placeholder='Caption...'></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-secondary" name="s-btn">
          CREATE STORY
        </button>
        <?php
        if(isset($_REQUEST['id'])){
          $id = $_REQUEST['id'];
          // echo  $id;
          echo '<input type="hidden" name="id" value="'.$id.'">';
      }
        ?>
      </div>

    </form>
  </div>
</div>

</body>
</html>
