<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

    public $template = 'template';
    
    public function action_index()
    {
        $home = View::factory('home');
        $this->template->content = $home;
        $this->mast('');
    }
    
    public function action_test()
    {
        $home = View::factory('about');
        $this->template->content = $home;
        $this->mast('');
    }
    
    public function action_about()
    {
        $view = View::factory('about');
        $this->template->content = $view;
        $this->mast(' - About');
    }
    
    public function action_bootstrap()
    {
        $view = View::factory('bootstrap');
        $this->template->content = $view;
        $this->mast(' - Bootstrap Snippets');
    }
    
    public function action_dev()
    {
        $this->mast(' - Dev');
        $view_instructions = View::factory('self_ref_instructions');
        
        $view = View::factory('bootstrap');
        $out = $this->self_ref($view->render());
        
        $this->template->content = $view_instructions.$out;
    }

    public function action_documentation()
    {
        $this->auto_render = false;
        $documentation = View::factory('documentation');
        $this->response->body($documentation);
        //$this->template->content = $documentation;
        $this->mast(' - documentation');
    }
    
    public function action_finances()
    {
        $this->mast(' - SumDiff');
        $view = View::factory('sumdiff');
        $out = $this->self_ref($view->render());
        $this->template->content = $out;
    }

    public function action_support()
    {
        $support = View::factory('support');
        $this->template->content = $support;
        $this->mast(' - Support');
    }
    
    public function action_tutorial()
    {
        $view = View::factory('tutorial');
        $this->template->content = $view;
        $this->mast(' - Tutorial');
    }
   
    public function action_reference()
    {
        $this->mast(' - Bootstrap Snippets');
        $view = View::factory('bootstrap');
        $out = $this->self_ref($view->render());
        $this->template->content = $out;
    }

    private function mast($subtitle)
    {
        $title = Kohana::$config->load('site.title');
        $this->template->title = $title;
        $navigation = '';
        foreach (Kohana::$config->load('site.navigation') as $nav) {
            $navigation .= '<li';
            if($this->request->url() == '/index.php/'.$nav['path'])
                $navigation .= ' class="active"';
            $navigation .= '><a href="/'.$nav['path'].'">'.$nav['title'].'</a></li>';
        }

        $masthead = View::factory('masthead');
        $masthead->title = $title;
        $masthead->subtitle = $subtitle;
        $masthead->nav = $navigation;
        $this->template->top = $masthead;
    }
    
    private function self_ref($input){
        $codes = explode('<!--###end-->', $input);

        $out = '';
        $js_out = '';
        $code_block_count = 0;
        foreach ($codes as $code) {
            $subcodes = explode('<!--###', $code);
            if (isset($subcodes[1])) {
                $subsub = explode('-->', $subcodes[1]);
                $out .= '<h2>'.$subsub[0].'</h2>';
                $out .= $subsub[1];
                
                // CODE MIRROR REFERENCE / RENDER CODE
                $id = 'code_block_'.$code_block_count;
                $out .= '<textarea id="'.$id.'"></textarea>';
                $js_out .= 'var code_mirror_'.$code_block_count.' = CodeMirror.fromTextArea(document.getElementById("'.$id.'"), {mode: "htmlmixed"}); code_mirror_'.$code_block_count.'.getDoc().setValue(\''.str_replace("\n", '\\n', $subsub[1]).'\');';
                $code_block_count++;
            }
        }
        $this->template->js_out = $js_out;
        return $out;
    }

}