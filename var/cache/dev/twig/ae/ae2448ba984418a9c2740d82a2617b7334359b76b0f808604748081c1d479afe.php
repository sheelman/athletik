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
        $__internal_52a7877a6847725992c22e3eb22ace0eef10609d2f1582b8459a42d7d64dbe94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a7877a6847725992c22e3eb22ace0eef10609d2f1582b8459a42d7d64dbe94->enter($__internal_52a7877a6847725992c22e3eb22ace0eef10609d2f1582b8459a42d7d64dbe94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_db6ad22fef85a428b65dcccef7d8d08a536a3ba2367ea323689d95cba3b275c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6ad22fef85a428b65dcccef7d8d08a536a3ba2367ea323689d95cba3b275c8->enter($__internal_db6ad22fef85a428b65dcccef7d8d08a536a3ba2367ea323689d95cba3b275c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_52a7877a6847725992c22e3eb22ace0eef10609d2f1582b8459a42d7d64dbe94->leave($__internal_52a7877a6847725992c22e3eb22ace0eef10609d2f1582b8459a42d7d64dbe94_prof);

        
        $__internal_db6ad22fef85a428b65dcccef7d8d08a536a3ba2367ea323689d95cba3b275c8->leave($__internal_db6ad22fef85a428b65dcccef7d8d08a536a3ba2367ea323689d95cba3b275c8_prof);

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
