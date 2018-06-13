<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_4513df380544d002e3af11879e71043417aa023ca4a4f1a660cd5ca38d03a4e9 extends Twig_Template
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
        $__internal_384a442d4d36d6e5d85f79d96fb2d393c0f915a3b3ecad0e03ca0a4cf298360d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384a442d4d36d6e5d85f79d96fb2d393c0f915a3b3ecad0e03ca0a4cf298360d->enter($__internal_384a442d4d36d6e5d85f79d96fb2d393c0f915a3b3ecad0e03ca0a4cf298360d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_8f6fed3234767449537718472b40abe9412a0ed19683d463accc53d3bd04caa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6fed3234767449537718472b40abe9412a0ed19683d463accc53d3bd04caa4->enter($__internal_8f6fed3234767449537718472b40abe9412a0ed19683d463accc53d3bd04caa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_384a442d4d36d6e5d85f79d96fb2d393c0f915a3b3ecad0e03ca0a4cf298360d->leave($__internal_384a442d4d36d6e5d85f79d96fb2d393c0f915a3b3ecad0e03ca0a4cf298360d_prof);

        
        $__internal_8f6fed3234767449537718472b40abe9412a0ed19683d463accc53d3bd04caa4->leave($__internal_8f6fed3234767449537718472b40abe9412a0ed19683d463accc53d3bd04caa4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
