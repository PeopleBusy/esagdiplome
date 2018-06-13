<?php

/* AppBundle:Default/etudiant:list_a_imprimer.html.twig */
class __TwigTemplate_7a09f195b3fb9066b24af2721556b7673facdae45b887bd47af062618a122648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/etudiant:list_a_imprimer.html.twig", 1);
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
        $__internal_ee4273a84308c871ab9a74cce86d0f19116daad7fb5cd0dacf7ded16c786bbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4273a84308c871ab9a74cce86d0f19116daad7fb5cd0dacf7ded16c786bbbc->enter($__internal_ee4273a84308c871ab9a74cce86d0f19116daad7fb5cd0dacf7ded16c786bbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/etudiant:list_a_imprimer.html.twig"));

        $__internal_2a7b4014fe8ddfc7c1bc0266510f076887faa4797fd9cc2c899d72d430ae43e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7b4014fe8ddfc7c1bc0266510f076887faa4797fd9cc2c899d72d430ae43e4->enter($__internal_2a7b4014fe8ddfc7c1bc0266510f076887faa4797fd9cc2c899d72d430ae43e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/etudiant:list_a_imprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee4273a84308c871ab9a74cce86d0f19116daad7fb5cd0dacf7ded16c786bbbc->leave($__internal_ee4273a84308c871ab9a74cce86d0f19116daad7fb5cd0dacf7ded16c786bbbc_prof);

        
        $__internal_2a7b4014fe8ddfc7c1bc0266510f076887faa4797fd9cc2c899d72d430ae43e4->leave($__internal_2a7b4014fe8ddfc7c1bc0266510f076887faa4797fd9cc2c899d72d430ae43e4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f07e8f36de6b117aedf72587afaea2ad42f0ab3036afa963b80b5ebf6bbb7015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07e8f36de6b117aedf72587afaea2ad42f0ab3036afa963b80b5ebf6bbb7015->enter($__internal_f07e8f36de6b117aedf72587afaea2ad42f0ab3036afa963b80b5ebf6bbb7015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7ee6baaef709572bd104b89e8557dc9f216ad0b135dcfc77bf88d0b486c2ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ee6baaef709572bd104b89e8557dc9f216ad0b135dcfc77bf88d0b486c2ee8->enter($__internal_a7ee6baaef709572bd104b89e8557dc9f216ad0b135dcfc77bf88d0b486c2ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Demandes ";
        
        $__internal_a7ee6baaef709572bd104b89e8557dc9f216ad0b135dcfc77bf88d0b486c2ee8->leave($__internal_a7ee6baaef709572bd104b89e8557dc9f216ad0b135dcfc77bf88d0b486c2ee8_prof);

        
        $__internal_f07e8f36de6b117aedf72587afaea2ad42f0ab3036afa963b80b5ebf6bbb7015->leave($__internal_f07e8f36de6b117aedf72587afaea2ad42f0ab3036afa963b80b5ebf6bbb7015_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_771f80c4faed5a4722d4b50852eaa1a0a41770446db441ba590b297ff1ef895a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771f80c4faed5a4722d4b50852eaa1a0a41770446db441ba590b297ff1ef895a->enter($__internal_771f80c4faed5a4722d4b50852eaa1a0a41770446db441ba590b297ff1ef895a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_392d26d7429169067ee19399026bd5ce0b1af820dd9938bcd0179487424535b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392d26d7429169067ee19399026bd5ce0b1af820dd9938bcd0179487424535b0->enter($__internal_392d26d7429169067ee19399026bd5ce0b1af820dd9938bcd0179487424535b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-print\"></i> Demandes à imprimer</a></li>
            <li class=\"active\">Liste</li>
        </ol>

        ";
        // line 19
        if (array_key_exists("success", $context)) {
            // line 20
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
            // line 35
            echo twig_escape_filter($this->env, ($context["success"] ?? $this->getContext($context, "success")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 43
        echo "
    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-print\"></i>
                   ";
        // line 54
        echo twig_escape_filter($this->env, ($context["libelle"] ?? $this->getContext($context, "libelle")), "html", null, true);
        echo "

                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    <span class=\"\">
                                        <i class=\"fa fa-filter\"></i>
                                        Filtres
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                            <div class=\"panel-body\">
                                <form action=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_demande_filter", array("formId" => 2));
        echo "\">
                                    <div class=\"col-md-2\">
                                        <label>Matricule:</label>
                                        <input type=\"text\" name=\"matricule\" required=\"true\" placeholder=\"Saisir un matricule\" class=\"form-control pull-right\" id=\"matricule\">
                                    </div>
                                    <div class=\"form-group col-md-1\">
                                        <button type=\"submit\" class=\"btn btn-success marTop25px\"><i class=\"fa fa-filter\"></i> Filtrer</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 95
        if (twig_test_empty(($context["demandes"] ?? $this->getContext($context, "demandes")))) {
            // line 96
            echo "                    <h3 style=\"text-align: center;\">Aucun enregistrement trouvé</h3>
                ";
        } else {
            // line 98
            echo "
                    <div class=\"col-md-12\">
                        <a href=\"";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_tout_imprimer", array("id" => 0));
            echo "\" class=\"btn btn-success\">
                            <i class=\"fa fa-print\"></i>
                            Tout imprimer
                        </a>
                    </div>

                    <div class=\"col-md-12 table-responsive marTop25px\">
                        <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th class=\"hide\"><input type=\"checkbox\"/></th>
                                <th class=\"hide\">N° Enreg.</th>
                                <th>Matricule</th>
                                <th>Nom</th>
                                <th>Prénom(s)</th>
                                <th>Date naiss.</th>
                                <th>Lieu naiss.</th>
                                <th>Diplôme</th>
                                <th>Option</th>
                                <th>Type</th>
                                <th>Etat</th>
                                <th class=\"center\">Action(s)</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? $this->getContext($context, "demandes")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 126
                echo "                                <tr class=\"\">
                                    <td class=\"hide\"><input type=\"checkbox\"/></td>
                                    <td class=\"hide\"><span class=\"id\">";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"badge bg-defaul matricule\">";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "mention", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"nom\">";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"prenom\">";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"datenaiss\">";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "dateExamen", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"lieunaiss\">";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "lieunaissance", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"diplome\">";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "specialite", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"option\">";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "optionEtud", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeDemande", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "etatDemande", array()), "html", null, true);
                echo "</span></td>

                                    <td class=\"center\">
                                        <a href=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande_tout_imprimer", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-print\"></i> Imprimer</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "
                            </tbody>
                        </table>
                    </div>

                ";
        }
        // line 150
        echo "

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 156
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_392d26d7429169067ee19399026bd5ce0b1af820dd9938bcd0179487424535b0->leave($__internal_392d26d7429169067ee19399026bd5ce0b1af820dd9938bcd0179487424535b0_prof);

        
        $__internal_771f80c4faed5a4722d4b50852eaa1a0a41770446db441ba590b297ff1ef895a->leave($__internal_771f80c4faed5a4722d4b50852eaa1a0a41770446db441ba590b297ff1ef895a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/etudiant:list_a_imprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 156,  277 => 150,  269 => 144,  259 => 140,  253 => 137,  249 => 136,  245 => 135,  241 => 134,  237 => 133,  233 => 132,  229 => 131,  225 => 130,  221 => 129,  217 => 128,  213 => 126,  209 => 125,  181 => 100,  177 => 98,  173 => 96,  171 => 95,  153 => 80,  124 => 54,  111 => 43,  100 => 35,  83 => 20,  81 => 19,  68 => 8,  59 => 7,  41 => 4,  11 => 1,);
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


{% block title %} Demandes {% endblock %}


{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-print\"></i> Demandes à imprimer</a></li>
            <li class=\"active\">Liste</li>
        </ol>

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
                    <i class=\"fa fa-print\"></i>
                   {{ libelle }}

                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    <span class=\"\">
                                        <i class=\"fa fa-filter\"></i>
                                        Filtres
                                    </span>
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
                            <div class=\"panel-body\">
                                <form action=\"{{ path('liste_demande_filter', {'formId': 2}) }}\">
                                    <div class=\"col-md-2\">
                                        <label>Matricule:</label>
                                        <input type=\"text\" name=\"matricule\" required=\"true\" placeholder=\"Saisir un matricule\" class=\"form-control pull-right\" id=\"matricule\">
                                    </div>
                                    <div class=\"form-group col-md-1\">
                                        <button type=\"submit\" class=\"btn btn-success marTop25px\"><i class=\"fa fa-filter\"></i> Filtrer</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                {% if demandes is empty  %}
                    <h3 style=\"text-align: center;\">Aucun enregistrement trouvé</h3>
                {% else %}

                    <div class=\"col-md-12\">
                        <a href=\"{{ path('demande_tout_imprimer', {'id' : 0}) }}\" class=\"btn btn-success\">
                            <i class=\"fa fa-print\"></i>
                            Tout imprimer
                        </a>
                    </div>

                    <div class=\"col-md-12 table-responsive marTop25px\">
                        <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th class=\"hide\"><input type=\"checkbox\"/></th>
                                <th class=\"hide\">N° Enreg.</th>
                                <th>Matricule</th>
                                <th>Nom</th>
                                <th>Prénom(s)</th>
                                <th>Date naiss.</th>
                                <th>Lieu naiss.</th>
                                <th>Diplôme</th>
                                <th>Option</th>
                                <th>Type</th>
                                <th>Etat</th>
                                <th class=\"center\">Action(s)</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for i in demandes %}
                                <tr class=\"\">
                                    <td class=\"hide\"><input type=\"checkbox\"/></td>
                                    <td class=\"hide\"><span class=\"id\">{{ i.id }}</span></td>
                                    <td><span class=\"badge bg-defaul matricule\">{{ i.etudiant.mention }}</span></td>
                                    <td><span class=\"nom\">{{ i.etudiant.nom }}</span></td>
                                    <td><span class=\"prenom\">{{ i.etudiant.prenom }}</span></td>
                                    <td><span class=\"datenaiss\">{{ i.etudiant.dateExamen }}</span></td>
                                    <td><span class=\"lieunaiss\">{{ i.etudiant.lieunaissance }}</span></td>
                                    <td><span class=\"diplome\">{{ i.etudiant.specialite }}</span></td>
                                    <td><span class=\"option\">{{ i.etudiant.optionEtud }}</span></td>
                                    <td><span class=\"\">{{ i.typeDemande }}</span></td>
                                    <td><span class=\"\">{{ i.etatDemande }}</span></td>

                                    <td class=\"center\">
                                        <a href=\"{{ path('demande_tout_imprimer', {'id' : i.id}) }}\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-print\"></i> Imprimer</a>
                                    </td>
                                </tr>
                            {% endfor %}

                            </tbody>
                        </table>
                    </div>

                {% endif %}


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                {#Footer#}
            </div>
            <!-- /.box-footer-->
        </div>
    </section>

{% endblock %}", "AppBundle:Default/etudiant:list_a_imprimer.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/src/AppBundle/Resources/views/Default/etudiant/list_a_imprimer.html.twig");
    }
}
