<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_19272a72dea1c8b5f6ad9f327fe9668de57f2d94a987e7c7888132206b0df5fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0746ff23bff38bee67107064370326e8ffa1924e8751f38b9f50e935c5436e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0746ff23bff38bee67107064370326e8ffa1924e8751f38b9f50e935c5436e0->enter($__internal_a0746ff23bff38bee67107064370326e8ffa1924e8751f38b9f50e935c5436e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ca58cdeb1ef5b8775b43229f316360e1198db9e5e6f20f47f195181cc984ccb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca58cdeb1ef5b8775b43229f316360e1198db9e5e6f20f47f195181cc984ccb1->enter($__internal_ca58cdeb1ef5b8775b43229f316360e1198db9e5e6f20f47f195181cc984ccb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a0746ff23bff38bee67107064370326e8ffa1924e8751f38b9f50e935c5436e0->leave($__internal_a0746ff23bff38bee67107064370326e8ffa1924e8751f38b9f50e935c5436e0_prof);

        
        $__internal_ca58cdeb1ef5b8775b43229f316360e1198db9e5e6f20f47f195181cc984ccb1->leave($__internal_ca58cdeb1ef5b8775b43229f316360e1198db9e5e6f20f47f195181cc984ccb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
