<?php

/* Define MySQL connection details and database table name */
$SETTINGS["mysql_user"]='root';
$SETTINGS["mysql_pass"]='';
$SETTINGS["hostname"]='localhost';
$SETTINGS["mysql_database"]='eternity';
$SETTINGS["data_table"]='project_manuals';
$SETTINGS["data_table2"]='construction_documents';
$SETTINGS["data_table3"]='contract_documents';
$SETTINGS["data_table4"]='drawings';
$SETTINGS["data_table5"]='submittal_documents';

/* Connect to MySQL */

$mysqli = new mysqli($SETTINGS["hostname"], $SETTINGS["mysql_user"], $SETTINGS["mysql_pass"],$SETTINGS["mysql_database"]);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>