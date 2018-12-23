<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Query extends Controller {

    public function action_index()
    {
        $this->response->body('How to query Little Big Table.');
    }
    
    public function action_v1()
    {
        $this->response->body('v1 query');
    }

}