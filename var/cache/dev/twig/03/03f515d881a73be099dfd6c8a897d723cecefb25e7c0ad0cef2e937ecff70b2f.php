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
        $__internal_d8c93c10c63f72c86de85635c5fe5a12b7bb7400add5c2982e8768a6879d6f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c93c10c63f72c86de85635c5fe5a12b7bb7400add5c2982e8768a6879d6f29->enter($__internal_d8c93c10c63f72c86de85635c5fe5a12b7bb7400add5c2982e8768a6879d6f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/etudiant:edit.html.twig"));

        $__internal_bfabe74815a09d9e4ad2a1eea4d5733718f920cf913469114a90e0e5fd2d8638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfabe74815a09d9e4ad2a1eea4d5733718f920cf913469114a90e0e5fd2d8638->enter($__internal_bfabe74815a09d9e4ad2a1eea4d5733718f920cf913469114a90e0e5fd2d8638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/etudiant:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8c93c10c63f72c86de85635c5fe5a12b7bb7400add5c2982e8768a6879d6f29->leave($__internal_d8c93c10c63f72c86de85635c5fe5a12b7bb7400add5c2982e8768a6879d6f29_prof);

        
        $__internal_bfabe74815a09d9e4ad2a1eea4d5733718f920cf913469114a90e0e5fd2d8638->leave($__internal_bfabe74815a09d9e4ad2a1eea4d5733718f920cf913469114a90e0e5fd2d8638_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6c663fa82b97c49cd26b1b6a0ee38589d4c1abd49e246c110f810716122f298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c663fa82b97c49cd26b1b6a0ee38589d4c1abd49e246c110f810716122f298->enter($__internal_f6c663fa82b97c49cd26b1b6a0ee38589d4c1abd49e246c110f810716122f298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb3de185e1b54482f4800cf6c3ab24d9568e1598cee77af7a70c226a06cdc9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3de185e1b54482f4800cf6c3ab24d9568e1598cee77af7a70c226a06cdc9c5->enter($__internal_cb3de185e1b54482f4800cf6c3ab24d9568e1598cee77af7a70c226a06cdc9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Modifier demande ";
        
        $__internal_cb3de185e1b54482f4800cf6c3ab24d9568e1598cee77af7a70c226a06cdc9c5->leave($__internal_cb3de185e1b54482f4800cf6c3ab24d9568e1598cee77af7a70c226a06cdc9c5_prof);

        
        $__internal_f6c663fa82b97c49cd26b1b6a0ee38589d4c1abd49e246c110f810716122f298->leave($__internal_f6c663fa82b97c49cd26b1b6a0ee38589d4c1abd49e246c110f810716122f298_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f04d8999216868610dd39fed232cb87cfff32fc0a3d5ad25ae7c0ec4e4ecf5b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04d8999216868610dd39fed232cb87cfff32fc0a3d5ad25ae7c0ec4e4ecf5b2->enter($__internal_f04d8999216868610dd39fed232cb87cfff32fc0a3d5ad25ae7c0ec4e4ecf5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09d2af5d4a8455a85f8265a0c15729eaa7c9a5187408e8c7539f3e03545a2f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d2af5d4a8455a85f8265a0c15729eaa7c9a5187408e8c7539f3e03545a2f30->enter($__internal_09d2af5d4a8455a85f8265a0c15729eaa7c9a5187408e8c7539f3e03545a2f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                
                <div class=\"form-group col-md-1\">
                    <button type=\"submit\" class=\"btn btn-success marTop25px\">Modifier</button>
                </div>

                ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 124
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_09d2af5d4a8455a85f8265a0c15729eaa7c9a5187408e8c7539f3e03545a2f30->leave($__internal_09d2af5d4a8455a85f8265a0c15729eaa7c9a5187408e8c7539f3e03545a2f30_prof);

        
        $__internal_f04d8999216868610dd39fed232cb87cfff32fc0a3d5ad25ae7c0ec4e4ecf5b2->leave($__internal_f04d8999216868610dd39fed232cb87cfff32fc0a3d5ad25ae7c0ec4e4ecf5b2_prof);

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
        return array (  230 => 124,  222 => 118,  212 => 111,  206 => 108,  199 => 104,  193 => 101,  187 => 98,  181 => 95,  175 => 92,  169 => 89,  144 => 66,  133 => 58,  116 => 43,  114 => 42,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% endblock %}", "AppBundle:Default/etudiant:edit.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/src/AppBundle/Resources/views/Default/etudiant/edit.html.twig");
    }
}
