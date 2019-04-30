<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

    public $template = 'template';
    
    public function action_index()
    {
        $home = View::factory('home');
        $this->template->content = $home;
        $this->header('');
    }
    
    public function action_about()
    {
        $view = View::factory('about');
        $this->template->content = $view;
        $this->header(' - About');
    }
    
    public function action_test(){
        $home = View::factory('grid');
        $this->template->content = $home;
        $this->header('test');
    }
    
    public function action_bootstrap()
    {
        $this->header(' - Bootstrap Snippets');
        $view = View::factory('bootstrap');
        $out = $this->self_ref($view->render());
        $this->template->content = '<h2>This needs some organizing down the road</h2><hr />'.$out;
    }
    
    public function action_contributing()
    {
        $this->header(' - Contributing');
        $view_instructions = View::factory('self_ref_instructions');
        
        $view = View::factory('self_ref_example');
        $out = $this->self_ref($view->render());
        
        $this->template->content = $view_instructions.$out;
    }

    public function action_documentation()
    {
        $this->auto_render = false;
        $documentation = View::factory('documentation');
        $this->response->body($documentation);
        //$this->template->content = $documentation;
        $this->header(' - documentation');
    }
    
    public function action_generator()
    {
        $this->header(' - Form field generator');
        $view = View::factory('generator');
        $this->template->content = $view;
    }

    public function action_support()
    {
        $support = View::factory('support');
        $this->template->content = $support;
        $this->header(' - Support');
        
        if ($this->request->post()) {
            echo "abc;";
        }
        
        if (isset($_POST)){
            $this->template->content = "test";
        }
    }
    
    public function action_tutorial()
    {
        $view = View::factory('tutorial');
        $this->template->content = $view;
        $this->header(' - Tutorial');
    }
   
    private function header($subtitle)
    {
        $title = Kohana::$config->load('site.title');
        $this->template->title = $title;
        $navigation = '';
        foreach (Kohana::$config->load('site.navigation') as $nav) {
            $navigation .= '<a class="p-2 text-muted';
            if($this->request->url() == '/index.php/'.$nav['path'])
                $navigation .= ' active';
            $navigation .= '" href="/'.$nav['path'].'">'.$nav['title'].'</a>';
        }

        $header = View::factory('header');
        $header->title = $title;
        $header->subtitle = $subtitle;
        $header->nav = $navigation;
        $this->template->top = $header;
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
                $out .= '<h3>'.$subsub[0].'</h3>';
                $out .= $subsub[1];
                
                // CODE MIRROR REFERENCE / RENDER CODE
                $id = 'code_block_'.$code_block_count;
                $out .= '<textarea id="'.$id.'"></textarea><br />';
                $js_out .= 'var code_mirror_'.$code_block_count.
                        ' = CodeMirror.fromTextArea(document.getElementById("'.$id.'"), {mode: "htmlmixed"}); code_mirror_'.
                        $code_block_count.'.getDoc().setValue(\''.substr(str_replace("\n", '\\n', $subsub[1]), 2, -2).'\');';
                $code_block_count++;
            }
        }
        $this->template->js_out = $js_out;
        return $out;
    }

}