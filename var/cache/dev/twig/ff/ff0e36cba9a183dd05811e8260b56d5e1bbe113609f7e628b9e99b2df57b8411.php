<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_304397361907c1b885fe0207c9a1e59995f6f188804aa2ad2b2a5942f2d85a23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74c33fd42db56af9cd3037db36c19c9c48a1a4c9729c6d009b4700f2a50339be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c33fd42db56af9cd3037db36c19c9c48a1a4c9729c6d009b4700f2a50339be->enter($__internal_74c33fd42db56af9cd3037db36c19c9c48a1a4c9729c6d009b4700f2a50339be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e96124a82b0cd976e11ba4534b93402395524954725e0d9d01965125a307551c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96124a82b0cd976e11ba4534b93402395524954725e0d9d01965125a307551c->enter($__internal_e96124a82b0cd976e11ba4534b93402395524954725e0d9d01965125a307551c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74c33fd42db56af9cd3037db36c19c9c48a1a4c9729c6d009b4700f2a50339be->leave($__internal_74c33fd42db56af9cd3037db36c19c9c48a1a4c9729c6d009b4700f2a50339be_prof);

        
        $__internal_e96124a82b0cd976e11ba4534b93402395524954725e0d9d01965125a307551c->leave($__internal_e96124a82b0cd976e11ba4534b93402395524954725e0d9d01965125a307551c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b129549737801a689269f9f1c6cba53800588f68939a442fef5e479cd96750ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b129549737801a689269f9f1c6cba53800588f68939a442fef5e479cd96750ce->enter($__internal_b129549737801a689269f9f1c6cba53800588f68939a442fef5e479cd96750ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_bc83a96e6309791e3a91e5911ce38a7a0c219a975c8184fc261e454d2b59ae94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc83a96e6309791e3a91e5911ce38a7a0c219a975c8184fc261e454d2b59ae94->enter($__internal_bc83a96e6309791e3a91e5911ce38a7a0c219a975c8184fc261e454d2b59ae94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_bc83a96e6309791e3a91e5911ce38a7a0c219a975c8184fc261e454d2b59ae94->leave($__internal_bc83a96e6309791e3a91e5911ce38a7a0c219a975c8184fc261e454d2b59ae94_prof);

        
        $__internal_b129549737801a689269f9f1c6cba53800588f68939a442fef5e479cd96750ce->leave($__internal_b129549737801a689269f9f1c6cba53800588f68939a442fef5e479cd96750ce_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa877ce6df4474f0e0c8cba5c4cbfe9137e774b9c332e629fa2afca9ad8919d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa877ce6df4474f0e0c8cba5c4cbfe9137e774b9c332e629fa2afca9ad8919d6->enter($__internal_aa877ce6df4474f0e0c8cba5c4cbfe9137e774b9c332e629fa2afca9ad8919d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0942c8fde5eafa1a6ac534355a55b080ff12bbb76f792f743621bb5cecbb2bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0942c8fde5eafa1a6ac534355a55b080ff12bbb76f792f743621bb5cecbb2bfa->enter($__internal_0942c8fde5eafa1a6ac534355a55b080ff12bbb76f792f743621bb5cecbb2bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0942c8fde5eafa1a6ac534355a55b080ff12bbb76f792f743621bb5cecbb2bfa->leave($__internal_0942c8fde5eafa1a6ac534355a55b080ff12bbb76f792f743621bb5cecbb2bfa_prof);

        
        $__internal_aa877ce6df4474f0e0c8cba5c4cbfe9137e774b9c332e629fa2afca9ad8919d6->leave($__internal_aa877ce6df4474f0e0c8cba5c4cbfe9137e774b9c332e629fa2afca9ad8919d6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
