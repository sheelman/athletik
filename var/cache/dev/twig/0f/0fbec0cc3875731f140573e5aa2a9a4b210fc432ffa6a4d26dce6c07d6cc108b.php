<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e59fc2b9c19e389f46347b3b05c1dd31ace3e7d79b3c828c0e5b6929e6fc4712 extends Twig_Template
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
        $__internal_7c5e2e4d3ac46c9cc83c991a98dfec286a002a919fe8e7754d84079d13412657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5e2e4d3ac46c9cc83c991a98dfec286a002a919fe8e7754d84079d13412657->enter($__internal_7c5e2e4d3ac46c9cc83c991a98dfec286a002a919fe8e7754d84079d13412657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_61a0cc1cd215eb2242abda735d7a70dbf19972db23bc447559da362fe84dc148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a0cc1cd215eb2242abda735d7a70dbf19972db23bc447559da362fe84dc148->enter($__internal_61a0cc1cd215eb2242abda735d7a70dbf19972db23bc447559da362fe84dc148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7c5e2e4d3ac46c9cc83c991a98dfec286a002a919fe8e7754d84079d13412657->leave($__internal_7c5e2e4d3ac46c9cc83c991a98dfec286a002a919fe8e7754d84079d13412657_prof);

        
        $__internal_61a0cc1cd215eb2242abda735d7a70dbf19972db23bc447559da362fe84dc148->leave($__internal_61a0cc1cd215eb2242abda735d7a70dbf19972db23bc447559da362fe84dc148_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
