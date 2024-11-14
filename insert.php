<?php

    include_once('functions.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])){
        $idnumber = $_POST['idnumber'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        
        $sql = $insertdata->insert($idnumber, $fname, $lname, $email, $phonenumber, $address);
        
        if ($sql) {
            echo "<script>alert('Record Inserted Successfuly!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Pless try again!';</script>";
            echo "<script>window.location.href='insert.php' </script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Insert Page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3"> ย้อนกลับ </a>
        <hr>
        <h1 class="my-5"> Insert Page</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3 ">
                <label for="idnumber">ID Number</label>
                <input type="text" class="form-control" name="idnumber" required>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" name="firstname" required >
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="mb-3 ">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3 ">
                <label for="phonenumber">Phone Number</label>
                <input type="text" class="form-control" name="phonenumber" required>
            </div>
            <div class="mb-3 ">
                <label for="address">Address</label>
                <textarea name="address" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <button type="submit" name="insert" class="btn btn-success">บันทึก</button>
            <button type="button" value="Refresh" class="btn btn-danger" onClick="javascript:location.reload();" >ยกเลิก</button>

            <hr>
        </form>
        <table id="mytacle" class="table table-bordered table-striped">
        <thead>
            <th>Number</th>
            <th>ID Number</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Address</th>
            <th>Posting Date</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?php
            include_once('functions.php');
            $fetchdata = new DB_con();
            $sql = $fetchdata->fetchdata();
   
            while($row = mysqli_fetch_array($sql)){
            ?>

                <tr>

                    <td><?php echo $row['id']; ?> </td>
                    <td><?php echo $row['idnumber']; ?> </td>
                    <td><?php echo $row['firstname']; ?> </td>
                    <td><?php echo $row['lastname']; ?> </td>
                    <td><?php echo $row['email']; ?> </td>
                    <td><?php echo $row['phonenumber']; ?> </td>
                    <td><?php echo $row['address']; ?> </td>
                    <td><?php echo $row['postingdate']; ?> </td>
                    
                    <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"> Edit </a></td>
                    <td><a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

            <?php
}
            ?>

        </tbody>
        </table>
        
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>