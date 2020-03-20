<?php
include_once('config.php');
?>
<?php
    if(isset($_POST['submit'])){
        $Enrollment = $_POST['Enrollment'];
        $Name = $_POST['Name'];
        $Age = $_POST['Age'];
        $Course = $_POST['Course'];
        $Branch = $_POST['Branch'];
        $Contact = $_POST['Contact'];
        $Email = $_POST['Email'];
            
        $sql = "INSERT INTO `student` (Enrollment, Name, Age, Course, Branch, Contact, Email)
        VALUES ('$Enrollment', '$Name', '$Age', '$Course', '$Branch', '$Contact', '$Email')";
            
        if(mysqli_query($conn, $sql)){
            echo 'Data inserted successfully...';
            header("Location:details.php");
        }
        else{
            echo 'Data insertion failed...'.mysqli_error($conn) ;
        }
    }
    else{
        echo "Please go back to Input Page.";
    }
?>