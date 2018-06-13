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
        $__internal_cb60bc33d7487c2150be9252551e1d25869f8e6f0e34033f40fb04f244ac2f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb60bc33d7487c2150be9252551e1d25869f8e6f0e34033f40fb04f244ac2f78->enter($__internal_cb60bc33d7487c2150be9252551e1d25869f8e6f0e34033f40fb04f244ac2f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_68dc103114c17bf348ed5122014709df5cf5eb48044c11c8552f10a476343fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dc103114c17bf348ed5122014709df5cf5eb48044c11c8552f10a476343fe7->enter($__internal_68dc103114c17bf348ed5122014709df5cf5eb48044c11c8552f10a476343fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cb60bc33d7487c2150be9252551e1d25869f8e6f0e34033f40fb04f244ac2f78->leave($__internal_cb60bc33d7487c2150be9252551e1d25869f8e6f0e34033f40fb04f244ac2f78_prof);

        
        $__internal_68dc103114c17bf348ed5122014709df5cf5eb48044c11c8552f10a476343fe7->leave($__internal_68dc103114c17bf348ed5122014709df5cf5eb48044c11c8552f10a476343fe7_prof);

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
", "@Framework/Form/button_row.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
