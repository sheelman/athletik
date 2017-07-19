<?php

/* default/presentation.html.twig */
class __TwigTemplate_8c7e384043f3864142129768264eb85e5a5e2f5258918f8917f6e04df6e1293a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/presentation.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac3bd76f119eb45579e8192d736cb477ebf58227bae1d038a3b8419865e07d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3bd76f119eb45579e8192d736cb477ebf58227bae1d038a3b8419865e07d91->enter($__internal_ac3bd76f119eb45579e8192d736cb477ebf58227bae1d038a3b8419865e07d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/presentation.html.twig"));

        $__internal_16493c859cc4826275d49b85d6672b39f5cdbab6d63b3dbfb78e196311d64516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16493c859cc4826275d49b85d6672b39f5cdbab6d63b3dbfb78e196311d64516->enter($__internal_16493c859cc4826275d49b85d6672b39f5cdbab6d63b3dbfb78e196311d64516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac3bd76f119eb45579e8192d736cb477ebf58227bae1d038a3b8419865e07d91->leave($__internal_ac3bd76f119eb45579e8192d736cb477ebf58227bae1d038a3b8419865e07d91_prof);

        
        $__internal_16493c859cc4826275d49b85d6672b39f5cdbab6d63b3dbfb78e196311d64516->leave($__internal_16493c859cc4826275d49b85d6672b39f5cdbab6d63b3dbfb78e196311d64516_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_121f2f8c42bd6e6ce728e96a912e552c7298a03070d6103a57a1b002384cc5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121f2f8c42bd6e6ce728e96a912e552c7298a03070d6103a57a1b002384cc5d4->enter($__internal_121f2f8c42bd6e6ce728e96a912e552c7298a03070d6103a57a1b002384cc5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_954e77b3f25537b1c268eeb4f6b17ce285bb93bc0463efd79b5c303e1865e442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954e77b3f25537b1c268eeb4f6b17ce285bb93bc0463efd79b5c303e1865e442->enter($__internal_954e77b3f25537b1c268eeb4f6b17ce285bb93bc0463efd79b5c303e1865e442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<body>



</body>
";
        
        $__internal_954e77b3f25537b1c268eeb4f6b17ce285bb93bc0463efd79b5c303e1865e442->leave($__internal_954e77b3f25537b1c268eeb4f6b17ce285bb93bc0463efd79b5c303e1865e442_prof);

        
        $__internal_121f2f8c42bd6e6ce728e96a912e552c7298a03070d6103a57a1b002384cc5d4->leave($__internal_121f2f8c42bd6e6ce728e96a912e552c7298a03070d6103a57a1b002384cc5d4_prof);

    }

    public function getTemplateName()
    {
        return "default/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<body>



</body>
{% endblock %}
", "default/presentation.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/presentation.html.twig");
    }
}
