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

/* admin/technicien/show.html.twig */
class __TwigTemplate_1be0dcaa2f733dda40bad3c73aff7d06ae7640bfb5f711c7320276114da31bb5 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/technicien/show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/technicien/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Technicien";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Technicien</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 12, $this->source); })()), "id", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cni</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 16, $this->source); })()), "cni", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 20, $this->source); })()), "nom", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 24, $this->source); })()), "prenom", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 28, $this->source); })()), "telephone", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 32, $this->source); })()), "email", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 36, $this->source); })()), "adresse", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Specialite</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 40, $this->source); })()), "specialite", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 44, $this->source); })()), "niveau", []), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disponibilite</th>
                <td>";
        // line 48
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 48, $this->source); })()), "disponibilite", [])) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Actif</th>
                <td>";
        // line 52
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 52, $this->source); })()), "actif", [])) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 56, $this->source); })()), "createdAt", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 56, $this->source); })()), "createdAt", []), "Y-m-d H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 60, $this->source); })()), "updatedAt", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 60, $this->source); })()), "updatedAt", []), "Y-m-d H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DeletedAt</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 64, $this->source); })()), "deletedAt", [])) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 64, $this->source); })()), "deletedAt", []), "Y-m-d H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_technicien_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_technicien_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["technicien"]) || array_key_exists("technicien", $context) ? $context["technicien"] : (function () { throw new RuntimeError('Variable "technicien" does not exist.', 71, $this->source); })()), "id", [])]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 73
        echo twig_include($this->env, $context, "admin/technicien/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/technicien/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 73,  181 => 71,  176 => 69,  168 => 64,  161 => 60,  154 => 56,  147 => 52,  140 => 48,  133 => 44,  126 => 40,  119 => 36,  112 => 32,  105 => 28,  98 => 24,  91 => 20,  84 => 16,  77 => 12,  69 => 6,  63 => 5,  51 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Technicien{% endblock %}

{% block body %}
    <h1>Technicien</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ technicien.id }}</td>
            </tr>
            <tr>
                <th>Cni</th>
                <td>{{ technicien.cni }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ technicien.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ technicien.prenom }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ technicien.telephone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ technicien.email }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ technicien.adresse }}</td>
            </tr>
            <tr>
                <th>Specialite</th>
                <td>{{ technicien.specialite }}</td>
            </tr>
            <tr>
                <th>Niveau</th>
                <td>{{ technicien.niveau }}</td>
            </tr>
            <tr>
                <th>Disponibilite</th>
                <td>{{ technicien.disponibilite ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Actif</th>
                <td>{{ technicien.actif ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>CreatedAt</th>
                <td>{{ technicien.createdAt ? technicien.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>{{ technicien.updatedAt ? technicien.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>DeletedAt</th>
                <td>{{ technicien.deletedAt ? technicien.deletedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('admin_technicien_index') }}\">back to list</a>

    <a href=\"{{ path('admin_technicien_edit', {'id': technicien.id}) }}\">edit</a>

    {{ include('admin/technicien/_delete_form.html.twig') }}
{% endblock %}
", "admin/technicien/show.html.twig", "C:\\Users\\Saliou LO\\Documents\\AGI\\agi-projet\\templates\\admin\\technicien\\show.html.twig");
    }
}
