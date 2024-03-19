<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>

  <body>
      
   

<div class="container">
    <form method="Post" >
    <div class="form-group">
      <label for="">Email</label>
      <input type="text" name="uEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
   <button name="sub" class="btn btn-info" type="submit">submit</button>
    </div>
</form>
</div>
<?php
if(isset($_POST['sub'])){
    $email=$_POST['uEmail'];
    $sd="yahoo.com";
    $email_array=explode('@',$email);
    $res=strcmp($sd,$email_array[count($email_array)-1]);
    if($res==0){
        echo "restriction this type of domain";
    }
    else{
        echo "valid domain";
    }
}


?>
  </body>
</html>