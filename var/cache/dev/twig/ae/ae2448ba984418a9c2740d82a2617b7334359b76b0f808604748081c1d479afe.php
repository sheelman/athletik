<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_4bb17cac1003331e38c3f3b039769b6d11aa531fed1f4d2f365dc96c28732ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb17cac1003331e38c3f3b039769b6d11aa531fed1f4d2f365dc96c28732ed1->enter($__internal_4bb17cac1003331e38c3f3b039769b6d11aa531fed1f4d2f365dc96c28732ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8e6cfb181b7e62c5d53c3d8c2bd8126c99d1a30a73aad9b3d0b5a050e979a085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6cfb181b7e62c5d53c3d8c2bd8126c99d1a30a73aad9b3d0b5a050e979a085->enter($__internal_8e6cfb181b7e62c5d53c3d8c2bd8126c99d1a30a73aad9b3d0b5a050e979a085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4bb17cac1003331e38c3f3b039769b6d11aa531fed1f4d2f365dc96c28732ed1->leave($__internal_4bb17cac1003331e38c3f3b039769b6d11aa531fed1f4d2f365dc96c28732ed1_prof);

        
        $__internal_8e6cfb181b7e62c5d53c3d8c2bd8126c99d1a30a73aad9b3d0b5a050e979a085->leave($__internal_8e6cfb181b7e62c5d53c3d8c2bd8126c99d1a30a73aad9b3d0b5a050e979a085_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
