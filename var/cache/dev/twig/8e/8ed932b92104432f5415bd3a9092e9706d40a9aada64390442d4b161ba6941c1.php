<?php

/* AppBundle:Default/impression:tout_imprimer.html.twig */
class __TwigTemplate_993c21841bdfb17e036d617f2dfc6d2b0f75e58e71a1b599e9d930b2d3f73953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/impression:tout_imprimer.html.twig", 1);
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
        $__internal_ed5c85fe2ffeba7c8a8cad20b76d1f4d9fe13add39e7fe6a5b28db9276027d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5c85fe2ffeba7c8a8cad20b76d1f4d9fe13add39e7fe6a5b28db9276027d8e->enter($__internal_ed5c85fe2ffeba7c8a8cad20b76d1f4d9fe13add39e7fe6a5b28db9276027d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/impression:tout_imprimer.html.twig"));

        $__internal_fdbe705493001117a07565d7f336e129c1f519de2a00fe632d5d1a51102c2ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdbe705493001117a07565d7f336e129c1f519de2a00fe632d5d1a51102c2ce1->enter($__internal_fdbe705493001117a07565d7f336e129c1f519de2a00fe632d5d1a51102c2ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/impression:tout_imprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed5c85fe2ffeba7c8a8cad20b76d1f4d9fe13add39e7fe6a5b28db9276027d8e->leave($__internal_ed5c85fe2ffeba7c8a8cad20b76d1f4d9fe13add39e7fe6a5b28db9276027d8e_prof);

        
        $__internal_fdbe705493001117a07565d7f336e129c1f519de2a00fe632d5d1a51102c2ce1->leave($__internal_fdbe705493001117a07565d7f336e129c1f519de2a00fe632d5d1a51102c2ce1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6aa58802521ef7ff399827fba53049f3d5dfec69c36b137c1b96ab2a1c486ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6aa58802521ef7ff399827fba53049f3d5dfec69c36b137c1b96ab2a1c486ca->enter($__internal_d6aa58802521ef7ff399827fba53049f3d5dfec69c36b137c1b96ab2a1c486ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b291ded0bace6be2313aba30643afd4fdb9841135ee09348fd5968ae3ecab25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b291ded0bace6be2313aba30643afd4fdb9841135ee09348fd5968ae3ecab25c->enter($__internal_b291ded0bace6be2313aba30643afd4fdb9841135ee09348fd5968ae3ecab25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Impression ";
        
        $__internal_b291ded0bace6be2313aba30643afd4fdb9841135ee09348fd5968ae3ecab25c->leave($__internal_b291ded0bace6be2313aba30643afd4fdb9841135ee09348fd5968ae3ecab25c_prof);

        
        $__internal_d6aa58802521ef7ff399827fba53049f3d5dfec69c36b137c1b96ab2a1c486ca->leave($__internal_d6aa58802521ef7ff399827fba53049f3d5dfec69c36b137c1b96ab2a1c486ca_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d48a1da121881527cdaf291cd0d05736d06781544c5eba4374ffd16332ea1bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48a1da121881527cdaf291cd0d05736d06781544c5eba4374ffd16332ea1bff->enter($__internal_d48a1da121881527cdaf291cd0d05736d06781544c5eba4374ffd16332ea1bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef84269b2de72d238ca7f4df046f8fcf8b7e63add2709f205509002fea2c408a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef84269b2de72d238ca7f4df046f8fcf8b7e63add2709f205509002fea2c408a->enter($__internal_ef84269b2de72d238ca7f4df046f8fcf8b7e63add2709f205509002fea2c408a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-eye\"></i> Impression</a></li>
            <li class=\"active\">Aperçu</li>
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
                    <i class=\"fa fa-eye\"></i>
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
            <div class=\"box-body\" id=\"box-container\">

                ";
        // line 67
        if (twig_test_empty(($context["demandes"] ?? $this->getContext($context, "demandes")))) {
            // line 68
            echo "                    <h3 style=\"text-align: center;\">Aucun enregistrement trouvé</h3>
                ";
        } else {
            // line 70
            echo "
                    <div class=\"col-md-12\">
                        <button type=\"button\" class=\"btn btn-success avoid-this\" id=\"btn_print\">
                            <i class=\"fa fa-print\"></i>
                            Imprimer
                        </button>
                    </div>

                    <div id=\"html-2-pdfwrapper\" class=\"col-md-12\">

                        ";
            // line 80
            if ((($context["id"] ?? $this->getContext($context, "id")) == 0)) {
                // line 81
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["demandes"] ?? $this->getContext($context, "demandes")));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 82
                    echo "
                                <div class=\"impression\" style=\"font-size: 15px;padding: 110px 70px 10px 85px;\">
                                    ";
                    // line 84
                    if (($this->getAttribute($context["i"], "typeDemande", array()) == "Duplicata")) {
                        // line 85
                        echo "                                        <p class=\"text-red pull-right\" style=\"text-transform: uppercase;font-size: 35px !important;margin-right: 30px !important;margin-top: 15px !important;font-family: 'Alfa Slab One'\">
                                            ";
                        // line 86
                        echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeDemande", array()), "html", null, true);
                        echo "</p>
                                        <div style=\"margin-top: 190px;\"></div>
                                    ";
                    } else {
                        // line 89
                        echo "                                        <p class=\"text-white\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeDemande", array()), "html", null, true);
                        echo "</p>
                                        <div style=\"margin-top: 170px;\"></div>
                                    ";
                    }
                    // line 92
                    echo "
                                    <p style=\"font-size: 12px !important;\">délivre à</p>
                                    <p class=\"demande\" data-id=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                    echo "\">
                                        <span style=\"margin-right: 250px;\">Mr /Mlle </span>
                                        <span class=\"text-bold\" style=\"font-size: 35px !important;font-family: 'Italianno';\">";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "nom", array()), "html", null, true);
                    echo "&nbsp;&nbsp;";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "prenom", array()), "html", null, true);
                    echo "</span>
                                    </p>
                                    <p class=\"\">
                                        <span style=\"margin-right: 220px;\">Né (e) le </span>
                                        <span style=\"margin-right: 90px;font-size: 20px !important;\" class=\"text-bold\">";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "dateExamen", array()), "html", null, true);
                    echo " </span>
                                        <span  style=\"margin-right: 90px;\">à </span>
                                        <span class=\"text-bold\" style=\"font-size: 20px !important;\">";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "lieunaissance", array()), "html", null, true);
                    echo " </span>
                                    </p>
                                    <p class=\"\">
                                        <span style=\"margin-right: 300px;\">N° Matricule </span>
                                        <span class=\"text-bold\" style=\"font-size: 20px !important;\">";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "mention", array()), "html", null, true);
                    echo " </span>
                                    </p>
                                    <p class=\"\">
                                        <span>Le </span><span class=\"text-bold\" style=\"font-size: 20px !important;\">DIPLÔME </span><span style=\"margin-right: 20px;\">de ";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "genre", array()), "html", null, true);
                    echo " EN </span>
                                        <span class=\"text-bold\">**** ";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "specialite", array()), "html", null, true);
                    echo " ****</span>
                                    </p>
                                    <p class=\"\">
                                        <span style=\"margin-right: 200px;\">Option: </span>
                                        <span class=\"text-bold\" style=\"font-size: 20px !important;\">";
                    // line 114
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "etudiant", array()), "optionEtud", array()), "html", null, true);
                    echo "</span>
                                    </p>
                                    <p style=\"font-size: 13px !important;\">
                                        <span>Avec tous les droits, honneurs et privilèges qui se rattachent à ce grade.</span>
                                    </p>
                                    <p style=\"font-size: 13px !important;\">
                                        <span>N° d'enregistrement </span>
                                        <span class=\"text-bold\">00092NASK/2016/LP/ESAG-NDE</span>
                                    </p>
                                    <p style=\"font-size: 13px !important; margin-left: 620px !important;\">Fait à Lomé, le ";
                    // line 123
                    echo twig_escape_filter($this->env, ($context["current_date"] ?? $this->getContext($context, "current_date")), "html", null, true);
                    echo "</p>
                                    <p style=\"margin-top: 120px !important;\">
                                        <span style=\"margin-right: 280px;\"> </span>
                                        <span style=\"margin-right: 130px;font-size: 15px !important;text-decoration: underline;\">
                                        ";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["directeurAcademique"] ?? $this->getContext($context, "directeurAcademique")), "valeur", array()), "html", null, true);
                    echo "
                                    </span>
                                        <span  style=\"font-size: 15px !important;text-decoration: underline;margin-right: 0px !important;\">";
                    // line 129
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["directeurGenerale"] ?? $this->getContext($context, "directeurGenerale")), "valeur", array()), "html", null, true);
                    echo " </span>
                                    </p>
                                </div>


                                <div style=\"page-break-after:always\"></div>


                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "
                            ";
            } else {
                // line 140
                echo "
                                <div class=\"impression\" style=\"font-size: 15px;padding: 110px 70px 10px 85px;\">
                                    ";
                // line 142
                if (($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "typeDemande", array()) == "Duplicata")) {
                    // line 143
                    echo "                                        <p class=\"text-red pull-right\" style=\"text-transform: uppercase;font-size: 35px !important; margin-right: 30px !important;margin-top: 15px !important;font-family: 'Alfa Slab One'\">
                                            ";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "typeDemande", array()), "html", null, true);
                    echo "</p>
                                        <div style=\"margin-top: 190px;\"></div>
                                    ";
                } else {
                    // line 147
                    echo "                                        <p class=\"text-white\" style='margin-top:50px; margin-bottom: 50px;'>";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "typeDemande", array()), "html", null, true);
                    echo "</p>
                                        <div style=\"margin-top: 170px;\"></div>
                                    ";
                }
                // line 150
                echo "
                                    <p style=\"font-size: 12px !important;\">délivre à</p>
                                    <p class=\"demande\" data-id=\"";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "id", array()), "html", null, true);
                echo "\">
                                        <span style=\"margin-right: 250px;\">Mr /Mlle </span>
                                        <span class=\"text-bold\" style=\"font-size: 35px !important;font-family: 'Italianno';\">
                                        ";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "nom", array()), "html", null, true);
                echo "&nbsp;&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "prenom", array()), "html", null, true);
                echo "</span>
                                    </p>
                                    <p class=\"\">
                                        <span style=\"margin-right: 220px;\">Né (e) le </span>
                                        <span style=\"margin-right: 90px;font-size: 20px !important;\" class=\"text-bold\">";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "dateExamen", array()), "html", null, true);
                echo " </span>
                                        <span  style=\"margin-right: 90px;\">à </span>
                                        <span class=\"text-bold\" style=\"font-size: 20px !important;\">";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "lieunaissance", array()), "html", null, true);
                echo " </span>
                                    </p>
                                    <p class=\"\">
                                        <span style=\"margin-right: 300px;\">N° Matricule </span>
                                        <span class=\"text-bold\" style=\"font-size: 20px !important;\">";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "mention", array()), "html", null, true);
                echo " </span>
                                    </p>
                                    <p class=\"\">
                                        <span>Le </span><span class=\"text-bold\" style=\"font-size: 20px !important;\">DIPLÔME </span><span style=\"margin-right: 20px;\">de ";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "genre", array()), "html", null, true);
                echo " EN </span>
                                        <span class=\"text-bold\">**** ";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "specialite", array()), "html", null, true);
                echo " ****</span>
                                    </p>
                                    <p class=\"\">
                                        <span style=\"margin-right: 200px;\">Option: </span>
                                        <span class=\"text-bold\" style=\"font-size: 20px !important;\">";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["demandes"] ?? $this->getContext($context, "demandes")), "etudiant", array()), "optionEtud", array()), "html", null, true);
                echo "</span>
                                    </p>
                                    <p style=\"font-size: 13px !important;\">
                                        <span>Avec tous les droits, honneurs et privilèges qui se rattachent à ce grade.</span>
                                    </p>
                                    <p style=\"font-size: 13px !important;\">
                                        <span>N° d'enregistrement </span>
                                        <span class=\"text-bold\">00092NASK/2016/LP/ESAG-NDE</span>
                                    </p>
                                    <p style=\"font-size: 13px !important; margin-left: 620px !important;\">Fait à Lomé, le ";
                // line 182
                echo twig_escape_filter($this->env, ($context["current_date"] ?? $this->getContext($context, "current_date")), "html", null, true);
                echo "</p>
                                    <p style=\"margin-top: 110px !important;\">
                                        <span style=\"margin-right: 280px;\"> </span>
                                        <span style=\"margin-right: 130px;font-size: 15px !important;text-decoration: underline;\">
                                        ";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute(($context["directeurAcademique"] ?? $this->getContext($context, "directeurAcademique")), "valeur", array()), "html", null, true);
                echo "
                                    </span>
                                        <span  style=\"font-size: 15px !important;text-decoration: underline;margin-right: 0px !important;\">";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute(($context["directeurGenerale"] ?? $this->getContext($context, "directeurGenerale")), "valeur", array()), "html", null, true);
                echo " </span>
                                    </p>
                                </div>


                        ";
            }
            // line 194
            echo "
                    </div>

                ";
        }
        // line 198
        echo "

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 204
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_ef84269b2de72d238ca7f4df046f8fcf8b7e63add2709f205509002fea2c408a->leave($__internal_ef84269b2de72d238ca7f4df046f8fcf8b7e63add2709f205509002fea2c408a_prof);

        
        $__internal_d48a1da121881527cdaf291cd0d05736d06781544c5eba4374ffd16332ea1bff->leave($__internal_d48a1da121881527cdaf291cd0d05736d06781544c5eba4374ffd16332ea1bff_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/impression:tout_imprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 204,  386 => 198,  380 => 194,  371 => 188,  366 => 186,  359 => 182,  347 => 173,  340 => 169,  336 => 168,  330 => 165,  323 => 161,  318 => 159,  309 => 155,  303 => 152,  299 => 150,  292 => 147,  286 => 144,  283 => 143,  281 => 142,  277 => 140,  273 => 138,  258 => 129,  253 => 127,  246 => 123,  234 => 114,  227 => 110,  223 => 109,  217 => 106,  210 => 102,  205 => 100,  196 => 96,  191 => 94,  187 => 92,  180 => 89,  174 => 86,  171 => 85,  169 => 84,  165 => 82,  160 => 81,  158 => 80,  146 => 70,  142 => 68,  140 => 67,  124 => 54,  111 => 43,  100 => 35,  83 => 20,  81 => 19,  68 => 8,  59 => 7,  41 => 4,  11 => 1,);
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


{% block title %} Impression {% endblock %}


{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-eye\"></i> Impression</a></li>
            <li class=\"active\">Aperçu</li>
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
                    <i class=\"fa fa-eye\"></i>
                   {{ libelle }}

                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\" id=\"box-container\">

                {% if demandes is empty  %}
                    <h3 style=\"text-align: center;\">Aucun enregistrement trouvé</h3>
                {% else %}

                    <div class=\"col-md-12\">
                        <button type=\"button\" class=\"btn btn-success avoid-this\" id=\"btn_print\">
                            <i class=\"fa fa-print\"></i>
                            Imprimer
                        </button>
                    </div>

                    <div id=\"html-2-pdfwrapper\" class=\"col-md-12\">

                        {% if id == 0 %}
                            {% for i in demandes %}

                                <div class=\"impression\" style=\"font-size: 15px;padding: 110px 70px 10px 85px;\">
                                    {% if i.typeDemande == 'Duplicata' %}
                                        <p class=\"text-red pull-right\" style=\"text-transform: uppercase;font-size: 35px !important;margin-right: 30px !important;margin-top: 15px !important;font-family: 'Alfa Slab One'\">
                                            {{ i.typeDemande }}</p>
                                        <div style=\"margin-top: 190px;\"></div>
                                    {% else %}
                                        <p class=\"text-white\">{{ i.typeDemande }}</p>
                                        <div style=\"margin-top: 170px;\"></div>
                                    {% endif %}

                                    <p style=\"font-size: 12px !important;\">délivre à</p>
                                    <p class=\"demande\" data-id=\"{{ i.id }}\">
                                        <span style=\"margin-right: 250px;\">Mr /Mlle </span>
                                        <span class=\"text-bold\" style=\"font-size: 35px !important;font-family: 'Italianno';\">{{ i.etudiant.nom }}&nbsp;&nbsp;{{ i.etudiant.prenom }}</span>
                                    </p>
                                    <p class=\"\">
                                        <span style=\"margin-right: 220px;\">Né (e) le </span>
                                        <span style=\"margin-right: 90px;font-size: 20px !important;\" class=\"text-bold\">{{ i.etudiant.dateExamen }} </span>
                                        <span  style=\"margin-right: 90px;\">à </span>
                                        <span class=\"text-bold\" style=\"font-size: 20px !important;\">{{ i.etudiant.lieunaissance }} </span>
                                    </p>
                                    <p class=\"\">
                                        <span style=\"margin-right: 300px;\">N° Matricule </span>
                                        <span class=\"text-bold\" style=\"font-size: 20px !important;\">{{ i.etudiant.mention }} </span>
                                    </p>
                                    <p class=\"\">
                                        <span>Le </span><span class=\"text-bold\" style=\"font-size: 20px !important;\">DIPLÔME </span><span style=\"margin-right: 20px;\">de {{ demandes.etudiant.genre }} EN </span>
                                        <span class=\"text-bold\">**** {{ i.etudiant.specialite }} ****</span>
                                    </p>
                                    <p class=\"\">
                                        <span style=\"margin-right: 200px;\">Option: </span>
                                        <span class=\"text-bold\" style=\"font-size: 20px !important;\">{{ i.etudiant.optionEtud }}</span>
                                    </p>
                                    <p style=\"font-size: 13px !important;\">
                                        <span>Avec tous les droits, honneurs et privilèges qui se rattachent à ce grade.</span>
                                    </p>
                                    <p style=\"font-size: 13px !important;\">
                                        <span>N° d'enregistrement </span>
                                        <span class=\"text-bold\">00092NASK/2016/LP/ESAG-NDE</span>
                                    </p>
                                    <p style=\"font-size: 13px !important; margin-left: 620px !important;\">Fait à Lomé, le {{ current_date }}</p>
                                    <p style=\"margin-top: 120px !important;\">
                                        <span style=\"margin-right: 280px;\"> </span>
                                        <span style=\"margin-right: 130px;font-size: 15px !important;text-decoration: underline;\">
                                        {{ directeurAcademique.valeur }}
                                    </span>
                                        <span  style=\"font-size: 15px !important;text-decoration: underline;margin-right: 0px !important;\">{{ directeurGenerale.valeur }} </span>
                                    </p>
                                </div>


                                <div style=\"page-break-after:always\"></div>


                            {% endfor %}

                            {% else %}

                                <div class=\"impression\" style=\"font-size: 15px;padding: 110px 70px 10px 85px;\">
                                    {% if demandes.typeDemande == 'Duplicata' %}
                                        <p class=\"text-red pull-right\" style=\"text-transform: uppercase;font-size: 35px !important; margin-right: 30px !important;margin-top: 15px !important;font-family: 'Alfa Slab One'\">
                                            {{ demandes.typeDemande }}</p>
                                        <div style=\"margin-top: 190px;\"></div>
                                    {% else %}
                                        <p class=\"text-white\" style='margin-top:50px; margin-bottom: 50px;'>{{ demandes.typeDemande }}</p>
                                        <div style=\"margin-top: 170px;\"></div>
                                    {% endif %}

                                    <p style=\"font-size: 12px !important;\">délivre à</p>
                                    <p class=\"demande\" data-id=\"{{ demandes.id }}\">
                                        <span style=\"margin-right: 250px;\">Mr /Mlle </span>
                                        <span class=\"text-bold\" style=\"font-size: 35px !important;font-family: 'Italianno';\">
                                        {{ demandes.etudiant.nom }}&nbsp;&nbsp;{{ demandes.etudiant.prenom }}</span>
                                    </p>
                                    <p class=\"\">
                                        <span style=\"margin-right: 220px;\">Né (e) le </span>
                                        <span style=\"margin-right: 90px;font-size: 20px !important;\" class=\"text-bold\">{{ demandes.etudiant.dateExamen }} </span>
                                        <span  style=\"margin-right: 90px;\">à </span>
                                        <span class=\"text-bold\" style=\"font-size: 20px !important;\">{{ demandes.etudiant.lieunaissance }} </span>
                                    </p>
                                    <p class=\"\">
                                        <span style=\"margin-right: 300px;\">N° Matricule </span>
                                        <span class=\"text-bold\" style=\"font-size: 20px !important;\">{{ demandes.etudiant.mention }} </span>
                                    </p>
                                    <p class=\"\">
                                        <span>Le </span><span class=\"text-bold\" style=\"font-size: 20px !important;\">DIPLÔME </span><span style=\"margin-right: 20px;\">de {{ demandes.etudiant.genre }} EN </span>
                                        <span class=\"text-bold\">**** {{ demandes.etudiant.specialite }} ****</span>
                                    </p>
                                    <p class=\"\">
                                        <span style=\"margin-right: 200px;\">Option: </span>
                                        <span class=\"text-bold\" style=\"font-size: 20px !important;\">{{ demandes.etudiant.optionEtud }}</span>
                                    </p>
                                    <p style=\"font-size: 13px !important;\">
                                        <span>Avec tous les droits, honneurs et privilèges qui se rattachent à ce grade.</span>
                                    </p>
                                    <p style=\"font-size: 13px !important;\">
                                        <span>N° d'enregistrement </span>
                                        <span class=\"text-bold\">00092NASK/2016/LP/ESAG-NDE</span>
                                    </p>
                                    <p style=\"font-size: 13px !important; margin-left: 620px !important;\">Fait à Lomé, le {{ current_date }}</p>
                                    <p style=\"margin-top: 110px !important;\">
                                        <span style=\"margin-right: 280px;\"> </span>
                                        <span style=\"margin-right: 130px;font-size: 15px !important;text-decoration: underline;\">
                                        {{ directeurAcademique.valeur }}
                                    </span>
                                        <span  style=\"font-size: 15px !important;text-decoration: underline;margin-right: 0px !important;\">{{ directeurGenerale.valeur }} </span>
                                    </p>
                                </div>


                        {% endif %}

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

{% endblock %}", "AppBundle:Default/impression:tout_imprimer.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/src/AppBundle/Resources/views/Default/impression/tout_imprimer.html.twig");
    }
}
