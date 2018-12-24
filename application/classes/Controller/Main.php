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
    
    public function action_bootstrap()
    {
        $view = View::factory('bootstrap');
        $this->template->content = $view;
        $this->header(' - Bootstrap Snippets');
    }
    
    public function action_contributing()
    {
        $this->header(' - Dev');
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
    
    public function action_finances()
    {
        $this->header(' - SumDiff');
        $view = View::factory('sumdiff');
        $out = $this->self_ref($view->render());
        $this->template->content = $out;
    }

    public function action_support()
    {
        $support = View::factory('support');
        $this->template->content = $support;
        $this->header(' - Support');
    }
    
    public function action_tutorial()
    {
        $view = View::factory('tutorial');
        $this->template->content = $view;
        $this->header(' - Tutorial');
    }
   
    public function action_reference()
    {
        $this->header(' - Bootstrap Snippets');
        $view = View::factory('bootstrap');
        $out = $this->self_ref($view->render());
        $this->template->content = $out;
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
        
        // MADE THIS FOR TESTING
//        $out .= '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
//            <script type="text/javascript" src="/assets/codemirror/codemirror.js"></script>
//        <script src="/assets/codemirror/addon/selection/selection-pointer.js"></script>
//        <script type="text/javascript" src="/assets/codemirror/mode/xml/xml.js"></script>
//        <script src="/assets/codemirror/mode/javascript/javascript.js"></script>
//        <script src="/assets/codemirror/mode/css/css.js"></script>
//        <script src="/assets/codemirror/mode/vbscript/vbscript.js"></script>
//        <script type="text/javascript" src="/assets/codemirror/mode/htmlmixed/htmlmixed.js"></script>';
//        
//        return $out.'<script type="text/javascript">$(document).ready(function() {'.$js_out.'});</script>';
    }

}