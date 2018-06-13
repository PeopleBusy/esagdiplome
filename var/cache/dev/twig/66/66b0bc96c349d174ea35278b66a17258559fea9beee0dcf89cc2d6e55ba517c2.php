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
        $__internal_df8d1a35cad0450d4c4407ffc9d858a5ed0041ee048618d490d73da2f24f2bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8d1a35cad0450d4c4407ffc9d858a5ed0041ee048618d490d73da2f24f2bbc->enter($__internal_df8d1a35cad0450d4c4407ffc9d858a5ed0041ee048618d490d73da2f24f2bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f207eb9676e9dcaa904762cef51100d653a3c9a4f8ec12e2af87d2dfb69319da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f207eb9676e9dcaa904762cef51100d653a3c9a4f8ec12e2af87d2dfb69319da->enter($__internal_f207eb9676e9dcaa904762cef51100d653a3c9a4f8ec12e2af87d2dfb69319da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_df8d1a35cad0450d4c4407ffc9d858a5ed0041ee048618d490d73da2f24f2bbc->leave($__internal_df8d1a35cad0450d4c4407ffc9d858a5ed0041ee048618d490d73da2f24f2bbc_prof);

        
        $__internal_f207eb9676e9dcaa904762cef51100d653a3c9a4f8ec12e2af87d2dfb69319da->leave($__internal_f207eb9676e9dcaa904762cef51100d653a3c9a4f8ec12e2af87d2dfb69319da_prof);

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
", "@Framework/Form/container_attributes.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
