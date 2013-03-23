<?php

/* WbiForumBundle:Domain:index.html.twig */
class __TwigTemplate_784a7824dfe1a62de181e106324ac1cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WbiForumBundle::layout.html.twig");

        $this->blocks = array(
            'wbiforum_body' => array($this, 'block_wbiforum_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WbiForumBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_wbiforum_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"page-header\">
    <h1>Liste des forums</h1>
</div>

 
<hr >
    <tbody>
    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 12
            echo "    <section class=\"span3\">
   <div class=\"hero-unit\">
    
     <tr>
            <td><p class=\"text-center\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domain"), "label"), "html", null, true);
            echo "</p></td>
            
            <td><hr ></td>
   ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "domain"), "underdomains"));
            foreach ($context['_seq'] as $context["_key"] => $context["underdomain"]) {
                // line 20
                echo "            <td><p class=\"text-left\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("underdomain_show", array("id" => $this->getAttribute($this->getContext($context, "underdomain"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "underdomain"), "label"), "html", null, true);
                echo "</a></p></td>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['underdomain'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "            <td><p><a class=\"btn btn-success\" href=\"#\">View details »</a></p></td>
   </tr>

         
    
</div>
  </section>
     
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "    </tbody>

             
             ";
    }

    public function getTemplateName()
    {
        return "WbiForumBundle:Domain:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  71 => 22,  60 => 20,  56 => 19,  50 => 16,  44 => 12,  40 => 11,  31 => 4,  28 => 3,);
    }
}
