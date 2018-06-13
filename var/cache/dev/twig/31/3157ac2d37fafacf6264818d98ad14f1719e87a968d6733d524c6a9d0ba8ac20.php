<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_15fa605dca1f8dfa058cbb0f42d0d0f799bc7f1b13471a84c75cd0b5ffc6e565 extends Twig_Template
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
        $__internal_b8701d66d99887771e11055533776b72347737c5d994ff714a1d0a874adcbaf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8701d66d99887771e11055533776b72347737c5d994ff714a1d0a874adcbaf7->enter($__internal_b8701d66d99887771e11055533776b72347737c5d994ff714a1d0a874adcbaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_16e49c12e91258b6162fa20f6b17a9245acc686bf90643ee4a773a3d3c220ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e49c12e91258b6162fa20f6b17a9245acc686bf90643ee4a773a3d3c220ec7->enter($__internal_16e49c12e91258b6162fa20f6b17a9245acc686bf90643ee4a773a3d3c220ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b8701d66d99887771e11055533776b72347737c5d994ff714a1d0a874adcbaf7->leave($__internal_b8701d66d99887771e11055533776b72347737c5d994ff714a1d0a874adcbaf7_prof);

        
        $__internal_16e49c12e91258b6162fa20f6b17a9245acc686bf90643ee4a773a3d3c220ec7->leave($__internal_16e49c12e91258b6162fa20f6b17a9245acc686bf90643ee4a773a3d3c220ec7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
