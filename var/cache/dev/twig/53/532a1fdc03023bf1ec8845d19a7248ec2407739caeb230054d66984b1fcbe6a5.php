<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_2f8f2499aa3c855571913f9d8c0d2a7ae1ebd5ad7e2fc89af69b2e5e95fb02b0 extends Twig_Template
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
        $__internal_a496a2139fafb52fbb276d576e096f5b395acb2003302babfa19fff799fd1fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a496a2139fafb52fbb276d576e096f5b395acb2003302babfa19fff799fd1fd5->enter($__internal_a496a2139fafb52fbb276d576e096f5b395acb2003302babfa19fff799fd1fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_628e00b17ea8b7875de6934e6a30e9a75a74e8eb3652cb8a8eb26976260528ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628e00b17ea8b7875de6934e6a30e9a75a74e8eb3652cb8a8eb26976260528ce->enter($__internal_628e00b17ea8b7875de6934e6a30e9a75a74e8eb3652cb8a8eb26976260528ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a496a2139fafb52fbb276d576e096f5b395acb2003302babfa19fff799fd1fd5->leave($__internal_a496a2139fafb52fbb276d576e096f5b395acb2003302babfa19fff799fd1fd5_prof);

        
        $__internal_628e00b17ea8b7875de6934e6a30e9a75a74e8eb3652cb8a8eb26976260528ce->leave($__internal_628e00b17ea8b7875de6934e6a30e9a75a74e8eb3652cb8a8eb26976260528ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
