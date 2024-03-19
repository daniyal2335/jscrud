<?php
include ('query2.php');
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
  
    <div class="container">
    <?php
    if(isset($_GET['uid'])){
     $uId=$_GET['uid'];
     $query=$pdo->prepare("select * from users where id=:id");
     $query->bindParam('id',$uId);
     $query->execute();
     $user=$query->fetch(PDO::FETCH_ASSOC);
    }
    ?>
        <form action="" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="uName" value="<?php echo $user['name']?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>
              <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="uEmail" value="<?php echo $user['email']?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>
              <div class="form-group">
              <label for="">Password</label>
              <input type="text" name="uPassword" value="<?php echo $user['password']?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>
               <button name="updateUser" type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
  </body>
</html>