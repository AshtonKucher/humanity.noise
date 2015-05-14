<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Controller_Common {

    // Определяем шаблон по умолчанию
    public $template = 'main';

    public function action_index() 
    {
        $content = View::factory('/pages/show');
        $this->template->content = $content;   
    }

    public function action_about()
    {
        $content = View::factory('/pages/about');
        $this->template->content = $content;
    }

    public function action_contacts()
    {
        $content = View::factory('/pages/contacts');
        $this->template->content = $content;
    }

} // End Page
