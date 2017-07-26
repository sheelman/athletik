<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_763cc42fe4b9a455457e51f012cfab67deb7a745e0fe6683e76b25a9b5f8dd37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763cc42fe4b9a455457e51f012cfab67deb7a745e0fe6683e76b25a9b5f8dd37->enter($__internal_763cc42fe4b9a455457e51f012cfab67deb7a745e0fe6683e76b25a9b5f8dd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a566232c817a0105af5e508b0958bf4cdbb339316b4085621712cbee7e112f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a566232c817a0105af5e508b0958bf4cdbb339316b4085621712cbee7e112f35->enter($__internal_a566232c817a0105af5e508b0958bf4cdbb339316b4085621712cbee7e112f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_763cc42fe4b9a455457e51f012cfab67deb7a745e0fe6683e76b25a9b5f8dd37->leave($__internal_763cc42fe4b9a455457e51f012cfab67deb7a745e0fe6683e76b25a9b5f8dd37_prof);

        
        $__internal_a566232c817a0105af5e508b0958bf4cdbb339316b4085621712cbee7e112f35->leave($__internal_a566232c817a0105af5e508b0958bf4cdbb339316b4085621712cbee7e112f35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
