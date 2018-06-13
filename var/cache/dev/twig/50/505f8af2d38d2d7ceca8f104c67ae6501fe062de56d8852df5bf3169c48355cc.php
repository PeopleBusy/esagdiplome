<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9fcd256a4222bb8607b7fc5823e87c1d0f3406873fcc67be8725196c0049aa84 extends Twig_Template
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
        $__internal_6778a928b6241ad99d7bb6db179ebdc68fc3b97ffcfbd201fde71923e82cbd89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6778a928b6241ad99d7bb6db179ebdc68fc3b97ffcfbd201fde71923e82cbd89->enter($__internal_6778a928b6241ad99d7bb6db179ebdc68fc3b97ffcfbd201fde71923e82cbd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_862ad10fd7bfe118bec5940d16a1decf1e0181d1740a70f857e84ddd8116aa85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862ad10fd7bfe118bec5940d16a1decf1e0181d1740a70f857e84ddd8116aa85->enter($__internal_862ad10fd7bfe118bec5940d16a1decf1e0181d1740a70f857e84ddd8116aa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6778a928b6241ad99d7bb6db179ebdc68fc3b97ffcfbd201fde71923e82cbd89->leave($__internal_6778a928b6241ad99d7bb6db179ebdc68fc3b97ffcfbd201fde71923e82cbd89_prof);

        
        $__internal_862ad10fd7bfe118bec5940d16a1decf1e0181d1740a70f857e84ddd8116aa85->leave($__internal_862ad10fd7bfe118bec5940d16a1decf1e0181d1740a70f857e84ddd8116aa85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
