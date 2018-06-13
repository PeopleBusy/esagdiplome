<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_95d45569f269284775ac3ce651b5c9a1a3aed8b575d3ff48dc9e6620c9c2df97 extends Twig_Template
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
        $__internal_3117159ee8327d5952a69c722db7b12c5e5b4fb9e856ffebe9f8f174c8ff50c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3117159ee8327d5952a69c722db7b12c5e5b4fb9e856ffebe9f8f174c8ff50c9->enter($__internal_3117159ee8327d5952a69c722db7b12c5e5b4fb9e856ffebe9f8f174c8ff50c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ea6643155c61d923caa56308a595d0c7fbf37b241fa14b2e17e893a3679c976d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea6643155c61d923caa56308a595d0c7fbf37b241fa14b2e17e893a3679c976d->enter($__internal_ea6643155c61d923caa56308a595d0c7fbf37b241fa14b2e17e893a3679c976d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3117159ee8327d5952a69c722db7b12c5e5b4fb9e856ffebe9f8f174c8ff50c9->leave($__internal_3117159ee8327d5952a69c722db7b12c5e5b4fb9e856ffebe9f8f174c8ff50c9_prof);

        
        $__internal_ea6643155c61d923caa56308a595d0c7fbf37b241fa14b2e17e893a3679c976d->leave($__internal_ea6643155c61d923caa56308a595d0c7fbf37b241fa14b2e17e893a3679c976d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
