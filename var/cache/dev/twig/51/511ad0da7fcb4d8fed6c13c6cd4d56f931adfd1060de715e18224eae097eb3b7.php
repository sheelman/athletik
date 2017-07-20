<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_aeee3a45386651ff0189c422c5d753ed661b75ea5ac831f79311f9635f9c8dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeee3a45386651ff0189c422c5d753ed661b75ea5ac831f79311f9635f9c8dbb->enter($__internal_aeee3a45386651ff0189c422c5d753ed661b75ea5ac831f79311f9635f9c8dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_cfb36ab803b71599faa702e98eb28fecad3d1f5f2174580923d50f7228e01fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb36ab803b71599faa702e98eb28fecad3d1f5f2174580923d50f7228e01fc5->enter($__internal_cfb36ab803b71599faa702e98eb28fecad3d1f5f2174580923d50f7228e01fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_aeee3a45386651ff0189c422c5d753ed661b75ea5ac831f79311f9635f9c8dbb->leave($__internal_aeee3a45386651ff0189c422c5d753ed661b75ea5ac831f79311f9635f9c8dbb_prof);

        
        $__internal_cfb36ab803b71599faa702e98eb28fecad3d1f5f2174580923d50f7228e01fc5->leave($__internal_cfb36ab803b71599faa702e98eb28fecad3d1f5f2174580923d50f7228e01fc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
