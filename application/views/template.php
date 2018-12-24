<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Serhiy">
        <title><?= $title ?></title>

        <!-- Bootstrap core CSS -->
        <link href="/assets/bootstrap-4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="/assets/codemirror/codemirror.css" rel="stylesheet" type="text/css" />
        
        <style>
            .active{
                text-decoration: underline;
            }
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>

        <!-- Custom styles for this template -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <!-- Custom styles for this template -->

        <link href="/assets/css/main.css" rel="stylesheet" type="text/css" />

    </head>
    <body>

        <div class="container">

            <?= $top ?>

            <!--
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Featured post</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#">Continue reading</a>
                        </div>
                        <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Design</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Post title</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <a href="#">Continue reading</a>
                        </div>
                        <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
                    </div>
                </div>
            </div>
            -->
        </div>

        <div class="container">
            <?= $content ?>
        </div>

        <footer class="blog-footer">
            <p>&copy; FormBasket 2019</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/assets/bootstrap-4.2.1/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="/assets/bootstrap-4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>

        <?php if (isset($js_out)): ?>
            <script type="text/javascript">
                $(document).ready(function() {
                    <?=$js_out?>
                });
            </script>
        <?php endif; ?>
        
        <script type="text/javascript" src="/assets/codemirror/codemirror.js"></script>
        <script src="/assets/codemirror/addon/selection/selection-pointer.js"></script>
        <script type="text/javascript" src="/assets/codemirror/mode/xml/xml.js"></script>
        <script src="/assets/codemirror/mode/javascript/javascript.js"></script>
        <script src="/assets/codemirror/mode/css/css.js"></script>
        <script src="/assets/codemirror/mode/vbscript/vbscript.js"></script>
        <script type="text/javascript" src="/assets/codemirror/mode/htmlmixed/htmlmixed.js"></script>

    </body>
</html>



<?php /*

<!DOCTYPE html>
<html lang="en">
    <head>

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
        
        <!--<script src="/js/tutorial_js.js"></script> "Commenting out, ask Michael about this, not sure why it's breaking" -Serhiy 10/19/15 -->

    </head>

</html>

/*?>