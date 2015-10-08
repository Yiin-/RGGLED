<header id="header">
    <div id="mega-menu" class="header header-sticky primary-menu icons-no default-skin zoomIn align-right">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default redq" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">{{ trans('menu.toggle') }}</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand large" href="/"><strong>RGG</strong><i>LED</i></a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <a class="navbar-brand mobile pull-left" href="#"><i class="fa fa-diamond"></i> {{ trans('menu.header') }}</a>
                            <a class="mobile-menu-close"><i class="fa fa-random"></i></a>
                            <ul class="nav navbar-nav nav-list">
                                <li>
                                    <a href="/"><i class="fa fa-bolt"></i><span class="link-item"> {{ trans('menu.home') }} </span></a>
                                </li>
                                <li>
                                    <a href="/projects"><i class="fa fa-cogs"></i><span class="link-item"> {{ trans('menu.projects') }} </span></a>
                                </li>
                                <li>
                                    <a href="/products"><i class="fa fa-bolt"></i><span class="link-item"> {{ trans('menu.products') }} </span></a>
                                </li>
                                <li>
                                    <a href="/manufacturing"><i class="fa fa-tasks"></i><span class="link-item"> {{ trans('menu.manufacturing') }} </span></a>
                                </li>
                                <li>
                                    <a href="/contacts"><i class="fa fa-users"></i><span class="link-item"> {{ trans('menu.contacts') }} </span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>