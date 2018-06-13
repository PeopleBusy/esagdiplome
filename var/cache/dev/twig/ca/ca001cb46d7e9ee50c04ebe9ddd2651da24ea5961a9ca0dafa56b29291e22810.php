<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8340980ad37ed9874611702bd023534db5bdc7d5a1543540a08c576126476d1d extends Twig_Template
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
        $__internal_d2ef85535cd58cf066680caffab6bc7b627565a20d6269cf62fcf37c0bb96f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ef85535cd58cf066680caffab6bc7b627565a20d6269cf62fcf37c0bb96f08->enter($__internal_d2ef85535cd58cf066680caffab6bc7b627565a20d6269cf62fcf37c0bb96f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_cdf5d5569b6b8688647a8e186fb5240ab47e848eec70f575faa7c344fbc8d4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf5d5569b6b8688647a8e186fb5240ab47e848eec70f575faa7c344fbc8d4ee->enter($__internal_cdf5d5569b6b8688647a8e186fb5240ab47e848eec70f575faa7c344fbc8d4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d2ef85535cd58cf066680caffab6bc7b627565a20d6269cf62fcf37c0bb96f08->leave($__internal_d2ef85535cd58cf066680caffab6bc7b627565a20d6269cf62fcf37c0bb96f08_prof);

        
        $__internal_cdf5d5569b6b8688647a8e186fb5240ab47e848eec70f575faa7c344fbc8d4ee->leave($__internal_cdf5d5569b6b8688647a8e186fb5240ab47e848eec70f575faa7c344fbc8d4ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
