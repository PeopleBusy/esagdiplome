<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_349e2de801df98270fecfa0898cbf7019486a3b3a05b2d17750b577b74666353 extends Twig_Template
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
        $__internal_6e2e48f937539cc3aff7409ffdaea6d208ac7a2911e39a8c478d7efab72bf49c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2e48f937539cc3aff7409ffdaea6d208ac7a2911e39a8c478d7efab72bf49c->enter($__internal_6e2e48f937539cc3aff7409ffdaea6d208ac7a2911e39a8c478d7efab72bf49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_21630342819b87b66efd9bd38b4fa68881b7e41a1ddb167c59a8cfaaabac4211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21630342819b87b66efd9bd38b4fa68881b7e41a1ddb167c59a8cfaaabac4211->enter($__internal_21630342819b87b66efd9bd38b4fa68881b7e41a1ddb167c59a8cfaaabac4211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6e2e48f937539cc3aff7409ffdaea6d208ac7a2911e39a8c478d7efab72bf49c->leave($__internal_6e2e48f937539cc3aff7409ffdaea6d208ac7a2911e39a8c478d7efab72bf49c_prof);

        
        $__internal_21630342819b87b66efd9bd38b4fa68881b7e41a1ddb167c59a8cfaaabac4211->leave($__internal_21630342819b87b66efd9bd38b4fa68881b7e41a1ddb167c59a8cfaaabac4211_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/Rachid/SymfonyProjects/esagdiplome/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
