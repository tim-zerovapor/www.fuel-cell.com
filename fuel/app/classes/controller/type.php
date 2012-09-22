<?php
class Controller_Type extends Controller_Template 
{

	public function action_index()
	{
		$data['types'] = Model_Type::find('all');
		$this->template->title = "Types";
		$this->template->content = View::forge('type/index', $data);

	}

	public function action_view($id = null)
	{
		$data['type'] = Model_Type::find($id);

		is_null($id) and Response::redirect('Type');

		$this->template->title = "Type";
		$this->template->content = View::forge('type/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Type::validate('create');
			
			if ($val->run())
			{
				$type = Model_Type::forge(array(
					'name' => Input::post('name'),
					'downloadlink' => Input::post('downloadlink'),
					'category' => Input::post('category'),
					'gist' => Input::post('gist'),
					'about' => Input::post('about'),
					'howto' => Input::post('howto'),
					'tags' => Input::post('tags'),
					'version' => Input::post('version'),
					'howtogist' => Input::post('howtogist'),
				));

				if ($type and $type->save())
				{
					Session::set_flash('success', 'Added type #'.$type->id.'.');

					Response::redirect('type');
				}

				else
				{
					Session::set_flash('error', 'Could not save type.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		//  load ckeditor 
		Package::load('ckeditor');
		$this->template->title = "Create  A New Fuel Type";
		$this->template->content = View::forge('type/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Type');

		$type = Model_Type::find($id);

		$val = Model_Type::validate('edit');

		if ($val->run())
		{
			$type->name = Input::post('name');
			$type->downloadlink = Input::post('downloadlink');
			$type->category = Input::post('category');
			$type->gist = Input::post('gist');
			$type->about = Input::post('about');
			$type->howto = Input::post('howto');
			$type->tags = Input::post('tags');
			$type->version = Input::post('version');
			$type->howtogist = Input::post('howtogist');

			if ($type->save())
			{
				Session::set_flash('success', 'Updated type #' . $id);

				Response::redirect('type');
			}

			else
			{
				Session::set_flash('error', 'Could not update type #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$type->name = $val->validated('name');
				$type->downloadlink = $val->validated('downloadlink');
				$type->category = $val->validated('category');
				$type->gist = $val->validated('gist');
				$type->about = $val->validated('about');
				$type->howto = $val->validated('howto');
				$type->tags = $val->validated('tags');
				$type->version = $val->validated('version');
				$type->howtogist = $val->validated('howtogist');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('type', $type, false);
		}

		$this->template->title = "Types";
		$this->template->content = View::forge('type/edit');

	}

	public function action_delete($id = null)
	{
		if ($type = Model_Type::find($id))
		{
			$type->delete();

			Session::set_flash('success', 'Deleted type #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete type #'.$id);
		}

		Response::redirect('type');

	}


}