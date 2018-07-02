<?php

/* AppBundle:Default/user:new.html.twig */
class __TwigTemplate_526bdd215fa2dbd6c12c1579c84c90038e6670e564fb12d5dde82806e88836e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default/user:new.html.twig", 1);
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
        $__internal_cae2fd243f71a7f8c402997594dcd1b24840a8a0bb603ff19e2f35703153f5c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae2fd243f71a7f8c402997594dcd1b24840a8a0bb603ff19e2f35703153f5c6->enter($__internal_cae2fd243f71a7f8c402997594dcd1b24840a8a0bb603ff19e2f35703153f5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/user:new.html.twig"));

        $__internal_f86a893b683200d5a66e65243db9cc9ea084708448677d2ad27f9f426a3bd3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86a893b683200d5a66e65243db9cc9ea084708448677d2ad27f9f426a3bd3f4->enter($__internal_f86a893b683200d5a66e65243db9cc9ea084708448677d2ad27f9f426a3bd3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default/user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cae2fd243f71a7f8c402997594dcd1b24840a8a0bb603ff19e2f35703153f5c6->leave($__internal_cae2fd243f71a7f8c402997594dcd1b24840a8a0bb603ff19e2f35703153f5c6_prof);

        
        $__internal_f86a893b683200d5a66e65243db9cc9ea084708448677d2ad27f9f426a3bd3f4->leave($__internal_f86a893b683200d5a66e65243db9cc9ea084708448677d2ad27f9f426a3bd3f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ce9e3f8ba5a5d6c6f0cbfbb35666c28cc0aec67399422a747f442605a3af94e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce9e3f8ba5a5d6c6f0cbfbb35666c28cc0aec67399422a747f442605a3af94e->enter($__internal_5ce9e3f8ba5a5d6c6f0cbfbb35666c28cc0aec67399422a747f442605a3af94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d5453bff08b7fa43fa8fcdcd7787aaaf2f8ee1ab67b1cfb129696d2b6e47a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5453bff08b7fa43fa8fcdcd7787aaaf2f8ee1ab67b1cfb129696d2b6e47a58->enter($__internal_3d5453bff08b7fa43fa8fcdcd7787aaaf2f8ee1ab67b1cfb129696d2b6e47a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Utilisateurs ";
        
        $__internal_3d5453bff08b7fa43fa8fcdcd7787aaaf2f8ee1ab67b1cfb129696d2b6e47a58->leave($__internal_3d5453bff08b7fa43fa8fcdcd7787aaaf2f8ee1ab67b1cfb129696d2b6e47a58_prof);

        
        $__internal_5ce9e3f8ba5a5d6c6f0cbfbb35666c28cc0aec67399422a747f442605a3af94e->leave($__internal_5ce9e3f8ba5a5d6c6f0cbfbb35666c28cc0aec67399422a747f442605a3af94e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_62d40be79e21b9d907769d137c7ef88c5a6bd6bb27a8c919aac6deb231baad78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d40be79e21b9d907769d137c7ef88c5a6bd6bb27a8c919aac6deb231baad78->enter($__internal_62d40be79e21b9d907769d137c7ef88c5a6bd6bb27a8c919aac6deb231baad78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_000878d099a8afac814861f6bc9c11858e26d834f19a7c67520205148060c256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000878d099a8afac814861f6bc9c11858e26d834f19a7c67520205148060c256->enter($__internal_000878d099a8afac814861f6bc9c11858e26d834f19a7c67520205148060c256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-users\"></i> Réglages</a></li>
            <li class=\"active\">Gerer</li>
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
                    <i class=\"fa fa-users\"></i>
                    Utilisateurs
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
                
                <div class=\"form-group col-md-3\">
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-3\">
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-3\">
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-3\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-3\">
                    <label>Rôle:</label>
                    <select class=\"form-control\" name=\"role\">
                        <option value=\"ROLE_USER\">UTILISATEUR</option>
                        <option value=\"ROLE_ADMIN\">ADMINISTRATEUR</option>
                    </select>
                </div>
                
                <div class=\"form-group col-md-2\">
                    <button type=\"submit\" class=\"btn btn-success marTop25px\">Enregistrer</button>
                </div>

                ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                <div class=\"col-md-12 col-xs-12\">
                    ";
        // line 118
        if ( !twig_test_empty(($context["users"] ?? $this->getContext($context, "users")))) {
            // line 119
            echo "
                        <div class=\"table-responsive col-md-12 marTop25px\">
                            <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"hide\">Id</th>
                                    <th>Nom</th>
                                    <th>Prenom(s)</th>
                                    <th>Identifiant</th>
                                    <th>Rôle</th>
                                    <th>Crée par</th>
                                    <th>Date création</th>
                                    <th>Action(s)</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 136
                echo "                                    ";
                if (($this->getAttribute($context["u"], "id", array()) != 1)) {
                    // line 137
                    echo "                                        <tr class=\"\">
                                            <td class=\"hide\"><span class=\"id\">";
                    // line 138
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                    echo "</span></td>
                                            <td><span class=\"libelle\">";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "nom", array()), "html", null, true);
                    echo "</span></td>
                                            <td><span class=\"valeur\">";
                    // line 140
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "prenom", array()), "html", null, true);
                    echo "</span></td>
                                            <td><span class=\"valeur\">";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
                    echo "</span></td>
                                            <td><span class=\"valeur\">";
                    // line 142
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["u"], "roles", array()), 0, array(), "array"), "html", null, true);
                    echo "</span></td>
                                            <td><span class=\"valeur\">";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "auteur", array()), "html", null, true);
                    echo "</span></td>
                                            <td><span class=\"valeur\">";
                    // line 144
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["u"], "dateCreation", array()), "d/m/Y h:i:s"), "html", null, true);
                    echo "</span></td>
                                            <td class=\"text-center\">-
                                                <a href=\"";
                    // line 146
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configuration_edit", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-xs hide\">
                                                    <i class=\"fa fa-pencil\"></i> Modifier</a>
                                                <a href=\"";
                    // line 148
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configuration_edit", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-xs hide\">
                                                    <i class=\"fa fa-key\"></i> Réinitialiser mot de passe</a>
                                            </td>
                                        </tr>
                                    ";
                }
                // line 153
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "
                                </tbody>
                            </table>
                        </div>

                    ";
        }
        // line 160
        echo "                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 167
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_000878d099a8afac814861f6bc9c11858e26d834f19a7c67520205148060c256->leave($__internal_000878d099a8afac814861f6bc9c11858e26d834f19a7c67520205148060c256_prof);

        
        $__internal_62d40be79e21b9d907769d137c7ef88c5a6bd6bb27a8c919aac6deb231baad78->leave($__internal_62d40be79e21b9d907769d137c7ef88c5a6bd6bb27a8c919aac6deb231baad78_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default/user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 167,  302 => 160,  294 => 154,  288 => 153,  280 => 148,  275 => 146,  270 => 144,  266 => 143,  262 => 142,  258 => 141,  254 => 140,  250 => 139,  246 => 138,  243 => 137,  240 => 136,  236 => 135,  218 => 119,  216 => 118,  210 => 115,  193 => 101,  187 => 98,  181 => 95,  175 => 92,  169 => 89,  144 => 66,  133 => 58,  116 => 43,  114 => 42,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Utilisateurs {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-users\"></i> Réglages</a></li>
            <li class=\"active\">Gerer</li>
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
                    <i class=\"fa fa-users\"></i>
                    Utilisateurs
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
                    {{ form_row(form.nom) }}
                </div>
                <div class=\"form-group col-md-3\">
                    {{ form_row(form.prenom) }}
                </div>
                <div class=\"form-group col-md-3\">
                    {{ form_row(form.username) }}
                </div>
                <div class=\"form-group col-md-3\">
                    {{ form_row(form.password) }}
                </div>
                <div class=\"form-group col-md-3\">
                    <label>Rôle:</label>
                    <select class=\"form-control\" name=\"role\">
                        <option value=\"ROLE_USER\">UTILISATEUR</option>
                        <option value=\"ROLE_ADMIN\">ADMINISTRATEUR</option>
                    </select>
                </div>
                
                <div class=\"form-group col-md-2\">
                    <button type=\"submit\" class=\"btn btn-success marTop25px\">Enregistrer</button>
                </div>

                {{ form_end(form) }}

                <div class=\"col-md-12 col-xs-12\">
                    {% if users is not empty  %}

                        <div class=\"table-responsive col-md-12 marTop25px\">
                            <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"hide\">Id</th>
                                    <th>Nom</th>
                                    <th>Prenom(s)</th>
                                    <th>Identifiant</th>
                                    <th>Rôle</th>
                                    <th>Crée par</th>
                                    <th>Date création</th>
                                    <th>Action(s)</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for u in users %}
                                    {% if u.id != 1  %}
                                        <tr class=\"\">
                                            <td class=\"hide\"><span class=\"id\">{{ u.id }}</span></td>
                                            <td><span class=\"libelle\">{{ u.nom }}</span></td>
                                            <td><span class=\"valeur\">{{ u.prenom }}</span></td>
                                            <td><span class=\"valeur\">{{ u.username }}</span></td>
                                            <td><span class=\"valeur\">{{ u.roles[0] }}</span></td>
                                            <td><span class=\"valeur\">{{ u.auteur }}</span></td>
                                            <td><span class=\"valeur\">{{ u.dateCreation|date('d/m/Y h:i:s') }}</span></td>
                                            <td class=\"text-center\">-
                                                <a href=\"{{ path('configuration_edit', {'id': u.id}) }}\" class=\"btn btn-danger btn-xs hide\">
                                                    <i class=\"fa fa-pencil\"></i> Modifier</a>
                                                <a href=\"{{ path('configuration_edit', {'id': u.id}) }}\" class=\"btn btn-primary btn-xs hide\">
                                                    <i class=\"fa fa-key\"></i> Réinitialiser mot de passe</a>
                                            </td>
                                        </tr>
                                    {% endif %}
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

{% endblock %}", "AppBundle:Default/user:new.html.twig", "/Users/Rachid/SymfonyProjects/esagdiplome/src/AppBundle/Resources/views/Default/user/new.html.twig");
    }
}
