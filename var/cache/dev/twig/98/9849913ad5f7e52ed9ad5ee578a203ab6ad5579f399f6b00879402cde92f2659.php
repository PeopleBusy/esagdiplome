<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_67210b46eb6ea29047a65b9b0be637713427b54db75c36dff6e9e82ed4165885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cf3d73ab8da0f07c990c049abe67fc83098f2343811a026ec38dcd707f869d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf3d73ab8da0f07c990c049abe67fc83098f2343811a026ec38dcd707f869d7->enter($__internal_2cf3d73ab8da0f07c990c049abe67fc83098f2343811a026ec38dcd707f869d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7caada487c6ec701cb6e9d66a4054ec2acdb6a6819bea4e31586719464e285c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7caada487c6ec701cb6e9d66a4054ec2acdb6a6819bea4e31586719464e285c0->enter($__internal_7caada487c6ec701cb6e9d66a4054ec2acdb6a6819bea4e31586719464e285c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf3d73ab8da0f07c990c049abe67fc83098f2343811a026ec38dcd707f869d7->leave($__internal_2cf3d73ab8da0f07c990c049abe67fc83098f2343811a026ec38dcd707f869d7_prof);

        
        $__internal_7caada487c6ec701cb6e9d66a4054ec2acdb6a6819bea4e31586719464e285c0->leave($__internal_7caada487c6ec701cb6e9d66a4054ec2acdb6a6819bea4e31586719464e285c0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c706175d07a5a73c7922bb6a36707cce06df3109148bf296f79f20a6bf19757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c706175d07a5a73c7922bb6a36707cce06df3109148bf296f79f20a6bf19757->enter($__internal_0c706175d07a5a73c7922bb6a36707cce06df3109148bf296f79f20a6bf19757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_525187f7932d69a60cfa063d9cd548fdf45c99bb0d31e998afe0832b9a6cee82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525187f7932d69a60cfa063d9cd548fdf45c99bb0d31e998afe0832b9a6cee82->enter($__internal_525187f7932d69a60cfa063d9cd548fdf45c99bb0d31e998afe0832b9a6cee82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_525187f7932d69a60cfa063d9cd548fdf45c99bb0d31e998afe0832b9a6cee82->leave($__internal_525187f7932d69a60cfa063d9cd548fdf45c99bb0d31e998afe0832b9a6cee82_prof);

        
        $__internal_0c706175d07a5a73c7922bb6a36707cce06df3109148bf296f79f20a6bf19757->leave($__internal_0c706175d07a5a73c7922bb6a36707cce06df3109148bf296f79f20a6bf19757_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_df31e09cecf5c76464225c2798e9cc026dd41e5b7cac7f099376f04d0d47f47a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df31e09cecf5c76464225c2798e9cc026dd41e5b7cac7f099376f04d0d47f47a->enter($__internal_df31e09cecf5c76464225c2798e9cc026dd41e5b7cac7f099376f04d0d47f47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22101eb8c228ae9aa71ad25b87f6a3b21605b7603725a0128968e4cf3387f066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22101eb8c228ae9aa71ad25b87f6a3b21605b7603725a0128968e4cf3387f066->enter($__internal_22101eb8c228ae9aa71ad25b87f6a3b21605b7603725a0128968e4cf3387f066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_22101eb8c228ae9aa71ad25b87f6a3b21605b7603725a0128968e4cf3387f066->leave($__internal_22101eb8c228ae9aa71ad25b87f6a3b21605b7603725a0128968e4cf3387f066_prof);

        
        $__internal_df31e09cecf5c76464225c2798e9cc026dd41e5b7cac7f099376f04d0d47f47a->leave($__internal_df31e09cecf5c76464225c2798e9cc026dd41e5b7cac7f099376f04d0d47f47a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
