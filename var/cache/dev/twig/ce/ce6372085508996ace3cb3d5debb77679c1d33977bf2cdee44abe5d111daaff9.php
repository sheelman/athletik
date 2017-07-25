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
        $__internal_17e2d7701cc346a9f596fa1cd0e17ebfce95e1a0d17e8588ba07f69e6604936e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e2d7701cc346a9f596fa1cd0e17ebfce95e1a0d17e8588ba07f69e6604936e->enter($__internal_17e2d7701cc346a9f596fa1cd0e17ebfce95e1a0d17e8588ba07f69e6604936e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4fcd17afbdaa14c4f28cafdf2f8aa4c67f1f41a5f326e0f2c69e488aff8f7612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcd17afbdaa14c4f28cafdf2f8aa4c67f1f41a5f326e0f2c69e488aff8f7612->enter($__internal_4fcd17afbdaa14c4f28cafdf2f8aa4c67f1f41a5f326e0f2c69e488aff8f7612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_17e2d7701cc346a9f596fa1cd0e17ebfce95e1a0d17e8588ba07f69e6604936e->leave($__internal_17e2d7701cc346a9f596fa1cd0e17ebfce95e1a0d17e8588ba07f69e6604936e_prof);

        
        $__internal_4fcd17afbdaa14c4f28cafdf2f8aa4c67f1f41a5f326e0f2c69e488aff8f7612->leave($__internal_4fcd17afbdaa14c4f28cafdf2f8aa4c67f1f41a5f326e0f2c69e488aff8f7612_prof);

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
