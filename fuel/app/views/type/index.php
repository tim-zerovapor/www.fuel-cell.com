<h2>Listing Types</h2>
<br>
<?php if ($types): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Downloadlink</th>
			<th>Category</th>
			<th>Gist</th>
			<th>About</th>
			<th>Howto</th>
			<th>Tags</th>
			<th>Version</th>
			<th>Howtogist</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($types as $type): ?>		<tr>

			<td><?php echo $type->name; ?></td>
			<td><?php echo $type->downloadlink; ?></td>
			<td><?php echo $type->category; ?></td>
			<td><?php echo $type->gist; ?></td>
			<td><?php echo $type->about; ?></td>
			<td><?php echo $type->howto; ?></td>
			<td><?php echo $type->tags; ?></td>
			<td><?php echo $type->version; ?></td>
			<td><?php echo $type->howtogist; ?></td>
			<td>
				<?php echo Html::anchor('type/view/'.$type->id, 'View'); ?> |
				<?php echo Html::anchor('type/edit/'.$type->id, 'Edit'); ?> |
				<?php echo Html::anchor('type/delete/'.$type->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Types.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('type/create', 'Add new Type', array('class' => 'btn btn-success')); ?>

</p>
