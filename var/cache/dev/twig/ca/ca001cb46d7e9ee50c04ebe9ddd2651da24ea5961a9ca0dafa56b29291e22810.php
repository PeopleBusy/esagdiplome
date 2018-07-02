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
        $__internal_687069b0e5688c30698d3e608b7ad4c3f092cc2025b6fbce012b3883a7ed7725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687069b0e5688c30698d3e608b7ad4c3f092cc2025b6fbce012b3883a7ed7725->enter($__internal_687069b0e5688c30698d3e608b7ad4c3f092cc2025b6fbce012b3883a7ed7725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_47f70f14dd502ed56e577049b3b7325fd39b2362379d706e8e6acdf53b7eb2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f70f14dd502ed56e577049b3b7325fd39b2362379d706e8e6acdf53b7eb2c9->enter($__internal_47f70f14dd502ed56e577049b3b7325fd39b2362379d706e8e6acdf53b7eb2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_687069b0e5688c30698d3e608b7ad4c3f092cc2025b6fbce012b3883a7ed7725->leave($__internal_687069b0e5688c30698d3e608b7ad4c3f092cc2025b6fbce012b3883a7ed7725_prof);

        
        $__internal_47f70f14dd502ed56e577049b3b7325fd39b2362379d706e8e6acdf53b7eb2c9->leave($__internal_47f70f14dd502ed56e577049b3b7325fd39b2362379d706e8e6acdf53b7eb2c9_prof);

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
", "@Framework/Form/form_enctype.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
