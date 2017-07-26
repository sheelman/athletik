<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_d7bf8fa14fdf7911f8b813afbb60bc9e34726e7fce54be97f14b991b55f25f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7bf8fa14fdf7911f8b813afbb60bc9e34726e7fce54be97f14b991b55f25f8e->enter($__internal_d7bf8fa14fdf7911f8b813afbb60bc9e34726e7fce54be97f14b991b55f25f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_56a03e06505acbab3f3085b12552956d25e2b4c58b9b7cc3ce7d8bda00f33e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a03e06505acbab3f3085b12552956d25e2b4c58b9b7cc3ce7d8bda00f33e3b->enter($__internal_56a03e06505acbab3f3085b12552956d25e2b4c58b9b7cc3ce7d8bda00f33e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d7bf8fa14fdf7911f8b813afbb60bc9e34726e7fce54be97f14b991b55f25f8e->leave($__internal_d7bf8fa14fdf7911f8b813afbb60bc9e34726e7fce54be97f14b991b55f25f8e_prof);

        
        $__internal_56a03e06505acbab3f3085b12552956d25e2b4c58b9b7cc3ce7d8bda00f33e3b->leave($__internal_56a03e06505acbab3f3085b12552956d25e2b4c58b9b7cc3ce7d8bda00f33e3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
