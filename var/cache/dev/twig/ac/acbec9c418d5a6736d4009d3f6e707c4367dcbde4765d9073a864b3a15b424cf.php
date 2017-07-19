<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fe41488acc3417521100e0f07c1fec3596110dade835cd2bbecc8d7f60cf9337 extends Twig_Template
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
        $__internal_0ce128a324b61b493542bb19bbe8c3a5043bf9fcf4a6a6a486ef0f188b8297ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ce128a324b61b493542bb19bbe8c3a5043bf9fcf4a6a6a486ef0f188b8297ac->enter($__internal_0ce128a324b61b493542bb19bbe8c3a5043bf9fcf4a6a6a486ef0f188b8297ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_88d2a0cbd390fed15b1e6ad265a8f412da0797681feabde7143c37898a7d5029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d2a0cbd390fed15b1e6ad265a8f412da0797681feabde7143c37898a7d5029->enter($__internal_88d2a0cbd390fed15b1e6ad265a8f412da0797681feabde7143c37898a7d5029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0ce128a324b61b493542bb19bbe8c3a5043bf9fcf4a6a6a486ef0f188b8297ac->leave($__internal_0ce128a324b61b493542bb19bbe8c3a5043bf9fcf4a6a6a486ef0f188b8297ac_prof);

        
        $__internal_88d2a0cbd390fed15b1e6ad265a8f412da0797681feabde7143c37898a7d5029->leave($__internal_88d2a0cbd390fed15b1e6ad265a8f412da0797681feabde7143c37898a7d5029_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
