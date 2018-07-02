<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_af889d545eabaee974ca97a2921d7f1f5f87d85e2abaaa2900458f1a5129844b extends Twig_Template
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
        $__internal_d292085476dfb53b33fb6b00c41b8bfac3f4bf510321a1623daf0c36ac938acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d292085476dfb53b33fb6b00c41b8bfac3f4bf510321a1623daf0c36ac938acd->enter($__internal_d292085476dfb53b33fb6b00c41b8bfac3f4bf510321a1623daf0c36ac938acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_61574a01764003c22e57ecc25f077711d239c2dec2b45237f637e2e55b5acb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61574a01764003c22e57ecc25f077711d239c2dec2b45237f637e2e55b5acb43->enter($__internal_61574a01764003c22e57ecc25f077711d239c2dec2b45237f637e2e55b5acb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d292085476dfb53b33fb6b00c41b8bfac3f4bf510321a1623daf0c36ac938acd->leave($__internal_d292085476dfb53b33fb6b00c41b8bfac3f4bf510321a1623daf0c36ac938acd_prof);

        
        $__internal_61574a01764003c22e57ecc25f077711d239c2dec2b45237f637e2e55b5acb43->leave($__internal_61574a01764003c22e57ecc25f077711d239c2dec2b45237f637e2e55b5acb43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
