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
        $__internal_e8d2044213f92d3a4b38634f4b4779d1e20bd62bc1eb6963ba5d559b3ccb7708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d2044213f92d3a4b38634f4b4779d1e20bd62bc1eb6963ba5d559b3ccb7708->enter($__internal_e8d2044213f92d3a4b38634f4b4779d1e20bd62bc1eb6963ba5d559b3ccb7708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4b2e65bbd90b135440dc336fbb8e6834dbb2f5f124b928a91a40aed7952bb12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2e65bbd90b135440dc336fbb8e6834dbb2f5f124b928a91a40aed7952bb12b->enter($__internal_4b2e65bbd90b135440dc336fbb8e6834dbb2f5f124b928a91a40aed7952bb12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e8d2044213f92d3a4b38634f4b4779d1e20bd62bc1eb6963ba5d559b3ccb7708->leave($__internal_e8d2044213f92d3a4b38634f4b4779d1e20bd62bc1eb6963ba5d559b3ccb7708_prof);

        
        $__internal_4b2e65bbd90b135440dc336fbb8e6834dbb2f5f124b928a91a40aed7952bb12b->leave($__internal_4b2e65bbd90b135440dc336fbb8e6834dbb2f5f124b928a91a40aed7952bb12b_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
