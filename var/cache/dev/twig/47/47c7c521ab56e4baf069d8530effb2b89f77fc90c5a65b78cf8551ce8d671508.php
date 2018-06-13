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
        $__internal_cf2e5dfee04fde3499747ee9982328017d2d233c36e584012399f3295dbdb54c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2e5dfee04fde3499747ee9982328017d2d233c36e584012399f3295dbdb54c->enter($__internal_cf2e5dfee04fde3499747ee9982328017d2d233c36e584012399f3295dbdb54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ba107c4867679285d2e4f70f0f1fc658b6f1129f7f49e61aa87b150444a15faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba107c4867679285d2e4f70f0f1fc658b6f1129f7f49e61aa87b150444a15faa->enter($__internal_ba107c4867679285d2e4f70f0f1fc658b6f1129f7f49e61aa87b150444a15faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cf2e5dfee04fde3499747ee9982328017d2d233c36e584012399f3295dbdb54c->leave($__internal_cf2e5dfee04fde3499747ee9982328017d2d233c36e584012399f3295dbdb54c_prof);

        
        $__internal_ba107c4867679285d2e4f70f0f1fc658b6f1129f7f49e61aa87b150444a15faa->leave($__internal_ba107c4867679285d2e4f70f0f1fc658b6f1129f7f49e61aa87b150444a15faa_prof);

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
", "@Framework/Form/form_rest.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
