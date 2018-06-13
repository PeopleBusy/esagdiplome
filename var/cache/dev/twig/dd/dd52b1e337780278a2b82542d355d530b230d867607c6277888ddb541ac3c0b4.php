<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21813074c09cb36da22ee20f23975da2139e9f6804517cbc8f0a5a2d54f73a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21813074c09cb36da22ee20f23975da2139e9f6804517cbc8f0a5a2d54f73a5b->enter($__internal_21813074c09cb36da22ee20f23975da2139e9f6804517cbc8f0a5a2d54f73a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_74f262161cbc7a0017967851975b7bfd6d1b61993a59d7c93cc732d42bef43de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f262161cbc7a0017967851975b7bfd6d1b61993a59d7c93cc732d42bef43de->enter($__internal_74f262161cbc7a0017967851975b7bfd6d1b61993a59d7c93cc732d42bef43de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_21813074c09cb36da22ee20f23975da2139e9f6804517cbc8f0a5a2d54f73a5b->leave($__internal_21813074c09cb36da22ee20f23975da2139e9f6804517cbc8f0a5a2d54f73a5b_prof);

        
        $__internal_74f262161cbc7a0017967851975b7bfd6d1b61993a59d7c93cc732d42bef43de->leave($__internal_74f262161cbc7a0017967851975b7bfd6d1b61993a59d7c93cc732d42bef43de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a39c575e14aa8e3ba7a8760ef367cfd39f2c2edcc9fd4a939629117be26bebe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39c575e14aa8e3ba7a8760ef367cfd39f2c2edcc9fd4a939629117be26bebe6->enter($__internal_a39c575e14aa8e3ba7a8760ef367cfd39f2c2edcc9fd4a939629117be26bebe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_725c14bb1ae077412e12e10d6f100ea426b7dd25a7f7dbfa5ce78027a2a8ba4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725c14bb1ae077412e12e10d6f100ea426b7dd25a7f7dbfa5ce78027a2a8ba4f->enter($__internal_725c14bb1ae077412e12e10d6f100ea426b7dd25a7f7dbfa5ce78027a2a8ba4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_725c14bb1ae077412e12e10d6f100ea426b7dd25a7f7dbfa5ce78027a2a8ba4f->leave($__internal_725c14bb1ae077412e12e10d6f100ea426b7dd25a7f7dbfa5ce78027a2a8ba4f_prof);

        
        $__internal_a39c575e14aa8e3ba7a8760ef367cfd39f2c2edcc9fd4a939629117be26bebe6->leave($__internal_a39c575e14aa8e3ba7a8760ef367cfd39f2c2edcc9fd4a939629117be26bebe6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_673a7eeced0a4fad76fb4e2a7bd317a73902d713bb8bef24d5ff6b45370da969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673a7eeced0a4fad76fb4e2a7bd317a73902d713bb8bef24d5ff6b45370da969->enter($__internal_673a7eeced0a4fad76fb4e2a7bd317a73902d713bb8bef24d5ff6b45370da969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_159c8c610ff6ac6d1da6b66e4cb729deddaab02776dbebe0a641b1158964fae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159c8c610ff6ac6d1da6b66e4cb729deddaab02776dbebe0a641b1158964fae5->enter($__internal_159c8c610ff6ac6d1da6b66e4cb729deddaab02776dbebe0a641b1158964fae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_159c8c610ff6ac6d1da6b66e4cb729deddaab02776dbebe0a641b1158964fae5->leave($__internal_159c8c610ff6ac6d1da6b66e4cb729deddaab02776dbebe0a641b1158964fae5_prof);

        
        $__internal_673a7eeced0a4fad76fb4e2a7bd317a73902d713bb8bef24d5ff6b45370da969->leave($__internal_673a7eeced0a4fad76fb4e2a7bd317a73902d713bb8bef24d5ff6b45370da969_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2f3d88f359d7a6c87f4e1d00927d2cf7d053ac77f667ad4f96a1bde5af86d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f3d88f359d7a6c87f4e1d00927d2cf7d053ac77f667ad4f96a1bde5af86d9d->enter($__internal_d2f3d88f359d7a6c87f4e1d00927d2cf7d053ac77f667ad4f96a1bde5af86d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91563737e81ef6459c53a190451fd3ab5275f3a535bf9cc081cedee03996e436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91563737e81ef6459c53a190451fd3ab5275f3a535bf9cc081cedee03996e436->enter($__internal_91563737e81ef6459c53a190451fd3ab5275f3a535bf9cc081cedee03996e436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91563737e81ef6459c53a190451fd3ab5275f3a535bf9cc081cedee03996e436->leave($__internal_91563737e81ef6459c53a190451fd3ab5275f3a535bf9cc081cedee03996e436_prof);

        
        $__internal_d2f3d88f359d7a6c87f4e1d00927d2cf7d053ac77f667ad4f96a1bde5af86d9d->leave($__internal_d2f3d88f359d7a6c87f4e1d00927d2cf7d053ac77f667ad4f96a1bde5af86d9d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
