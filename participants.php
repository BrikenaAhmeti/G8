<?php
$servername = "localhost";
$user = "root";
$pass = "5551";
$name = "dbtest";
$conn = mysqli_connect($servername,$user,$pass,$name);
$query = mysqli_query($conn, "SELECT * FROM form1");

$rows = mysqli_num_rows($query);
echo'<style>
*{
  font-family:"Tahoma";
}
th {
  text-align: left;
    background-color: rgb(150,150,150);
    color: white;
}
tr:hover {background-color: #f5f5f5;}
tr:nth-child(even) {background-color: #f2f2f2;}
th, td {
    align:center;
    border-bottom: 1px solid #ddd;
}
</style>';
echo '<h2 style="text-align:center;">All Participants</h2>';
echo'<table style="width: 95%; border-collapse: collapse;" >
<tr style="height: 90px"><th>ID</th><th>First name</th><th>Last name</th><th>Email</th><th>Telephone</th><th>Datat</th><th>Gjinia</th><th>Place</th><th>Level</th><th>gpa</th><th>Course</th><th>Explorer</th></tr>
';
while($row = mysqli_fetch_assoc($query)) {
        echo "<tr style='height: 50px'><td>" . $row["id"]. "</td><td>" . $row["name"]. " </td><td>" . $row["lname"]." </td><td>" . $row["email"]." </td><td>" . $row["tel"]." </td><td>" . $row["datat"]." </td><td>" . $row["gjinia"]." </td><td>" . $row["vendi"]." </td><td>" . $row["niveli"]." </td><td>" . $row["gpa"]. " </td><td>" . $row["course"]." </td><td>" . $row["explorer"]."</td></tr>";
    }
echo"</table>";
?>
