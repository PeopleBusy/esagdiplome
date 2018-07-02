<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_95d45569f269284775ac3ce651b5c9a1a3aed8b575d3ff48dc9e6620c9c2df97 extends Twig_Template
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
        $__internal_0d4a7aa21efd558384ae7b1f44fdbf111b1ecac51a1944b38938e74e46e8dbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4a7aa21efd558384ae7b1f44fdbf111b1ecac51a1944b38938e74e46e8dbb4->enter($__internal_0d4a7aa21efd558384ae7b1f44fdbf111b1ecac51a1944b38938e74e46e8dbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3abdb0a8595931a776a9301fee670750026cd9dc1e250905b0856cf2e7108e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abdb0a8595931a776a9301fee670750026cd9dc1e250905b0856cf2e7108e0f->enter($__internal_3abdb0a8595931a776a9301fee670750026cd9dc1e250905b0856cf2e7108e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0d4a7aa21efd558384ae7b1f44fdbf111b1ecac51a1944b38938e74e46e8dbb4->leave($__internal_0d4a7aa21efd558384ae7b1f44fdbf111b1ecac51a1944b38938e74e46e8dbb4_prof);

        
        $__internal_3abdb0a8595931a776a9301fee670750026cd9dc1e250905b0856cf2e7108e0f->leave($__internal_3abdb0a8595931a776a9301fee670750026cd9dc1e250905b0856cf2e7108e0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
