<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_433a0e3680e62b94df4dfe5afe81fc00f90e47ec8ca3f3ecc0c08a53cfdb9dcd extends Twig_Template
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
        $__internal_32fbc4c9aeceaf4f6f8f039951baabb3f47fd2b2b46e9bcc7b768f5230595bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fbc4c9aeceaf4f6f8f039951baabb3f47fd2b2b46e9bcc7b768f5230595bdd->enter($__internal_32fbc4c9aeceaf4f6f8f039951baabb3f47fd2b2b46e9bcc7b768f5230595bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2e7487cdf0d7464e4576573683e2e02b4733422833150281d68d3a54fc79be50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7487cdf0d7464e4576573683e2e02b4733422833150281d68d3a54fc79be50->enter($__internal_2e7487cdf0d7464e4576573683e2e02b4733422833150281d68d3a54fc79be50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_32fbc4c9aeceaf4f6f8f039951baabb3f47fd2b2b46e9bcc7b768f5230595bdd->leave($__internal_32fbc4c9aeceaf4f6f8f039951baabb3f47fd2b2b46e9bcc7b768f5230595bdd_prof);

        
        $__internal_2e7487cdf0d7464e4576573683e2e02b4733422833150281d68d3a54fc79be50->leave($__internal_2e7487cdf0d7464e4576573683e2e02b4733422833150281d68d3a54fc79be50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
