<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_638ca8c133e197214d1315e9fe73a87e9b2174eb7d93cb270ede3b8fa0fdffb4 extends Twig_Template
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
        $__internal_e0fe395e9acced84aa6e6b34419f08a1a4d67c2e0003d4c94152a02f7311bb56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0fe395e9acced84aa6e6b34419f08a1a4d67c2e0003d4c94152a02f7311bb56->enter($__internal_e0fe395e9acced84aa6e6b34419f08a1a4d67c2e0003d4c94152a02f7311bb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_df569a95c12d859d46d171f955586c65c346a96069c28dc9d3fe5d1d21c53ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df569a95c12d859d46d171f955586c65c346a96069c28dc9d3fe5d1d21c53ffd->enter($__internal_df569a95c12d859d46d171f955586c65c346a96069c28dc9d3fe5d1d21c53ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e0fe395e9acced84aa6e6b34419f08a1a4d67c2e0003d4c94152a02f7311bb56->leave($__internal_e0fe395e9acced84aa6e6b34419f08a1a4d67c2e0003d4c94152a02f7311bb56_prof);

        
        $__internal_df569a95c12d859d46d171f955586c65c346a96069c28dc9d3fe5d1d21c53ffd->leave($__internal_df569a95c12d859d46d171f955586c65c346a96069c28dc9d3fe5d1d21c53ffd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
