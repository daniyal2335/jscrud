<?php
include('query.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container p-4">

    <input type="text" class="form-control" id="search_value">

            <a href="addUser.php" class="btn btn-info">Add</a>
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
                    $query = $pdo->query("select * from users");
                    // print_r($query);
                    $allUsers = $query->fetchAll(PDO::FETCH_ASSOC);
                    // print_r($allUsers);
                    foreach($allUsers as $user){
                    ?>
                    <tr>
                        <td><?php echo $user['name']?></td>
                        <td><?php echo $user['email']?></td>
                        <td><?php echo $user['password']?></td>
                        <td><a href="edit.php?uid=<?php echo $user['id']?>" class="btn btn-info">Edit</a></td>
                        <td><a href="?id=<?php echo $user['id']?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
   </div>


   <script>

    $(document).ready(function(){
        $("#search_value").keyup(function(){
            let input = $(this).val();
            // alert(input);
     if(input!="" ){
            $.ajax({
                url : "query.php",
                type : "post",
                data : {input:input},
                success :function(data){
                   $("tbody").html(data);   
                }
            })
        }
        else{
        //    alert('invalid data');
        }


        });
    });
   </script>
   
  </body>
</html>