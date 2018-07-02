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
        $__internal_ccea6bd940149834bc09a5dba740a0b93b57ee3852a230059a97e885c53a2f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccea6bd940149834bc09a5dba740a0b93b57ee3852a230059a97e885c53a2f9f->enter($__internal_ccea6bd940149834bc09a5dba740a0b93b57ee3852a230059a97e885c53a2f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1bcece23677c913ca5cf8fa40b922ad0dbbb6dbb95b6ab88aead4a73d15dcc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcece23677c913ca5cf8fa40b922ad0dbbb6dbb95b6ab88aead4a73d15dcc05->enter($__internal_1bcece23677c913ca5cf8fa40b922ad0dbbb6dbb95b6ab88aead4a73d15dcc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ccea6bd940149834bc09a5dba740a0b93b57ee3852a230059a97e885c53a2f9f->leave($__internal_ccea6bd940149834bc09a5dba740a0b93b57ee3852a230059a97e885c53a2f9f_prof);

        
        $__internal_1bcece23677c913ca5cf8fa40b922ad0dbbb6dbb95b6ab88aead4a73d15dcc05->leave($__internal_1bcece23677c913ca5cf8fa40b922ad0dbbb6dbb95b6ab88aead4a73d15dcc05_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f76f8bd8d9bbc967630a5e3ce222b88767079691c3a0bfe2541f292424a3496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f76f8bd8d9bbc967630a5e3ce222b88767079691c3a0bfe2541f292424a3496->enter($__internal_2f76f8bd8d9bbc967630a5e3ce222b88767079691c3a0bfe2541f292424a3496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ba960d0a8bd8aea0c791780456e97599c0e315cd26ef70e1ac54d4df587ce01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba960d0a8bd8aea0c791780456e97599c0e315cd26ef70e1ac54d4df587ce01->enter($__internal_4ba960d0a8bd8aea0c791780456e97599c0e315cd26ef70e1ac54d4df587ce01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4ba960d0a8bd8aea0c791780456e97599c0e315cd26ef70e1ac54d4df587ce01->leave($__internal_4ba960d0a8bd8aea0c791780456e97599c0e315cd26ef70e1ac54d4df587ce01_prof);

        
        $__internal_2f76f8bd8d9bbc967630a5e3ce222b88767079691c3a0bfe2541f292424a3496->leave($__internal_2f76f8bd8d9bbc967630a5e3ce222b88767079691c3a0bfe2541f292424a3496_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_31009c79179d6cdf4428e9e5cc597fa115f0f790ad8b1caea07cc270ec576363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31009c79179d6cdf4428e9e5cc597fa115f0f790ad8b1caea07cc270ec576363->enter($__internal_31009c79179d6cdf4428e9e5cc597fa115f0f790ad8b1caea07cc270ec576363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_23fb93267206fe60e881af863c56f30b6d7870d5adfc4cbabec98b35b01f92a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fb93267206fe60e881af863c56f30b6d7870d5adfc4cbabec98b35b01f92a4->enter($__internal_23fb93267206fe60e881af863c56f30b6d7870d5adfc4cbabec98b35b01f92a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_23fb93267206fe60e881af863c56f30b6d7870d5adfc4cbabec98b35b01f92a4->leave($__internal_23fb93267206fe60e881af863c56f30b6d7870d5adfc4cbabec98b35b01f92a4_prof);

        
        $__internal_31009c79179d6cdf4428e9e5cc597fa115f0f790ad8b1caea07cc270ec576363->leave($__internal_31009c79179d6cdf4428e9e5cc597fa115f0f790ad8b1caea07cc270ec576363_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3f92a763c4749adf6cbaffa3b63ec8a9d54f95480e431dff14207d3f5c77bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f92a763c4749adf6cbaffa3b63ec8a9d54f95480e431dff14207d3f5c77bd5->enter($__internal_e3f92a763c4749adf6cbaffa3b63ec8a9d54f95480e431dff14207d3f5c77bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19ae5a0150e9c8ab3a9763ba5a715f5ec0a5dd354ee44c3d31bbf44563411afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ae5a0150e9c8ab3a9763ba5a715f5ec0a5dd354ee44c3d31bbf44563411afa->enter($__internal_19ae5a0150e9c8ab3a9763ba5a715f5ec0a5dd354ee44c3d31bbf44563411afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19ae5a0150e9c8ab3a9763ba5a715f5ec0a5dd354ee44c3d31bbf44563411afa->leave($__internal_19ae5a0150e9c8ab3a9763ba5a715f5ec0a5dd354ee44c3d31bbf44563411afa_prof);

        
        $__internal_e3f92a763c4749adf6cbaffa3b63ec8a9d54f95480e431dff14207d3f5c77bd5->leave($__internal_e3f92a763c4749adf6cbaffa3b63ec8a9d54f95480e431dff14207d3f5c77bd5_prof);

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
", "@Twig/layout.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
