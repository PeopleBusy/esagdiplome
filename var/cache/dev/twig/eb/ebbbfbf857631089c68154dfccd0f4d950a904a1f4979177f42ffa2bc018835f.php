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
        $__internal_f440bac11c8869aa40685b38722aa111cff792a1544e4df76f3979eccac39fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f440bac11c8869aa40685b38722aa111cff792a1544e4df76f3979eccac39fb2->enter($__internal_f440bac11c8869aa40685b38722aa111cff792a1544e4df76f3979eccac39fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/impression:list_impression.html.twig"));

        $__internal_d308c424412b35dd0ecf7c2fe5f8fc7d4e941cc2187d4877f4fa69c2a1a312fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d308c424412b35dd0ecf7c2fe5f8fc7d4e941cc2187d4877f4fa69c2a1a312fc->enter($__internal_d308c424412b35dd0ecf7c2fe5f8fc7d4e941cc2187d4877f4fa69c2a1a312fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/impression:list_impression.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f440bac11c8869aa40685b38722aa111cff792a1544e4df76f3979eccac39fb2->leave($__internal_f440bac11c8869aa40685b38722aa111cff792a1544e4df76f3979eccac39fb2_prof);

        
        $__internal_d308c424412b35dd0ecf7c2fe5f8fc7d4e941cc2187d4877f4fa69c2a1a312fc->leave($__internal_d308c424412b35dd0ecf7c2fe5f8fc7d4e941cc2187d4877f4fa69c2a1a312fc_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_da0b24c250ddcf9de9a0cbced5168154cfe6439089b4ffe257e0227d95680899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0b24c250ddcf9de9a0cbced5168154cfe6439089b4ffe257e0227d95680899->enter($__internal_da0b24c250ddcf9de9a0cbced5168154cfe6439089b4ffe257e0227d95680899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ffe7a56250354e5c47190a15e440f70b04b3503d81c207602a3f90e25358eefe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe7a56250354e5c47190a15e440f70b04b3503d81c207602a3f90e25358eefe->enter($__internal_ffe7a56250354e5c47190a15e440f70b04b3503d81c207602a3f90e25358eefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Impressions ";
        
        $__internal_ffe7a56250354e5c47190a15e440f70b04b3503d81c207602a3f90e25358eefe->leave($__internal_ffe7a56250354e5c47190a15e440f70b04b3503d81c207602a3f90e25358eefe_prof);

        
        $__internal_da0b24c250ddcf9de9a0cbced5168154cfe6439089b4ffe257e0227d95680899->leave($__internal_da0b24c250ddcf9de9a0cbced5168154cfe6439089b4ffe257e0227d95680899_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1651cae9c0e43ab501111828808159e493b849e2a8a3ad211cc1657b6782417a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1651cae9c0e43ab501111828808159e493b849e2a8a3ad211cc1657b6782417a->enter($__internal_1651cae9c0e43ab501111828808159e493b849e2a8a3ad211cc1657b6782417a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1fec21ae05b3b311cd6b83ade99bf905ed272484795da9d9a546c22f4700139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fec21ae05b3b311cd6b83ade99bf905ed272484795da9d9a546c22f4700139->enter($__internal_d1fec21ae05b3b311cd6b83ade99bf905ed272484795da9d9a546c22f4700139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <th>Type</th>
                                <th>Enregistré par</th>
                                <th>Date Enreg.</th>
                                <th>Imprimé par</th>
                                <th>Date Impr.</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["impressions"] ?? $this->getContext($context, "impressions")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 120
                echo "                                <tr class=\"\">
                                    <td class=\"hide\"><input type=\"checkbox\"/></td>
                                    <td class=\"hide\"><span class=\"id\">";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"badge bg-defaul matricule\">";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "mention", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"nom\">";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "prenom", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"datenaiss\">";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "dateExamen", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"lieunaiss\">";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "lieunaissance", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"diplome\">";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "specialite", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"option\">";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["i"], "demande", array()), "etudiant", array()), "optionEtud", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "demande", array()), "typeDemande", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "demande", array()), "enregistrePar", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 131
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "demande", array()), "dateEnregistrement", array()), "d/m/Y h:i:s"), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "imprimePar", array()), "html", null, true);
                echo "</span></td>
                                    <td><span class=\"\">";
                // line 133
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "dateImpression", array()), "d/m/Y h:i:s"), "html", null, true);
                echo "</span></td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "
                            </tbody>
                        </table>
                    </div>

                ";
        }
        // line 142
        echo "

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 148
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_d1fec21ae05b3b311cd6b83ade99bf905ed272484795da9d9a546c22f4700139->leave($__internal_d1fec21ae05b3b311cd6b83ade99bf905ed272484795da9d9a546c22f4700139_prof);

        
        $__internal_1651cae9c0e43ab501111828808159e493b849e2a8a3ad211cc1657b6782417a->leave($__internal_1651cae9c0e43ab501111828808159e493b849e2a8a3ad211cc1657b6782417a_prof);

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
        return array (  278 => 148,  271 => 142,  263 => 136,  254 => 133,  250 => 132,  246 => 131,  242 => 130,  238 => 129,  234 => 128,  230 => 127,  226 => 126,  222 => 125,  216 => 124,  212 => 123,  208 => 122,  204 => 120,  200 => 119,  177 => 98,  173 => 96,  171 => 95,  153 => 80,  124 => 54,  111 => 43,  100 => 35,  83 => 20,  81 => 19,  68 => 8,  59 => 7,  41 => 4,  11 => 1,);
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

{% endblock %}", "AppBundle:Default/impression:list_impression.html.twig", "/Users/Rachid/Documents/Projet Client/ulimprime/src/AppBundle/Resources/views/Default/impression/list_impression.html.twig");
    }
}
