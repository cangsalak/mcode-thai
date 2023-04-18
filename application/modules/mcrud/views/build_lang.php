

  /*| -------------------------------------------------------------------------- |*/
<?php $show_in_table = $this->mcrud_build->showInTable(true);
foreach ($show_in_table as $field): ?>
$lang['<?=$field?>'] = '<?=$field?>';
<?php endforeach; ?>
  /*| -------------------------------------------------------------------------- |*/
  

