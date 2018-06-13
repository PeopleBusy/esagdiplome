<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_f6f0452f9db8aeb3b08a49d84b8e668abf58d9f5205b38d8faf888dffe174f74 extends Twig_Template
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
        $__internal_218291cfd7f21e56e6526264b626d10686e86e9273f9abf6a41af499efb07b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218291cfd7f21e56e6526264b626d10686e86e9273f9abf6a41af499efb07b53->enter($__internal_218291cfd7f21e56e6526264b626d10686e86e9273f9abf6a41af499efb07b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_30ff413e79a9cf5fe418d5b79fdc781b098326b6c609875c1e79010e2e710fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ff413e79a9cf5fe418d5b79fdc781b098326b6c609875c1e79010e2e710fc6->enter($__internal_30ff413e79a9cf5fe418d5b79fdc781b098326b6c609875c1e79010e2e710fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_218291cfd7f21e56e6526264b626d10686e86e9273f9abf6a41af499efb07b53->leave($__internal_218291cfd7f21e56e6526264b626d10686e86e9273f9abf6a41af499efb07b53_prof);

        
        $__internal_30ff413e79a9cf5fe418d5b79fdc781b098326b6c609875c1e79010e2e710fc6->leave($__internal_30ff413e79a9cf5fe418d5b79fdc781b098326b6c609875c1e79010e2e710fc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
