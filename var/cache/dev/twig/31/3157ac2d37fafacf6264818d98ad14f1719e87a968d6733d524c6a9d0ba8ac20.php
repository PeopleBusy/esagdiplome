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
        $__internal_87bd8dcb477f82210f34c57281be9d260a10dd100bcdda1d5329fb53dca0c7ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bd8dcb477f82210f34c57281be9d260a10dd100bcdda1d5329fb53dca0c7ba->enter($__internal_87bd8dcb477f82210f34c57281be9d260a10dd100bcdda1d5329fb53dca0c7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b4d865d182771837d1c562356ee5ff5ddbde7df3f61f87ca84bfe7845c0c42b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d865d182771837d1c562356ee5ff5ddbde7df3f61f87ca84bfe7845c0c42b6->enter($__internal_b4d865d182771837d1c562356ee5ff5ddbde7df3f61f87ca84bfe7845c0c42b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_87bd8dcb477f82210f34c57281be9d260a10dd100bcdda1d5329fb53dca0c7ba->leave($__internal_87bd8dcb477f82210f34c57281be9d260a10dd100bcdda1d5329fb53dca0c7ba_prof);

        
        $__internal_b4d865d182771837d1c562356ee5ff5ddbde7df3f61f87ca84bfe7845c0c42b6->leave($__internal_b4d865d182771837d1c562356ee5ff5ddbde7df3f61f87ca84bfe7845c0c42b6_prof);

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
", "@Framework/Form/url_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
