<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_cdbbc068c579c2256c3e9c4a91ec47d394985eda09e410a1820b593a7b61e002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbbc068c579c2256c3e9c4a91ec47d394985eda09e410a1820b593a7b61e002->enter($__internal_cdbbc068c579c2256c3e9c4a91ec47d394985eda09e410a1820b593a7b61e002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f9d3e0d4b1737d00ec8d0e7f862177e1709306044af59da07d5d6d7bf667bf3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d3e0d4b1737d00ec8d0e7f862177e1709306044af59da07d5d6d7bf667bf3c->enter($__internal_f9d3e0d4b1737d00ec8d0e7f862177e1709306044af59da07d5d6d7bf667bf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_cdbbc068c579c2256c3e9c4a91ec47d394985eda09e410a1820b593a7b61e002->leave($__internal_cdbbc068c579c2256c3e9c4a91ec47d394985eda09e410a1820b593a7b61e002_prof);

        
        $__internal_f9d3e0d4b1737d00ec8d0e7f862177e1709306044af59da07d5d6d7bf667bf3c->leave($__internal_f9d3e0d4b1737d00ec8d0e7f862177e1709306044af59da07d5d6d7bf667bf3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
