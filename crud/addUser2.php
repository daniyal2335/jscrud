<?php
include('query2.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
   <div class="conatainer">
    <form action="" method="Post">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="uName" id="" pattern="[Aa-Zz]{3,}" class="form-control" placeholder="" aria-describedby="helpId" required>
          
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" name="uEmail" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
          
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="number" name="uPassword" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
          
        </div>
        <button class="btn btn-info" type="submit" name="addUser">Add</button>
    </form>
   </div>
  </body>
</html>