<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_f65c607b023c0488ef36b0ae6d3115ee9129d7754c65f149e52f24b3ce71ea0f extends Twig_Template
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
        $__internal_c1c7db81861302bf2f4cc1309248de2b816fc523c3e15e54a316f07981b45f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c7db81861302bf2f4cc1309248de2b816fc523c3e15e54a316f07981b45f48->enter($__internal_c1c7db81861302bf2f4cc1309248de2b816fc523c3e15e54a316f07981b45f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f9707e47eb9239cebd5841e7e9d6afc1e0a55abeef2834ff7af16709dc486748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9707e47eb9239cebd5841e7e9d6afc1e0a55abeef2834ff7af16709dc486748->enter($__internal_f9707e47eb9239cebd5841e7e9d6afc1e0a55abeef2834ff7af16709dc486748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c1c7db81861302bf2f4cc1309248de2b816fc523c3e15e54a316f07981b45f48->leave($__internal_c1c7db81861302bf2f4cc1309248de2b816fc523c3e15e54a316f07981b45f48_prof);

        
        $__internal_f9707e47eb9239cebd5841e7e9d6afc1e0a55abeef2834ff7af16709dc486748->leave($__internal_f9707e47eb9239cebd5841e7e9d6afc1e0a55abeef2834ff7af16709dc486748_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
