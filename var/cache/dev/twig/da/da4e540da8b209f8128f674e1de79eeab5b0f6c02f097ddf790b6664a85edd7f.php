<?php

/* AppBundle:Default/diplome:new.html.twig */
class __TwigTemplate_17bdf7515e02565a4ef013a2ca1de0e6e4fd4c04f60d6034f54c7f73f2d3d77c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/diplome:new.html.twig", 1);
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
        $__internal_027f362247039623ccd816684e68a6bb1515f8b5f572cf18a0281f3b2756e451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027f362247039623ccd816684e68a6bb1515f8b5f572cf18a0281f3b2756e451->enter($__internal_027f362247039623ccd816684e68a6bb1515f8b5f572cf18a0281f3b2756e451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/diplome:new.html.twig"));

        $__internal_09ae5951aba052f94a45724ab0964277dddd73e7870a247a2f9d15d4ec27073c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ae5951aba052f94a45724ab0964277dddd73e7870a247a2f9d15d4ec27073c->enter($__internal_09ae5951aba052f94a45724ab0964277dddd73e7870a247a2f9d15d4ec27073c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/diplome:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027f362247039623ccd816684e68a6bb1515f8b5f572cf18a0281f3b2756e451->leave($__internal_027f362247039623ccd816684e68a6bb1515f8b5f572cf18a0281f3b2756e451_prof);

        
        $__internal_09ae5951aba052f94a45724ab0964277dddd73e7870a247a2f9d15d4ec27073c->leave($__internal_09ae5951aba052f94a45724ab0964277dddd73e7870a247a2f9d15d4ec27073c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2af0d2de65850b4684942d95d5503a0b9d85921f3a66aa163ac8e3ea043bcd81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af0d2de65850b4684942d95d5503a0b9d85921f3a66aa163ac8e3ea043bcd81->enter($__internal_2af0d2de65850b4684942d95d5503a0b9d85921f3a66aa163ac8e3ea043bcd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c8a9aeb4661281e7bcab3cbd492cae41703a99cce778a4c12e45cd9823fbca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8a9aeb4661281e7bcab3cbd492cae41703a99cce778a4c12e45cd9823fbca0->enter($__internal_5c8a9aeb4661281e7bcab3cbd492cae41703a99cce778a4c12e45cd9823fbca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Diplômes ";
        
        $__internal_5c8a9aeb4661281e7bcab3cbd492cae41703a99cce778a4c12e45cd9823fbca0->leave($__internal_5c8a9aeb4661281e7bcab3cbd492cae41703a99cce778a4c12e45cd9823fbca0_prof);

        
        $__internal_2af0d2de65850b4684942d95d5503a0b9d85921f3a66aa163ac8e3ea043bcd81->leave($__internal_2af0d2de65850b4684942d95d5503a0b9d85921f3a66aa163ac8e3ea043bcd81_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfb3130172bb70886adcc967f54db7babaa4038ed7d2ef837dd04c9ae90238df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb3130172bb70886adcc967f54db7babaa4038ed7d2ef837dd04c9ae90238df->enter($__internal_cfb3130172bb70886adcc967f54db7babaa4038ed7d2ef837dd04c9ae90238df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b82cd5eb91428cd3180d86c00150678242f51b592854fcba9a219ca0c98e1008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82cd5eb91428cd3180d86c00150678242f51b592854fcba9a219ca0c98e1008->enter($__internal_b82cd5eb91428cd3180d86c00150678242f51b592854fcba9a219ca0c98e1008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-paper-plane\"></i> Diplômes</a></li>
            <li class=\"active\">Ajouter</li>
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
                    <i class=\"fa fa-paper-plane\"></i>
                    Ajouter diplômes
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
        // line 88
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                
                <div class=\"form-group col-md-3\">
                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantite", array()), 'row');
        echo "
                </div>
                
                <div class=\"form-group col-md-2\">
                    <button type=\"submit\" class=\"btn btn-success marTop25px\">Enregistrer</button>
                </div>

                <div class=\"col-md-7 img-responsive\" >
                    <img class=\"pull-right\" style=\"width: 20%;height: 10%;\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo_esag.jpg"), "html", null, true);
        echo "\">
                </div>

                ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


                <div class=\"col-md-12 col-xs-12 marTop25px\">

                    <div class=\"col-md-4 col-xs-4\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3>";
        // line 111
        echo twig_escape_filter($this->env, ($context["nbDiplomes"] ?? $this->getContext($context, "nbDiplomes")), "html", null, true);
        echo "</h3>

                                <p>Total diplômes</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-ios-paper\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                        class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-xs-4\">
                        <!-- small box -->
                        <div class=\"small-box bg-blue\">
                            <div class=\"inner\">
                                <h3>";
        // line 126
        echo twig_escape_filter($this->env, ($context["nbImpressions"] ?? $this->getContext($context, "nbImpressions")), "html", null, true);
        echo "</h3>

                                <p>Total impressions</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-ios-printer\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                        class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-xs-4\">
                        <!-- small box -->
                        <div class=\"small-box bg-red\">
                            <div class=\"inner\">
                                <h3>";
        // line 141
        echo twig_escape_filter($this->env, (($context["nbDiplomes"] ?? $this->getContext($context, "nbDiplomes")) - ($context["nbImpressions"] ?? $this->getContext($context, "nbImpressions"))), "html", null, true);
        echo "</h3>

                                <p>Nombre de diplômes restants</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-ios-paper-outline\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                        class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>

                    ";
        // line 153
        if ( !twig_test_empty(($context["diplomes"] ?? $this->getContext($context, "diplomes")))) {
            // line 154
            echo "
                        <div class=\"table-responsive col-md-12 marTop25px\">
                            <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"hide\">Id</th>
                                    <th>Quantité</th>
                                    <th>Ajouté par</th>
                                    <th>Date ajout</th>
                                    <th>Action(s)</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["diplomes"] ?? $this->getContext($context, "diplomes")));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 168
                echo "                                    <tr class=\"\">
                                        <td class=\"hide\"><span class=\"id\">";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "id", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"libelle badge\">";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "quantite", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"valeur\">";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "auteur", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"valeur\">";
                // line 172
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["d"], "dateAjout", array()), "d/m/Y h:i:s"), "html", null, true);
                echo "</span></td>
                                        <td class=\"text-center\">-</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "
                                </tbody>
                            </table>
                        </div>

                    ";
        }
        // line 182
        echo "                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 189
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_b82cd5eb91428cd3180d86c00150678242f51b592854fcba9a219ca0c98e1008->leave($__internal_b82cd5eb91428cd3180d86c00150678242f51b592854fcba9a219ca0c98e1008_prof);

        
        $__internal_cfb3130172bb70886adcc967f54db7babaa4038ed7d2ef837dd04c9ae90238df->leave($__internal_cfb3130172bb70886adcc967f54db7babaa4038ed7d2ef837dd04c9ae90238df_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/diplome:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 189,  308 => 182,  300 => 176,  290 => 172,  286 => 171,  282 => 170,  278 => 169,  275 => 168,  271 => 167,  256 => 154,  254 => 153,  239 => 141,  221 => 126,  203 => 111,  191 => 102,  185 => 99,  174 => 91,  168 => 88,  144 => 66,  133 => 58,  116 => 43,  114 => 42,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Diplômes {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-paper-plane\"></i> Diplômes</a></li>
            <li class=\"active\">Ajouter</li>
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
                    <i class=\"fa fa-paper-plane\"></i>
                    Ajouter diplômes
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
                
                <div class=\"form-group col-md-3\">
                    {{ form_row(form.quantite) }}
                </div>
                
                <div class=\"form-group col-md-2\">
                    <button type=\"submit\" class=\"btn btn-success marTop25px\">Enregistrer</button>
                </div>

                <div class=\"col-md-7 img-responsive\" >
                    <img class=\"pull-right\" style=\"width: 20%;height: 10%;\" src=\"{{ asset('img/logo_esag.jpg') }}\">
                </div>

                {{ form_end(form) }}


                <div class=\"col-md-12 col-xs-12 marTop25px\">

                    <div class=\"col-md-4 col-xs-4\">
                        <!-- small box -->
                        <div class=\"small-box bg-green\">
                            <div class=\"inner\">
                                <h3>{{ nbDiplomes }}</h3>

                                <p>Total diplômes</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-ios-paper\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                        class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-xs-4\">
                        <!-- small box -->
                        <div class=\"small-box bg-blue\">
                            <div class=\"inner\">
                                <h3>{{ nbImpressions }}</h3>

                                <p>Total impressions</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-ios-printer\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                        class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-xs-4\">
                        <!-- small box -->
                        <div class=\"small-box bg-red\">
                            <div class=\"inner\">
                                <h3>{{ nbDiplomes - nbImpressions }}</h3>

                                <p>Nombre de diplômes restants</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-ios-paper-outline\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                        class=\"fa fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>

                    {% if diplomes is not empty  %}

                        <div class=\"table-responsive col-md-12 marTop25px\">
                            <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"hide\">Id</th>
                                    <th>Quantité</th>
                                    <th>Ajouté par</th>
                                    <th>Date ajout</th>
                                    <th>Action(s)</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for d in diplomes %}
                                    <tr class=\"\">
                                        <td class=\"hide\"><span class=\"id\">{{ d.id }}</span></td>
                                        <td><span class=\"libelle badge\">{{ d.quantite }}</span></td>
                                        <td><span class=\"valeur\">{{ d.auteur }}</span></td>
                                        <td><span class=\"valeur\">{{ d.dateAjout|date('d/m/Y h:i:s') }}</span></td>
                                        <td class=\"text-center\">-</td>
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

{% endblock %}", "AppBundle:Default/diplome:new.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/src/AppBundle/Resources/views/Default/diplome/new.html.twig");
    }
}
