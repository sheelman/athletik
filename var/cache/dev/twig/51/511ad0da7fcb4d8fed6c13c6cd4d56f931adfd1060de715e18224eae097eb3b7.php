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
        $__internal_9fae78cd5bf307f04c57d48f035beabf8a37d1d872039d3e7d010e59bd2e2173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fae78cd5bf307f04c57d48f035beabf8a37d1d872039d3e7d010e59bd2e2173->enter($__internal_9fae78cd5bf307f04c57d48f035beabf8a37d1d872039d3e7d010e59bd2e2173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_434f54a325a270fb83d5e5862ad2cc555ad2a1f0875626b72b8f2fd3a5cb2258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434f54a325a270fb83d5e5862ad2cc555ad2a1f0875626b72b8f2fd3a5cb2258->enter($__internal_434f54a325a270fb83d5e5862ad2cc555ad2a1f0875626b72b8f2fd3a5cb2258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9fae78cd5bf307f04c57d48f035beabf8a37d1d872039d3e7d010e59bd2e2173->leave($__internal_9fae78cd5bf307f04c57d48f035beabf8a37d1d872039d3e7d010e59bd2e2173_prof);

        
        $__internal_434f54a325a270fb83d5e5862ad2cc555ad2a1f0875626b72b8f2fd3a5cb2258->leave($__internal_434f54a325a270fb83d5e5862ad2cc555ad2a1f0875626b72b8f2fd3a5cb2258_prof);

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
