<?php echo Form::open(); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Name', 'name'); ?>

			<div class="input">
				<?php echo Form::input('name', Input::post('name', isset($type) ? $type->name : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Downloadlink', 'downloadlink'); ?>

			<div class="input">
				<?php echo Form::textarea('downloadlink', Input::post('downloadlink', isset($type) ? $type->downloadlink : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Category', 'category'); ?>

			<div class="input">
				<?php echo Form::input('category', Input::post('category', isset($type) ? $type->category : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Gist', 'gist'); ?>

			<div class="input">
				<?php echo Form::input('gist', Input::post('gist', isset($type) ? $type->gist : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('About', 'about'); ?>

			<div class="input">
				<?php echo Form::textarea('about', Input::post('about', isset($type) ? $type->about : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Howto', 'howto'); ?>

			<div class="input">
				<?php echo Form::textarea('howto', Input::post('howto', isset($type) ? $type->howto : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Tags', 'tags'); ?>

			<div class="input">
				<?php echo Form::textarea('tags', Input::post('tags', isset($type) ? $type->tags : ''), array('class' => 'span8', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Version', 'version'); ?>

			<div class="input">
				<?php echo Form::input('version', Input::post('version', isset($type) ? $type->version : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Howtogist', 'howtogist'); ?>

			<div class="input">
				<?php echo Form::input('howtogist', Input::post('howtogist', isset($type) ? $type->howtogist : ''), array('class' => 'span4')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>