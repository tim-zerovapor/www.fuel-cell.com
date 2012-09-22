<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Name', 'name'); ?>
			<p>Every Fuel Type has a name. Whats yours?</p>
			<div class="input">
				<?php echo Form::input('name', Input::post('name', isset($type) ? $type->name : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Downloadlink', 'downloadlink'); ?>
			<p>Where can we download this?</p>
			<div class="input">
				<?php echo Form::input('downloadlink', Input::post('downloadlink', isset($type) ? $type->downloadlink : ''), array('class' => 'span4' )); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Category', 'category'); ?>
			<p>Choose a category that your Fuel best fits with.</p>
			<div class="input">
				<?php echo Form::input('category', Input::post('category', isset($type) ? $type->category : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Example Gist', 'gist'); ?>
			<p>Link to a Gist that shows users how to use this.</p>
			<div class="input">
				<?php echo Form::input('gist', Input::post('gist', isset($type) ? $type->gist : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('About', 'about'); ?>
			<p>Tell us about your Fuel Type.</p>
			<div class="input">
				<?php 
				// echo Form::textarea('about', Input::post('about', isset($type) ? $type->about : ''), array('class' => 'span8', 'rows' => 8)); 
				echo ckeditor("about");
				?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('How to', 'howto'); ?>
			<p> Any special install instructions? Special Migrations? Tell us about it here :) </p>
			<div class="input">
				<?php
				 // echo Form::textarea('howto', Input::post('howto', isset($type) ? $type->howto : ''), array('class' => 'span8', 'rows' => 8));
				 echo ckeditor("howto");
				  ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Tags', 'tags'); ?>
			<p>Tag your post so people can search for it a bit easier</p>
			<div class="input">
				<?php echo Form::input('tags', Input::post('tags', isset($type) ? $type->tags : ''), array('class' => 'span4')); ?>
			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('How to gist', 'howtogist'); ?>
			<p>Would you rather use a Gist for your how to? Feel free :)  </p>
			<div class="input">
				<?php echo Form::input('howtogist', Input::post('howtogist', isset($type) ? $type->howtogist : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Version', 'version'); ?>
			<p>What version of the package is this?</p>
			<div class="input">
				<?php echo Form::input('version', Input::post('version', isset($type) ? $type->version : ''), array('class' => 'span4')); ?>

			</div>
		</div>

		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>