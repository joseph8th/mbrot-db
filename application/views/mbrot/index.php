<h2><?= $title ?></h2>

<?php
foreach ( $levels as $level ) {
  $options[$level] = ucfirst( substr($level, 0, strpos($level, '.')) );
}
sort($options);
?>

<?php echo form_open('mbrot/level', array('id' => 'levelForm')); ?>

<div class="form-group">
<?php
echo form_dropdown('levels', $options, reset(array_keys($options)));
echo form_submit(array('name' => 'viewLevel',
                       'type' => 'submit',
                       'value' => 'View Level',
                       'id' => 'submit',
                       'class' => 'btn btn-primary'
                       ));
?>
</div>

<?php echo form_close(); ?>
