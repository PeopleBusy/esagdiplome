<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a29fcea7639b86f31bc962cad6effbc154838d396c917b90e21daa8ba809e7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a29fcea7639b86f31bc962cad6effbc154838d396c917b90e21daa8ba809e7ed->enter($__internal_a29fcea7639b86f31bc962cad6effbc154838d396c917b90e21daa8ba809e7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_92906364cba017036f8b0b16a6bed2c09e22bd8b68322cc6b96790f860022e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92906364cba017036f8b0b16a6bed2c09e22bd8b68322cc6b96790f860022e77->enter($__internal_92906364cba017036f8b0b16a6bed2c09e22bd8b68322cc6b96790f860022e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a29fcea7639b86f31bc962cad6effbc154838d396c917b90e21daa8ba809e7ed->leave($__internal_a29fcea7639b86f31bc962cad6effbc154838d396c917b90e21daa8ba809e7ed_prof);

        
        $__internal_92906364cba017036f8b0b16a6bed2c09e22bd8b68322cc6b96790f860022e77->leave($__internal_92906364cba017036f8b0b16a6bed2c09e22bd8b68322cc6b96790f860022e77_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4657b2ccf1b98a16437468a5ddff5e29f520c5b5f03eecedbae2b7b4da961f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4657b2ccf1b98a16437468a5ddff5e29f520c5b5f03eecedbae2b7b4da961f5e->enter($__internal_4657b2ccf1b98a16437468a5ddff5e29f520c5b5f03eecedbae2b7b4da961f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f1c6f93335f9a34df2fb5ecf259e1d3d0107bff1a7dd1db07f7f250efc2eab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1c6f93335f9a34df2fb5ecf259e1d3d0107bff1a7dd1db07f7f250efc2eab0->enter($__internal_9f1c6f93335f9a34df2fb5ecf259e1d3d0107bff1a7dd1db07f7f250efc2eab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9f1c6f93335f9a34df2fb5ecf259e1d3d0107bff1a7dd1db07f7f250efc2eab0->leave($__internal_9f1c6f93335f9a34df2fb5ecf259e1d3d0107bff1a7dd1db07f7f250efc2eab0_prof);

        
        $__internal_4657b2ccf1b98a16437468a5ddff5e29f520c5b5f03eecedbae2b7b4da961f5e->leave($__internal_4657b2ccf1b98a16437468a5ddff5e29f520c5b5f03eecedbae2b7b4da961f5e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2e2626418d8a79b6b4fa7745c937d92995afec5856ae317beedc518cf1810cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e2626418d8a79b6b4fa7745c937d92995afec5856ae317beedc518cf1810cd->enter($__internal_c2e2626418d8a79b6b4fa7745c937d92995afec5856ae317beedc518cf1810cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d67405547bb73cb25f4f4349601d2d28042482fa11e81157b944701ed548d95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67405547bb73cb25f4f4349601d2d28042482fa11e81157b944701ed548d95d->enter($__internal_d67405547bb73cb25f4f4349601d2d28042482fa11e81157b944701ed548d95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d67405547bb73cb25f4f4349601d2d28042482fa11e81157b944701ed548d95d->leave($__internal_d67405547bb73cb25f4f4349601d2d28042482fa11e81157b944701ed548d95d_prof);

        
        $__internal_c2e2626418d8a79b6b4fa7745c937d92995afec5856ae317beedc518cf1810cd->leave($__internal_c2e2626418d8a79b6b4fa7745c937d92995afec5856ae317beedc518cf1810cd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_615628f3550263a0e6066f634c70f868d7df875107bbd8b3e592eb17b3860ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615628f3550263a0e6066f634c70f868d7df875107bbd8b3e592eb17b3860ddc->enter($__internal_615628f3550263a0e6066f634c70f868d7df875107bbd8b3e592eb17b3860ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc7b5d8746358a421cb645649d44127fa6e02ab9584ef3eaf5f8fe2c01db3ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7b5d8746358a421cb645649d44127fa6e02ab9584ef3eaf5f8fe2c01db3ac0->enter($__internal_dc7b5d8746358a421cb645649d44127fa6e02ab9584ef3eaf5f8fe2c01db3ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dc7b5d8746358a421cb645649d44127fa6e02ab9584ef3eaf5f8fe2c01db3ac0->leave($__internal_dc7b5d8746358a421cb645649d44127fa6e02ab9584ef3eaf5f8fe2c01db3ac0_prof);

        
        $__internal_615628f3550263a0e6066f634c70f868d7df875107bbd8b3e592eb17b3860ddc->leave($__internal_615628f3550263a0e6066f634c70f868d7df875107bbd8b3e592eb17b3860ddc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
