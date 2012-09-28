<?php
class Controller_Base extends Controller_Template
{

	public $template = 'fuel-cell.twig';
	    /**
	     * Your before method
	     */
	public function before()
	{
		parent::before(); // Without this line, templating won't work!

		 if (Warden::check()) {
	        $current_user = Warden::current_user();
        	$userName = $current_user->userName;
	    } else {
	        $userName = "Guest";
	    }



	   $this->template->userName = $userName;
	// do stuff
	}

}