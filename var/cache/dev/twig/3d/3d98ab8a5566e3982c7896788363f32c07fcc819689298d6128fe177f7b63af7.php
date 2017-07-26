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
        $__internal_337e1c085f68f611755b001eb80edd6e715f9fecd2996e96aa17fbbc7f785388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337e1c085f68f611755b001eb80edd6e715f9fecd2996e96aa17fbbc7f785388->enter($__internal_337e1c085f68f611755b001eb80edd6e715f9fecd2996e96aa17fbbc7f785388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_72919f2db1504d6a46fe4f83039eb7bf2aad7b04177ca9ecb199256b6bbf64f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72919f2db1504d6a46fe4f83039eb7bf2aad7b04177ca9ecb199256b6bbf64f3->enter($__internal_72919f2db1504d6a46fe4f83039eb7bf2aad7b04177ca9ecb199256b6bbf64f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_337e1c085f68f611755b001eb80edd6e715f9fecd2996e96aa17fbbc7f785388->leave($__internal_337e1c085f68f611755b001eb80edd6e715f9fecd2996e96aa17fbbc7f785388_prof);

        
        $__internal_72919f2db1504d6a46fe4f83039eb7bf2aad7b04177ca9ecb199256b6bbf64f3->leave($__internal_72919f2db1504d6a46fe4f83039eb7bf2aad7b04177ca9ecb199256b6bbf64f3_prof);

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
