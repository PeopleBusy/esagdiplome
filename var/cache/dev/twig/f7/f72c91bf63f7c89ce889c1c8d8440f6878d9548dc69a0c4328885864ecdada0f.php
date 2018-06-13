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
        $__internal_e0dadcb56201c4af1ad53f64c9e9690e33242c9f4e362af10613b7456a578347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0dadcb56201c4af1ad53f64c9e9690e33242c9f4e362af10613b7456a578347->enter($__internal_e0dadcb56201c4af1ad53f64c9e9690e33242c9f4e362af10613b7456a578347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d824635b1422c4bd2f5791458aa674446eb00851bd96a3331c92ba72e9836c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d824635b1422c4bd2f5791458aa674446eb00851bd96a3331c92ba72e9836c3f->enter($__internal_d824635b1422c4bd2f5791458aa674446eb00851bd96a3331c92ba72e9836c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e0dadcb56201c4af1ad53f64c9e9690e33242c9f4e362af10613b7456a578347->leave($__internal_e0dadcb56201c4af1ad53f64c9e9690e33242c9f4e362af10613b7456a578347_prof);

        
        $__internal_d824635b1422c4bd2f5791458aa674446eb00851bd96a3331c92ba72e9836c3f->leave($__internal_d824635b1422c4bd2f5791458aa674446eb00851bd96a3331c92ba72e9836c3f_prof);

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
", "@Framework/Form/form_errors.html.php", "/Users/Rachid/Documents/Projet Client/ulimprime/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
