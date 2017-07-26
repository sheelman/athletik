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
        $__internal_cbf05fd0453e34cbe87916e0c6a31c4bf59ee8e3f3059a9a42dd1d7fa49fa965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf05fd0453e34cbe87916e0c6a31c4bf59ee8e3f3059a9a42dd1d7fa49fa965->enter($__internal_cbf05fd0453e34cbe87916e0c6a31c4bf59ee8e3f3059a9a42dd1d7fa49fa965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_56ae79c2cf180cad956fe0319f34d7af2ccf9228c18f013adab7861e6e777687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ae79c2cf180cad956fe0319f34d7af2ccf9228c18f013adab7861e6e777687->enter($__internal_56ae79c2cf180cad956fe0319f34d7af2ccf9228c18f013adab7861e6e777687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cbf05fd0453e34cbe87916e0c6a31c4bf59ee8e3f3059a9a42dd1d7fa49fa965->leave($__internal_cbf05fd0453e34cbe87916e0c6a31c4bf59ee8e3f3059a9a42dd1d7fa49fa965_prof);

        
        $__internal_56ae79c2cf180cad956fe0319f34d7af2ccf9228c18f013adab7861e6e777687->leave($__internal_56ae79c2cf180cad956fe0319f34d7af2ccf9228c18f013adab7861e6e777687_prof);

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
