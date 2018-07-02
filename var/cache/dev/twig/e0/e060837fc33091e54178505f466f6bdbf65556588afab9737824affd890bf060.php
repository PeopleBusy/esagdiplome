<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d2707ee3304d9145bc05c33462dc650cf0433754c685845192ec1b1620fce78f extends Twig_Template
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
        $__internal_ea206fb26b8a9f996bd85f25dbd4b2b76d584ab58cfb3ee807cf7430eb0d3d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea206fb26b8a9f996bd85f25dbd4b2b76d584ab58cfb3ee807cf7430eb0d3d59->enter($__internal_ea206fb26b8a9f996bd85f25dbd4b2b76d584ab58cfb3ee807cf7430eb0d3d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_5368f591efcedb5791b73e017c7d9dc6b01b3b369b99adb03d3e79f433af668f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5368f591efcedb5791b73e017c7d9dc6b01b3b369b99adb03d3e79f433af668f->enter($__internal_5368f591efcedb5791b73e017c7d9dc6b01b3b369b99adb03d3e79f433af668f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ea206fb26b8a9f996bd85f25dbd4b2b76d584ab58cfb3ee807cf7430eb0d3d59->leave($__internal_ea206fb26b8a9f996bd85f25dbd4b2b76d584ab58cfb3ee807cf7430eb0d3d59_prof);

        
        $__internal_5368f591efcedb5791b73e017c7d9dc6b01b3b369b99adb03d3e79f433af668f->leave($__internal_5368f591efcedb5791b73e017c7d9dc6b01b3b369b99adb03d3e79f433af668f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
