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
        $__internal_f3ee7fc305414044d715e9b7bf30d68cbaedc796287fcf1ac30da76f0e859e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ee7fc305414044d715e9b7bf30d68cbaedc796287fcf1ac30da76f0e859e75->enter($__internal_f3ee7fc305414044d715e9b7bf30d68cbaedc796287fcf1ac30da76f0e859e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_dc4514b579b9f730ad4c35055415a31c6567974b60cabd358197e6e82b56e981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4514b579b9f730ad4c35055415a31c6567974b60cabd358197e6e82b56e981->enter($__internal_dc4514b579b9f730ad4c35055415a31c6567974b60cabd358197e6e82b56e981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f3ee7fc305414044d715e9b7bf30d68cbaedc796287fcf1ac30da76f0e859e75->leave($__internal_f3ee7fc305414044d715e9b7bf30d68cbaedc796287fcf1ac30da76f0e859e75_prof);

        
        $__internal_dc4514b579b9f730ad4c35055415a31c6567974b60cabd358197e6e82b56e981->leave($__internal_dc4514b579b9f730ad4c35055415a31c6567974b60cabd358197e6e82b56e981_prof);

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
