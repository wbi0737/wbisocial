<?php

/* ::base.html.twig */
class __TwigTemplate_f40de14943a5f759d44a106ab9b44d13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts1' => array($this, 'block_javascripts1'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta charset=\"utf-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"../assets/js/html5shiv.js\"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png\">
      <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png\">
                    <link rel=\"apple-touch-icon-precomposed\" href=\"http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png\">
                                   <link rel=\"shortcut icon\" href=\"http://twitter.github.com/bootstrap/assets/ico/favicon.png\">
  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/mzroute.js"), "html", null, true);
        echo "\" async=\"\" type=\"text/javascript\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/_wildcard.js"), "html", null, true);
        echo "\" async=\"\" type=\"text/javascript\"></script>
    </head>
    <body>
  ";
        // line 45
        $this->displayBlock('javascripts1', $context, $blocks);
        // line 52
        echo "   
\t <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
          <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"brand\" href=\"#\">Art de l'informatique</a>
          <div class=\"nav-collapse collapse\">
            <p class=\"navbar-text pull-right\">
              ";
        // line 64
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 65
            echo "    Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">Déconnexion</a>
";
        } else {
            // line 67
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\">Connexion</a>
";
        }
        // line 69
        echo "            </p>
            <ul class=\"nav\">
              <li class=\"active\"><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("domain"), "html", null, true);
        echo "\">Home</a></li>
              <li><a href=\"#about\">About</a></li>
              <li><a href=\"#contact\">Contact</a></li>
\t    </ul>
\t\t<form class=\"navbar-search pull-left\">
\t\t\t\t<input type=\"text\" class=\"search-query\" placeholder=\"Search\">
        </form>
                           
        
                        
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
      <div class=\"row-fluid\">
        <div class=\"span3\">
          <div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
              <li class=\"nav-header\">Les differents domaines</li>
              <li class=\"active\"><a href=\"#\">Site Web</a></li>
              <li><a href=\"#\">Programmation</a></li>
              <li><a href=\"#\">Systèmes d'exploitation</a></li>
              <li><a href=\"#\">Infographie</a></li>
              <li><a href=\"#\">Matériel & logiciels</a></li>
              <li><a href=\"#\">Jeux vidéo</a></li>
              <li><a href=\"#\">Science</a></li>
              <li class=\"nav-header\">Web business Intelligence</li>
              <li><a href=\"#\">Communauté de Wbi</a></li>
              <li class=\"nav-header\">Contact</li>
              <li><a href=\"#\">Contactez nous</a></li>
              <li class=\"divider\">about</li>
              <li><a href=\"#\">Info</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
\t\t
        <div class=\"span9\">
          <div class=\"page-header\">
            <h3><p class=\"text-info\">Trouvez les sujets les plus abordées sur notre forum
            <small>Avec les membres les plus célèbre en informatique..<a href=\"#\" class=\"btn btn-primary btn-large\">Learn more »</a></small></p></h3>
            
          </div>
\t\t 
          <div class=\"row-fluid\">
            
\t\t\t";
        // line 118
        $this->displayBlock('body', $context, $blocks);
        // line 119
        echo "          </div><!--/row-->
        </div><!--/span-->
\t\t
      </div><!--/row-->

      <hr>

      <footer>
        <p>© Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->
        
        ";
        // line 132
        $this->displayBlock('javascripts', $context, $blocks);
        // line 151
        echo " 
    </body>
<iframe src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/analytics.htm"), "html", null, true);
        echo "\" style=\"border: 0px none; position: absolute; top: -100px; left: -100px;\" height=\"1\" width=\"1\"></iframe>

</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Bootstrap, from Twitter!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t<!-- Le styles -->
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style type=\"text/css\">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
\t\t";
    }

    // line 45
    public function block_javascripts1($context, array $blocks = array())
    {
        echo "   
 <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>

         <script type=\"text/javascript\">
             \$('body').html('Hello World');
             </script>
";
    }

    // line 118
    public function block_body($context, array $blocks = array())
    {
    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        // line 133
        echo "\t\t<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Bootstrap/js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>
   
\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 148,  287 => 147,  283 => 146,  279 => 145,  275 => 144,  271 => 143,  267 => 142,  263 => 141,  259 => 140,  255 => 139,  251 => 138,  247 => 137,  243 => 136,  238 => 133,  235 => 132,  230 => 118,  218 => 45,  194 => 9,  191 => 8,  188 => 7,  182 => 6,  174 => 153,  170 => 151,  168 => 132,  153 => 119,  151 => 118,  97 => 69,  91 => 67,  83 => 65,  81 => 64,  65 => 45,  57 => 42,  37 => 29,  24 => 1,  101 => 71,  98 => 29,  92 => 31,  90 => 29,  86 => 27,  77 => 24,  68 => 22,  64 => 20,  56 => 18,  50 => 15,  41 => 13,  35 => 7,  32 => 8,  29 => 7,  72 => 23,  67 => 52,  60 => 14,  55 => 12,  51 => 11,  46 => 14,  42 => 30,  39 => 12,  33 => 5,  31 => 6,  28 => 3,);
    }
}
