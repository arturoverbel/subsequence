<?php

/* default/result.html.twig */
class __TwigTemplate_793dfffc4ea5923622b75e87edb098ee677d956afefd2b16804aa93c37956b7b extends Twig_Template
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
        $__internal_5ef6c3c589ce626af15dd34de555f746c4a5254eb99b5992eed2cc432e621a08 = $this->env->getExtension("native_profiler");
        $__internal_5ef6c3c589ce626af15dd34de555f746c4a5254eb99b5992eed2cc432e621a08->enter($__internal_5ef6c3c589ce626af15dd34de555f746c4a5254eb99b5992eed2cc432e621a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/result.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Subsequence Weighting - Result </title>

        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">


        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>        
        
    </head>
    <body>
        <h1>Subsequence Weighting - Result</h1>
        <hr>
        
        <div class=\"row\">

            <div class=\"col-md-4\">
            
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
        foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
            // line 22
            echo "                    ";
            echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
            echo " <br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                
            </div>





        </div>

    </body>
</html>
";
        
        $__internal_5ef6c3c589ce626af15dd34de555f746c4a5254eb99b5992eed2cc432e621a08->leave($__internal_5ef6c3c589ce626af15dd34de555f746c4a5254eb99b5992eed2cc432e621a08_prof);

    }

    public function getTemplateName()
    {
        return "default/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 24,  48 => 22,  44 => 21,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>Subsequence Weighting - Result </title>*/
/* */
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/* */
/* */
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>        */
/*         */
/*     </head>*/
/*     <body>*/
/*         <h1>Subsequence Weighting - Result</h1>*/
/*         <hr>*/
/*         */
/*         <div class="row">*/
/* */
/*             <div class="col-md-4">*/
/*             */
/*                 {% for answer in result %}*/
/*                     {{ answer }} <br>*/
/*                 {% endfor %}*/
/*                 */
/*             </div>*/
/* */
/* */
/* */
/* */
/* */
/*         </div>*/
/* */
/*     </body>*/
/* </html>*/
/* */
