<?php
include "../../system/config.php";
global $tableName;
$qry = mysql_query("Select * from " . $tableName['itemCategory']);
while($row = mysql_fetch_array($qry)) {
	echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
}
?>