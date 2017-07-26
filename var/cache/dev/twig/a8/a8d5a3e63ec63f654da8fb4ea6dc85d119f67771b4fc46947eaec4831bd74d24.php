<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_6358b16bf2ede07ecc6fda2666b7974020158a26705a5f1b6382553c10603a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6358b16bf2ede07ecc6fda2666b7974020158a26705a5f1b6382553c10603a36->enter($__internal_6358b16bf2ede07ecc6fda2666b7974020158a26705a5f1b6382553c10603a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_731a009f046eaa1b7e864123b57af9b102dc196d6d2c7871382646e2376896a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731a009f046eaa1b7e864123b57af9b102dc196d6d2c7871382646e2376896a5->enter($__internal_731a009f046eaa1b7e864123b57af9b102dc196d6d2c7871382646e2376896a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6358b16bf2ede07ecc6fda2666b7974020158a26705a5f1b6382553c10603a36->leave($__internal_6358b16bf2ede07ecc6fda2666b7974020158a26705a5f1b6382553c10603a36_prof);

        
        $__internal_731a009f046eaa1b7e864123b57af9b102dc196d6d2c7871382646e2376896a5->leave($__internal_731a009f046eaa1b7e864123b57af9b102dc196d6d2c7871382646e2376896a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
