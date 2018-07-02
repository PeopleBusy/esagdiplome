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
        $__internal_c05a9b38be6fb4067aca8b654363aaece7cb747f389c779a1a0236ec7eb3a6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05a9b38be6fb4067aca8b654363aaece7cb747f389c779a1a0236ec7eb3a6a3->enter($__internal_c05a9b38be6fb4067aca8b654363aaece7cb747f389c779a1a0236ec7eb3a6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_3db4c14cc76db3b772532d11b4941593fc0361c23eb024ddfb7688389d7d43bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db4c14cc76db3b772532d11b4941593fc0361c23eb024ddfb7688389d7d43bb->enter($__internal_3db4c14cc76db3b772532d11b4941593fc0361c23eb024ddfb7688389d7d43bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c05a9b38be6fb4067aca8b654363aaece7cb747f389c779a1a0236ec7eb3a6a3->leave($__internal_c05a9b38be6fb4067aca8b654363aaece7cb747f389c779a1a0236ec7eb3a6a3_prof);

        
        $__internal_3db4c14cc76db3b772532d11b4941593fc0361c23eb024ddfb7688389d7d43bb->leave($__internal_3db4c14cc76db3b772532d11b4941593fc0361c23eb024ddfb7688389d7d43bb_prof);

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
", "@Framework/Form/form.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
