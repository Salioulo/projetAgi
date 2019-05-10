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

/* admin/intervention/index.html.twig */
class __TwigTemplate_daadc4295cc8d2f0403a088f5fe5a0fde3354543ca63e6e7f3e1216fd7da84e1 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/intervention/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/intervention/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Intervention index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Intervention index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>DateDebut</th>
                <th>Description</th>
                <th>Resultat</th>
                <th>ModePayment</th>
                <th>ModeTransaction</th>
                <th>Montant</th>
                <th>TypeIntervention</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>CreatedBy</th>
                <th>UpdatedBy</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["interventions"]) || array_key_exists("interventions", $context) ? $context["interventions"] : (function () { throw new RuntimeError('Variable "interventions" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["intervention"], "dateDebut", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "dateDebut", []), "Y-m-d H:i:s")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "description", []), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "resultat", []), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "modePayment", []), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "modeTransaction", []), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "montant", []), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "typeIntervention", []), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["intervention"], "createdAt", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "createdAt", []), "Y-m-d H:i:s")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["intervention"], "updatedAt", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "updatedAt", []), "Y-m-d H:i:s")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "createdBy", []), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["intervention"], "updatedBy", []), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_intervention_show", ["id" => twig_get_attribute($this->env, $this->source, $context["intervention"], "id", [])]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_intervention_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["intervention"], "id", [])]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <tr>
                <td colspan=\"13\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_intervention_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/intervention/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 54,  171 => 51,  162 => 47,  153 => 43,  149 => 42,  144 => 40,  140 => 39,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  97 => 28,  92 => 27,  69 => 6,  63 => 5,  51 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Intervention index{% endblock %}

{% block body %}
    <h1>Intervention index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>DateDebut</th>
                <th>Description</th>
                <th>Resultat</th>
                <th>ModePayment</th>
                <th>ModeTransaction</th>
                <th>Montant</th>
                <th>TypeIntervention</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>CreatedBy</th>
                <th>UpdatedBy</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for intervention in interventions %}
            <tr>
                <td>{{ intervention.id }}</td>
                <td>{{ intervention.dateDebut ? intervention.dateDebut|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ intervention.description }}</td>
                <td>{{ intervention.resultat }}</td>
                <td>{{ intervention.modePayment }}</td>
                <td>{{ intervention.modeTransaction }}</td>
                <td>{{ intervention.montant }}</td>
                <td>{{ intervention.typeIntervention }}</td>
                <td>{{ intervention.createdAt ? intervention.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ intervention.updatedAt ? intervention.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ intervention.createdBy }}</td>
                <td>{{ intervention.updatedBy }}</td>
                <td>
                    <a href=\"{{ path('admin_intervention_show', {'id': intervention.id}) }}\">show</a>
                    <a href=\"{{ path('admin_intervention_edit', {'id': intervention.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"13\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('admin_intervention_new') }}\">Create new</a>
{% endblock %}
", "admin/intervention/index.html.twig", "C:\\Users\\Saliou LO\\Documents\\AGI\\agi-projet\\templates\\admin\\intervention\\index.html.twig");
    }
}
