<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_ca3f64fd1bdb77155eca59b7b4e072acb4c9180079836592929fdf18583a543f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3f64fd1bdb77155eca59b7b4e072acb4c9180079836592929fdf18583a543f->enter($__internal_ca3f64fd1bdb77155eca59b7b4e072acb4c9180079836592929fdf18583a543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ce0896f1cefb12f55448b2419f022f7008979959ace68887cff69e7f04c49b5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0896f1cefb12f55448b2419f022f7008979959ace68887cff69e7f04c49b5f->enter($__internal_ce0896f1cefb12f55448b2419f022f7008979959ace68887cff69e7f04c49b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ca3f64fd1bdb77155eca59b7b4e072acb4c9180079836592929fdf18583a543f->leave($__internal_ca3f64fd1bdb77155eca59b7b4e072acb4c9180079836592929fdf18583a543f_prof);

        
        $__internal_ce0896f1cefb12f55448b2419f022f7008979959ace68887cff69e7f04c49b5f->leave($__internal_ce0896f1cefb12f55448b2419f022f7008979959ace68887cff69e7f04c49b5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
