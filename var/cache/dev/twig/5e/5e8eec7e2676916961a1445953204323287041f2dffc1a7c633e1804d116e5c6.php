<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_53d15f9dde56fe582c2336fd44b608fd6dc9bf2e23a21f9d0af5e3bdba3c1c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d15f9dde56fe582c2336fd44b608fd6dc9bf2e23a21f9d0af5e3bdba3c1c7d->enter($__internal_53d15f9dde56fe582c2336fd44b608fd6dc9bf2e23a21f9d0af5e3bdba3c1c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9009644d0f042da15879c292980f418cc318c132acdfb4cf35e09d482474a4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9009644d0f042da15879c292980f418cc318c132acdfb4cf35e09d482474a4bc->enter($__internal_9009644d0f042da15879c292980f418cc318c132acdfb4cf35e09d482474a4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_53d15f9dde56fe582c2336fd44b608fd6dc9bf2e23a21f9d0af5e3bdba3c1c7d->leave($__internal_53d15f9dde56fe582c2336fd44b608fd6dc9bf2e23a21f9d0af5e3bdba3c1c7d_prof);

        
        $__internal_9009644d0f042da15879c292980f418cc318c132acdfb4cf35e09d482474a4bc->leave($__internal_9009644d0f042da15879c292980f418cc318c132acdfb4cf35e09d482474a4bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
