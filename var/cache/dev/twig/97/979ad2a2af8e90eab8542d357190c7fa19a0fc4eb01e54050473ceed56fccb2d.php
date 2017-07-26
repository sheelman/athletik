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
        $__internal_61797e2cfa3e3d20c174c662b4e462634c8d2ed001293709cda7a249a9cb3533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61797e2cfa3e3d20c174c662b4e462634c8d2ed001293709cda7a249a9cb3533->enter($__internal_61797e2cfa3e3d20c174c662b4e462634c8d2ed001293709cda7a249a9cb3533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_16dd4f7939524b2646b54683b289afb602bda786931b11b41f435cf14a45a370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16dd4f7939524b2646b54683b289afb602bda786931b11b41f435cf14a45a370->enter($__internal_16dd4f7939524b2646b54683b289afb602bda786931b11b41f435cf14a45a370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_61797e2cfa3e3d20c174c662b4e462634c8d2ed001293709cda7a249a9cb3533->leave($__internal_61797e2cfa3e3d20c174c662b4e462634c8d2ed001293709cda7a249a9cb3533_prof);

        
        $__internal_16dd4f7939524b2646b54683b289afb602bda786931b11b41f435cf14a45a370->leave($__internal_16dd4f7939524b2646b54683b289afb602bda786931b11b41f435cf14a45a370_prof);

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
