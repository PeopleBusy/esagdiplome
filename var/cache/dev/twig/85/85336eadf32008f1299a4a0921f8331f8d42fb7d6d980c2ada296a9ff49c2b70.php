<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_db663a5662a1c9496c4abaf38ede1f99b0e50d78cab880c95d5711585e7b86a0 extends Twig_Template
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
        $__internal_4775de11d5d1d3941de8e0c7638a66b874d22d1e3d870dfc5c0c501c8a789d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4775de11d5d1d3941de8e0c7638a66b874d22d1e3d870dfc5c0c501c8a789d41->enter($__internal_4775de11d5d1d3941de8e0c7638a66b874d22d1e3d870dfc5c0c501c8a789d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_0be45f8b74b847d67505a7ab731118682044ac00396ae89173a687d48eb11120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be45f8b74b847d67505a7ab731118682044ac00396ae89173a687d48eb11120->enter($__internal_0be45f8b74b847d67505a7ab731118682044ac00396ae89173a687d48eb11120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4775de11d5d1d3941de8e0c7638a66b874d22d1e3d870dfc5c0c501c8a789d41->leave($__internal_4775de11d5d1d3941de8e0c7638a66b874d22d1e3d870dfc5c0c501c8a789d41_prof);

        
        $__internal_0be45f8b74b847d67505a7ab731118682044ac00396ae89173a687d48eb11120->leave($__internal_0be45f8b74b847d67505a7ab731118682044ac00396ae89173a687d48eb11120_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
