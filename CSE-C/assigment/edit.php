<?php include('config.php'); ?>

<?php
$Enrollment = $_GET['Enrollment'];
?>


<?php
if(isset($_POST['update'])){
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Course = $_POST['Course'];
    $Branch = $_POST['Branch'];
    $Contact = $_POST['Contact'];
    $Email = $_POST['Email'];
    
    $sql = "UPDATE `student` SET Name='$Name', Age='$Age',
    Course='$Course', Branch='$Branch', Contact='$Contact', Email='$Email' WHERE Enrollment='$Enrollment'";
    if(mysqli_query($conn, $sql)){
        header("Location:details.php");
    }
    else{
        echo 'failed'.mysqli_error($conn);
    }
}
else{
    $sql = "SELECT * FROM `student` WHERE Enrollment='$Enrollment'";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    $Name = $row['Name'];
    $Age = $row['Age'];
    $Course = $row['Course'];
    $Branch = $row['Branch'];
    $Contact = $row['Contact'];
    $Email = $row['Email'];
}
?>


<html>
<head><title>Update Data</title></head>

<body>
    <form action="edit.php?Enrollment=<?php echo $Enrollment; ?>" method="post">
      Name - <input name="Name" type="text" value="<?php echo $Name; ?>" placeholder="Enter Name"><br>
      Age - <input name="Age" type="text" value="<?php echo $Age; ?>" placeholder="Enter Age"><br>
      Course - <input name="Course" type="text" value="<?php echo $Course; ?>" placeholder="Enter Course"><br>
      Branch - <input name="Branch" type="text" value="<?php echo $Branch; ?>" placeholder="Enter Branch"><br>
      Contact - <input name="contact" type="text" value="<?php echo $contact; ?>" placeholder="Enter Contact"><br>
      EMail - <input name="email" type="email" value="<?php echo $email; ?>" placeholder="Enter E-Mail"><br>
      <input name="update" type="submit" value="Update">
    </form>
</body>
</html>