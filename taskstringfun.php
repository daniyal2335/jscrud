<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>task2 ufone sim code</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
      <body>  
</head>
<body>
    <div class="container">
        <form action="" method="Post">
        <div class="form-group">
          <label for="">Enter number</label>
          <input type="text" name="phoneNumber" id="" class="form-control" placeholder="" aria-describedby="helpId">
        
        </div>
        <button name="findCode" class="btn btn-info" type="submit">Submit</button>
        </form>
    </div>
   <?php
   if(isset($_POST['findCode'])){
       $userNumber=$_POST['phoneNumber'];
       $myCodes="0331,0332,0333,0334,0335,0336";
       $myCodesArray=explode(',',$myCodes);
      // print_r($myCodesArray);
       $userNumbersplit=str_split($userNumber,4);
      // print_r($userNumbersplit);
      echo "<br>";
      //echo $userNumbersplit[0];
      foreach ($myCodesArray as  $codes) {
      // echo $codes."<br>";
      if ($userNumbersplit[0]==$codes) {
         echo "your number is belong to your family and code is" . $userNumbersplit[0];
      }
      }    

  }
   ?>
</body>
</html>