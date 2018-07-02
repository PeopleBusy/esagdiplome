<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d2ebeea06f9ea78d73626b805eafd7d59ef1cc6ca35e68f7470a147fa29720ba extends Twig_Template
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
        $__internal_a36c7cf737d77a3bb335ac22d948c31b7308b95c357ccbfc93633dc1ecca9823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36c7cf737d77a3bb335ac22d948c31b7308b95c357ccbfc93633dc1ecca9823->enter($__internal_a36c7cf737d77a3bb335ac22d948c31b7308b95c357ccbfc93633dc1ecca9823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_282bf04548d62930b4864d003a0751ab5a576552375dd0f5abaf3d4c7aa67432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282bf04548d62930b4864d003a0751ab5a576552375dd0f5abaf3d4c7aa67432->enter($__internal_282bf04548d62930b4864d003a0751ab5a576552375dd0f5abaf3d4c7aa67432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a36c7cf737d77a3bb335ac22d948c31b7308b95c357ccbfc93633dc1ecca9823->leave($__internal_a36c7cf737d77a3bb335ac22d948c31b7308b95c357ccbfc93633dc1ecca9823_prof);

        
        $__internal_282bf04548d62930b4864d003a0751ab5a576552375dd0f5abaf3d4c7aa67432->leave($__internal_282bf04548d62930b4864d003a0751ab5a576552375dd0f5abaf3d4c7aa67432_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
