<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_126d6f108d564b9d9b8cdd700afd57f9c002cda8220541c4ceb44537068e5775 extends Twig_Template
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
        $__internal_2ff9eaa9f260f04c32b22e1f3f59c72b312fd05b09c2b255a3f80c392e713cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff9eaa9f260f04c32b22e1f3f59c72b312fd05b09c2b255a3f80c392e713cef->enter($__internal_2ff9eaa9f260f04c32b22e1f3f59c72b312fd05b09c2b255a3f80c392e713cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d384248972fdb5e30464e8f842bc0592dd206c41c21b8da2aac76d703dcc62bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d384248972fdb5e30464e8f842bc0592dd206c41c21b8da2aac76d703dcc62bb->enter($__internal_d384248972fdb5e30464e8f842bc0592dd206c41c21b8da2aac76d703dcc62bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_2ff9eaa9f260f04c32b22e1f3f59c72b312fd05b09c2b255a3f80c392e713cef->leave($__internal_2ff9eaa9f260f04c32b22e1f3f59c72b312fd05b09c2b255a3f80c392e713cef_prof);

        
        $__internal_d384248972fdb5e30464e8f842bc0592dd206c41c21b8da2aac76d703dcc62bb->leave($__internal_d384248972fdb5e30464e8f842bc0592dd206c41c21b8da2aac76d703dcc62bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
