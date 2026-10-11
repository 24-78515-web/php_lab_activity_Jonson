<?php
    include 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
<body>
    <h1  class="text-center"> User Management System</h1>

    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                    <form action="" method ="POST">
                        <h1>Add New User</h1> 
                        <label for="" class="form-label">Full Name</label> 
                        <input type="text" name="name" class="form-control" required>
                        <label for="" class="form-label">Email Addresss</label>   
                        <input name="email" type="email"  class="form-control" required>
                        <button class="btn btn-primary " name="submit" type="submit"> Submit</button>
                    </form>
                    <?php 

                    if (isset($_POST['name'])){
                        $full_name = $_POST['name'];
                        $email_add = $_POST['email'];

                        $sql_query = $conn->query("INSERT INTO users(name, email) VALUES ('$full_name','$email_add')");

                        if($sql_query){
                            echo "<script> 
                                alert('Successfully Added!!');
                                window.location.herf= 'index.php';
                            </script>";
                        }else{
                            echo "<script> 
                                alert('Error');
                                window.location.href ='index.php';
                                </script>";
                        }
                    }   

                ?>
            </div>
                
            <div class="col-md-6">
                <table class="table table-bordered table-stripes">
                    <h1>Registered Users</h1>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joined</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    
                        <?php
                            $query = "SELECT * FROM users";
                            $result = $conn->query($query);
                            
                            foreach($result as $row){
                            ?>   
                                <tbody>
                                    <tr>
                                        <td><?$row=['name']?></td>
                                        <td><?$row=['name']?></td>
                                        <td><?$row=['name']?></td>
                                        <td><?$row=['name']?></td>
                                    </tr>
                                </tbody>
                            <?php  
                            }
                             ?>  
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>