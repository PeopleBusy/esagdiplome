<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_52ad76c648a9958bdc7653adca52cc45ccc18f3cbc293e8bccfbfa4bfdf24e16 extends Twig_Template
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
        $__internal_bbbf00877135f6fc7f6584d8b9c3b19836382d65c11e702748b09a66a0d4076b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbbf00877135f6fc7f6584d8b9c3b19836382d65c11e702748b09a66a0d4076b->enter($__internal_bbbf00877135f6fc7f6584d8b9c3b19836382d65c11e702748b09a66a0d4076b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_101f21f4aba1372f7cc196582af6cc44506deeb1fe6bcd76e8e010186eaf0844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101f21f4aba1372f7cc196582af6cc44506deeb1fe6bcd76e8e010186eaf0844->enter($__internal_101f21f4aba1372f7cc196582af6cc44506deeb1fe6bcd76e8e010186eaf0844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_bbbf00877135f6fc7f6584d8b9c3b19836382d65c11e702748b09a66a0d4076b->leave($__internal_bbbf00877135f6fc7f6584d8b9c3b19836382d65c11e702748b09a66a0d4076b_prof);

        
        $__internal_101f21f4aba1372f7cc196582af6cc44506deeb1fe6bcd76e8e010186eaf0844->leave($__internal_101f21f4aba1372f7cc196582af6cc44506deeb1fe6bcd76e8e010186eaf0844_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
