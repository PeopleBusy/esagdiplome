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
        $__internal_e31d6c94645f4880f1160daea6aca06b23b24994182298881322f23b5318dda8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e31d6c94645f4880f1160daea6aca06b23b24994182298881322f23b5318dda8->enter($__internal_e31d6c94645f4880f1160daea6aca06b23b24994182298881322f23b5318dda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_9a2a8906b79a4195c2c0d1d6e509f96c5aa9d190309fc1505b13f2f35ea18e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2a8906b79a4195c2c0d1d6e509f96c5aa9d190309fc1505b13f2f35ea18e0b->enter($__internal_9a2a8906b79a4195c2c0d1d6e509f96c5aa9d190309fc1505b13f2f35ea18e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e31d6c94645f4880f1160daea6aca06b23b24994182298881322f23b5318dda8->leave($__internal_e31d6c94645f4880f1160daea6aca06b23b24994182298881322f23b5318dda8_prof);

        
        $__internal_9a2a8906b79a4195c2c0d1d6e509f96c5aa9d190309fc1505b13f2f35ea18e0b->leave($__internal_9a2a8906b79a4195c2c0d1d6e509f96c5aa9d190309fc1505b13f2f35ea18e0b_prof);

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
", "@Framework/Form/number_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}