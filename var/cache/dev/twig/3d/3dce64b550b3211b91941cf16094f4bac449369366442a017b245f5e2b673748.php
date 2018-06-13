<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d2ebeea06f9ea78d73626b805eafd7d59ef1cc6ca35e68f7470a147fa29720ba extends Twig_Template
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
        $__internal_e3551519c4c3f89c1cd5b87e4b0ec85d84e15b7bdd73236983e04066412175a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3551519c4c3f89c1cd5b87e4b0ec85d84e15b7bdd73236983e04066412175a8->enter($__internal_e3551519c4c3f89c1cd5b87e4b0ec85d84e15b7bdd73236983e04066412175a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_47fce43782d7881398843082a7bfcb32de4a9d6db631093b82d1ea95ca7ffa40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fce43782d7881398843082a7bfcb32de4a9d6db631093b82d1ea95ca7ffa40->enter($__internal_47fce43782d7881398843082a7bfcb32de4a9d6db631093b82d1ea95ca7ffa40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e3551519c4c3f89c1cd5b87e4b0ec85d84e15b7bdd73236983e04066412175a8->leave($__internal_e3551519c4c3f89c1cd5b87e4b0ec85d84e15b7bdd73236983e04066412175a8_prof);

        
        $__internal_47fce43782d7881398843082a7bfcb32de4a9d6db631093b82d1ea95ca7ffa40->leave($__internal_47fce43782d7881398843082a7bfcb32de4a9d6db631093b82d1ea95ca7ffa40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
