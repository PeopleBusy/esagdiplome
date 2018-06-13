<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_433a0e3680e62b94df4dfe5afe81fc00f90e47ec8ca3f3ecc0c08a53cfdb9dcd extends Twig_Template
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
        $__internal_879e6a83d375115a45d5d83da15fd1522efed7c552f0bc516025caf3fb90c55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879e6a83d375115a45d5d83da15fd1522efed7c552f0bc516025caf3fb90c55f->enter($__internal_879e6a83d375115a45d5d83da15fd1522efed7c552f0bc516025caf3fb90c55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9371a27674336084d8573ece360bf76eec82dbd1c95baaf9a3b6d245ecbf8916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9371a27674336084d8573ece360bf76eec82dbd1c95baaf9a3b6d245ecbf8916->enter($__internal_9371a27674336084d8573ece360bf76eec82dbd1c95baaf9a3b6d245ecbf8916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_879e6a83d375115a45d5d83da15fd1522efed7c552f0bc516025caf3fb90c55f->leave($__internal_879e6a83d375115a45d5d83da15fd1522efed7c552f0bc516025caf3fb90c55f_prof);

        
        $__internal_9371a27674336084d8573ece360bf76eec82dbd1c95baaf9a3b6d245ecbf8916->leave($__internal_9371a27674336084d8573ece360bf76eec82dbd1c95baaf9a3b6d245ecbf8916_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
