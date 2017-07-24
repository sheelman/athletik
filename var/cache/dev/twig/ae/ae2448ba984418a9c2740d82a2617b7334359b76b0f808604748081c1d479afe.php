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
        $__internal_5e70a78e8bba48ac8ceb83bf5cf567a02885a4417d8e26c8bea0f9652d361d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e70a78e8bba48ac8ceb83bf5cf567a02885a4417d8e26c8bea0f9652d361d06->enter($__internal_5e70a78e8bba48ac8ceb83bf5cf567a02885a4417d8e26c8bea0f9652d361d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_40315a3af9cf95eb72e601bd7468113dc2434a25f1fc6e2efc188c5a9edd604c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40315a3af9cf95eb72e601bd7468113dc2434a25f1fc6e2efc188c5a9edd604c->enter($__internal_40315a3af9cf95eb72e601bd7468113dc2434a25f1fc6e2efc188c5a9edd604c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_5e70a78e8bba48ac8ceb83bf5cf567a02885a4417d8e26c8bea0f9652d361d06->leave($__internal_5e70a78e8bba48ac8ceb83bf5cf567a02885a4417d8e26c8bea0f9652d361d06_prof);

        
        $__internal_40315a3af9cf95eb72e601bd7468113dc2434a25f1fc6e2efc188c5a9edd604c->leave($__internal_40315a3af9cf95eb72e601bd7468113dc2434a25f1fc6e2efc188c5a9edd604c_prof);

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
