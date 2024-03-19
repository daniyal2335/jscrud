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
   <div class="container">
    <a href="addUser2.php" class="btn btn-info">ADD</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query=$pdo->query("select*from users");
            //print_r($query);
            $allUsers=$query->fetchAll(PDO::FETCH_ASSOC);
            //print_r($allUsers);
            foreach ($allUsers as $users) {
            
            ?>
            <tr>
                <td ><?php echo $users['name']?></td>
                <td><?php echo $users['email']?></td>
                <td><?php echo $users['password']?></td>
                <td><a href="edit.php?uid=<?php echo $users['id']?>" class="btn btn-info">Edit</a></td>
                <td><a href="?id=<?php echo $users['id']?>" class="btn btn-danger">Delete</a></td>
            </tr>
           <?php
            }
            ?>
        </tbody>
    </table>
   </div>
  </body>
</html>