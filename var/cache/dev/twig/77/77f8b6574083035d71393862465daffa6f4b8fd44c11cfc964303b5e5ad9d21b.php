<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_338371db4c27cfa19c34090014fde2aa4ca37e38064aca39dc8ea9d8ac6159db extends Twig_Template
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
        $__internal_78d7b5619910ac9d83fb3656290473e7a33beef53b1ea2c73c4de371e8484524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d7b5619910ac9d83fb3656290473e7a33beef53b1ea2c73c4de371e8484524->enter($__internal_78d7b5619910ac9d83fb3656290473e7a33beef53b1ea2c73c4de371e8484524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_38379d6b24f10b3352b1ac1fa7ccc62805fd2dde458247a8ffe746d5c3662efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38379d6b24f10b3352b1ac1fa7ccc62805fd2dde458247a8ffe746d5c3662efb->enter($__internal_38379d6b24f10b3352b1ac1fa7ccc62805fd2dde458247a8ffe746d5c3662efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_78d7b5619910ac9d83fb3656290473e7a33beef53b1ea2c73c4de371e8484524->leave($__internal_78d7b5619910ac9d83fb3656290473e7a33beef53b1ea2c73c4de371e8484524_prof);

        
        $__internal_38379d6b24f10b3352b1ac1fa7ccc62805fd2dde458247a8ffe746d5c3662efb->leave($__internal_38379d6b24f10b3352b1ac1fa7ccc62805fd2dde458247a8ffe746d5c3662efb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
