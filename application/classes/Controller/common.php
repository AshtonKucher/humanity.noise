<?php defined('SYSPATH') or die('No direct script accsess.');

abstract class Controller_Common extends Controller_Template {

	public $template = 'main';

	public function before() 
	{
		parent::before();
		View::set_global('title', 'Fuck you nigger');
		$this->template->content = '';
		$this->template->styles = array('main');
		$this->template->scripts = '';
	}

}//End common