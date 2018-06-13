<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e9a2f8da40e319aee86a8b78cb8dddc95f97fe67a2045f1bb7e811209ece971a extends Twig_Template
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
        $__internal_e29a9e9308313ae64d9ae418e0d76f5d5597518f7e5689acb46ceb6303d5cae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29a9e9308313ae64d9ae418e0d76f5d5597518f7e5689acb46ceb6303d5cae5->enter($__internal_e29a9e9308313ae64d9ae418e0d76f5d5597518f7e5689acb46ceb6303d5cae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5f14251994276266cdafee86e079ceb721771fb8058d1f39c12d3014db642085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f14251994276266cdafee86e079ceb721771fb8058d1f39c12d3014db642085->enter($__internal_5f14251994276266cdafee86e079ceb721771fb8058d1f39c12d3014db642085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e29a9e9308313ae64d9ae418e0d76f5d5597518f7e5689acb46ceb6303d5cae5->leave($__internal_e29a9e9308313ae64d9ae418e0d76f5d5597518f7e5689acb46ceb6303d5cae5_prof);

        
        $__internal_5f14251994276266cdafee86e079ceb721771fb8058d1f39c12d3014db642085->leave($__internal_5f14251994276266cdafee86e079ceb721771fb8058d1f39c12d3014db642085_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
