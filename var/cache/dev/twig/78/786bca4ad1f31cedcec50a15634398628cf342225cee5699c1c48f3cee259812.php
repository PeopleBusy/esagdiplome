<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c8ea3f8cc595842bc033dd06413db392dfd169decb1573235158ca96d63f9ba5 extends Twig_Template
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
        $__internal_1d273b2d6770efe0201eab5cf62a478117b3445b67dbcd6deea98dcaf95f5ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d273b2d6770efe0201eab5cf62a478117b3445b67dbcd6deea98dcaf95f5ae2->enter($__internal_1d273b2d6770efe0201eab5cf62a478117b3445b67dbcd6deea98dcaf95f5ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_ce684a7e104689effa17436fee6e06d41daa775c1ff6877150cbd1fb18a85ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce684a7e104689effa17436fee6e06d41daa775c1ff6877150cbd1fb18a85ec8->enter($__internal_ce684a7e104689effa17436fee6e06d41daa775c1ff6877150cbd1fb18a85ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1d273b2d6770efe0201eab5cf62a478117b3445b67dbcd6deea98dcaf95f5ae2->leave($__internal_1d273b2d6770efe0201eab5cf62a478117b3445b67dbcd6deea98dcaf95f5ae2_prof);

        
        $__internal_ce684a7e104689effa17436fee6e06d41daa775c1ff6877150cbd1fb18a85ec8->leave($__internal_ce684a7e104689effa17436fee6e06d41daa775c1ff6877150cbd1fb18a85ec8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
