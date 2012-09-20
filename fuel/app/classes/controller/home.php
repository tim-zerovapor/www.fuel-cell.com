<?php
class Controller_Home extends Controller_Base
{

	public function action_index()
	{
		$data['homes'] = null;
		$this->template->title = "Fuel Cell :: FuelPHP Repo Depo";
		$this->template->content = View::forge('home/index', $data);

	}

}