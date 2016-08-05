<?php

/* base.html.twig */
class __TwigTemplate_dde6c4fe292ccfffd202c796ff17959ca917463d645e318d958465804780bd6e extends Twig_Template
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
        $__internal_9a6dd5fc81f2faf2129d1cdd33a3c645a06fc1388cdef7e5fb657238333c34e4 = $this->env->getExtension("native_profiler");
        $__internal_9a6dd5fc81f2faf2129d1cdd33a3c645a06fc1388cdef7e5fb657238333c34e4->enter($__internal_9a6dd5fc81f2faf2129d1cdd33a3c645a06fc1388cdef7e5fb657238333c34e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9a6dd5fc81f2faf2129d1cdd33a3c645a06fc1388cdef7e5fb657238333c34e4->leave($__internal_9a6dd5fc81f2faf2129d1cdd33a3c645a06fc1388cdef7e5fb657238333c34e4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60c303cdc4b67ca050e931bd480027cfeceac4c0b5929099268c59419213e77c = $this->env->getExtension("native_profiler");
        $__internal_60c303cdc4b67ca050e931bd480027cfeceac4c0b5929099268c59419213e77c->enter($__internal_60c303cdc4b67ca050e931bd480027cfeceac4c0b5929099268c59419213e77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_60c303cdc4b67ca050e931bd480027cfeceac4c0b5929099268c59419213e77c->leave($__internal_60c303cdc4b67ca050e931bd480027cfeceac4c0b5929099268c59419213e77c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d8e6ec7da8ade54461cbaa1a442890b1250af54f6324efa158adcb52d3c085c = $this->env->getExtension("native_profiler");
        $__internal_1d8e6ec7da8ade54461cbaa1a442890b1250af54f6324efa158adcb52d3c085c->enter($__internal_1d8e6ec7da8ade54461cbaa1a442890b1250af54f6324efa158adcb52d3c085c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1d8e6ec7da8ade54461cbaa1a442890b1250af54f6324efa158adcb52d3c085c->leave($__internal_1d8e6ec7da8ade54461cbaa1a442890b1250af54f6324efa158adcb52d3c085c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccc890e632d2b4ec4388a5e85466bd8fb49dd7291fca016059a5d9b786093c09 = $this->env->getExtension("native_profiler");
        $__internal_ccc890e632d2b4ec4388a5e85466bd8fb49dd7291fca016059a5d9b786093c09->enter($__internal_ccc890e632d2b4ec4388a5e85466bd8fb49dd7291fca016059a5d9b786093c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ccc890e632d2b4ec4388a5e85466bd8fb49dd7291fca016059a5d9b786093c09->leave($__internal_ccc890e632d2b4ec4388a5e85466bd8fb49dd7291fca016059a5d9b786093c09_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e42c906aa66c234bf226bc8dc1c99eaaf0cdbb4e04d5371b83ab2c37062c354b = $this->env->getExtension("native_profiler");
        $__internal_e42c906aa66c234bf226bc8dc1c99eaaf0cdbb4e04d5371b83ab2c37062c354b->enter($__internal_e42c906aa66c234bf226bc8dc1c99eaaf0cdbb4e04d5371b83ab2c37062c354b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e42c906aa66c234bf226bc8dc1c99eaaf0cdbb4e04d5371b83ab2c37062c354b->leave($__internal_e42c906aa66c234bf226bc8dc1c99eaaf0cdbb4e04d5371b83ab2c37062c354b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
