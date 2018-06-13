<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_454420bf5d207588adcc7d50ccb775ad1f0570ccd67d68e083c1ad0df1fb7c29 extends Twig_Template
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
        $__internal_2edc7e1100cd147c3e5a86d61bbbea14dbb879f144939549b45dbd07fe84ba75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edc7e1100cd147c3e5a86d61bbbea14dbb879f144939549b45dbd07fe84ba75->enter($__internal_2edc7e1100cd147c3e5a86d61bbbea14dbb879f144939549b45dbd07fe84ba75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_248cede0a9f8d73873e3de18597db026a4fcf060865547cbc22cb78a4d82c832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248cede0a9f8d73873e3de18597db026a4fcf060865547cbc22cb78a4d82c832->enter($__internal_248cede0a9f8d73873e3de18597db026a4fcf060865547cbc22cb78a4d82c832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2edc7e1100cd147c3e5a86d61bbbea14dbb879f144939549b45dbd07fe84ba75->leave($__internal_2edc7e1100cd147c3e5a86d61bbbea14dbb879f144939549b45dbd07fe84ba75_prof);

        
        $__internal_248cede0a9f8d73873e3de18597db026a4fcf060865547cbc22cb78a4d82c832->leave($__internal_248cede0a9f8d73873e3de18597db026a4fcf060865547cbc22cb78a4d82c832_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
