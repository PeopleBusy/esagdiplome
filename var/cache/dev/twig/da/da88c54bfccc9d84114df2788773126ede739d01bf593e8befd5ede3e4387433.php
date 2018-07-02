<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_bcacbd06ab1a4d61c3f944a0aa04ff4574e47e46a50102e1229b69e4d6ff4177 extends Twig_Template
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
        $__internal_38addac81cecf7e46fc1d6a39d9fa1395fd194c99bbc2f5f6263a2b0189f8c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38addac81cecf7e46fc1d6a39d9fa1395fd194c99bbc2f5f6263a2b0189f8c96->enter($__internal_38addac81cecf7e46fc1d6a39d9fa1395fd194c99bbc2f5f6263a2b0189f8c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_52ad5052bcb00976faa6f2e012a768b6bca5e83cd345fc0124db51923a78c1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ad5052bcb00976faa6f2e012a768b6bca5e83cd345fc0124db51923a78c1fb->enter($__internal_52ad5052bcb00976faa6f2e012a768b6bca5e83cd345fc0124db51923a78c1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_38addac81cecf7e46fc1d6a39d9fa1395fd194c99bbc2f5f6263a2b0189f8c96->leave($__internal_38addac81cecf7e46fc1d6a39d9fa1395fd194c99bbc2f5f6263a2b0189f8c96_prof);

        
        $__internal_52ad5052bcb00976faa6f2e012a768b6bca5e83cd345fc0124db51923a78c1fb->leave($__internal_52ad5052bcb00976faa6f2e012a768b6bca5e83cd345fc0124db51923a78c1fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
