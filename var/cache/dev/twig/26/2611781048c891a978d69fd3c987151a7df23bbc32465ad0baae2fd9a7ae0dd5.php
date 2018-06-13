<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_349e2de801df98270fecfa0898cbf7019486a3b3a05b2d17750b577b74666353 extends Twig_Template
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
        $__internal_625813106a8d6485a50874428c2aba60c9435015b8246acc1a4e0470533b0de9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625813106a8d6485a50874428c2aba60c9435015b8246acc1a4e0470533b0de9->enter($__internal_625813106a8d6485a50874428c2aba60c9435015b8246acc1a4e0470533b0de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2f3762335ddd4f771a246e8b2b849c48028307a1f5752ef2dac320579f74943d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3762335ddd4f771a246e8b2b849c48028307a1f5752ef2dac320579f74943d->enter($__internal_2f3762335ddd4f771a246e8b2b849c48028307a1f5752ef2dac320579f74943d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_625813106a8d6485a50874428c2aba60c9435015b8246acc1a4e0470533b0de9->leave($__internal_625813106a8d6485a50874428c2aba60c9435015b8246acc1a4e0470533b0de9_prof);

        
        $__internal_2f3762335ddd4f771a246e8b2b849c48028307a1f5752ef2dac320579f74943d->leave($__internal_2f3762335ddd4f771a246e8b2b849c48028307a1f5752ef2dac320579f74943d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
