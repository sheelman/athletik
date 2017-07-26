<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ffab92275824e73ac33adcd297be5b98e43b623c6007dcbde585b2925ecca0d1 extends Twig_Template
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
        $__internal_4b35e38605e3bc4e580c6ee006de2220143f4dc5b35845e97c78bd5db899473d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b35e38605e3bc4e580c6ee006de2220143f4dc5b35845e97c78bd5db899473d->enter($__internal_4b35e38605e3bc4e580c6ee006de2220143f4dc5b35845e97c78bd5db899473d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_0cd1315b9fbb1e415fd4a7ee19af83695766ab0f593196ed1bcda1a4ed85d488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd1315b9fbb1e415fd4a7ee19af83695766ab0f593196ed1bcda1a4ed85d488->enter($__internal_0cd1315b9fbb1e415fd4a7ee19af83695766ab0f593196ed1bcda1a4ed85d488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4b35e38605e3bc4e580c6ee006de2220143f4dc5b35845e97c78bd5db899473d->leave($__internal_4b35e38605e3bc4e580c6ee006de2220143f4dc5b35845e97c78bd5db899473d_prof);

        
        $__internal_0cd1315b9fbb1e415fd4a7ee19af83695766ab0f593196ed1bcda1a4ed85d488->leave($__internal_0cd1315b9fbb1e415fd4a7ee19af83695766ab0f593196ed1bcda1a4ed85d488_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
