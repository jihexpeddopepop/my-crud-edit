<?php
    include_once('functions.php');

    $updatedata = new DB_con();

    if (isset($_POST['update'])){
        $userid = $_GET['id'];
        $idnumber = $_POST['idnumber'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        
        $sql = $updatedata->update($idnumber,$fname, $lname, $email, $phonenumber, $address, $userid);
        if ($sql) {
            echo "<script>alert('Updated Successfuly!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Pless try again!';</script>";
            echo "<script>window.location.href='update.php' </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update Page </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <a href="index.php" class="btn btn-primary mt-3"> Go Back </a>
    <hr>
        <h1 class="mt-5">Update Page </h1>
        <hr>
        <?php
            $userid = $_GET['id'];
            $updateuser = new DB_con();
            $sql = $updateuser->fetchonerecord($userid);
            while($row = mysqli_fetch_array($sql)) {
        ?>
        
        <form action="" method="post">
            <div class="mb-3 ">
                <label for="idnumber">ID Number</label>
                <input type="text" class="form-control" name="idnumber" 
                value="<?php echo $row['idnumber']; ?>"required>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" name="firstname" 
                    value="<?php echo $row['firstname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lastname" 
                value="<?php echo $row['lastname']; ?>"required>
            </div>
            <div class="mb-3 ">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" 
                value="<?php echo $row['email']; ?>"required>
            </div>
            <div class="mb-3 ">
                <label for="phonenumber">Phone Number</label>
                <input type="text" class="form-control" name="phonenumber" 
                value="<?php echo $row['phonenumber']; ?>"required>
            </div>
            <div class="mb-3 ">
                <label for="address">Address</label>
                <textarea name="address" cols="30" rows="10" class="form-control" required><?php echo $row['address']; ?> </textarea>
            </div>

            <?php } ?>

            <button type="submit" name="update" class="btn btn-success">Update</button>
            <hr>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>