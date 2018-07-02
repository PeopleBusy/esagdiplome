<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_546e3417c4245744cdf89eeafd3049914faf151e2d21b951528161a08f472951 extends Twig_Template
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
        $__internal_a5b1a1fa73e51a20356b5c2b94417a1dc8264e579801d3243a3bb43f51059466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b1a1fa73e51a20356b5c2b94417a1dc8264e579801d3243a3bb43f51059466->enter($__internal_a5b1a1fa73e51a20356b5c2b94417a1dc8264e579801d3243a3bb43f51059466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_5760779556daccda136631b902a7c15ee499c5f0af16b0c1ed05ec23ca2489fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5760779556daccda136631b902a7c15ee499c5f0af16b0c1ed05ec23ca2489fb->enter($__internal_5760779556daccda136631b902a7c15ee499c5f0af16b0c1ed05ec23ca2489fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a5b1a1fa73e51a20356b5c2b94417a1dc8264e579801d3243a3bb43f51059466->leave($__internal_a5b1a1fa73e51a20356b5c2b94417a1dc8264e579801d3243a3bb43f51059466_prof);

        
        $__internal_5760779556daccda136631b902a7c15ee499c5f0af16b0c1ed05ec23ca2489fb->leave($__internal_5760779556daccda136631b902a7c15ee499c5f0af16b0c1ed05ec23ca2489fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
