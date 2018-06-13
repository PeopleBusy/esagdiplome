<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_926fbb00248281e39f564c1f0f3685e3462ec1858d60d486dd7366fd7e2a204c extends Twig_Template
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
        $__internal_f3995a3f40d77319be35f6514f595d9fb7e49395f75d690abbb53c84e22a2148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3995a3f40d77319be35f6514f595d9fb7e49395f75d690abbb53c84e22a2148->enter($__internal_f3995a3f40d77319be35f6514f595d9fb7e49395f75d690abbb53c84e22a2148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0996384742165a556f717a5de4069d0d068dbe02ee4dd302e6ef5ec0bfb471aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0996384742165a556f717a5de4069d0d068dbe02ee4dd302e6ef5ec0bfb471aa->enter($__internal_0996384742165a556f717a5de4069d0d068dbe02ee4dd302e6ef5ec0bfb471aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f3995a3f40d77319be35f6514f595d9fb7e49395f75d690abbb53c84e22a2148->leave($__internal_f3995a3f40d77319be35f6514f595d9fb7e49395f75d690abbb53c84e22a2148_prof);

        
        $__internal_0996384742165a556f717a5de4069d0d068dbe02ee4dd302e6ef5ec0bfb471aa->leave($__internal_0996384742165a556f717a5de4069d0d068dbe02ee4dd302e6ef5ec0bfb471aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
