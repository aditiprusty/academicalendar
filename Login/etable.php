<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
.head {
background-color: #192435;
color: white;

}
.headtop
{
    background-color: lightseagreen;
color:  #192435;
text-align: center;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
    <tr>
    <th class="headtop" colspan="3" ><h4>Your University Events List </h4></th>
    </tr>
<tr>
<th class="head">Event ID</th>
<th class="head">Event Name</th>
<th class="head">On Date</th>
<<<<<<< HEAD
<th class="head">Operation</th>

=======
>>>>>>> 5f48e1583f0d1409b71add890504a4b16164bfc3
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "events");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT eid, ename, edate FROM eventslist";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
<<<<<<< HEAD
echo 
"<tr>
<td>" . $row["eid"]. "</td>
<td>" . $row["ename"] . "</td>
<td>". $row["edate"]. "</td>
<td> <a href='update.php?id=$row[eid]'> Update </a> </td> 
</tr>";
=======
echo "<tr><td>" . $row["eid"]. "</td><td>" . $row["ename"] . "</td><td>"
. $row["edate"]. "</td></tr>";
>>>>>>> 5f48e1583f0d1409b71add890504a4b16164bfc3
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>