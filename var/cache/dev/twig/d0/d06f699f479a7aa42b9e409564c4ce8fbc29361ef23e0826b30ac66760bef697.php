<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_62a5956d27be800285f7a5cc5492913f39af5affd3bd9bf00af6b589b57c192d extends Twig_Template
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
        $__internal_3d77f33ac240ba74f57a2a96dc5cc1b5f4c7f3416d2d7d7316a504964c193a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d77f33ac240ba74f57a2a96dc5cc1b5f4c7f3416d2d7d7316a504964c193a60->enter($__internal_3d77f33ac240ba74f57a2a96dc5cc1b5f4c7f3416d2d7d7316a504964c193a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_13e9464d3e131213760f2859edc1423e8c917b29b0ed0e9cf91937ed6bafdcd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e9464d3e131213760f2859edc1423e8c917b29b0ed0e9cf91937ed6bafdcd8->enter($__internal_13e9464d3e131213760f2859edc1423e8c917b29b0ed0e9cf91937ed6bafdcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_3d77f33ac240ba74f57a2a96dc5cc1b5f4c7f3416d2d7d7316a504964c193a60->leave($__internal_3d77f33ac240ba74f57a2a96dc5cc1b5f4c7f3416d2d7d7316a504964c193a60_prof);

        
        $__internal_13e9464d3e131213760f2859edc1423e8c917b29b0ed0e9cf91937ed6bafdcd8->leave($__internal_13e9464d3e131213760f2859edc1423e8c917b29b0ed0e9cf91937ed6bafdcd8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
