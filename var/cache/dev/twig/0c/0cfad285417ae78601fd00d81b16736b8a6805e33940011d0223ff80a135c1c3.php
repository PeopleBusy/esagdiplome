<?php

/* AppBundle:Default/etudiant:new.html.twig */
class __TwigTemplate_0419d9db6e15b00d7530b8fef6c5983e57c32786620dabe0182196640d3f5e67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/etudiant:new.html.twig", 1);
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
        $__internal_a38da693ef9bfca411977639294bba80eb00e80b94ba1f961fa517aa6089db01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a38da693ef9bfca411977639294bba80eb00e80b94ba1f961fa517aa6089db01->enter($__internal_a38da693ef9bfca411977639294bba80eb00e80b94ba1f961fa517aa6089db01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/etudiant:new.html.twig"));

        $__internal_e36e490c70f6b1dd3e1c656f8fc4d198b5c67a0b8affc22836ff6e50e89f8e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36e490c70f6b1dd3e1c656f8fc4d198b5c67a0b8affc22836ff6e50e89f8e06->enter($__internal_e36e490c70f6b1dd3e1c656f8fc4d198b5c67a0b8affc22836ff6e50e89f8e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/etudiant:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a38da693ef9bfca411977639294bba80eb00e80b94ba1f961fa517aa6089db01->leave($__internal_a38da693ef9bfca411977639294bba80eb00e80b94ba1f961fa517aa6089db01_prof);

        
        $__internal_e36e490c70f6b1dd3e1c656f8fc4d198b5c67a0b8affc22836ff6e50e89f8e06->leave($__internal_e36e490c70f6b1dd3e1c656f8fc4d198b5c67a0b8affc22836ff6e50e89f8e06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9781687eaeb19e31d031b1c4b8cda860ae6c6f57bf693c094cac3bc99fa3e08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9781687eaeb19e31d031b1c4b8cda860ae6c6f57bf693c094cac3bc99fa3e08b->enter($__internal_9781687eaeb19e31d031b1c4b8cda860ae6c6f57bf693c094cac3bc99fa3e08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6b4f6a6ad428740c9340a1d2012ff61a0a7d542664822ab81f966c55e5c151ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4f6a6ad428740c9340a1d2012ff61a0a7d542664822ab81f966c55e5c151ab->enter($__internal_6b4f6a6ad428740c9340a1d2012ff61a0a7d542664822ab81f966c55e5c151ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Enregistrer demande ";
        
        $__internal_6b4f6a6ad428740c9340a1d2012ff61a0a7d542664822ab81f966c55e5c151ab->leave($__internal_6b4f6a6ad428740c9340a1d2012ff61a0a7d542664822ab81f966c55e5c151ab_prof);

        
        $__internal_9781687eaeb19e31d031b1c4b8cda860ae6c6f57bf693c094cac3bc99fa3e08b->leave($__internal_9781687eaeb19e31d031b1c4b8cda860ae6c6f57bf693c094cac3bc99fa3e08b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6428547d46faf95381bc6ec15a6048cce1a57c7eb6aa9023ab25f687665682f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6428547d46faf95381bc6ec15a6048cce1a57c7eb6aa9023ab25f687665682f->enter($__internal_a6428547d46faf95381bc6ec15a6048cce1a57c7eb6aa9023ab25f687665682f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2475df26fe67aa38e804c8505de9ec4ed5b395f6219348d3e28d7c3fc3f9ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2475df26fe67aa38e804c8505de9ec4ed5b395f6219348d3e28d7c3fc3f9ef1->enter($__internal_a2475df26fe67aa38e804c8505de9ec4ed5b395f6219348d3e28d7c3fc3f9ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Demande</a></li>
            <li class=\"active\">Enregistrer</li>
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
                    <i class=\"fa fa-user\"></i>
                    Enregistrer une demande
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
                    <button type=\"submit\" class=\"btn btn-success marTop25px\">Enregistrer</button>
                </div>

                ";
        // line 118
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                <div class=\"col-md-12 col-xs-12\">
                    ";
        // line 121
        if ( !twig_test_empty(($context["demandes_etudiant"] ?? $this->getContext($context, "demandes_etudiant")))) {
            // line 122
            echo "                        <h3 style=\"text-align: center;\">Autre(s) demandes(s) de cet étudiant</h3>

                        <div class=\"col-md-12 text-center\">
                            <span class=\"bg-red text-center\" style=\"font-size: 15px;\">Voulez-vous enregister une demande de duplicata ?</span>

                            <a href=\"";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_add");
            echo "\" class=\"btn btn-default\" style=\"margin-left: 10px;\">Non</a>
                            <a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_duplicata", array("id" => $this->getAttribute($this->getAttribute(($context["demandes_etudiant"] ?? $this->getContext($context, "demandes_etudiant")), 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"margin-left: 10px;\">Oui</a>

                        </div>


                        <div class=\"table-responsive col-md-12 marTop25px\">
                            <table id=\"\" class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"hide\"><input type=\"checkbox\"/></th>
                                    <th>N° Enreg.</th>
                                    <th>Nom</th>
                                    <th>Prénom(s)</th>
                                    <th>Genre</th>
                                    <th>Date Examen</th>
                                    <th>Option</th>
                                    <th>Spécialité</th>
                                    <th>Mention</th>
                                    <th>Type</th>
                                    <th>Etat</th>
                                    <th>Date demande</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["demandes_etudiant"] ?? $this->getContext($context, "demandes_etudiant")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 153
                echo "                                    <tr class=\"\">
                                        <td class=\"hide\"><input type=\"checkbox\"/></td>
                                        <td><span class=\"id badge bg-default\">";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"nom\">";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"prenom\">";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"genre\">";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "genre", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"dateExamen\">";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "dateExamen", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"option\">";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "optionEtud", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"specialite\">";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "specialite", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"mention\">";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "mention", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"mention\">";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeDemande", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"mention\">";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "etatDemande", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"mention\">";
                // line 165
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "dateEnregistrement", array()), "d/m/Y"), "html", null, true);
                echo "</span></td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "
                                </tbody>
                            </table>
                        </div>

                    ";
        }
        // line 174
        echo "                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 181
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_a2475df26fe67aa38e804c8505de9ec4ed5b395f6219348d3e28d7c3fc3f9ef1->leave($__internal_a2475df26fe67aa38e804c8505de9ec4ed5b395f6219348d3e28d7c3fc3f9ef1_prof);

        
        $__internal_a6428547d46faf95381bc6ec15a6048cce1a57c7eb6aa9023ab25f687665682f->leave($__internal_a6428547d46faf95381bc6ec15a6048cce1a57c7eb6aa9023ab25f687665682f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/etudiant:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 181,  333 => 174,  325 => 168,  316 => 165,  312 => 164,  308 => 163,  304 => 162,  300 => 161,  296 => 160,  292 => 159,  288 => 158,  284 => 157,  280 => 156,  276 => 155,  272 => 153,  268 => 152,  241 => 128,  237 => 127,  230 => 122,  228 => 121,  222 => 118,  212 => 111,  206 => 108,  199 => 104,  193 => 101,  187 => 98,  181 => 95,  175 => 92,  169 => 89,  144 => 66,  133 => 58,  116 => 43,  114 => 42,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Enregistrer demande {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Demande</a></li>
            <li class=\"active\">Enregistrer</li>
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
                    <i class=\"fa fa-user\"></i>
                    Enregistrer une demande
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
                    <button type=\"submit\" class=\"btn btn-success marTop25px\">Enregistrer</button>
                </div>

                {{ form_end(form) }}

                <div class=\"col-md-12 col-xs-12\">
                    {% if demandes_etudiant is not empty  %}
                        <h3 style=\"text-align: center;\">Autre(s) demandes(s) de cet étudiant</h3>

                        <div class=\"col-md-12 text-center\">
                            <span class=\"bg-red text-center\" style=\"font-size: 15px;\">Voulez-vous enregister une demande de duplicata ?</span>

                            <a href=\"{{ path('demande_add') }}\" class=\"btn btn-default\" style=\"margin-left: 10px;\">Non</a>
                            <a href=\"{{ path('demande_duplicata', {'id' : demandes_etudiant[0].id}) }}\" class=\"btn btn-primary\" style=\"margin-left: 10px;\">Oui</a>

                        </div>


                        <div class=\"table-responsive col-md-12 marTop25px\">
                            <table id=\"\" class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"hide\"><input type=\"checkbox\"/></th>
                                    <th>N° Enreg.</th>
                                    <th>Nom</th>
                                    <th>Prénom(s)</th>
                                    <th>Genre</th>
                                    <th>Date Examen</th>
                                    <th>Option</th>
                                    <th>Spécialité</th>
                                    <th>Mention</th>
                                    <th>Type</th>
                                    <th>Etat</th>
                                    <th>Date demande</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for i in demandes_etudiant %}
                                    <tr class=\"\">
                                        <td class=\"hide\"><input type=\"checkbox\"/></td>
                                        <td><span class=\"id badge bg-default\">{{ i.id }}</span></td>
                                        <td><span class=\"nom\">{{ i.etudiant.nom }}</span></td>
                                        <td><span class=\"prenom\">{{ i.etudiant.prenom }}</span></td>
                                        <td><span class=\"genre\">{{ i.etudiant.genre }}</span></td>
                                        <td><span class=\"dateExamen\">{{ i.etudiant.dateExamen }}</span></td>
                                        <td><span class=\"option\">{{ i.etudiant.optionEtud }}</span></td>
                                        <td><span class=\"specialite\">{{ i.etudiant.specialite }}</span></td>
                                        <td><span class=\"mention\">{{ i.etudiant.mention }}</span></td>
                                        <td><span class=\"mention\">{{ i.typeDemande }}</span></td>
                                        <td><span class=\"mention\">{{ i.etatDemande }}</span></td>
                                        <td><span class=\"mention\">{{ i.dateEnregistrement | date(\"d/m/Y\")}}</span></td>
                                    </tr>
                                {% endfor %}

                                </tbody>
                            </table>
                        </div>

                    {% endif %}
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                {#Footer#}
            </div>
            <!-- /.box-footer-->
        </div>
    </section>

{% endblock %}", "AppBundle:Default/etudiant:new.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/src/AppBundle/Resources/views/Default/etudiant/new.html.twig");
    }
}
