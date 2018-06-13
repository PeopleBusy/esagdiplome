<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c763e67be7fccde35334e51315fa2877b78ce320cfaa5dd01ba453cc8c185ced extends Twig_Template
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
        $__internal_5814225e6568daaedaaa50eaa10e6a3d586e1db193115efa3d9dc910ecda7b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5814225e6568daaedaaa50eaa10e6a3d586e1db193115efa3d9dc910ecda7b99->enter($__internal_5814225e6568daaedaaa50eaa10e6a3d586e1db193115efa3d9dc910ecda7b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_4385b69efb6571c578f312ea35b9f9f00caf87e33ef06aaf082c8edcf8474b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4385b69efb6571c578f312ea35b9f9f00caf87e33ef06aaf082c8edcf8474b83->enter($__internal_4385b69efb6571c578f312ea35b9f9f00caf87e33ef06aaf082c8edcf8474b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5814225e6568daaedaaa50eaa10e6a3d586e1db193115efa3d9dc910ecda7b99->leave($__internal_5814225e6568daaedaaa50eaa10e6a3d586e1db193115efa3d9dc910ecda7b99_prof);

        
        $__internal_4385b69efb6571c578f312ea35b9f9f00caf87e33ef06aaf082c8edcf8474b83->leave($__internal_4385b69efb6571c578f312ea35b9f9f00caf87e33ef06aaf082c8edcf8474b83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
