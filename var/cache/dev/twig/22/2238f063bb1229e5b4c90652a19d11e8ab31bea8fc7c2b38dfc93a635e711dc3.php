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
        $__internal_1b55187586882f67bab0c79960a9831592d1f33c5015393b3334e461b10f6796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b55187586882f67bab0c79960a9831592d1f33c5015393b3334e461b10f6796->enter($__internal_1b55187586882f67bab0c79960a9831592d1f33c5015393b3334e461b10f6796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_aca01cf2b9be67a06de88dc092f1a610e42203c6cd913b50565dec3ecd7a8ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca01cf2b9be67a06de88dc092f1a610e42203c6cd913b50565dec3ecd7a8ed5->enter($__internal_aca01cf2b9be67a06de88dc092f1a610e42203c6cd913b50565dec3ecd7a8ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1b55187586882f67bab0c79960a9831592d1f33c5015393b3334e461b10f6796->leave($__internal_1b55187586882f67bab0c79960a9831592d1f33c5015393b3334e461b10f6796_prof);

        
        $__internal_aca01cf2b9be67a06de88dc092f1a610e42203c6cd913b50565dec3ecd7a8ed5->leave($__internal_aca01cf2b9be67a06de88dc092f1a610e42203c6cd913b50565dec3ecd7a8ed5_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
