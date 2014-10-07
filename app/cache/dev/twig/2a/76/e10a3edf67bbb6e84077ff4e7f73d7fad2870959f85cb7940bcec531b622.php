<?php

/* myBundleictBundle:Default:parent_act.html.twig */
class __TwigTemplate_2a76e10a3edf67bbb6e84077ff4e7f73d7fad2870959f85cb7940bcec531b622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "        <div id=\"page-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Activity</h1>
                    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "programname"), "html", null, true);
            echo "</div>
                        <div class=\"panel-body\">
                          <b>Detail:</b>&nbsp; ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "programdetail"), "html", null, true);
            echo "
                      <BR><b>Contact:</b>&nbsp; ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contact"), "html", null, true);
            echo "
                      <BR><b>Duration:</b>&nbsp; ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "duration"), "html", null, true);
            echo "
                      <BR><b>Age Group:</b>&nbsp; ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agegroup"), "html", null, true);
            echo "
                      <BR><b>Gender:</b>&nbsp; ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "gender"), "html", null, true);
            echo "
                      <BR><b>Location:</b>&nbsp; ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location"), "html", null, true);
            echo "
                      <BR><b>Event Dates:</b>&nbsp; ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "eventdates"), "html", null, true);
            echo "  
                      <BR><b><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activity_count", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Click for like this topic: </a></b>There are ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "popular"), "html", null, true);
            echo " people like this.                 
                        </div>
                        <div class=\"panel-heading\">
                            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url"), "html", null, true);
            echo "\"></i>More Detail:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url"), "html", null, true);
            echo "</a>
                        </div>                   
                    </div>
       \t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t
                    <div class=\"alert alert-success alert-dismissable\">

                    </div>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "myBundleictBundle:Default:parent_act.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  85 => 21,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  44 => 9,  41 => 8,  37 => 7,  31 => 3,  28 => 2,);
    }
}
