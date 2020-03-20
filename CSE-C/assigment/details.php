<table border="1">
<thead>
<tr>
    <th>Enrollment</th>
    <th>Name</th>
    <th>Age</th>
    <th>Course</th>
    <th>Branch</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>    
</thead>
<tbody>

<?php
include('config.php');
?>

<?php
$sql = "SELECT * FROM `student`";
$result = mysqli_query($conn, $sql);
?>

<?php
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
    <tr>
        <td><?php echo $row['Enrollment']; ?></td>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Age']; ?></td>
        <td><?php echo $row['Course']; ?></td>
        <td><?php echo $row['Branch']; ?></td>
        <td><?php echo $row['Contact']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <td><a href="edit.php?Enrollment=<?php echo $row['Enrollment']; ?>">Edit</a></td>
        <td><a href="delete.php?Enrollment=<?php echo $row['Enrollment'];?>">Delete</a></td>
    </tr>  
<?php    }
}
?>
</tbody>
</table>