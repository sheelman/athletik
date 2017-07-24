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
        $__internal_1629f22973c932d8d95f2a9cee8d8b411fd62c729e13b4a4ceee192d67c432f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1629f22973c932d8d95f2a9cee8d8b411fd62c729e13b4a4ceee192d67c432f6->enter($__internal_1629f22973c932d8d95f2a9cee8d8b411fd62c729e13b4a4ceee192d67c432f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2e514a0d248af1fc4243cc3c184ec6ae4f2d0566a6ca183ebf3299e40bdd25d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e514a0d248af1fc4243cc3c184ec6ae4f2d0566a6ca183ebf3299e40bdd25d7->enter($__internal_2e514a0d248af1fc4243cc3c184ec6ae4f2d0566a6ca183ebf3299e40bdd25d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1629f22973c932d8d95f2a9cee8d8b411fd62c729e13b4a4ceee192d67c432f6->leave($__internal_1629f22973c932d8d95f2a9cee8d8b411fd62c729e13b4a4ceee192d67c432f6_prof);

        
        $__internal_2e514a0d248af1fc4243cc3c184ec6ae4f2d0566a6ca183ebf3299e40bdd25d7->leave($__internal_2e514a0d248af1fc4243cc3c184ec6ae4f2d0566a6ca183ebf3299e40bdd25d7_prof);

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
