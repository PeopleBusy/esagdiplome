<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_85d263fda3536fa210be214f32813fa44d4a758fe5b40f3a43c96bb04cdc6be6 extends Twig_Template
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
        $__internal_6003a2458f745d29a9b4707429c566710ffaa4be54fd0bd4094bbb3d1dfb1148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6003a2458f745d29a9b4707429c566710ffaa4be54fd0bd4094bbb3d1dfb1148->enter($__internal_6003a2458f745d29a9b4707429c566710ffaa4be54fd0bd4094bbb3d1dfb1148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b5167376752d30b8b92f9cfa79f5ef2a48e5118641f920139dd3e2ffaab47fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5167376752d30b8b92f9cfa79f5ef2a48e5118641f920139dd3e2ffaab47fe2->enter($__internal_b5167376752d30b8b92f9cfa79f5ef2a48e5118641f920139dd3e2ffaab47fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6003a2458f745d29a9b4707429c566710ffaa4be54fd0bd4094bbb3d1dfb1148->leave($__internal_6003a2458f745d29a9b4707429c566710ffaa4be54fd0bd4094bbb3d1dfb1148_prof);

        
        $__internal_b5167376752d30b8b92f9cfa79f5ef2a48e5118641f920139dd3e2ffaab47fe2->leave($__internal_b5167376752d30b8b92f9cfa79f5ef2a48e5118641f920139dd3e2ffaab47fe2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
