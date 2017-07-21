<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_482493807b321864015701795b9c0793e8becb90ab70cf8b176d7d5542d98406 extends Twig_Template
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
        $__internal_d2813c8d89f0fbce5dc75e63242accc5ffcdc4fe967661a7b4a0a9caa52d5216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2813c8d89f0fbce5dc75e63242accc5ffcdc4fe967661a7b4a0a9caa52d5216->enter($__internal_d2813c8d89f0fbce5dc75e63242accc5ffcdc4fe967661a7b4a0a9caa52d5216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_e78dfdf1a37ab28a81eba89ae6d09fac986cb1547ea791c6c45b6465c9addf51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78dfdf1a37ab28a81eba89ae6d09fac986cb1547ea791c6c45b6465c9addf51->enter($__internal_e78dfdf1a37ab28a81eba89ae6d09fac986cb1547ea791c6c45b6465c9addf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d2813c8d89f0fbce5dc75e63242accc5ffcdc4fe967661a7b4a0a9caa52d5216->leave($__internal_d2813c8d89f0fbce5dc75e63242accc5ffcdc4fe967661a7b4a0a9caa52d5216_prof);

        
        $__internal_e78dfdf1a37ab28a81eba89ae6d09fac986cb1547ea791c6c45b6465c9addf51->leave($__internal_e78dfdf1a37ab28a81eba89ae6d09fac986cb1547ea791c6c45b6465c9addf51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
