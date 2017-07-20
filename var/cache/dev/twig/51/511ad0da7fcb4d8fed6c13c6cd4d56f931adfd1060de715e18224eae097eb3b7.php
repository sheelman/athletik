<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_ba41658bedf268429b2812caa3dd67b7c59bad8e1e98f52229323d9a1c380753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba41658bedf268429b2812caa3dd67b7c59bad8e1e98f52229323d9a1c380753->enter($__internal_ba41658bedf268429b2812caa3dd67b7c59bad8e1e98f52229323d9a1c380753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_774c5675eb6d24a9774329f2d5ef692284cacc7f7d2b0f135420f070467e69bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774c5675eb6d24a9774329f2d5ef692284cacc7f7d2b0f135420f070467e69bc->enter($__internal_774c5675eb6d24a9774329f2d5ef692284cacc7f7d2b0f135420f070467e69bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ba41658bedf268429b2812caa3dd67b7c59bad8e1e98f52229323d9a1c380753->leave($__internal_ba41658bedf268429b2812caa3dd67b7c59bad8e1e98f52229323d9a1c380753_prof);

        
        $__internal_774c5675eb6d24a9774329f2d5ef692284cacc7f7d2b0f135420f070467e69bc->leave($__internal_774c5675eb6d24a9774329f2d5ef692284cacc7f7d2b0f135420f070467e69bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
