<?php
$conn = pg_connect("host=127.0.0.1 port=5432 dbname=nairobi user=nairobi password=nairobi") or die (pg_last_error());
var_dump($conn);
?>
