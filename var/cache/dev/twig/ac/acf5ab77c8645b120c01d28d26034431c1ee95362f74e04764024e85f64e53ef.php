<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4a56297752de907b7cd3c1912aea90cf882f843ca238edc45a2ad4d4c1d11cf7 extends Twig_Template
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
        $__internal_4161b89362d2f6a991ee9922ad3817b21482150cddf3dc98d63b1a9bd0341985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4161b89362d2f6a991ee9922ad3817b21482150cddf3dc98d63b1a9bd0341985->enter($__internal_4161b89362d2f6a991ee9922ad3817b21482150cddf3dc98d63b1a9bd0341985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5ab940ecc242979f94703b9d29883d03a791e3d6853bd12252d1e6596c50eef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab940ecc242979f94703b9d29883d03a791e3d6853bd12252d1e6596c50eef1->enter($__internal_5ab940ecc242979f94703b9d29883d03a791e3d6853bd12252d1e6596c50eef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4161b89362d2f6a991ee9922ad3817b21482150cddf3dc98d63b1a9bd0341985->leave($__internal_4161b89362d2f6a991ee9922ad3817b21482150cddf3dc98d63b1a9bd0341985_prof);

        
        $__internal_5ab940ecc242979f94703b9d29883d03a791e3d6853bd12252d1e6596c50eef1->leave($__internal_5ab940ecc242979f94703b9d29883d03a791e3d6853bd12252d1e6596c50eef1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
