<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_582f6f7a1c95fea1886a4f07f42326f789d92acfe90ef4474a7de1375a06b624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d9b8cbb337bde91377bd7359ece212eb6865580849e1f1e5f16fbdc59e04d78 = $this->env->getExtension("native_profiler");
        $__internal_5d9b8cbb337bde91377bd7359ece212eb6865580849e1f1e5f16fbdc59e04d78->enter($__internal_5d9b8cbb337bde91377bd7359ece212eb6865580849e1f1e5f16fbdc59e04d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d9b8cbb337bde91377bd7359ece212eb6865580849e1f1e5f16fbdc59e04d78->leave($__internal_5d9b8cbb337bde91377bd7359ece212eb6865580849e1f1e5f16fbdc59e04d78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_497a62be96248ecc88331bf210f73029376d6caf406e1bbc44540bb19109f5f2 = $this->env->getExtension("native_profiler");
        $__internal_497a62be96248ecc88331bf210f73029376d6caf406e1bbc44540bb19109f5f2->enter($__internal_497a62be96248ecc88331bf210f73029376d6caf406e1bbc44540bb19109f5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_497a62be96248ecc88331bf210f73029376d6caf406e1bbc44540bb19109f5f2->leave($__internal_497a62be96248ecc88331bf210f73029376d6caf406e1bbc44540bb19109f5f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f57262d605c0f53c7c1a672aa5939cdf2f395e031fc5c2250f1fc35092b50837 = $this->env->getExtension("native_profiler");
        $__internal_f57262d605c0f53c7c1a672aa5939cdf2f395e031fc5c2250f1fc35092b50837->enter($__internal_f57262d605c0f53c7c1a672aa5939cdf2f395e031fc5c2250f1fc35092b50837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f57262d605c0f53c7c1a672aa5939cdf2f395e031fc5c2250f1fc35092b50837->leave($__internal_f57262d605c0f53c7c1a672aa5939cdf2f395e031fc5c2250f1fc35092b50837_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_579424e586549dd8efb521c354bccfe298a6a0a6339b5edeee33a8f94a1dae48 = $this->env->getExtension("native_profiler");
        $__internal_579424e586549dd8efb521c354bccfe298a6a0a6339b5edeee33a8f94a1dae48->enter($__internal_579424e586549dd8efb521c354bccfe298a6a0a6339b5edeee33a8f94a1dae48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_579424e586549dd8efb521c354bccfe298a6a0a6339b5edeee33a8f94a1dae48->leave($__internal_579424e586549dd8efb521c354bccfe298a6a0a6339b5edeee33a8f94a1dae48_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
