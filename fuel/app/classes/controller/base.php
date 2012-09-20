<?php
class Controller_Base extends Controller_Template
{

	public $template = 'fuel-cell';
	    /**
	     * Your before method
	     */
	public function before()
	{
		parent::before(); // Without this line, templating won't work!

	// do stuff
	}

}