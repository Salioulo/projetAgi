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

/* admin/technicien/index.html.twig */
class __TwigTemplate_81f6a14f3ac6b1f74644ac8138db65b45812a04580d05b89cfeb737dcfb3af6e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/technicien/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/technicien/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Technicien index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Technicien index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cni</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Specialite</th>
                <th>Niveau</th>
                <th>Disponibilite</th>
                <th>Actif</th>
               ";
        // line 25
        echo "                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["techniciens"]) || array_key_exists("techniciens", $context) ? $context["techniciens"] : (function () { throw new RuntimeError('Variable "techniciens" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["technicien"]) {
            // line 30
            echo "            <tr>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "id", []), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "cni", []), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "nom", []), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "prenom", []), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "telephone", []), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "email", []), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "adresse", []), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "specialite", []), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["technicien"], "niveau", []), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo ((twig_get_attribute($this->env, $this->source, $context["technicien"], "disponibilite", [])) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 41
            echo ((twig_get_attribute($this->env, $this->source, $context["technicien"], "actif", [])) ? ("Yes") : ("No"));
            echo "</td>
                ";
            // line 45
            echo "                <td>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_technicien_show", ["id" => twig_get_attribute($this->env, $this->source, $context["technicien"], "id", [])]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_technicien_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["technicien"], "id", [])]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "            <tr>
                <td colspan=\"15\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technicien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_technicien_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/technicien/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 58,  170 => 55,  161 => 51,  152 => 47,  148 => 46,  145 => 45,  141 => 41,  137 => 40,  133 => 39,  129 => 38,  125 => 37,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  98 => 30,  93 => 29,  87 => 25,  69 => 6,  63 => 5,  51 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Technicien index{% endblock %}

{% block body %}
    <h1>Technicien index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cni</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Specialite</th>
                <th>Niveau</th>
                <th>Disponibilite</th>
                <th>Actif</th>
               {#} <th>CreatedAt</th>
                <th>UpdatedAt</th>
                <th>DeletedAt</th>#}
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for technicien in techniciens %}
            <tr>
                <td>{{ technicien.id }}</td>
                <td>{{ technicien.cni }}</td>
                <td>{{ technicien.nom }}</td>
                <td>{{ technicien.prenom }}</td>
                <td>{{ technicien.telephone }}</td>
                <td>{{ technicien.email }}</td>
                <td>{{ technicien.adresse }}</td>
                <td>{{ technicien.specialite }}</td>
                <td>{{ technicien.niveau }}</td>
                <td>{{ technicien.disponibilite ? 'Yes' : 'No' }}</td>
                <td>{{ technicien.actif ? 'Yes' : 'No' }}</td>
                {#<td>{{ technicien.createdAt ? technicien.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ technicien.updatedAt ? technicien.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ technicien.deletedAt ? technicien.deletedAt|date('Y-m-d H:i:s') : '' }}</td>#}
                <td>
                    <a href=\"{{ path('admin_technicien_show', {'id': technicien.id}) }}\">show</a>
                    <a href=\"{{ path('admin_technicien_edit', {'id': technicien.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"15\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('admin_technicien_new') }}\">Create new</a>
{% endblock %}
", "admin/technicien/index.html.twig", "C:\\Users\\Saliou LO\\Documents\\AGI\\agi-projet\\templates\\admin\\technicien\\index.html.twig");
    }
}
