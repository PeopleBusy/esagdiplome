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
        $__internal_6b87bd7ece5a01eb88e84c32fc1c37b58c4ff7fdb50326debf410ad5658489b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b87bd7ece5a01eb88e84c32fc1c37b58c4ff7fdb50326debf410ad5658489b3->enter($__internal_6b87bd7ece5a01eb88e84c32fc1c37b58c4ff7fdb50326debf410ad5658489b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_620db9015b1fc81322ee40efd071cd58f983128ff6f6cc67844cac01a67dddaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620db9015b1fc81322ee40efd071cd58f983128ff6f6cc67844cac01a67dddaf->enter($__internal_620db9015b1fc81322ee40efd071cd58f983128ff6f6cc67844cac01a67dddaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6b87bd7ece5a01eb88e84c32fc1c37b58c4ff7fdb50326debf410ad5658489b3->leave($__internal_6b87bd7ece5a01eb88e84c32fc1c37b58c4ff7fdb50326debf410ad5658489b3_prof);

        
        $__internal_620db9015b1fc81322ee40efd071cd58f983128ff6f6cc67844cac01a67dddaf->leave($__internal_620db9015b1fc81322ee40efd071cd58f983128ff6f6cc67844cac01a67dddaf_prof);

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
", "@Framework/FormTable/button_row.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
