<h1><?php echo t('edit_group');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url());?>

  <div class="form-group">
    <label> <?php echo t('group_name');?></label>
    <?php echo form_input($group_name);?>
  </div>
  <div class="form-group">
    <label> <?php echo t('description');?></label>
    <?php echo form_input($group_description);?>
  </div>

  <div class="form-group"><?php echo form_submit('submit', t('submit'), 'class="btn btn-success"');?></div>

<?php echo form_close();?>
