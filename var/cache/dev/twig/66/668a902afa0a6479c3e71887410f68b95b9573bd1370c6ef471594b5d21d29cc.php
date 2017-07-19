<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6a312865dff10bc0533f3c37be125a17e91023579d9711e8d478be100cd8c786 extends Twig_Template
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
        $__internal_552abd452a0dd578541dcb76a306cb7097b755e6f489c3347f64da7e0f58779d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552abd452a0dd578541dcb76a306cb7097b755e6f489c3347f64da7e0f58779d->enter($__internal_552abd452a0dd578541dcb76a306cb7097b755e6f489c3347f64da7e0f58779d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_04df3b699abb50aa25bfc99ec043d7f45256f97982736b5e8301defdd61fa912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04df3b699abb50aa25bfc99ec043d7f45256f97982736b5e8301defdd61fa912->enter($__internal_04df3b699abb50aa25bfc99ec043d7f45256f97982736b5e8301defdd61fa912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_552abd452a0dd578541dcb76a306cb7097b755e6f489c3347f64da7e0f58779d->leave($__internal_552abd452a0dd578541dcb76a306cb7097b755e6f489c3347f64da7e0f58779d_prof);

        
        $__internal_04df3b699abb50aa25bfc99ec043d7f45256f97982736b5e8301defdd61fa912->leave($__internal_04df3b699abb50aa25bfc99ec043d7f45256f97982736b5e8301defdd61fa912_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
