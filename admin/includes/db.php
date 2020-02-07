<?php 

$connect = mysqli_connect("localhost", "briandb", "briandb", "rpo");
$query = "SELECT * FROM people, usersrpo";
$result = mysqli_query($connect, $query);
$chart_data = '';
$chart_data1 = '';
while($row = mysqli_fetch_array($result))
{

 $chart_data .= "{ year:'".$row["year"]."', name:'".$row["name"]."', edad:".$row["edad"].", dni:".$row["dni"]."}, ";
 $chart_data1 .= "{ year:'".$row["year"]."', username:'".$row["username"]."', permission:".$row["permission"].", gender:".$row["gender"]."}, ";


}
$chart_data = substr($chart_data, 0, -2);
$chart_data1 = substr($chart_data1, 0, -2);

