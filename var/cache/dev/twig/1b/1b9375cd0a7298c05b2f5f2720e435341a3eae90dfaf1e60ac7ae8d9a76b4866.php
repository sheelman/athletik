<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_a6258756c609d9966ea5b8713a098e1f5e2e153dc3abde0ae0e67a7b662fcdeb extends Twig_Template
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
        $__internal_bc0442f1e16a238244bb91fbb83c3d85165238ce337648f0ddf1fa9d91b1f16f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc0442f1e16a238244bb91fbb83c3d85165238ce337648f0ddf1fa9d91b1f16f->enter($__internal_bc0442f1e16a238244bb91fbb83c3d85165238ce337648f0ddf1fa9d91b1f16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_4c263e21eee164b2ef1c8bd5582c2f6138d0dde01d3747548e84745c8482ff82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c263e21eee164b2ef1c8bd5582c2f6138d0dde01d3747548e84745c8482ff82->enter($__internal_4c263e21eee164b2ef1c8bd5582c2f6138d0dde01d3747548e84745c8482ff82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_bc0442f1e16a238244bb91fbb83c3d85165238ce337648f0ddf1fa9d91b1f16f->leave($__internal_bc0442f1e16a238244bb91fbb83c3d85165238ce337648f0ddf1fa9d91b1f16f_prof);

        
        $__internal_4c263e21eee164b2ef1c8bd5582c2f6138d0dde01d3747548e84745c8482ff82->leave($__internal_4c263e21eee164b2ef1c8bd5582c2f6138d0dde01d3747548e84745c8482ff82_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
