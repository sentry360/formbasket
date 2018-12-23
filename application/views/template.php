<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        
        <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="/css/main.css" rel="stylesheet" type="text/css" />
        <link href="/assets/codemirror/codemirror.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="/ico/favicon.png">
        
        <script src="/js/jquery.min.js"></script>
        
        <?php if (isset($js_out)): ?>
            <script type="text/javascript">
                $(document).ready(function() {
                    <?=$js_out?>
                });
            </script>
        <?php endif; ?>
        
        <!--<script src="/js/tutorial_js.js"></script> "Commenting out, ask Michael about this, not sure why it's breaking" -Serhiy 10/19/15 -->

    </head>

    <body>

        <div class="container">
            
            <?= $top ?>

            <?= $content ?>

            <hr />

            <footer>
                <p>&copy; FormBasket 2015</p>
            </footer>

        </div><!--/.container-->
        
        <script src="/js/bootstrap.js"></script>
        <script type="text/javascript" src="/assets/codemirror/codemirror.js"></script>
        <script src="/assets/codemirror/addon/selection/selection-pointer.js"></script>
        <script type="text/javascript" src="/assets/codemirror/mode/xml/xml.js"></script>
        <script src="/assets/codemirror/mode/javascript/javascript.js"></script>
        <script src="/assets/codemirror/mode/css/css.js"></script>
        <script src="/assets/codemirror/mode/vbscript/vbscript.js"></script>
        <script type="text/javascript" src="/assets/codemirror/mode/htmlmixed/htmlmixed.js"></script>

    </body>
</html>