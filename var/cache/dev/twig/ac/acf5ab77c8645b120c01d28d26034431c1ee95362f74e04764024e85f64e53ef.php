<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4a56297752de907b7cd3c1912aea90cf882f843ca238edc45a2ad4d4c1d11cf7 extends Twig_Template
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
        $__internal_988b1f0d8e5faaf431e6e706aaa46105c616996fdf9ba5f6fa4948e12458caa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988b1f0d8e5faaf431e6e706aaa46105c616996fdf9ba5f6fa4948e12458caa0->enter($__internal_988b1f0d8e5faaf431e6e706aaa46105c616996fdf9ba5f6fa4948e12458caa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_37a71bec924dbf43329b007e6c4a0919f916e0cf1a15bd12125f20a07c7108e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a71bec924dbf43329b007e6c4a0919f916e0cf1a15bd12125f20a07c7108e7->enter($__internal_37a71bec924dbf43329b007e6c4a0919f916e0cf1a15bd12125f20a07c7108e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_988b1f0d8e5faaf431e6e706aaa46105c616996fdf9ba5f6fa4948e12458caa0->leave($__internal_988b1f0d8e5faaf431e6e706aaa46105c616996fdf9ba5f6fa4948e12458caa0_prof);

        
        $__internal_37a71bec924dbf43329b007e6c4a0919f916e0cf1a15bd12125f20a07c7108e7->leave($__internal_37a71bec924dbf43329b007e6c4a0919f916e0cf1a15bd12125f20a07c7108e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
