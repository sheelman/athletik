<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_efa367b26a08a5ec79b3157d7ce9f73cc1f1f472ea53210edcad953267aed167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa367b26a08a5ec79b3157d7ce9f73cc1f1f472ea53210edcad953267aed167->enter($__internal_efa367b26a08a5ec79b3157d7ce9f73cc1f1f472ea53210edcad953267aed167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ab0c9c4722edc822123c4f89f6d98bde4ad12c4d23ea5ffb4c1fec2362f34378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0c9c4722edc822123c4f89f6d98bde4ad12c4d23ea5ffb4c1fec2362f34378->enter($__internal_ab0c9c4722edc822123c4f89f6d98bde4ad12c4d23ea5ffb4c1fec2362f34378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_efa367b26a08a5ec79b3157d7ce9f73cc1f1f472ea53210edcad953267aed167->leave($__internal_efa367b26a08a5ec79b3157d7ce9f73cc1f1f472ea53210edcad953267aed167_prof);

        
        $__internal_ab0c9c4722edc822123c4f89f6d98bde4ad12c4d23ea5ffb4c1fec2362f34378->leave($__internal_ab0c9c4722edc822123c4f89f6d98bde4ad12c4d23ea5ffb4c1fec2362f34378_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
