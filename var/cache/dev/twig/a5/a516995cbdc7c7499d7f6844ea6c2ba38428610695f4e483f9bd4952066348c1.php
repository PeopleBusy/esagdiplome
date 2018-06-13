<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_03ab82daf6987a52864eb3527cd2eb3cfbaaae570d0afc2e608858f68e62eb10 extends Twig_Template
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
        $__internal_e2a263d5bf8ff374b983d3c54ba6003f6c0fd08451baec457180847242ff0f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a263d5bf8ff374b983d3c54ba6003f6c0fd08451baec457180847242ff0f18->enter($__internal_e2a263d5bf8ff374b983d3c54ba6003f6c0fd08451baec457180847242ff0f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_20e078f635bb26d0e5d23602d47f9c39fe28ae41a1ea37ae7b1a4949109370c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e078f635bb26d0e5d23602d47f9c39fe28ae41a1ea37ae7b1a4949109370c9->enter($__internal_20e078f635bb26d0e5d23602d47f9c39fe28ae41a1ea37ae7b1a4949109370c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e2a263d5bf8ff374b983d3c54ba6003f6c0fd08451baec457180847242ff0f18->leave($__internal_e2a263d5bf8ff374b983d3c54ba6003f6c0fd08451baec457180847242ff0f18_prof);

        
        $__internal_20e078f635bb26d0e5d23602d47f9c39fe28ae41a1ea37ae7b1a4949109370c9->leave($__internal_20e078f635bb26d0e5d23602d47f9c39fe28ae41a1ea37ae7b1a4949109370c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
