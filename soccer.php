<?php require 'includes/config.php';?>
<?php include 'includes/header.php';?>
<?php
//soccer.php

$sql = 'SELECT * FROM italian_soccer_teams';

echo '<h1>Italian Serie A Soccer Rankings for 2014-2015</h1>';
echo '<p>These rankings are current as of November 12</p>';
echo '<table class="database-results" align="left" width="500px" style="border-collapse:collapse; line-height:30px">
		<tr>
			<th align="left">Rank:</th>
			<th align="left">Team Name:</th>
			<th align="left">City:</th>
			<th align="left">Stadium Name:</th>
			
		</tr>';

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
    while ($row = mysqli_fetch_assoc($result))
    {
       echo '<tr>
			<td align="center">' . $row['CurrentRanking'] . '</td>	
			<td>' . $row['TeamName'] . '</td>
			<td>' . $row['City'] . '</td>
			<td>' . $row['StadiumName'] . '</td>
		</tr>';
    }
}else{//no records
    echo '<div align="center">What! No teams?  There must be a mistake!!</div>';
}

echo '</table>';

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database

/*
//Connect to MySQL, authenticate the MySQL users
$myConn = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

//Connect to the Database, verify authorization to this resource
mysql_select_db(DB_NAME,$myConn);

//Select data to be retrieved via SQL statement
//Retrieve data set (result)
$result = mysql_query($sql,$myConn);
		
//Loop through the data, and insert it into our page
while($row=mysql_fetch_assoc($result))
{ //pull data from array
		echo '<tr>
			<td align="center">' . $row['CurrentRanking'] . '</td>	
			<td>' . $row['TeamName'] . '</td>
			<td>' . $row['City'] . '</td>
			<td>' . $row['StadiumName'] . '</td>
		</tr>';
}

//Disconnect from MySQL, and release resources 
@mysql_free_result($result); # releases web server memory
@mysql_close($myConn);
*/

include 'includes/footer.php';

?>