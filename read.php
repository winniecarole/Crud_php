<?php include "php/read.php";?>

<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="box">
        <h4 class="display-4 text-center">Read</h4><hr><br>
        <?php if(mysqli_stmt_num_rows($result)){

        }?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Vorname</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>winnie</td>
                    <td>tets</td>
                    <td>winnie</td>
                    <td>tets</td>
                </tr>
            </tbody>
            <div class="link-right">
               <a href="index.php" class="link-primary">Create</a>
            </div>
            ...
        </table>
    </div>

</div>
</body>
</html>
