<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1875c7e55534c6d8933afa9760a75865781a390413a8e06349ff78608df0b147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32c1f79e8daceecb04692d458b051545a6b43116f0e7c23eec410381b7a4cb34 = $this->env->getExtension("native_profiler");
        $__internal_32c1f79e8daceecb04692d458b051545a6b43116f0e7c23eec410381b7a4cb34->enter($__internal_32c1f79e8daceecb04692d458b051545a6b43116f0e7c23eec410381b7a4cb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32c1f79e8daceecb04692d458b051545a6b43116f0e7c23eec410381b7a4cb34->leave($__internal_32c1f79e8daceecb04692d458b051545a6b43116f0e7c23eec410381b7a4cb34_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0593f213a1c2d0b589c1d59bacc0b775d79886ccd1936de125aafbdc95851a95 = $this->env->getExtension("native_profiler");
        $__internal_0593f213a1c2d0b589c1d59bacc0b775d79886ccd1936de125aafbdc95851a95->enter($__internal_0593f213a1c2d0b589c1d59bacc0b775d79886ccd1936de125aafbdc95851a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0593f213a1c2d0b589c1d59bacc0b775d79886ccd1936de125aafbdc95851a95->leave($__internal_0593f213a1c2d0b589c1d59bacc0b775d79886ccd1936de125aafbdc95851a95_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94451baf4955f303aa34964f1aa588589ca9cd820241867e249f5590f68e89f1 = $this->env->getExtension("native_profiler");
        $__internal_94451baf4955f303aa34964f1aa588589ca9cd820241867e249f5590f68e89f1->enter($__internal_94451baf4955f303aa34964f1aa588589ca9cd820241867e249f5590f68e89f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94451baf4955f303aa34964f1aa588589ca9cd820241867e249f5590f68e89f1->leave($__internal_94451baf4955f303aa34964f1aa588589ca9cd820241867e249f5590f68e89f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8334b82287153c3377616d63ee957030924bfdd4a835633b1f9fa1e34ec6529 = $this->env->getExtension("native_profiler");
        $__internal_b8334b82287153c3377616d63ee957030924bfdd4a835633b1f9fa1e34ec6529->enter($__internal_b8334b82287153c3377616d63ee957030924bfdd4a835633b1f9fa1e34ec6529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b8334b82287153c3377616d63ee957030924bfdd4a835633b1f9fa1e34ec6529->leave($__internal_b8334b82287153c3377616d63ee957030924bfdd4a835633b1f9fa1e34ec6529_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
