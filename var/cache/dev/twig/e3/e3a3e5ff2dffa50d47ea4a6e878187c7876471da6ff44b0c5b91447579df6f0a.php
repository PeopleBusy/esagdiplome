<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_e7925ec61133c20cc7193a21be209279955651a18f90eaced9c7419f91b9a7a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:index.html.twig", 1);
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
        $__internal_d55351469b882ac677d3d230bc2a4ee47bb09ca8c35b6368b9c0fabcf8b594d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55351469b882ac677d3d230bc2a4ee47bb09ca8c35b6368b9c0fabcf8b594d4->enter($__internal_d55351469b882ac677d3d230bc2a4ee47bb09ca8c35b6368b9c0fabcf8b594d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $__internal_76bbe97a6980fe737a9d139e51f7a3e8a5b978cacb573e6dcab3af1acd13c824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bbe97a6980fe737a9d139e51f7a3e8a5b978cacb573e6dcab3af1acd13c824->enter($__internal_76bbe97a6980fe737a9d139e51f7a3e8a5b978cacb573e6dcab3af1acd13c824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d55351469b882ac677d3d230bc2a4ee47bb09ca8c35b6368b9c0fabcf8b594d4->leave($__internal_d55351469b882ac677d3d230bc2a4ee47bb09ca8c35b6368b9c0fabcf8b594d4_prof);

        
        $__internal_76bbe97a6980fe737a9d139e51f7a3e8a5b978cacb573e6dcab3af1acd13c824->leave($__internal_76bbe97a6980fe737a9d139e51f7a3e8a5b978cacb573e6dcab3af1acd13c824_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_be8e824be4859690906caacff3ef021e90bdd8094f8f0487860abd09981e9f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be8e824be4859690906caacff3ef021e90bdd8094f8f0487860abd09981e9f0d->enter($__internal_be8e824be4859690906caacff3ef021e90bdd8094f8f0487860abd09981e9f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54f6691d983e10dd85ac2806c80fb22c06ecd48f776473ea0e787375ae0a7b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f6691d983e10dd85ac2806c80fb22c06ecd48f776473ea0e787375ae0a7b53->enter($__internal_54f6691d983e10dd85ac2806c80fb22c06ecd48f776473ea0e787375ae0a7b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Tableau de board ";
        
        $__internal_54f6691d983e10dd85ac2806c80fb22c06ecd48f776473ea0e787375ae0a7b53->leave($__internal_54f6691d983e10dd85ac2806c80fb22c06ecd48f776473ea0e787375ae0a7b53_prof);

        
        $__internal_be8e824be4859690906caacff3ef021e90bdd8094f8f0487860abd09981e9f0d->leave($__internal_be8e824be4859690906caacff3ef021e90bdd8094f8f0487860abd09981e9f0d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_576c5d4404cc74dfbe5326bff1a4930493803bff6c7850556259867eadb7d9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_576c5d4404cc74dfbe5326bff1a4930493803bff6c7850556259867eadb7d9b6->enter($__internal_576c5d4404cc74dfbe5326bff1a4930493803bff6c7850556259867eadb7d9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36fb210b028f849286aa98688e9efd27d911f119265452a33a259e05773f55d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36fb210b028f849286aa98688e9efd27d911f119265452a33a259e05773f55d3->enter($__internal_36fb210b028f849286aa98688e9efd27d911f119265452a33a259e05773f55d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"callout callout-success hide\">
            <h4>Tip!</h4>

            <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar
                is bigger than your content because it prevents extra unwanted scrolling.</p>
        </div>

        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-dashboard\"></i>
                    Tableau de bord
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"col-md-4 col-xs-4\">
                    <!-- small box -->
                    <div class=\"small-box bg-green\">
                        <div class=\"inner\">
                            <h3>";
        // line 45
        echo twig_escape_filter($this->env, ($context["nbDemandesYear"] ?? $this->getContext($context, "nbDemandesYear")), "html", null, true);
        echo "</h3>

                            <p>Total demandes de l'année</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-person-add\"></i>
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
        // line 60
        echo twig_escape_filter($this->env, ($context["nbImpressionsYear"] ?? $this->getContext($context, "nbImpressionsYear")), "html", null, true);
        echo "</h3>

                            <p>Total impressions de l'année</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-ios-printer-outline\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-4 col-xs-4\">
                    <!-- small box -->
                    <div class=\"small-box bg-red\">
                        <div class=\"inner\">
                            ";
        // line 75
        if ((($context["nbResteAImprimer"] ?? $this->getContext($context, "nbResteAImprimer")) == null)) {
            // line 76
            echo "                                <h3>0</h3>
                            ";
        } else {
            // line 78
            echo "                                <h3>";
            echo twig_escape_filter($this->env, ($context["nbResteAImprimer"] ?? $this->getContext($context, "nbResteAImprimer")), "html", null, true);
            echo "</h3>
                            ";
        }
        // line 80
        echo "
                            <p>Reste à imprimer</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-printer\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-aqua\">
                        <div class=\"inner\">
                            ";
        // line 94
        if ((($context["nbOriginauxYear"] ?? $this->getContext($context, "nbOriginauxYear")) == null)) {
            // line 95
            echo "                                <h3>0</h3>
                            ";
        } else {
            // line 97
            echo "                                <h3>";
            echo twig_escape_filter($this->env, ($context["nbOriginauxYear"] ?? $this->getContext($context, "nbOriginauxYear")), "html", null, true);
            echo "</h3>
                            ";
        }
        // line 99
        echo "
                            <p>Total originaux</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-android-contact\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-yellow\">
                        <div class=\"inner\">
                            ";
        // line 113
        if ((($context["nbDuplicataYear"] ?? $this->getContext($context, "nbDuplicataYear")) == null)) {
            // line 114
            echo "                                <h3>0</h3>
                            ";
        } else {
            // line 116
            echo "                                <h3>";
            echo twig_escape_filter($this->env, ($context["nbDuplicataYear"] ?? $this->getContext($context, "nbDuplicataYear")), "html", null, true);
            echo "</h3>
                            ";
        }
        // line 118
        echo "
                            <p>Total duplicata</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-android-contacts\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-12 text-center img-responsive\" >
                    <img class=\"\" style=\"width: 20%;height: 10%;\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo_esag.jpg"), "html", null, true);
        echo "\">
                </div>
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 135
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->

";
        
        $__internal_36fb210b028f849286aa98688e9efd27d911f119265452a33a259e05773f55d3->leave($__internal_36fb210b028f849286aa98688e9efd27d911f119265452a33a259e05773f55d3_prof);

        
        $__internal_576c5d4404cc74dfbe5326bff1a4930493803bff6c7850556259867eadb7d9b6->leave($__internal_576c5d4404cc74dfbe5326bff1a4930493803bff6c7850556259867eadb7d9b6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 135,  226 => 129,  213 => 118,  207 => 116,  203 => 114,  201 => 113,  185 => 99,  179 => 97,  175 => 95,  173 => 94,  157 => 80,  151 => 78,  147 => 76,  145 => 75,  127 => 60,  109 => 45,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Tableau de board {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"callout callout-success hide\">
            <h4>Tip!</h4>

            <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar
                is bigger than your content because it prevents extra unwanted scrolling.</p>
        </div>

        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-dashboard\"></i>
                    Tableau de bord
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"col-md-4 col-xs-4\">
                    <!-- small box -->
                    <div class=\"small-box bg-green\">
                        <div class=\"inner\">
                            <h3>{{ nbDemandesYear }}</h3>

                            <p>Total demandes de l'année</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-person-add\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-4 col-xs-4\">
                    <!-- small box -->
                    <div class=\"small-box bg-blue\">
                        <div class=\"inner\">
                            <h3>{{ nbImpressionsYear }}</h3>

                            <p>Total impressions de l'année</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-ios-printer-outline\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-4 col-xs-4\">
                    <!-- small box -->
                    <div class=\"small-box bg-red\">
                        <div class=\"inner\">
                            {% if nbResteAImprimer == null  %}
                                <h3>0</h3>
                            {% else %}
                                <h3>{{ nbResteAImprimer }}</h3>
                            {% endif %}

                            <p>Reste à imprimer</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-printer\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-aqua\">
                        <div class=\"inner\">
                            {% if nbOriginauxYear == null  %}
                                <h3>0</h3>
                            {% else %}
                                <h3>{{ nbOriginauxYear }}</h3>
                            {% endif %}

                            <p>Total originaux</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-android-contact\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-6 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-yellow\">
                        <div class=\"inner\">
                            {% if nbDuplicataYear == null  %}
                                <h3>0</h3>
                            {% else %}
                                <h3>{{ nbDuplicataYear }}</h3>
                            {% endif %}

                            <p>Total duplicata</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-android-contacts\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-12 text-center img-responsive\" >
                    <img class=\"\" style=\"width: 20%;height: 10%;\" src=\"{{ asset('img/logo_esag.jpg') }}\">
                </div>
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                {#Footer#}
            </div>
            <!-- /.box-footer-->
        </div>
    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->

{% endblock %}", "AppBundle:Default:index.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/src/AppBundle/Resources/views/Default/index.html.twig");
    }
}
