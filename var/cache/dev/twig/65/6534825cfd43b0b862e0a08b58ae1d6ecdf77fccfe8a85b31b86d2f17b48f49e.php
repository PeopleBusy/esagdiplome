<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8ebd332e3a254704278c400cbf5ee4b34bed56e5da51e300078366e241c542af extends Twig_Template
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
        $__internal_990879908f0624350c0d5b0a02c7d0d1b03a5e6fa0686e7cab064a29683f9be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990879908f0624350c0d5b0a02c7d0d1b03a5e6fa0686e7cab064a29683f9be3->enter($__internal_990879908f0624350c0d5b0a02c7d0d1b03a5e6fa0686e7cab064a29683f9be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6dad6a0aff0b0aaa5f98020aae1eb9b68ad34e3e2a819ccc87e1b42f78e02eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dad6a0aff0b0aaa5f98020aae1eb9b68ad34e3e2a819ccc87e1b42f78e02eb7->enter($__internal_6dad6a0aff0b0aaa5f98020aae1eb9b68ad34e3e2a819ccc87e1b42f78e02eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_990879908f0624350c0d5b0a02c7d0d1b03a5e6fa0686e7cab064a29683f9be3->leave($__internal_990879908f0624350c0d5b0a02c7d0d1b03a5e6fa0686e7cab064a29683f9be3_prof);

        
        $__internal_6dad6a0aff0b0aaa5f98020aae1eb9b68ad34e3e2a819ccc87e1b42f78e02eb7->leave($__internal_6dad6a0aff0b0aaa5f98020aae1eb9b68ad34e3e2a819ccc87e1b42f78e02eb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
