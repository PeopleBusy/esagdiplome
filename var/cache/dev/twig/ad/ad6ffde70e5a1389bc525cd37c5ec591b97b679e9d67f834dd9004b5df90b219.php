<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_cabc05a51f4adde61756c081b45d2ebe99cb6996522d64cbd1c1f51947768601 extends Twig_Template
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
        $__internal_45b6ce15182fbdff603d903f641ba4684101612345308b200c35d2a1b56ab782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45b6ce15182fbdff603d903f641ba4684101612345308b200c35d2a1b56ab782->enter($__internal_45b6ce15182fbdff603d903f641ba4684101612345308b200c35d2a1b56ab782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_557d9a65d6c5d82bf5404a2ebf99e52f06b6c89420126bb30e9eefbba6260f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557d9a65d6c5d82bf5404a2ebf99e52f06b6c89420126bb30e9eefbba6260f38->enter($__internal_557d9a65d6c5d82bf5404a2ebf99e52f06b6c89420126bb30e9eefbba6260f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_45b6ce15182fbdff603d903f641ba4684101612345308b200c35d2a1b56ab782->leave($__internal_45b6ce15182fbdff603d903f641ba4684101612345308b200c35d2a1b56ab782_prof);

        
        $__internal_557d9a65d6c5d82bf5404a2ebf99e52f06b6c89420126bb30e9eefbba6260f38->leave($__internal_557d9a65d6c5d82bf5404a2ebf99e52f06b6c89420126bb30e9eefbba6260f38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
