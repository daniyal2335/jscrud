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
    <form action="" method="Post">
        <div class="form-group">
          <label for="">Student Name</label>
          <input type="text" name="sName" id="" class="form-control" placeholder="" aria-describedby="helpId">

        </div>
        <div class="form-group">
          <label for="">Subject</label>
          <input type="text" name="subj" id="" class="form-control" placeholder="" aria-describedby="helpId">

        </div>
        <div class="form-group">
          <label for="">Physics</label>
          <input type="text" name="phy" id="" class="form-control" placeholder="" aria-describedby="helpId">

        </div>
        <div class="form-group">
          <label for="">Math</label>
          <input type="text" name="mth" id="" class="form-control" placeholder="" aria-describedby="helpId">

        </div>
        <div class="form-group">
          <label for="">Chemistry</label>
          <input type="text" name="chem" id="" class="form-control" placeholder="" aria-describedby="helpId">

        </div>
        <div class="form-group">
          <label for="">English</label>
          <input type="text" name="eng" id="" class="form-control" placeholder="" aria-describedby="helpId">

        </div>
        <div class="form-group">
          <label for="">Total marks</label>
          <input type="text" name="tmarks" id="" class="form-control" placeholder="" aria-describedby="helpId">

        </div>
       
       
        <button class="btn btn-info" name="genMarks" type="submit">Generate marks</button>
  
   </div>
   <?php
   if(isset($_POST['genMarks'])){
    $num_students = 1;
    $studentname=$_POST['sName'];
    $subject=$_POST['subj'];
    $physics=$_POST['phy'];
    $chemistry=$_POST['chem'];
    $math=$_POST['mth'];
    $english=$_POST['eng'];
    $totalMarks=$_POST['tmarks'];
    $totalObtainedMarks = $physics + $math + $chemistry + $english;
    $percentage = ($totalObtainedMarks/$totalMarks) * 100;
    if ($percentage >= 90) {
      $grade = 'A+';
  } elseif ($percentage >= 80) {
      $grade = 'A';
  } elseif ($percentage >= 70) {
      $grade = 'B';
  } elseif ($percentage >= 60) {
      $grade = 'C';
      
  }
  elseif ($percentage >= 50) {
      $grade = 'D';
  } 
else {
      $grade = 'F';
  };
  ?>
 <h2>Mark Sheet</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Subject</th>
                    <th>Physics</th>
                    <th>Math</th>
                    <th>Chemistry</th>
                    <th>English</th>
                    <th>Total Marks</th>
                    <th>Obtained Marks</th>
                    <th>Percentage</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i<$num_students; $i++) { ?>
                    <tr>
                        <td><?php echo $studentname; ?></td>
                        <td><?php echo $subject; ?></td>
                        <td><?php echo $physics; ?></td>
                        <td><?php echo $math; ?></td>
                        <td><?php echo $chemistry; ?></td>
                        <td><?php echo $english; ?></td>
                        <td><?php echo $totalMarks; ?></td>
                        <td><?php echo $totalObtainedMarks; ?></td>
                        <td><?php echo $percentage; ?></td>
                        <td><?php echo $grade; ?></td>
                    </tr>
                <?php
              } 
              ?>
            </tbody>
        </table>

  <?php
   }
   ?>
      </div>
 
  
  </body>
  </form>
</html>