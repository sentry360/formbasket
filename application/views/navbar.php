<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">SumDiff</a>
            <div class="nav-collapse collapse">
                <!-- here here -->
                <form class="navbar-form pull-right">
                    <input class="span2" type="text" placeholder="Email or Phone #">
                    <input class="span2" type="password" placeholder="Password">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <button type="submit" class="btn btn-inverse"><?= __('Register') ?></button>
                </form>

                <ul class="nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/contact">Demo</a></li>
                    <li><a href="/about">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-globe icon-white"></i>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <i class="icon-remove-circle"></i>
                                    Hide language options
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="nav-header">Languages</li>
                            <li><a href="#">Chinese</a></li>
                            <li><a href="#" class="disabled">English</a></li>
                            <li><a href="#">Japanese</a></li>
                            <li><a href="#"><?= __('Spanish') ?></a></li>
                            <li><a href="#">Ukrainian</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>