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
        $__internal_9b7a9ba4d69a957b6187a95b1449f4a66b4abb07304140f41d53883cdfce84e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7a9ba4d69a957b6187a95b1449f4a66b4abb07304140f41d53883cdfce84e0->enter($__internal_9b7a9ba4d69a957b6187a95b1449f4a66b4abb07304140f41d53883cdfce84e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6cbcecdafd8c2cd69f33693e9586c5fd9ddc77aad336873fe68ff65e5eaa5878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbcecdafd8c2cd69f33693e9586c5fd9ddc77aad336873fe68ff65e5eaa5878->enter($__internal_6cbcecdafd8c2cd69f33693e9586c5fd9ddc77aad336873fe68ff65e5eaa5878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9b7a9ba4d69a957b6187a95b1449f4a66b4abb07304140f41d53883cdfce84e0->leave($__internal_9b7a9ba4d69a957b6187a95b1449f4a66b4abb07304140f41d53883cdfce84e0_prof);

        
        $__internal_6cbcecdafd8c2cd69f33693e9586c5fd9ddc77aad336873fe68ff65e5eaa5878->leave($__internal_6cbcecdafd8c2cd69f33693e9586c5fd9ddc77aad336873fe68ff65e5eaa5878_prof);

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
", "@Framework/Form/choice_options.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
