<?php

/* AppBundle:Default/configuration:new.html.twig */
class __TwigTemplate_56c5ed777e939c3ddec3a368d2e626a90c178325cf25c4707e69a1470bca30ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/configuration:new.html.twig", 1);
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
        $__internal_07adf9d7e384c85f8deabf7f377452b21c71c6915ea98143d4659a811b06f966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07adf9d7e384c85f8deabf7f377452b21c71c6915ea98143d4659a811b06f966->enter($__internal_07adf9d7e384c85f8deabf7f377452b21c71c6915ea98143d4659a811b06f966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/configuration:new.html.twig"));

        $__internal_85468b98c31b6bc5db39c9fe815aba11db08e6c014d87bbc5480fdaaaf365990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85468b98c31b6bc5db39c9fe815aba11db08e6c014d87bbc5480fdaaaf365990->enter($__internal_85468b98c31b6bc5db39c9fe815aba11db08e6c014d87bbc5480fdaaaf365990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/configuration:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07adf9d7e384c85f8deabf7f377452b21c71c6915ea98143d4659a811b06f966->leave($__internal_07adf9d7e384c85f8deabf7f377452b21c71c6915ea98143d4659a811b06f966_prof);

        
        $__internal_85468b98c31b6bc5db39c9fe815aba11db08e6c014d87bbc5480fdaaaf365990->leave($__internal_85468b98c31b6bc5db39c9fe815aba11db08e6c014d87bbc5480fdaaaf365990_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85f629773718d5688bcf76da8a2567843770bec28c6b2b9c59df459faab76d8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f629773718d5688bcf76da8a2567843770bec28c6b2b9c59df459faab76d8f->enter($__internal_85f629773718d5688bcf76da8a2567843770bec28c6b2b9c59df459faab76d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_157b3a1ed53eaadd3bd5dcd0a480f456ef04e3f3ec0b05e3fa6486d422992f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157b3a1ed53eaadd3bd5dcd0a480f456ef04e3f3ec0b05e3fa6486d422992f1e->enter($__internal_157b3a1ed53eaadd3bd5dcd0a480f456ef04e3f3ec0b05e3fa6486d422992f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Réglages ";
        
        $__internal_157b3a1ed53eaadd3bd5dcd0a480f456ef04e3f3ec0b05e3fa6486d422992f1e->leave($__internal_157b3a1ed53eaadd3bd5dcd0a480f456ef04e3f3ec0b05e3fa6486d422992f1e_prof);

        
        $__internal_85f629773718d5688bcf76da8a2567843770bec28c6b2b9c59df459faab76d8f->leave($__internal_85f629773718d5688bcf76da8a2567843770bec28c6b2b9c59df459faab76d8f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab442f99037b01d4f913dddeb5b90ee99395d7d51a67b3c631497e9def1d5a52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab442f99037b01d4f913dddeb5b90ee99395d7d51a67b3c631497e9def1d5a52->enter($__internal_ab442f99037b01d4f913dddeb5b90ee99395d7d51a67b3c631497e9def1d5a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6cedfc926944f305ef58b25fba748bc76ccdbe0785c1f5cbd0e9e91b82c0f933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cedfc926944f305ef58b25fba748bc76ccdbe0785c1f5cbd0e9e91b82c0f933->enter($__internal_6cedfc926944f305ef58b25fba748bc76ccdbe0785c1f5cbd0e9e91b82c0f933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-cogs\"></i> Réglages</a></li>
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
                    <i class=\"fa fa-cogs\"></i>
                    Réglages
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
                
                <div class=\"form-group col-md-5\">
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-5\">
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "valeur", array()), 'row');
        echo "
                </div>
                
                <div class=\"form-group col-md-2\">
                    <button type=\"submit\" class=\"btn btn-success marTop25px\">Enregistrer</button>
                </div>

                ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                <div class=\"col-md-12 col-xs-12\">
                    ";
        // line 105
        if ( !twig_test_empty(($context["reglages"] ?? $this->getContext($context, "reglages")))) {
            // line 106
            echo "
                        <div class=\"table-responsive col-md-12 marTop25px\">
                            <table id=\"\" class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"hide\">Id</th>
                                    <th>Libellé</th>
                                    <th>Valeur</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reglages"] ?? $this->getContext($context, "reglages")));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 119
                echo "                                    <tr class=\"\">
                                        <td class=\"hide\"><span class=\"id\">";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"libelle\">";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "libelle", array()), "html", null, true);
                echo "</span></td>
                                        <td><span class=\"valeur\">";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "valeur", array()), "html", null, true);
                echo "</span></td>
                                        <td>
                                            <a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configuration_edit", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-pencil\"></i> Modifier</a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "
                                </tbody>
                            </table>
                        </div>

                    ";
        }
        // line 134
        echo "                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 141
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_6cedfc926944f305ef58b25fba748bc76ccdbe0785c1f5cbd0e9e91b82c0f933->leave($__internal_6cedfc926944f305ef58b25fba748bc76ccdbe0785c1f5cbd0e9e91b82c0f933_prof);

        
        $__internal_ab442f99037b01d4f913dddeb5b90ee99395d7d51a67b3c631497e9def1d5a52->leave($__internal_ab442f99037b01d4f913dddeb5b90ee99395d7d51a67b3c631497e9def1d5a52_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/configuration:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 141,  251 => 134,  243 => 128,  233 => 124,  228 => 122,  224 => 121,  220 => 120,  217 => 119,  213 => 118,  199 => 106,  197 => 105,  191 => 102,  181 => 95,  175 => 92,  169 => 89,  144 => 66,  133 => 58,  116 => 43,  114 => 42,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Réglages {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-cogs\"></i> Réglages</a></li>
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
                    <i class=\"fa fa-cogs\"></i>
                    Réglages
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
                
                <div class=\"form-group col-md-5\">
                    {{ form_row(form.libelle) }}
                </div>
                <div class=\"form-group col-md-5\">
                    {{ form_row(form.valeur) }}
                </div>
                
                <div class=\"form-group col-md-2\">
                    <button type=\"submit\" class=\"btn btn-success marTop25px\">Enregistrer</button>
                </div>

                {{ form_end(form) }}

                <div class=\"col-md-12 col-xs-12\">
                    {% if reglages is not empty  %}

                        <div class=\"table-responsive col-md-12 marTop25px\">
                            <table id=\"\" class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"hide\">Id</th>
                                    <th>Libellé</th>
                                    <th>Valeur</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for r in reglages %}
                                    <tr class=\"\">
                                        <td class=\"hide\"><span class=\"id\">{{ r.id }}</span></td>
                                        <td><span class=\"libelle\">{{ r.libelle }}</span></td>
                                        <td><span class=\"valeur\">{{ r.valeur }}</span></td>
                                        <td>
                                            <a href=\"{{ path('configuration_edit', {'id': r.id}) }}\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-pencil\"></i> Modifier</a>
                                        </td>
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

{% endblock %}", "AppBundle:Default/configuration:new.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/src/AppBundle/Resources/views/Default/configuration/new.html.twig");
    }
}
