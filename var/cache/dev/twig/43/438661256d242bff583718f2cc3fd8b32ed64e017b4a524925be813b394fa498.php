<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5f5cf5198b10aeff219f8ae705c3a4dee7751d68ba75e3282f5858ace22c7fa4 extends Twig_Template
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
        $__internal_2f4532ff197365ea333058d76b3100e06989ef42db9f381f23ebb67232f1a242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f4532ff197365ea333058d76b3100e06989ef42db9f381f23ebb67232f1a242->enter($__internal_2f4532ff197365ea333058d76b3100e06989ef42db9f381f23ebb67232f1a242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_fcdf0a56f0709e69cbb41b61cc523ce06603c5e98e076c403f77fd700ff97c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcdf0a56f0709e69cbb41b61cc523ce06603c5e98e076c403f77fd700ff97c7b->enter($__internal_fcdf0a56f0709e69cbb41b61cc523ce06603c5e98e076c403f77fd700ff97c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2f4532ff197365ea333058d76b3100e06989ef42db9f381f23ebb67232f1a242->leave($__internal_2f4532ff197365ea333058d76b3100e06989ef42db9f381f23ebb67232f1a242_prof);

        
        $__internal_fcdf0a56f0709e69cbb41b61cc523ce06603c5e98e076c403f77fd700ff97c7b->leave($__internal_fcdf0a56f0709e69cbb41b61cc523ce06603c5e98e076c403f77fd700ff97c7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
