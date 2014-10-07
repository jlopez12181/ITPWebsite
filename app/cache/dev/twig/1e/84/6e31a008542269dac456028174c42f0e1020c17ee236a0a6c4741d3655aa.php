<?php

/* ::base.html.twig */
class __TwigTemplate_1e846e31a008542269dac456028174c42f0e1020c17ee236a0a6c4741d3655aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>     
         ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        \t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <div id=\"wrapper\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">ICT Careers</a>
            </div>
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li><a href=\"#\">Student</a></li>
                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("teacher_skill_main");
        echo "\">Skill&Improvement</a></li>
                    <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("activity_main");
        echo "\">Activities</a></li>
                    <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("career_main");
        echo "\">Careers</a></li>
                    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("scholarship_main");
        echo "\">Scholarships</a></li>
                    <li><a href=\"#\">Advisors</a></li>\t\t\t\t\t
                </ul>
                <ul class=\"nav navbar-nav navbar-right navbar-user\">
\t\t\t\t    <li class=\"active\"><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("welcome");
        echo "\">Home</a></li>
\t\t\t\t\t<li><a href=\"#about\">About</a></li>
\t\t\t\t\t<li><a href=\"#contact\">Contact</a></li>
                </ul>
            </div>
        </nav>
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "
    </div>

        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ICT Careers";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "     
           ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "406c46a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406c46a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/406c46a_bootstrap.min_1.css");
            // line 14
            echo "        \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    \t\t";
            // asset "406c46a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406c46a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/406c46a_font-awesome.min_2.css");
            echo "        \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    \t\t";
            // asset "406c46a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406c46a_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/406c46a_local_3.css");
            echo "        \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    \t\t";
            // asset "406c46a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406c46a_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/406c46a_shieldui-all.min_4.css");
            echo "        \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    \t\t";
            // asset "406c46a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406c46a_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/406c46a_all.min_5.css");
            echo "        \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    \t\t";
        } else {
            // asset "406c46a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_406c46a") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/406c46a.css");
            echo "        \t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    \t\t";
        }
        unset($context["asset_url"]);
        // line 16
        echo "    \t ";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "        \t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "61101f6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_61101f6_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/61101f6_jquery-1.10.2.min_1.js");
            // line 58
            echo "    \t\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
            // asset "61101f6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_61101f6_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/61101f6_bootstrap.min_2.js");
            echo "    \t\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
            // asset "61101f6_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_61101f6_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/61101f6_shieldui-all.min_3.js");
            echo "    \t\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
            // asset "61101f6_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_61101f6_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/61101f6_gridData_4.js");
            echo "    \t\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
        } else {
            // asset "61101f6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_61101f6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/61101f6.js");
            echo "    \t\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 60
        echo "        ";
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
        return array (  201 => 60,  169 => 58,  164 => 52,  161 => 51,  156 => 47,  152 => 16,  114 => 14,  110 => 7,  105 => 6,  99 => 5,  93 => 61,  91 => 51,  86 => 48,  84 => 47,  75 => 41,  68 => 37,  64 => 36,  60 => 35,  56 => 34,  35 => 17,  33 => 6,  29 => 5,  23 => 1,);
    }
}
