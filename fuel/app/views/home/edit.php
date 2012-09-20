<h2>Editing Home</h2>
<br>

<?php echo render('home/_form'); ?>
<p>
	<?php echo Html::anchor('home/view/'.$home->id, 'View'); ?> |
	<?php echo Html::anchor('home', 'Back'); ?></p>
