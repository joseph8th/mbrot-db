<?php
// List all the databases (levels) in the directory

$this->load->helper('directory');
$this->load->helper('form');

$dbMap = directory_map('./db/');

foreach ( $dbMap as $dbName ) {
    $options[$dbName] = ucfirst( substr($dbName, 0, strpos($dbName, '.')) );
}
sort($options);

echo "<p>Choose Level to view:</p>";
echo form_open('viewlevel', array('id' => 'levelForm'));
echo form_dropdown('levels', $options, reset(array_keys($options)));
echo form_submit('viewLevel', 'View Level');
echo form_close();

?>