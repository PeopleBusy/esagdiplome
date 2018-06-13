<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9867fd41d7fb74166c596192f250fcb9bbd04f1b21b5974cd52d2caeee7a977d extends Twig_Template
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
        $__internal_374fd9e319ecd9aa1a45e1b5e242981d5b0173af288f658fbda9835e872c6f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374fd9e319ecd9aa1a45e1b5e242981d5b0173af288f658fbda9835e872c6f14->enter($__internal_374fd9e319ecd9aa1a45e1b5e242981d5b0173af288f658fbda9835e872c6f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_fbfa1b17b9fbe4b6706774648cf769b1fc0bb90a01d537ced7de8b5aa133f6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfa1b17b9fbe4b6706774648cf769b1fc0bb90a01d537ced7de8b5aa133f6eb->enter($__internal_fbfa1b17b9fbe4b6706774648cf769b1fc0bb90a01d537ced7de8b5aa133f6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_374fd9e319ecd9aa1a45e1b5e242981d5b0173af288f658fbda9835e872c6f14->leave($__internal_374fd9e319ecd9aa1a45e1b5e242981d5b0173af288f658fbda9835e872c6f14_prof);

        
        $__internal_fbfa1b17b9fbe4b6706774648cf769b1fc0bb90a01d537ced7de8b5aa133f6eb->leave($__internal_fbfa1b17b9fbe4b6706774648cf769b1fc0bb90a01d537ced7de8b5aa133f6eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
