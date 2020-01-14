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

/* invoicedetail.html.twig */
class __TwigTemplate_504ae4b356db65e28c8e6b9e98a8f8d65f120857c8526122300afbd893a56137 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoicedetail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "invoicedetail.html.twig", 2);
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
      <th scope=\"col\">Invoice Id</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Quantity</th>
      <th scope=\"col\">Amount</th>
      <th scope=\"col\">Vat Amount</th>
      <th scope=\"col\">Amount Total</th>
    </tr>
    
 </thead>


 <tbody>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 22
            echo "    <tr>
    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "invoiceId", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "quantity", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "amount", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "amountVat", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "amountTotal", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
    </tr>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
 </tbody>   
    </table>
    <div class=\"row\" style=\"text-align:right\">
    <p >Amount  :<b> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 35, $this->source); })()), "sumamount", [], "any", false, false, false, 35), "html", null, true);
        echo "</b></p></br>
     <p >Amount Vat  : <b>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 36, $this->source); })()), "sumamountvat", [], "any", false, false, false, 36), "html", null, true);
        echo "</b></p></br>
      <p >Total Amount : <b>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 37, $this->source); })()), "sumamounttotal", [], "any", false, false, false, 37), "html", null, true);
        echo "</b></p></br>
    </div>
<a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"btn btn-success\" style=\"float:right\">Back</a>
</div>
<div class=\"row\">


</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "invoicedetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  127 => 37,  123 => 36,  119 => 35,  113 => 31,  104 => 28,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  81 => 22,  77 => 21,  59 => 5,  52 => 4,  35 => 2,);
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
      <th scope=\"col\">Invoice Id</th>
      <th scope=\"col\">Description</th>
      <th scope=\"col\">Quantity</th>
      <th scope=\"col\">Amount</th>
      <th scope=\"col\">Vat Amount</th>
      <th scope=\"col\">Amount Total</th>
    </tr>
    
 </thead>


 <tbody>
    {% for invoice in invoices %}
    <tr>
    <td>{{invoice.invoiceId}}</td>
    <td>{{invoice.description}}</td>
    <td>{{invoice.quantity}}</td>
    <td>{{invoice.amount}}</td>
    <td>{{invoice.amountVat}}</td>
    <td>{{invoice.amountTotal}}</td>
    </tr>
   {% endfor %}

 </tbody>   
    </table>
    <div class=\"row\" style=\"text-align:right\">
    <p >Amount  :<b> {{totals.sumamount}}</b></p></br>
     <p >Amount Vat  : <b>{{totals.sumamountvat}}</b></p></br>
      <p >Total Amount : <b>{{totals.sumamounttotal}}</b></p></br>
    </div>
<a href=\"{{ path('homepage') }}\" class=\"btn btn-success\" style=\"float:right\">Back</a>
</div>
<div class=\"row\">


</div>


{% endblock %}", "invoicedetail.html.twig", "G:\\PROGETTI\\Symfony\\myflexproject\\templates\\invoicedetail.html.twig");
    }
}
