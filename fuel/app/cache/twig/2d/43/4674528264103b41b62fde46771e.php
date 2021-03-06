<?php

/* fuel-cell.twig */
class __TwigTemplate_2d434674528264103b41b62fde46771e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
  <title>";
        // line 6
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo $_title_;
        echo " </title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    ";
        // line 12
        echo Asset::css("bootstrap.min.css");
        echo "
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"../assets/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"../assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../assets/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../assets/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"../assets/ico/apple-touch-icon-57-precomposed.png\">
  </head>

  <body>

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <a class=\"brand\" href=\"#\">Project name</a>
          <div class=\"nav-collapse collapse\">
            <ul class=\"nav\">
              <li class=\"active\"><a href=\"#\">Home</a></li>
              <li><a href=\"#about\">About</a></li>
              <li><a href=\"#contact\">Contact</a></li>
              <li>
                  <form class=\"navbar-search pull-right\">
                      <input type=\"text\" class=\"search-query\" placeholder=\"Search\">
                  </form>
              </li>
              <li> ";
        // line 53
        if (isset($context["userName"])) { $_userName_ = $context["userName"]; } else { $_userName_ = null; }
        echo $_userName_;
        echo "</li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class=\"container\">
    <div class=\"row\">
      <div class=\"span12\">
        <h1>";
        // line 63
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo $_title_;
        echo "</h1>
        <hr>
<?php if (Session::get_flash('success')): ?>
        <div class=\"alert-message success\">
          <p>
          <?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
          </p>
        </div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
        <div class=\"alert-message error\">
          <p>
          <?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
          </p>
        </div>
<?php endif; ?>
      </div>
      <div class=\"span16\">
<?php echo \$content; ?>
      </div>
    </div>
    </div> <!-- /container -->

<div id=\"footer\" class=\"container\">
  <hr>
  <p class=\"pull-right\">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
      <p>
        <a href=\"http://fuelphp.com\">FuelPHP</a> is released under the MIT license.<br>
        <small>Version: <?php echo e(Fuel::VERSION); ?></small>
      </p>
</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<?php echo Asset::js('bootstrap.min.js'); ?>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "fuel-cell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 63,  78 => 53,  34 => 12,  24 => 6,  17 => 1,);
    }
}
