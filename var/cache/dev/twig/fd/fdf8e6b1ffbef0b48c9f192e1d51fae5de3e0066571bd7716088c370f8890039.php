<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_713bbb5e16b849ce5bd8dd57cec0b7b80f2f680090a8e9668cd9a5a7707f0a55 extends Twig_Template
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
        $__internal_23abf4ccea59f2b4ea3d72b6b9b4a5a4055bd443ddfb3249ec47dc142175f73d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23abf4ccea59f2b4ea3d72b6b9b4a5a4055bd443ddfb3249ec47dc142175f73d->enter($__internal_23abf4ccea59f2b4ea3d72b6b9b4a5a4055bd443ddfb3249ec47dc142175f73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_177207fbf96fdb521e3a28f83f462466e42d8fa03c890513b38e8bf9e9d76a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177207fbf96fdb521e3a28f83f462466e42d8fa03c890513b38e8bf9e9d76a47->enter($__internal_177207fbf96fdb521e3a28f83f462466e42d8fa03c890513b38e8bf9e9d76a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_23abf4ccea59f2b4ea3d72b6b9b4a5a4055bd443ddfb3249ec47dc142175f73d->leave($__internal_23abf4ccea59f2b4ea3d72b6b9b4a5a4055bd443ddfb3249ec47dc142175f73d_prof);

        
        $__internal_177207fbf96fdb521e3a28f83f462466e42d8fa03c890513b38e8bf9e9d76a47->leave($__internal_177207fbf96fdb521e3a28f83f462466e42d8fa03c890513b38e8bf9e9d76a47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
