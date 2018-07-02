<?php

/* AppBundle:Default/impression:list_impression.html.twig */
class __TwigTemplate_cbf52c7d4e7dd202661467cf33ae729df998bab5b43bb6baf020b536c51cbace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/impression:list_impression.html.twig", 1);
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
        $__internal_ef74fa020ccdc44c2d2a2eac52f01e0b579a0c9c591610dacc4c6c6caf2efa44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef74fa020ccdc44c2d2a2eac52f01e0b579a0c9c591610dacc4c6c6caf2efa44->enter($__internal_ef74fa020ccdc44c2d2a2eac52f01e0b579a0c9c591610dacc4c6c6caf2efa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/impression:list_impression.html.twig"));

        $__internal_c23ee8c87a98b947deca721f357e97684a9d27e637fe4bc303a2507c9d3f07ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23ee8c87a98b947deca721f357e97684a9d27e637fe4bc303a2507c9d3f07ca->enter($__internal_c23ee8c87a98b947deca721f357e97684a9d27e637fe4bc303a2507c9d3f07ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/impression:list_impression.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef74fa020ccdc44c2d2a2eac52f01e0b579a0c9c591610dacc4c6c6caf2efa44->leave($__internal_ef74fa020ccdc44c2d2a2eac52f01e0b579a0c9c591610dacc4c6c6caf2efa44_prof);

        
        $__internal_c23ee8c87a98b947deca721f357e97684a9d27e637fe4bc303a2507c9d3f07ca->leave($__internal_c23ee8c87a98b947deca721f357e97684a9d27e637fe4bc303a2507c9d3f07ca_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a5986d5743230e804134077979895b604f411e92b359166764adf86fda6cce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5986d5743230e804134077979895b604f411e92b359166764adf86fda6cce2->enter($__internal_0a5986d5743230e804134077979895b604f411e92b359166764adf86fda6cce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b40835615626170ed20afec8349f0f40fca71042e5be922b2341374c5b63c2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40835615626170ed20afec8349f0f40fca71042e5be922b2341374c5b63c2df->enter($__internal_b40835615626170ed20afec8349f0f40fca71042e5be922b2341374c5b63c2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Impressions ";
        
        $__internal_b40835615626170ed20afec8349f0f40fca71042e5be922b2341374c5b63c2df->leave($__internal_b40835615626170ed20afec8349f0f40fca71042e5be922b2341374c5b63c2df_prof);

        
        $__internal_0a5986d5743230e804134077979895b604f411e92b359166764adf86fda6cce2->leave($__internal_0a5986d5743230e804134077979895b604f411e92b359166764adf86fda6cce2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_091dc49b5bc4cfda6171ec9a919aa16468f4cffc7ff47a50538c1ac5155c5cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091dc49b5bc4cfda6171ec9a919aa16468f4cffc7ff47a50538c1ac5155c5cab->enter($__internal_091dc49b5bc4cfda6171ec9a919aa16468f4cffc7ff47a50538c1ac5155c5cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37afc4da89aa5eaeac099803be2fb7f51f08362184a49b0d7f19fafad8e4f066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37afc4da89aa5eaeac099803be2fb7f51f08362184a49b0d7f19fafad8e4f066->enter($__internal_37afc4da89aa5eaeac099803be2fb7f51f08362184a49b0d7f19fafad8e4f066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-print\"></i> Impressions</a></li>
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
                <div class=\"panel-group hide\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
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
        if (twig_test_empty(($context["impressions"] ?? $this->getContext($context, "impressions")))) {
            // line 96
            echo "                    <h3 style=\"text-align: center;\">Aucun enregistrement trouvé</h3>
                ";
        } else {
            // line 98
            echo "
                    <div class=\"col-md-12 table-responsive marTop25px\">
                        <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th class=\"hide\"><input type=\"checkbox\"/></th>
                                <th class=\"hide\">N° Enreg.</th>
                                <th>Matricule</th>
                                <th>Etudiant</th>
                                <th>Date naiss.</th>
                                <th>Lieu naiss.</th>
                                <th>Diplôme</th>
                                <th>Option</th>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Enregistré par</th>
                                <th>Date Enreg.</th>
                                <th>Imprimé par</th>
                                <th>Date Impr.</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["impressions"] ?? $this->getContext($context, "impressions")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 121
                echo "                                <tr class=\"\">
                                    <td class=\"hide\"><input type=\"checkbox\"/></td>
                                    <td class=\"hide\"><span class=\"id\">";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"badge bg-defaul matricule\">";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "mention", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"nom\">";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"datenaiss\">";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "dateExamen", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"lieunaiss\">";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "lieunaissance", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"diplome\">";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "specialite", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"option\">";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "optionEtud", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"option\">";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "genre", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "demande", array()), "typeDemande", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "demande", array()), "enregistrePar", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 133
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "demande", array()), "dateEnregistrement", array()), "d/m/Y h:i:s"), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "imprimePar", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 135
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "dateImpression", array()), "d/m/Y h:i:s"), "html", null, true);
                echo "</span></td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "
                            </tbody>
                        </table>
                    </div>

                ";
        }
        // line 144
        echo "

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 150
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_37afc4da89aa5eaeac099803be2fb7f51f08362184a49b0d7f19fafad8e4f066->leave($__internal_37afc4da89aa5eaeac099803be2fb7f51f08362184a49b0d7f19fafad8e4f066_prof);

        
        $__internal_091dc49b5bc4cfda6171ec9a919aa16468f4cffc7ff47a50538c1ac5155c5cab->leave($__internal_091dc49b5bc4cfda6171ec9a919aa16468f4cffc7ff47a50538c1ac5155c5cab_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/impression:list_impression.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 150,  276 => 144,  268 => 138,  259 => 135,  255 => 134,  251 => 133,  247 => 132,  243 => 131,  239 => 130,  235 => 129,  231 => 128,  227 => 127,  223 => 126,  217 => 125,  213 => 124,  209 => 123,  205 => 121,  201 => 120,  177 => 98,  173 => 96,  171 => 95,  153 => 80,  124 => 54,  111 => 43,  100 => 35,  83 => 20,  81 => 19,  68 => 8,  59 => 7,  41 => 4,  11 => 1,);
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


{% block title %} Impressions {% endblock %}


{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-print\"></i> Impressions</a></li>
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
                <div class=\"panel-group hide\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
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

                {% if impressions is empty  %}
                    <h3 style=\"text-align: center;\">Aucun enregistrement trouvé</h3>
                {% else %}

                    <div class=\"col-md-12 table-responsive marTop25px\">
                        <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                            <thead>
                            <tr>
                                <th class=\"hide\"><input type=\"checkbox\"/></th>
                                <th class=\"hide\">N° Enreg.</th>
                                <th>Matricule</th>
                                <th>Etudiant</th>
                                <th>Date naiss.</th>
                                <th>Lieu naiss.</th>
                                <th>Diplôme</th>
                                <th>Option</th>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Enregistré par</th>
                                <th>Date Enreg.</th>
                                <th>Imprimé par</th>
                                <th>Date Impr.</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for i in impressions %}
                                <tr class=\"\">
                                    <td class=\"hide\"><input type=\"checkbox\"/></td>
                                    <td class=\"hide\"><span class=\"id\">{{ i.id }}</span></td>
                                    <td><span class=\"badge bg-defaul matricule\">{{ i.demande.etudiant.mention }}</span></td>
                                    <td><span class=\"nom\">{{ i.demande.etudiant.nom }} {{ i.demande.etudiant.prenom }}</span></td>
                                    <td><span class=\"datenaiss\">{{ i.demande.etudiant.dateExamen }}</span></td>
                                    <td><span class=\"lieunaiss\">{{ i.demande.etudiant.lieunaissance }}</span></td>
                                    <td><span class=\"diplome\">{{ i.demande.etudiant.specialite }}</span></td>
                                    <td><span class=\"option\">{{ i.demande.etudiant.optionEtud }}</span></td>
                                    <td><span class=\"option\">{{ i.demande.etudiant.genre }}</span></td>
                                    <td><span class=\"\">{{ i.demande.typeDemande }}</span></td>
                                    <td><span class=\"\">{{ i.demande.enregistrePar }}</span></td>
                                    <td><span class=\"\">{{ i.demande.dateEnregistrement|date('d/m/Y h:i:s') }}</span></td>
                                    <td><span class=\"\">{{ i.imprimePar }}</span></td>
                                    <td><span class=\"\">{{ i.dateImpression|date('d/m/Y h:i:s') }}</span></td>
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

{% endblock %}", "AppBundle:Default/impression:list_impression.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/src/AppBundle/Resources/views/Default/impression/list_impression.html.twig");
    }
}
