<?php
include "../../phpsql/connection/dbconnection.php";

if(!$conn) {
		die("Connection Failed" . myssql_connect_error());
	}

	$sql = "SELECT * FROM " . $bandNameCode;

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        // echo "id: " . $row["id_band"]. " - Name: " . $row["song"]. " " . $row["album"]. "<br>";
?>	
	<div style="display: inline-block; margin: 5px 15px;">
		<a href="<?= $row["lyric"] ?>" target="_blank">
			<img src="<?= $row["album"] ?>" style="width: 150px; height: 150px;">
		</a>
		<h3><?= $row["song"] ?></h3>
	</div>
<?php 
	    }
	} else {
	    echo "0 results";
	}

	mysqli_close($conn);
?>