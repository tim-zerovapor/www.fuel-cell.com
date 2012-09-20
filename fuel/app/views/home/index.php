<h2>Listing Homes</h2>
<br>
<?php if ($homes): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($homes as $home): ?>		<tr>

			<td>
				<?php echo Html::anchor('home/view/'.$home->id, 'View'); ?> |
				<?php echo Html::anchor('home/edit/'.$home->id, 'Edit'); ?> |
				<?php echo Html::anchor('home/delete/'.$home->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Homes.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('home/create', 'Add new Home', array('class' => 'btn btn-success')); ?>

</p>
