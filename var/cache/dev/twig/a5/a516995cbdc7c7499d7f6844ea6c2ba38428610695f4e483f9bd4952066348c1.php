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
        $__internal_b761ac7c6802fce349a99597922423715a5cb7ad469ef383ab51664b257a84f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b761ac7c6802fce349a99597922423715a5cb7ad469ef383ab51664b257a84f7->enter($__internal_b761ac7c6802fce349a99597922423715a5cb7ad469ef383ab51664b257a84f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_38753ff2fd6766f4433d86abc874b6b63c4f8ad7b053444360c10a1120a3eec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38753ff2fd6766f4433d86abc874b6b63c4f8ad7b053444360c10a1120a3eec7->enter($__internal_38753ff2fd6766f4433d86abc874b6b63c4f8ad7b053444360c10a1120a3eec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b761ac7c6802fce349a99597922423715a5cb7ad469ef383ab51664b257a84f7->leave($__internal_b761ac7c6802fce349a99597922423715a5cb7ad469ef383ab51664b257a84f7_prof);

        
        $__internal_38753ff2fd6766f4433d86abc874b6b63c4f8ad7b053444360c10a1120a3eec7->leave($__internal_38753ff2fd6766f4433d86abc874b6b63c4f8ad7b053444360c10a1120a3eec7_prof);

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
", "@Framework/Form/search_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
