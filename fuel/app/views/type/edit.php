<h2>Editing Type</h2>
<br>

<?php echo render('type/_form'); ?>
<p>
	<?php echo Html::anchor('type/view/'.$type->id, 'View'); ?> |
	<?php echo Html::anchor('type', 'Back'); ?></p>
