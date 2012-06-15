{include file="head.tpl"}
<body class="">
    <div id="wrap" class="container">
        <header class="row">
            <div id="header" class="span12">
                <a href="{$SITEURL}" alt="Back to Homepage" title="Back to Homepage" class="logo">{$sitetitle}</a>
            </div>
        </header>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target="nav#mainnav.nav-collapse">
                        <i class="icon-list icon-white"></i><span>Menu</span>
                    </a>
                    <nav id="mainnav" class="nav-collapse collapse">
                        <ul class="nav">
                            {foreach $mainnav n name="nav"}
                                <li{if $n.selected} class="active"{/if}>
                                    <a href="{$n.url}" title="{$n.title}"{if $n.pg_followto=='no'} rel="nofollow"{/if}>{$n.label}</a>
                                </li>
                            {/foreach}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        {if $pageid == 1}<div class="hero-unit">
            <h2>Welcome to the Jojo Bootstrap Theme</h2>
            <p>This theme has been created as a demonstration of how easy it is to create a fully "responsive design" website use Jojo's new Twitter Bootstrap options.</p>
            <p>
                <a class="btn btn-primary btn-large" href="https://github.com/jaijaz/jojo_theme_bootstrap">
                  See the project on Github
                </a>
            </p>
        </div>
        {else}<div id="breadcrumbs" class="breadcrumb">
            {include file="breadcrumbs.tpl"}
        </div>{/if}
        <div id="content-wrap" class="row">
            <section id="content" class="span8">
                <h1>{$title}</h1>
                {include file="content.tpl"}
            </section>
            <section id="sidebar" class="span4">
                {include file="article-summary.tpl"}
            </section>
        </div>
        <footer class="container">
            <div class="row">
                <nav id="footernav" class="span12">
                    <ul>
                        {foreach item=n from=$footernav name=fnav}
                            <li>
                                <a href="{$n.url}" title="{$n.title|escape:"html"}"{if $n.pg_followto=='no'} rel="nofollow"{/if}>{$n.label}</a>
                            </li>
                            {if !$.foreach.fnav.last}<li>|</li>{/if}
                        {/foreach}
                    </ul>
                </nav>
            </div>
            <div class="row">
                <p class="span12">&copy;{$sitetitle} {date_format $.now "%Y"}</p>
            </div>
        </footer>
    </div>
    <div id="credits" class="container">
        <a href="http://www.jaijaz.co.nz"{if $pageid!=1} rel="nofollow"{/if}>Jojo Theme</a> by Jaijaz
    </div>
{include file="foot.tpl"}
</body>
</html>