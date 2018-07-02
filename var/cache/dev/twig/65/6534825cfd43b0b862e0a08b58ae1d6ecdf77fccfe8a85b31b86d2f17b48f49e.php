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
        $__internal_301019a80e13fa63bde82fba04e6866bad908ea2d4226d2e5e0183bfbc8c80b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301019a80e13fa63bde82fba04e6866bad908ea2d4226d2e5e0183bfbc8c80b4->enter($__internal_301019a80e13fa63bde82fba04e6866bad908ea2d4226d2e5e0183bfbc8c80b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_fe0a97c9451ef070211fa9cc754a06bbc39e56a10ec90b2a0e1ea2dcea504ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0a97c9451ef070211fa9cc754a06bbc39e56a10ec90b2a0e1ea2dcea504ead->enter($__internal_fe0a97c9451ef070211fa9cc754a06bbc39e56a10ec90b2a0e1ea2dcea504ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_301019a80e13fa63bde82fba04e6866bad908ea2d4226d2e5e0183bfbc8c80b4->leave($__internal_301019a80e13fa63bde82fba04e6866bad908ea2d4226d2e5e0183bfbc8c80b4_prof);

        
        $__internal_fe0a97c9451ef070211fa9cc754a06bbc39e56a10ec90b2a0e1ea2dcea504ead->leave($__internal_fe0a97c9451ef070211fa9cc754a06bbc39e56a10ec90b2a0e1ea2dcea504ead_prof);

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
", "@Framework/Form/email_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
