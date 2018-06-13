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
        $__internal_6a6ad55fe4f3f2da51e957151558390fd61d79456ae02cbf7a8bfd3ad5611f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6ad55fe4f3f2da51e957151558390fd61d79456ae02cbf7a8bfd3ad5611f83->enter($__internal_6a6ad55fe4f3f2da51e957151558390fd61d79456ae02cbf7a8bfd3ad5611f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f359a69f1e2ac54ba172ad598ea873f650c2b9f24f3cc4d0402cd21cfb62a139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f359a69f1e2ac54ba172ad598ea873f650c2b9f24f3cc4d0402cd21cfb62a139->enter($__internal_f359a69f1e2ac54ba172ad598ea873f650c2b9f24f3cc4d0402cd21cfb62a139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6a6ad55fe4f3f2da51e957151558390fd61d79456ae02cbf7a8bfd3ad5611f83->leave($__internal_6a6ad55fe4f3f2da51e957151558390fd61d79456ae02cbf7a8bfd3ad5611f83_prof);

        
        $__internal_f359a69f1e2ac54ba172ad598ea873f650c2b9f24f3cc4d0402cd21cfb62a139->leave($__internal_f359a69f1e2ac54ba172ad598ea873f650c2b9f24f3cc4d0402cd21cfb62a139_prof);

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
", "@Framework/Form/widget_attributes.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
