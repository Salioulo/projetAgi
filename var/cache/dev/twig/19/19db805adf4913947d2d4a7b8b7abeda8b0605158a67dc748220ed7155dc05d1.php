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

/* @Framework/Form/form_help.html.php */
class __TwigTemplate_e8eed8c33679d85cb3206497378928131e7bf990b050c90a653ccbb5d8faa8ff extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Framework/Form/form_help.html.php"));

        // line 1
        echo "<?php if (!empty(\$help)): ?>
    <?php \$help_attr['class'] = isset(\$help_attr['class']) ? trim(\$help_attr['class'].' help-text') : 'help-text'; ?>
    <p id=\"<?php echo \$view->escape(\$id); ?>_help\" <?php echo ' '.\$view['form']->block(\$form, 'attributes', ['attr' => \$help_attr]); ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$help, [], \$translation_domain) : \$help); ?></p>
<?php endif; ?>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_help.html.php";
    }

    public function getDebugInfo()
    {
        return array (  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php if (!empty(\$help)): ?>
    <?php \$help_attr['class'] = isset(\$help_attr['class']) ? trim(\$help_attr['class'].' help-text') : 'help-text'; ?>
    <p id=\"<?php echo \$view->escape(\$id); ?>_help\" <?php echo ' '.\$view['form']->block(\$form, 'attributes', ['attr' => \$help_attr]); ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$help, [], \$translation_domain) : \$help); ?></p>
<?php endif; ?>
", "@Framework/Form/form_help.html.php", "C:\\Users\\Saliou LO\\Documents\\AGI\\agi-projet\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_help.html.php");
    }
}