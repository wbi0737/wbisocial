<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_fdaa393ee49b5304746500b8cafac3ce extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  30 => 5,  26 => 3,  19 => 1,  291 => 148,  287 => 147,  283 => 146,  279 => 145,  275 => 144,  271 => 143,  267 => 142,  263 => 141,  259 => 140,  255 => 139,  251 => 138,  247 => 137,  243 => 136,  238 => 133,  235 => 132,  230 => 118,  218 => 45,  194 => 9,  191 => 8,  188 => 7,  182 => 6,  174 => 153,  170 => 151,  168 => 132,  153 => 119,  151 => 118,  97 => 69,  91 => 67,  83 => 65,  81 => 64,  65 => 45,  57 => 42,  37 => 29,  24 => 2,  101 => 71,  98 => 29,  92 => 31,  90 => 29,  86 => 27,  77 => 24,  68 => 22,  64 => 20,  56 => 18,  50 => 15,  41 => 13,  35 => 7,  32 => 6,  29 => 7,  72 => 23,  67 => 52,  60 => 14,  55 => 12,  51 => 11,  46 => 14,  42 => 12,  39 => 12,  33 => 5,  31 => 6,  28 => 3,);
    }
}
