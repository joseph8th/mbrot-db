<?php

$level = $this->input->post('levels');
$dbName = 'dataL'.$level.'.sql3';

echo "<p><strong>Viewing Level</strong>: " . $dbName . "</p>";

$dsn = 'sqlite:/db/'.$dbName;
$db = $this->load->database($dsn, TRUE);



?>