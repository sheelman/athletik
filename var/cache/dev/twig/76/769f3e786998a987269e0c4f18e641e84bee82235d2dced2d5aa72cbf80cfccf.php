<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_955cc17dfa719928ac111330d7ce96faccd6f0e26aba2e98b93882afbcaf683f extends Twig_Template
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
        $__internal_59a635b24f032c84a36244e92c696bc909e87289eb7a013b0c27e158a33aa56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a635b24f032c84a36244e92c696bc909e87289eb7a013b0c27e158a33aa56d->enter($__internal_59a635b24f032c84a36244e92c696bc909e87289eb7a013b0c27e158a33aa56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_635914e107b687a362624e04da4dc3e1f9172d4c22a15ef0404313449e462e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635914e107b687a362624e04da4dc3e1f9172d4c22a15ef0404313449e462e47->enter($__internal_635914e107b687a362624e04da4dc3e1f9172d4c22a15ef0404313449e462e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_59a635b24f032c84a36244e92c696bc909e87289eb7a013b0c27e158a33aa56d->leave($__internal_59a635b24f032c84a36244e92c696bc909e87289eb7a013b0c27e158a33aa56d_prof);

        
        $__internal_635914e107b687a362624e04da4dc3e1f9172d4c22a15ef0404313449e462e47->leave($__internal_635914e107b687a362624e04da4dc3e1f9172d4c22a15ef0404313449e462e47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
