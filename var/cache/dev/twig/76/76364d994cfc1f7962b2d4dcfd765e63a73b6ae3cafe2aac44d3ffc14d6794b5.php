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
        $__internal_32b50fe7657a9007ad5ce204736678aec592be81d1c747d99ea1f978a3ad0704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32b50fe7657a9007ad5ce204736678aec592be81d1c747d99ea1f978a3ad0704->enter($__internal_32b50fe7657a9007ad5ce204736678aec592be81d1c747d99ea1f978a3ad0704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_344671eeba7393438282cbe262963315431df3f049b809a5874a2f431e944d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344671eeba7393438282cbe262963315431df3f049b809a5874a2f431e944d4b->enter($__internal_344671eeba7393438282cbe262963315431df3f049b809a5874a2f431e944d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_32b50fe7657a9007ad5ce204736678aec592be81d1c747d99ea1f978a3ad0704->leave($__internal_32b50fe7657a9007ad5ce204736678aec592be81d1c747d99ea1f978a3ad0704_prof);

        
        $__internal_344671eeba7393438282cbe262963315431df3f049b809a5874a2f431e944d4b->leave($__internal_344671eeba7393438282cbe262963315431df3f049b809a5874a2f431e944d4b_prof);

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
", "@Framework/Form/reset_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
