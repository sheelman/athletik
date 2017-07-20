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
        $__internal_ce4bdb57e7e7e818960f6e2abc1faf1800b7f322c2fa2f373b3cdceb41870bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4bdb57e7e7e818960f6e2abc1faf1800b7f322c2fa2f373b3cdceb41870bae->enter($__internal_ce4bdb57e7e7e818960f6e2abc1faf1800b7f322c2fa2f373b3cdceb41870bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9bbca0ba9d8895517e9cabeaad7c7de82d1f1b0edecfc7b484846cffcfbdf111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbca0ba9d8895517e9cabeaad7c7de82d1f1b0edecfc7b484846cffcfbdf111->enter($__internal_9bbca0ba9d8895517e9cabeaad7c7de82d1f1b0edecfc7b484846cffcfbdf111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ce4bdb57e7e7e818960f6e2abc1faf1800b7f322c2fa2f373b3cdceb41870bae->leave($__internal_ce4bdb57e7e7e818960f6e2abc1faf1800b7f322c2fa2f373b3cdceb41870bae_prof);

        
        $__internal_9bbca0ba9d8895517e9cabeaad7c7de82d1f1b0edecfc7b484846cffcfbdf111->leave($__internal_9bbca0ba9d8895517e9cabeaad7c7de82d1f1b0edecfc7b484846cffcfbdf111_prof);

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
