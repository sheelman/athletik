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
        $__internal_4654fd7e4a3f2c2c0fb9760e3121f184de722ed3d267560c2477bef6667a21ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4654fd7e4a3f2c2c0fb9760e3121f184de722ed3d267560c2477bef6667a21ec->enter($__internal_4654fd7e4a3f2c2c0fb9760e3121f184de722ed3d267560c2477bef6667a21ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_2aebbe5c6383667bb2c18bc33dc56f1e8049783c5ad2296102eff7957b4783bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aebbe5c6383667bb2c18bc33dc56f1e8049783c5ad2296102eff7957b4783bc->enter($__internal_2aebbe5c6383667bb2c18bc33dc56f1e8049783c5ad2296102eff7957b4783bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_4654fd7e4a3f2c2c0fb9760e3121f184de722ed3d267560c2477bef6667a21ec->leave($__internal_4654fd7e4a3f2c2c0fb9760e3121f184de722ed3d267560c2477bef6667a21ec_prof);

        
        $__internal_2aebbe5c6383667bb2c18bc33dc56f1e8049783c5ad2296102eff7957b4783bc->leave($__internal_2aebbe5c6383667bb2c18bc33dc56f1e8049783c5ad2296102eff7957b4783bc_prof);

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
