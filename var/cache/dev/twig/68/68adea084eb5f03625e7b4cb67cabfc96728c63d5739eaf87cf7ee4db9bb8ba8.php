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

/* admin/entreprise/index.html.twig */
class __TwigTemplate_0f44db3627d65851271ea2679fab9b66cf1fef557524736fbbf2fe0358446706 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/entreprise/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/entreprise/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Entreprise index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Entreprise index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Ninea</th>
                <th>RaisonSociale</th>
                <th>Fixe</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>TypeEntreprise</th>
                <th>Disponibilite</th>
                <th>Actif</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>CreatedBy</th>
                <th>UpdatedBy</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entreprises"]) || array_key_exists("entreprises", $context) ? $context["entreprises"] : (function () { throw new RuntimeError('Variable "entreprises" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entreprise"]) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "nom", []), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "ninea", []), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "raisonSociale", []), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "fixe", []), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "mobile", []), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "email", []), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "adresse", []), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "typeEntreprise", []), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo ((twig_get_attribute($this->env, $this->source, $context["entreprise"], "disponibilite", [])) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 42
            echo ((twig_get_attribute($this->env, $this->source, $context["entreprise"], "actif", [])) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["entreprise"], "createdAt", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "createdAt", []), "Y-m-d H:i:s")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["entreprise"], "updatedAt", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "updatedAt", []), "Y-m-d H:i:s")) : ("")), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "createdBy", []), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entreprise"], "updatedBy", []), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_entreprise_show", ["id" => twig_get_attribute($this->env, $this->source, $context["entreprise"], "id", [])]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_entreprise_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entreprise"], "id", [])]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"15\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entreprise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_entreprise_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/entreprise/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 60,  186 => 57,  177 => 53,  168 => 49,  164 => 48,  159 => 46,  155 => 45,  151 => 44,  147 => 43,  143 => 42,  139 => 41,  135 => 40,  131 => 39,  127 => 38,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  100 => 31,  95 => 30,  69 => 6,  63 => 5,  51 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Entreprise index{% endblock %}

{% block body %}
    <h1>Entreprise index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Ninea</th>
                <th>RaisonSociale</th>
                <th>Fixe</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>TypeEntreprise</th>
                <th>Disponibilite</th>
                <th>Actif</th>
                <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>CreatedBy</th>
                <th>UpdatedBy</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entreprise in entreprises %}
            <tr>
                <td>{{ entreprise.id }}</td>
                <td>{{ entreprise.nom }}</td>
                <td>{{ entreprise.ninea }}</td>
                <td>{{ entreprise.raisonSociale }}</td>
                <td>{{ entreprise.fixe }}</td>
                <td>{{ entreprise.mobile }}</td>
                <td>{{ entreprise.email }}</td>
                <td>{{ entreprise.adresse }}</td>
                <td>{{ entreprise.typeEntreprise }}</td>
                <td>{{ entreprise.disponibilite ? 'Yes' : 'No' }}</td>
                <td>{{ entreprise.actif ? 'Yes' : 'No' }}</td>
                <td>{{ entreprise.createdAt ? entreprise.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ entreprise.updatedAt ? entreprise.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ entreprise.createdBy }}</td>
                <td>{{ entreprise.updatedBy }}</td>
                <td>
                    <a href=\"{{ path('admin_entreprise_show', {'id': entreprise.id}) }}\">show</a>
                    <a href=\"{{ path('admin_entreprise_edit', {'id': entreprise.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"15\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('admin_entreprise_new') }}\">Create new</a>
{% endblock %}
", "admin/entreprise/index.html.twig", "C:\\Users\\Saliou LO\\Documents\\AGI\\agi-projet\\templates\\admin\\entreprise\\index.html.twig");
    }
}
