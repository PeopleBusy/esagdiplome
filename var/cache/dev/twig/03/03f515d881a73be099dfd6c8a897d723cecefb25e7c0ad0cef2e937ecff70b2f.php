<?php

/* AppBundle:Default/etudiant:edit.html.twig */
class __TwigTemplate_624b1269d3291821f532be67d40acde8c018da23c09247ab1cd69b6655371757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/etudiant:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7311875a65fbf4335167e5b41710beafbacae2ef136a11ce5c757ccbea1901a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7311875a65fbf4335167e5b41710beafbacae2ef136a11ce5c757ccbea1901a4->enter($__internal_7311875a65fbf4335167e5b41710beafbacae2ef136a11ce5c757ccbea1901a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/etudiant:edit.html.twig"));

        $__internal_049a9ca6159e4cd903410f01d5ece7031420730278d2760bc84ea9acc80acffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049a9ca6159e4cd903410f01d5ece7031420730278d2760bc84ea9acc80acffb->enter($__internal_049a9ca6159e4cd903410f01d5ece7031420730278d2760bc84ea9acc80acffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/etudiant:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7311875a65fbf4335167e5b41710beafbacae2ef136a11ce5c757ccbea1901a4->leave($__internal_7311875a65fbf4335167e5b41710beafbacae2ef136a11ce5c757ccbea1901a4_prof);

        
        $__internal_049a9ca6159e4cd903410f01d5ece7031420730278d2760bc84ea9acc80acffb->leave($__internal_049a9ca6159e4cd903410f01d5ece7031420730278d2760bc84ea9acc80acffb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d68c683996fe3d74e3f2c754ea76198a75661f0b6120fce43e613f4430a363d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68c683996fe3d74e3f2c754ea76198a75661f0b6120fce43e613f4430a363d7->enter($__internal_d68c683996fe3d74e3f2c754ea76198a75661f0b6120fce43e613f4430a363d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3bdefbee7dc7837e529e607746f7640acbb0c4c44e6a0759d2b19701f65c3d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bdefbee7dc7837e529e607746f7640acbb0c4c44e6a0759d2b19701f65c3d0f->enter($__internal_3bdefbee7dc7837e529e607746f7640acbb0c4c44e6a0759d2b19701f65c3d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Modifier demande ";
        
        $__internal_3bdefbee7dc7837e529e607746f7640acbb0c4c44e6a0759d2b19701f65c3d0f->leave($__internal_3bdefbee7dc7837e529e607746f7640acbb0c4c44e6a0759d2b19701f65c3d0f_prof);

        
        $__internal_d68c683996fe3d74e3f2c754ea76198a75661f0b6120fce43e613f4430a363d7->leave($__internal_d68c683996fe3d74e3f2c754ea76198a75661f0b6120fce43e613f4430a363d7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6df2c731230ba05c147722dbdaa9a7e357a3d0843c4996ec91d41e79928f9b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df2c731230ba05c147722dbdaa9a7e357a3d0843c4996ec91d41e79928f9b0c->enter($__internal_6df2c731230ba05c147722dbdaa9a7e357a3d0843c4996ec91d41e79928f9b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0189c69bcd84281140c029049922041e361d3363e870d79ac1c0a7d6e157354b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0189c69bcd84281140c029049922041e361d3363e870d79ac1c0a7d6e157354b->enter($__internal_0189c69bcd84281140c029049922041e361d3363e870d79ac1c0a7d6e157354b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-pencil\"></i> Demande</a></li>
            <li class=\"active\">Modifier</li>
        </ol>

        ";
        // line 17
        if (array_key_exists("erreur", $context)) {
            // line 18
            echo "
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-danger box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Erreur</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, ($context["erreur"] ?? $this->getContext($context, "erreur")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 41
        echo "
        ";
        // line 42
        if (array_key_exists("success", $context)) {
            // line 43
            echo "
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Succès</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            ";
            // line 58
            echo twig_escape_filter($this->env, ($context["success"] ?? $this->getContext($context, "success")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 66
        echo "
    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-pencil\"></i>
                    Modifier une demande
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                
                <div class=\"form-group col-md-4\">
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mention", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-4\">
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-4\">
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-4\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateExamen", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-4\">
                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lieunaissance", array()), 'row');
        echo "
                </div>
                
                <div class=\"form-group col-md-4\">
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "specialite", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-4\">
                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "optionEtud", array()), 'row');
        echo "
                </div>

                <div class=\"form-group col-md-4\">
                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genre", array()), 'row');
        echo "
                </div>
                
                <div class=\"form-group col-md-1\">
                    <button type=\"submit\" class=\"btn btn-success marTop25px\">Modifier</button>
                </div>

                ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 128
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_0189c69bcd84281140c029049922041e361d3363e870d79ac1c0a7d6e157354b->leave($__internal_0189c69bcd84281140c029049922041e361d3363e870d79ac1c0a7d6e157354b_prof);

        
        $__internal_6df2c731230ba05c147722dbdaa9a7e357a3d0843c4996ec91d41e79928f9b0c->leave($__internal_6df2c731230ba05c147722dbdaa9a7e357a3d0843c4996ec91d41e79928f9b0c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/etudiant:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 128,  229 => 122,  219 => 115,  212 => 111,  206 => 108,  199 => 104,  193 => 101,  187 => 98,  181 => 95,  175 => 92,  169 => 89,  144 => 66,  133 => 58,  116 => 43,  114 => 42,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %} Modifier demande {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-pencil\"></i> Demande</a></li>
            <li class=\"active\">Modifier</li>
        </ol>

        {% if erreur is defined %}

            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-danger box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Erreur</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            {{ erreur }}
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        {% endif %}

        {% if success is defined  %}

            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Succès</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            {{ success }}
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        {% endif %}

    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-pencil\"></i>
                    Modifier une demande
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                {{ form_start(form) }}
                
                <div class=\"form-group col-md-4\">
                    {{ form_row(form.mention) }}
                </div>
                <div class=\"form-group col-md-4\">
                    {{ form_row(form.nom) }}
                </div>
                <div class=\"form-group col-md-4\">
                    {{ form_row(form.prenom) }}
                </div>
                <div class=\"form-group col-md-4\">
                    {{ form_row(form.dateExamen) }}
                </div>
                <div class=\"form-group col-md-4\">
                    {{ form_row(form.lieunaissance) }}
                </div>
                
                <div class=\"form-group col-md-4\">
                    {{ form_row(form.specialite) }}
                </div>
                <div class=\"form-group col-md-4\">
                    {{ form_row(form.optionEtud) }}
                </div>

                <div class=\"form-group col-md-4\">
                    {{ form_row(form.genre) }}
                </div>
                
                <div class=\"form-group col-md-1\">
                    <button type=\"submit\" class=\"btn btn-success marTop25px\">Modifier</button>
                </div>

                {{ form_end(form) }}

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                {#Footer#}
            </div>
            <!-- /.box-footer-->
        </div>
    </section>

{% endblock %}", "AppBundle:Default/etudiant:edit.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/src/AppBundle/Resources/views/Default/etudiant/edit.html.twig");
    }
}
