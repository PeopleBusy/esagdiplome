<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5c2e3e34ba69b993b9120b13741509502ac9547ff8b1c64c34053ae847af5eea extends Twig_Template
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
        $__internal_5b06bfad8a632a4a7cdf141064b98778fcf2492c0082423bf7478e4c58f30070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b06bfad8a632a4a7cdf141064b98778fcf2492c0082423bf7478e4c58f30070->enter($__internal_5b06bfad8a632a4a7cdf141064b98778fcf2492c0082423bf7478e4c58f30070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_23cd01fc1e7f700dfb34522c3c43426eec91469eee22d298c641ef1afa62f9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cd01fc1e7f700dfb34522c3c43426eec91469eee22d298c641ef1afa62f9c2->enter($__internal_23cd01fc1e7f700dfb34522c3c43426eec91469eee22d298c641ef1afa62f9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5b06bfad8a632a4a7cdf141064b98778fcf2492c0082423bf7478e4c58f30070->leave($__internal_5b06bfad8a632a4a7cdf141064b98778fcf2492c0082423bf7478e4c58f30070_prof);

        
        $__internal_23cd01fc1e7f700dfb34522c3c43426eec91469eee22d298c641ef1afa62f9c2->leave($__internal_23cd01fc1e7f700dfb34522c3c43426eec91469eee22d298c641ef1afa62f9c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
