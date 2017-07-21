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
        $__internal_01c6cfd8e5a6a2cf4012d9b5a842dacf2d21f8be849ec5f9d511cea27d98ef9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c6cfd8e5a6a2cf4012d9b5a842dacf2d21f8be849ec5f9d511cea27d98ef9f->enter($__internal_01c6cfd8e5a6a2cf4012d9b5a842dacf2d21f8be849ec5f9d511cea27d98ef9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_69f2246ca51d3ec9b8d13f6c1473a104d0bad734a5d5a3c270d3cc48809c36e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f2246ca51d3ec9b8d13f6c1473a104d0bad734a5d5a3c270d3cc48809c36e8->enter($__internal_69f2246ca51d3ec9b8d13f6c1473a104d0bad734a5d5a3c270d3cc48809c36e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_01c6cfd8e5a6a2cf4012d9b5a842dacf2d21f8be849ec5f9d511cea27d98ef9f->leave($__internal_01c6cfd8e5a6a2cf4012d9b5a842dacf2d21f8be849ec5f9d511cea27d98ef9f_prof);

        
        $__internal_69f2246ca51d3ec9b8d13f6c1473a104d0bad734a5d5a3c270d3cc48809c36e8->leave($__internal_69f2246ca51d3ec9b8d13f6c1473a104d0bad734a5d5a3c270d3cc48809c36e8_prof);

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
