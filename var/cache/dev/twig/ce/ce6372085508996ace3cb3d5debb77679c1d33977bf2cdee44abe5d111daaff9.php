<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_fd501dd4bd89083cc352566e8532220c2b8a444c892ff31a7e72c702b26bcc07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd501dd4bd89083cc352566e8532220c2b8a444c892ff31a7e72c702b26bcc07->enter($__internal_fd501dd4bd89083cc352566e8532220c2b8a444c892ff31a7e72c702b26bcc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c609c8b76348957a71c3bb8ed5b1d01cc84ca75b0ca953c33441cc4a34a95ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c609c8b76348957a71c3bb8ed5b1d01cc84ca75b0ca953c33441cc4a34a95ca1->enter($__internal_c609c8b76348957a71c3bb8ed5b1d01cc84ca75b0ca953c33441cc4a34a95ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_fd501dd4bd89083cc352566e8532220c2b8a444c892ff31a7e72c702b26bcc07->leave($__internal_fd501dd4bd89083cc352566e8532220c2b8a444c892ff31a7e72c702b26bcc07_prof);

        
        $__internal_c609c8b76348957a71c3bb8ed5b1d01cc84ca75b0ca953c33441cc4a34a95ca1->leave($__internal_c609c8b76348957a71c3bb8ed5b1d01cc84ca75b0ca953c33441cc4a34a95ca1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
