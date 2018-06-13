<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d2707ee3304d9145bc05c33462dc650cf0433754c685845192ec1b1620fce78f extends Twig_Template
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
        $__internal_a5eda4f525fb5c92a73eba5d2b5e351a9cf0195cfc41cd8b2a04615c23bb2670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5eda4f525fb5c92a73eba5d2b5e351a9cf0195cfc41cd8b2a04615c23bb2670->enter($__internal_a5eda4f525fb5c92a73eba5d2b5e351a9cf0195cfc41cd8b2a04615c23bb2670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_95a3e22f33b2975cc55d996430ea364cf1636251a5b5725b50059e54fe01f75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a3e22f33b2975cc55d996430ea364cf1636251a5b5725b50059e54fe01f75c->enter($__internal_95a3e22f33b2975cc55d996430ea364cf1636251a5b5725b50059e54fe01f75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a5eda4f525fb5c92a73eba5d2b5e351a9cf0195cfc41cd8b2a04615c23bb2670->leave($__internal_a5eda4f525fb5c92a73eba5d2b5e351a9cf0195cfc41cd8b2a04615c23bb2670_prof);

        
        $__internal_95a3e22f33b2975cc55d996430ea364cf1636251a5b5725b50059e54fe01f75c->leave($__internal_95a3e22f33b2975cc55d996430ea364cf1636251a5b5725b50059e54fe01f75c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
