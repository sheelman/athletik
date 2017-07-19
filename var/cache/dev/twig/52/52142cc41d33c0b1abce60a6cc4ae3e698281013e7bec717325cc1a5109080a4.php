<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_3926a05db99d4522b0777f02dc4921e3037d6f68b81cf9b0dda9d6043e4a9799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3926a05db99d4522b0777f02dc4921e3037d6f68b81cf9b0dda9d6043e4a9799->enter($__internal_3926a05db99d4522b0777f02dc4921e3037d6f68b81cf9b0dda9d6043e4a9799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7ff77c2fe4a208c1994fd4d3b0faaff6053e21bd45129069061d1e89bef55a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff77c2fe4a208c1994fd4d3b0faaff6053e21bd45129069061d1e89bef55a36->enter($__internal_7ff77c2fe4a208c1994fd4d3b0faaff6053e21bd45129069061d1e89bef55a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3926a05db99d4522b0777f02dc4921e3037d6f68b81cf9b0dda9d6043e4a9799->leave($__internal_3926a05db99d4522b0777f02dc4921e3037d6f68b81cf9b0dda9d6043e4a9799_prof);

        
        $__internal_7ff77c2fe4a208c1994fd4d3b0faaff6053e21bd45129069061d1e89bef55a36->leave($__internal_7ff77c2fe4a208c1994fd4d3b0faaff6053e21bd45129069061d1e89bef55a36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
