<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Comments extends Controller 
{

	public function action_index()
	{
		$id = $this->request->param('id');

		if(Request::initial() === Request::current())
    	Request::initial()->redirect(URL::site());

		$content = View::factory('/comments/show')
					->bind('comments', $comments);

		switch($id) 
		{
			case 'article1':
				$comments = array(
					array('name' => 'Вася', 'comment' => 'Привет, Петя'), 
					array('name' => 'Петя', 'comment' => 'Привет, Вася'),
				);			
			break;

			case 'article2':
				$comments = array(
					array('name' => 'Гена', 'comment' => 'Привет, Мир'),
				);			
			break;	
 
			default:
				$comments = array();
		}
		$this->response->body($content);			
	}

}