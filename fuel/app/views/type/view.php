<h2>Viewing #<?php echo $type->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $type->name; ?></p>
<p>
	<strong>Downloadlink:</strong>
	<?php echo $type->downloadlink; ?></p>
<p>
	<strong>Category:</strong>
	<?php echo $type->category; ?></p>
<p>
	<strong>Gist:</strong>
	<?php echo $type->gist; ?></p>
<p>
	<strong>About:</strong>
	<?php echo $type->about; ?></p>
<p>
	<strong>Howto:</strong>
	<?php echo $type->howto; ?></p>
<p>
	<strong>Tags:</strong>
	<?php echo $type->tags; ?></p>
<p>
	<strong>Version:</strong>
	<?php echo $type->version; ?></p>
<p>
	<strong>Howtogist:</strong>
	<?php echo $type->howtogist; ?></p>

<?php echo Html::anchor('type/edit/'.$type->id, 'Edit'); ?> |
<?php echo Html::anchor('type', 'Back'); ?>