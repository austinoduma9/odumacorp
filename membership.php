<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="/jquery-3.7.1.min.js"></script> -->
    <title>Document</title>
</head>
<body>
  <?php include_once 'navbar.php';?>
     <!-- To be profile page -->
      <!-- To appear at the center of the profile page -->
    <form action="saveidea.php" method="post" enctype="multipart/form-data">
        <p>Your Idea</p>
        <p>Enter your idea <span>#</span><br>
        </p>
        <label for="title">Idea Title</label><br>
        <input name="title" id="title" placeholder="Title" ></input><br>
        <label for="description">About your Idea</label><br>
        <textarea name="description" id="description"></textarea><br>
        <label for="image">Upload Photos</label><br>
        <input id="photos" type="file" accept="image/*" name="photos" multiple>
        <br>
        <br>
        <input type="submit" value="Post">
    </form>
    <!-- end of profile -->

     <!-- Updated Profile -->
      <!-- <p>Title: <span></span></p>
      <p>
        <span>idea #</span><br>
        <span>Description</span>
        <img src="" alt="image1" >
      </p> -->
      <!-- Updates to be saved and changes -->
       <!-- Updates also on the inventor's page -->


</body>
</html>
<?php require_once 'footer.php' ?>
