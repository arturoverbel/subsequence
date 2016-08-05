<?php

/* default/subsequence.html.twig */
class __TwigTemplate_929df5301d4eb2138559f11b4e46290d3452935df034af29f28a59361d4ed4f6 extends Twig_Template
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
        $__internal_6541357e0edf6abc3b784571d5f366d0a69fdb6939b9a09df5a0b61e660d1e73 = $this->env->getExtension("native_profiler");
        $__internal_6541357e0edf6abc3b784571d5f366d0a69fdb6939b9a09df5a0b61e660d1e73->enter($__internal_6541357e0edf6abc3b784571d5f366d0a69fdb6939b9a09df5a0b61e660d1e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/subsequence.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Subsequence Weighting</title>

        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">


        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>        
        
    </head>
    <body>
        

        <h1>Subsequence Weighting</h1>
        <hr>

        <form role=\"form\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("calculate");
        echo "\" method=\"POST\" >
            <div class=\"row\">

                <div class=\"col-md-3\">

                    <div class=\"form-group\">
                        <label for=\"cases\">How long cases:</label>
                        <select class=\"form-control\" id=\"cases\" name=\"cases\">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <input type=\"submit\" class=\"btn btn-info\" value=\"Enviar\">

                </div>

                <div class=\"col-md-4\" id=\"inputs\">

                </div>



            </div>
        </form>

        <script>

            \$('#cases').change(function() {
                var cases = this.value;

                var result = \"\";

                for (var i = 0; i < cases; i++) {

                    var inputLenght = \"<div class='form-group'>\"+
                        \"<label for='usr'>Lenght case \" + i + \": </label>\"+
                        \"<input type='text' class='form-control' maxlength='10' placeholder='Lenght sequence' name='length[\"+i+\"]'>\"+
                        \"<input type='text' class='form-control' placeholder='Sequence' name='sequence[\"+i+\"]'>\"+
                        \"<input type='text' class='form-control' placeholder='Weight' name='weight[\"+i+\"]'>\"+
                    \"</div><div id='sequence-\"+i+\"'></div><div id='weight-\"+i+\"'></div>\";

                    result += inputLenght;
                }

                \$('#inputs').html( result );

            });


        </script>

    </body>
</html>
";
        
        $__internal_6541357e0edf6abc3b784571d5f366d0a69fdb6939b9a09df5a0b61e660d1e73->leave($__internal_6541357e0edf6abc3b784571d5f366d0a69fdb6939b9a09df5a0b61e660d1e73_prof);

    }

    public function getTemplateName()
    {
        return "default/subsequence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>Subsequence Weighting</title>*/
/* */
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/* */
/* */
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>        */
/*         */
/*     </head>*/
/*     <body>*/
/*         */
/* */
/*         <h1>Subsequence Weighting</h1>*/
/*         <hr>*/
/* */
/*         <form role="form" action="{{ path('calculate') }}" method="POST" >*/
/*             <div class="row">*/
/* */
/*                 <div class="col-md-3">*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="cases">How long cases:</label>*/
/*                         <select class="form-control" id="cases" name="cases">*/
/*                             <option>1</option>*/
/*                             <option>2</option>*/
/*                             <option>3</option>*/
/*                             <option>4</option>*/
/*                             <option>5</option>*/
/*                         </select>*/
/*                     </div>*/
/* */
/*                     <input type="submit" class="btn btn-info" value="Enviar">*/
/* */
/*                 </div>*/
/* */
/*                 <div class="col-md-4" id="inputs">*/
/* */
/*                 </div>*/
/* */
/* */
/* */
/*             </div>*/
/*         </form>*/
/* */
/*         <script>*/
/* */
/*             $('#cases').change(function() {*/
/*                 var cases = this.value;*/
/* */
/*                 var result = "";*/
/* */
/*                 for (var i = 0; i < cases; i++) {*/
/* */
/*                     var inputLenght = "<div class='form-group'>"+*/
/*                         "<label for='usr'>Lenght case " + i + ": </label>"+*/
/*                         "<input type='text' class='form-control' maxlength='10' placeholder='Lenght sequence' name='length["+i+"]'>"+*/
/*                         "<input type='text' class='form-control' placeholder='Sequence' name='sequence["+i+"]'>"+*/
/*                         "<input type='text' class='form-control' placeholder='Weight' name='weight["+i+"]'>"+*/
/*                     "</div><div id='sequence-"+i+"'></div><div id='weight-"+i+"'></div>";*/
/* */
/*                     result += inputLenght;*/
/*                 }*/
/* */
/*                 $('#inputs').html( result );*/
/* */
/*             });*/
/* */
/* */
/*         </script>*/
/* */
/*     </body>*/
/* </html>*/
/* */
