<?php
$link = mysqli_connect( 
            'localhost',  
            'root',       
            'love520322',  
            'php2020');

$SQL="SELECT * FROM employee";
if($result=mysqli_query($link, $SQL))
{
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>No</td><td>Fname</td><td>Minit</td><td>Lname</td><td>Bdate</td><td>Address</td><td>Sex</td><td>Salary</td>";
	echo "</tr>";

	while( $row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["No"]."</td>";
		echo "<td>".$row["Fname"]."</td>";
		echo "<td>".$row["Minit"]."</td>";
		echo "<td>".$row["Lname"]."</td>";
		echo "<td>".$row["Bdate"]."</td>";
		echo "<td>".$row["Address"]."</td>";
		echo "<td>".$row["Sex"]."</td>";
		echo "<td>".$row["Salary"]."<br/></td></tr>";
	}
	echo "</table>";
}
else {
		echo "can't find it !";
     }

?>