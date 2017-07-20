<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb39a7468cd9f10b7c36d6f938ae87d2f517859c64820f496837ac04642d093c extends Twig_Template
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
        $__internal_c5ecd1943b63661b9114dc92ec5ec48748f8eb7e552f55d3fa1f352019510ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ecd1943b63661b9114dc92ec5ec48748f8eb7e552f55d3fa1f352019510ff2->enter($__internal_c5ecd1943b63661b9114dc92ec5ec48748f8eb7e552f55d3fa1f352019510ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_36598c36f7a161fb81dd26e0e12eb6472138616e4b4290386b8a4e9d1f17e24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36598c36f7a161fb81dd26e0e12eb6472138616e4b4290386b8a4e9d1f17e24d->enter($__internal_36598c36f7a161fb81dd26e0e12eb6472138616e4b4290386b8a4e9d1f17e24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c5ecd1943b63661b9114dc92ec5ec48748f8eb7e552f55d3fa1f352019510ff2->leave($__internal_c5ecd1943b63661b9114dc92ec5ec48748f8eb7e552f55d3fa1f352019510ff2_prof);

        
        $__internal_36598c36f7a161fb81dd26e0e12eb6472138616e4b4290386b8a4e9d1f17e24d->leave($__internal_36598c36f7a161fb81dd26e0e12eb6472138616e4b4290386b8a4e9d1f17e24d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
