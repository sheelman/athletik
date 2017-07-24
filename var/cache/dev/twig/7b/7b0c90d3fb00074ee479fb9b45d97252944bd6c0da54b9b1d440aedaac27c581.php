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
        $__internal_2e7fc67afa6440c5a7e5dd511a8a747e2536aafef422a0efbf389f44702e08a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7fc67afa6440c5a7e5dd511a8a747e2536aafef422a0efbf389f44702e08a9->enter($__internal_2e7fc67afa6440c5a7e5dd511a8a747e2536aafef422a0efbf389f44702e08a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2178c94aaaba6ed5265f238e0c78ec1a35aeb23189bf9f45e20dc9cbb6200a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2178c94aaaba6ed5265f238e0c78ec1a35aeb23189bf9f45e20dc9cbb6200a52->enter($__internal_2178c94aaaba6ed5265f238e0c78ec1a35aeb23189bf9f45e20dc9cbb6200a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2e7fc67afa6440c5a7e5dd511a8a747e2536aafef422a0efbf389f44702e08a9->leave($__internal_2e7fc67afa6440c5a7e5dd511a8a747e2536aafef422a0efbf389f44702e08a9_prof);

        
        $__internal_2178c94aaaba6ed5265f238e0c78ec1a35aeb23189bf9f45e20dc9cbb6200a52->leave($__internal_2178c94aaaba6ed5265f238e0c78ec1a35aeb23189bf9f45e20dc9cbb6200a52_prof);

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
