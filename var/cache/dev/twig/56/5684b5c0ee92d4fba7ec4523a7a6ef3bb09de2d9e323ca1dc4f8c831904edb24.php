<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c763e67be7fccde35334e51315fa2877b78ce320cfaa5dd01ba453cc8c185ced extends Twig_Template
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
        $__internal_0ed66d6812263daf3ec9ef31e848f53af660fcc341becb7f3ccb1ebe0223abca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed66d6812263daf3ec9ef31e848f53af660fcc341becb7f3ccb1ebe0223abca->enter($__internal_0ed66d6812263daf3ec9ef31e848f53af660fcc341becb7f3ccb1ebe0223abca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a21656177dcba29459fab8848ae407a50a8c102bda3ca979177e7097f668cd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21656177dcba29459fab8848ae407a50a8c102bda3ca979177e7097f668cd02->enter($__internal_a21656177dcba29459fab8848ae407a50a8c102bda3ca979177e7097f668cd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0ed66d6812263daf3ec9ef31e848f53af660fcc341becb7f3ccb1ebe0223abca->leave($__internal_0ed66d6812263daf3ec9ef31e848f53af660fcc341becb7f3ccb1ebe0223abca_prof);

        
        $__internal_a21656177dcba29459fab8848ae407a50a8c102bda3ca979177e7097f668cd02->leave($__internal_a21656177dcba29459fab8848ae407a50a8c102bda3ca979177e7097f668cd02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
