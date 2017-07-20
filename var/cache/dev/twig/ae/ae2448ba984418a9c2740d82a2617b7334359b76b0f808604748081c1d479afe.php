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
        $__internal_6ec0eb2108a19d8e99373c98d836fb939b78e85eb267b03ee177afc594ec2222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec0eb2108a19d8e99373c98d836fb939b78e85eb267b03ee177afc594ec2222->enter($__internal_6ec0eb2108a19d8e99373c98d836fb939b78e85eb267b03ee177afc594ec2222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f6e748c2f373cb168b98df239e2568bd8fd9b7d2b3cffe0caa6cea98e3f108d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e748c2f373cb168b98df239e2568bd8fd9b7d2b3cffe0caa6cea98e3f108d1->enter($__internal_f6e748c2f373cb168b98df239e2568bd8fd9b7d2b3cffe0caa6cea98e3f108d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6ec0eb2108a19d8e99373c98d836fb939b78e85eb267b03ee177afc594ec2222->leave($__internal_6ec0eb2108a19d8e99373c98d836fb939b78e85eb267b03ee177afc594ec2222_prof);

        
        $__internal_f6e748c2f373cb168b98df239e2568bd8fd9b7d2b3cffe0caa6cea98e3f108d1->leave($__internal_f6e748c2f373cb168b98df239e2568bd8fd9b7d2b3cffe0caa6cea98e3f108d1_prof);

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
