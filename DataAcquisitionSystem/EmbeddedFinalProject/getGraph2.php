<?php
header('Content-Type: application/json');

$con = mysqli_connect('localhost','root', '','embeddedproject');
// Check connection
if (mysqli_connect_errno($con))
{
echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else
{
$data_points01 = array();
$connect = mysqli_connect("localhost", "root", "", "embeddedproject");
$query = "SELECT tempC,dateData FROM sensorsdata";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
{
$point = array("date" => $row['dateData'] , "temp" => $row['tempC']);
array_push($data_points01, $point);
}
//JSON ENCODE THE ARRAY 3
echo json_encode($data_points01, JSON_NUMERIC_CHECK);
}
mysqli_close($con);
?>