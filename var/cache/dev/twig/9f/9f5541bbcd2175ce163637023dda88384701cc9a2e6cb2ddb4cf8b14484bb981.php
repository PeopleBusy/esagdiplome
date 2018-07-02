<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_926fbb00248281e39f564c1f0f3685e3462ec1858d60d486dd7366fd7e2a204c extends Twig_Template
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
        $__internal_466bc8aa6e3ba67c35794cc7c7de5f343ce81aa6495419396bb64f251d1f7dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466bc8aa6e3ba67c35794cc7c7de5f343ce81aa6495419396bb64f251d1f7dd6->enter($__internal_466bc8aa6e3ba67c35794cc7c7de5f343ce81aa6495419396bb64f251d1f7dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0ef1ef7f58a9fba9e24df2f6a5fbd40c9135218e1469990ee3e3763576a664fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef1ef7f58a9fba9e24df2f6a5fbd40c9135218e1469990ee3e3763576a664fd->enter($__internal_0ef1ef7f58a9fba9e24df2f6a5fbd40c9135218e1469990ee3e3763576a664fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_466bc8aa6e3ba67c35794cc7c7de5f343ce81aa6495419396bb64f251d1f7dd6->leave($__internal_466bc8aa6e3ba67c35794cc7c7de5f343ce81aa6495419396bb64f251d1f7dd6_prof);

        
        $__internal_0ef1ef7f58a9fba9e24df2f6a5fbd40c9135218e1469990ee3e3763576a664fd->leave($__internal_0ef1ef7f58a9fba9e24df2f6a5fbd40c9135218e1469990ee3e3763576a664fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
