<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_e7217699fb435424318489be5196b6d6713889032eac27a053c941a6e3708b11 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "           <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.3.min.js\"></script>



     <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\"><!--Replace this line-->
<script language=\"javascript\" type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.2.min.js\"></script>
<!-- <script language=\"javascript\" type=\"text/javascript\" src=\"jquery.flot.min.js\"></script> -->
<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
    </head>
    <body>
      <div class=\"container\">
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        </div>
         <script>


    var \$newFieldsBtn = \$('#button').append('<button class=\"btn btn-success\" style=\"float:right\">Add New Field</button>');
    
    \$(document).ready(function(){
       
       
        \$collectionHolder=\$('#fields');
        \$positionButton=\$('#button');
        \$positionButton.append(\$newFieldsBtn);
        \$collectionHolder.data('index', \$collectionHolder.find(':input').length);
        console.log(\$collectionHolder.data());

       \$newFieldsBtn.on('click', function(e) {
        // add a new tag form (see next code block)
        addFieldForm(\$collectionHolder, \$newFieldsBtn);
       
    });  

    \$('#labelremove').on('click',function(e){
        e.preventDefault();
        \$(this).closest('#fields')
                    .fadeOut()
                    .remove();
    })
            
        });


        function addFieldForm(\$collectionHolder, \$newFieldsBtn){
            var prototype = \$collectionHolder.data('prototype');

    // get the new index
    var index = \$collectionHolder.data('index');

    var newForm = prototype;
    newForm = newForm.replace(/__name__/g, index);
    \$collectionHolder.data('index', index + 1);
    \$('#fields').append('<div style=\"margin-top:5%\" id=\"newfield\">New Field </div> <button class=\"btn btn-warning\" id=\"labelremove\" onclick=\"removefield('+(index+1)+')\">Remove</button>');
    var \$newFormLi = \$('#fields').append(newForm);
    \$newLinkLi.before(\$newFieldsBtn);
    
        }


     function removefield(value)
     {
         var field=\$('#invoice_fields_'+(value-1));
         \$('#newfield').remove();
         \$('#labelremove').remove();
         field.remove();
     }   
    
</script>

        ";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  183 => 78,  171 => 20,  159 => 6,  146 => 5,  137 => 79,  135 => 78,  76 => 21,  74 => 20,  59 => 8,  56 => 7,  54 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
           <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.3.min.js\"></script>



     <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css\"><!--Replace this line-->
<script language=\"javascript\" type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.11.2.min.js\"></script>
<!-- <script language=\"javascript\" type=\"text/javascript\" src=\"jquery.flot.min.js\"></script> -->
<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
    </head>
    <body>
      <div class=\"container\">
        {% block body %}{% endblock %}
        </div>
         <script>


    var \$newFieldsBtn = \$('#button').append('<button class=\"btn btn-success\" style=\"float:right\">Add New Field</button>');
    
    \$(document).ready(function(){
       
       
        \$collectionHolder=\$('#fields');
        \$positionButton=\$('#button');
        \$positionButton.append(\$newFieldsBtn);
        \$collectionHolder.data('index', \$collectionHolder.find(':input').length);
        console.log(\$collectionHolder.data());

       \$newFieldsBtn.on('click', function(e) {
        // add a new tag form (see next code block)
        addFieldForm(\$collectionHolder, \$newFieldsBtn);
       
    });  

    \$('#labelremove').on('click',function(e){
        e.preventDefault();
        \$(this).closest('#fields')
                    .fadeOut()
                    .remove();
    })
            
        });


        function addFieldForm(\$collectionHolder, \$newFieldsBtn){
            var prototype = \$collectionHolder.data('prototype');

    // get the new index
    var index = \$collectionHolder.data('index');

    var newForm = prototype;
    newForm = newForm.replace(/__name__/g, index);
    \$collectionHolder.data('index', index + 1);
    \$('#fields').append('<div style=\"margin-top:5%\" id=\"newfield\">New Field </div> <button class=\"btn btn-warning\" id=\"labelremove\" onclick=\"removefield('+(index+1)+')\">Remove</button>');
    var \$newFormLi = \$('#fields').append(newForm);
    \$newLinkLi.before(\$newFieldsBtn);
    
        }


     function removefield(value)
     {
         var field=\$('#invoice_fields_'+(value-1));
         \$('#newfield').remove();
         \$('#labelremove').remove();
         field.remove();
     }   
    
</script>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "G:\\PROGETTI\\Symfony\\myflexproject\\templates\\base.html.twig");
    }
}
