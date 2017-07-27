<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_e74a976dd01e59a540c626f2f99eb07e41872f8ecb364de6f7f37a8800ea7ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74a976dd01e59a540c626f2f99eb07e41872f8ecb364de6f7f37a8800ea7ac2->enter($__internal_e74a976dd01e59a540c626f2f99eb07e41872f8ecb364de6f7f37a8800ea7ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_37fe9adc2d7e59dd1375e2e7bfa6b6a67eac95c46cff254fb37d93816f263971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fe9adc2d7e59dd1375e2e7bfa6b6a67eac95c46cff254fb37d93816f263971->enter($__internal_37fe9adc2d7e59dd1375e2e7bfa6b6a67eac95c46cff254fb37d93816f263971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e74a976dd01e59a540c626f2f99eb07e41872f8ecb364de6f7f37a8800ea7ac2->leave($__internal_e74a976dd01e59a540c626f2f99eb07e41872f8ecb364de6f7f37a8800ea7ac2_prof);

        
        $__internal_37fe9adc2d7e59dd1375e2e7bfa6b6a67eac95c46cff254fb37d93816f263971->leave($__internal_37fe9adc2d7e59dd1375e2e7bfa6b6a67eac95c46cff254fb37d93816f263971_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
