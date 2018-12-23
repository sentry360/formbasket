<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Grid extends Controller {

    public function action_index()
    {
        $grid = View::factory('grid');
        $this->response->body($grid);
    }
    
}