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

/* index.html.twig */
class __TwigTemplate_13b7c88a676b45267e585d8d32b798dfc0c7a56a283d3bbdb962f1740822a562 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 2);
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
        echo "<div class=\"row\">
<table class=\"table\">
<thead>
<tr>
      <th scope=\"col\">Id</th>
      <th scope=\"col\">Invoice Date</th>
      <th scope=\"col\">Invoice Number</th>
      <th scope=\"col\">Client Id</th>
      <th scope=\"col\">Actions</th>
    </tr>
    
 </thead>


 <tbody>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 21
            echo "    <tr>
    <td><a href=\"invoicedetail/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "invoiceDate", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true);
            echo "</td>
    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "invoiceNumber", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "clientId", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
    <td><a href=\"invoicedetail/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\"  class=\"btn btn-danger\" title=\"Click to proceed!\">
            <i class=\"uk-icon-warning\"></i> Show
        </a>
        <a href=\"deleteinvoice/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-warning \">Delete</a>
        </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
 </tbody>   
    </table>
<div class=\"row\">

<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newinvoice");
        echo "\" class=\"btn btn-success\" style=\"float:right\">Add new Invoice</a>
</div>

</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 38,  117 => 33,  107 => 29,  101 => 26,  97 => 25,  93 => 24,  89 => 23,  83 => 22,  80 => 21,  76 => 20,  59 => 5,  52 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block body %}
<div class=\"row\">
<table class=\"table\">
<thead>
<tr>
      <th scope=\"col\">Id</th>
      <th scope=\"col\">Invoice Date</th>
      <th scope=\"col\">Invoice Number</th>
      <th scope=\"col\">Client Id</th>
      <th scope=\"col\">Actions</th>
    </tr>
    
 </thead>


 <tbody>
    {% for invoice in invoices %}
    <tr>
    <td><a href=\"invoicedetail/{{invoice.id}}\">{{invoice.id}}</td>
    <td>{{invoice.invoiceDate|date('Y-m-d')}}</td>
    <td>{{invoice.invoiceNumber}}</td>
    <td>{{invoice.clientId}}</td>
    <td><a href=\"invoicedetail/{{invoice.id}}\"  class=\"btn btn-danger\" title=\"Click to proceed!\">
            <i class=\"uk-icon-warning\"></i> Show
        </a>
        <a href=\"deleteinvoice/{{invoice.id}}\" type=\"button\" class=\"btn btn-warning \">Delete</a>
        </td>
    </tr>
    {% endfor %}

 </tbody>   
    </table>
<div class=\"row\">

<a href=\"{{ path('newinvoice') }}\" class=\"btn btn-success\" style=\"float:right\">Add new Invoice</a>
</div>

</div>


{% endblock %}", "index.html.twig", "G:\\PROGETTI\\Symfony\\myflexproject\\templates\\index.html.twig");
    }
}
