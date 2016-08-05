<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4ac6bc80bbbb92dbbfbb5a93cfa50b6531c1ebd15cf248592ef6ac8775388509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a41bd152fe8498fe9075c0d9b224c8e3c16d04109be1527a611c0f466e08f59d = $this->env->getExtension("native_profiler");
        $__internal_a41bd152fe8498fe9075c0d9b224c8e3c16d04109be1527a611c0f466e08f59d->enter($__internal_a41bd152fe8498fe9075c0d9b224c8e3c16d04109be1527a611c0f466e08f59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a41bd152fe8498fe9075c0d9b224c8e3c16d04109be1527a611c0f466e08f59d->leave($__internal_a41bd152fe8498fe9075c0d9b224c8e3c16d04109be1527a611c0f466e08f59d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_943a1e89ae7469fc81524f3c687f4ef5f7c0b9a1ad5efe7d2697459f372079e9 = $this->env->getExtension("native_profiler");
        $__internal_943a1e89ae7469fc81524f3c687f4ef5f7c0b9a1ad5efe7d2697459f372079e9->enter($__internal_943a1e89ae7469fc81524f3c687f4ef5f7c0b9a1ad5efe7d2697459f372079e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_943a1e89ae7469fc81524f3c687f4ef5f7c0b9a1ad5efe7d2697459f372079e9->leave($__internal_943a1e89ae7469fc81524f3c687f4ef5f7c0b9a1ad5efe7d2697459f372079e9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_472bc0b6e880f4e0594464920efd855047c97ca38f29139ca2f961a734f4057b = $this->env->getExtension("native_profiler");
        $__internal_472bc0b6e880f4e0594464920efd855047c97ca38f29139ca2f961a734f4057b->enter($__internal_472bc0b6e880f4e0594464920efd855047c97ca38f29139ca2f961a734f4057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_472bc0b6e880f4e0594464920efd855047c97ca38f29139ca2f961a734f4057b->leave($__internal_472bc0b6e880f4e0594464920efd855047c97ca38f29139ca2f961a734f4057b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ddee852d0f2d3d15ce007497ae068bf3536d445a1958a8a163a193f3faf18363 = $this->env->getExtension("native_profiler");
        $__internal_ddee852d0f2d3d15ce007497ae068bf3536d445a1958a8a163a193f3faf18363->enter($__internal_ddee852d0f2d3d15ce007497ae068bf3536d445a1958a8a163a193f3faf18363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ddee852d0f2d3d15ce007497ae068bf3536d445a1958a8a163a193f3faf18363->leave($__internal_ddee852d0f2d3d15ce007497ae068bf3536d445a1958a8a163a193f3faf18363_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
