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

/* editinvoice.html.twig */
class __TwigTemplate_3de8f0e2085e35ff3215a026072f138f22882df10ca81fbbcf61ceb01ce8196d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editinvoice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editinvoice.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
<div class=\"row\">
<div class=\"col-lg-4\">
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "invoice_date", [], "any", false, false, false, 8), 'row');
        echo "
</div>
<div class=\"col-lg-4\">
";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "invoice_number", [], "any", false, false, false, 11), 'row');
        echo "
</div>
<div class=\"col-lg-4\">
";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "client_id", [], "any", false, false, false, 14), 'row');
        echo "
</div>
</div>

<div class=\"row\" id=\"fields\" style=\"border:1px solid black;padding:25px;margin-top:5%\" data-prototype=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "fields", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "prototype", [], "any", false, false, false, 18), 'widget'), "html_attr");
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "fields", [], "any", false, false, false, 18)), "html", null, true);
        echo "\">
";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "fields", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "prototype", [], "any", false, false, false, 19), "description", [], "any", false, false, false, 19), 'row');
        echo "
<div class=\"col-lg-3\">
";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "fields", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "prototype", [], "any", false, false, false, 21), "quantity", [], "any", false, false, false, 21), 'row');
        echo "
</div>
<div class=\"col-lg-3\">
";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "fields", [], "any", false, false, false, 24), "vars", [], "any", false, false, false, 24), "prototype", [], "any", false, false, false, 24), "amount", [], "any", false, false, false, 24), 'row');
        echo "
</div>
<div class=\"col-lg-3\">
";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "fields", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "prototype", [], "any", false, false, false, 27), "amount_vat", [], "any", false, false, false, 27), 'row');
        echo "
</div>
<div class=\"col-lg-3\">
";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "fields", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "prototype", [], "any", false, false, false, 30), "amount_total", [], "any", false, false, false, 30), 'row');
        echo "
</div>
</div>

<button class=\"btn btn-success\" type=\"submit\" style=\"margin-top:5%\">save</button>
<div id=\"button\">
</div>
";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "editinvoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 37,  113 => 30,  107 => 27,  101 => 24,  95 => 21,  90 => 19,  84 => 18,  77 => 14,  71 => 11,  65 => 8,  59 => 5,  52 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block body %}
{{ form_start(form) }}
<div class=\"row\">
<div class=\"col-lg-4\">
{{form_row(form.invoice_date)}}
</div>
<div class=\"col-lg-4\">
{{form_row(form.invoice_number)}}
</div>
<div class=\"col-lg-4\">
{{form_row(form.client_id)}}
</div>
</div>

<div class=\"row\" id=\"fields\" style=\"border:1px solid black;padding:25px;margin-top:5%\" data-prototype=\"{{ form_widget(form.fields.vars.prototype)|e('html_attr') }}\" data-index=\"{{ form.fields|length }}\">
{{form_row(form.fields.vars.prototype.description)}}
<div class=\"col-lg-3\">
{{form_row(form.fields.vars.prototype.quantity)}}
</div>
<div class=\"col-lg-3\">
{{form_row(form.fields.vars.prototype.amount)}}
</div>
<div class=\"col-lg-3\">
{{form_row(form.fields.vars.prototype.amount_vat)}}
</div>
<div class=\"col-lg-3\">
{{form_row(form.fields.vars.prototype.amount_total)}}
</div>
</div>

<button class=\"btn btn-success\" type=\"submit\" style=\"margin-top:5%\">save</button>
<div id=\"button\">
</div>
{{ form_end(form) }}


{% endblock %}", "editinvoice.html.twig", "G:\\PROGETTI\\Symfony\\myflexproject\\templates\\editinvoice.html.twig");
    }
}
