<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69787b8f45555631b7dd60dddf820b29a6106424c88235bb45364dc950e1a374 extends Twig_Template
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
        $__internal_687aba89000eecaaf2dc89639d1048d4883ad00879c0b7e2568bd2c5a69ce6f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687aba89000eecaaf2dc89639d1048d4883ad00879c0b7e2568bd2c5a69ce6f0->enter($__internal_687aba89000eecaaf2dc89639d1048d4883ad00879c0b7e2568bd2c5a69ce6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_639adef781ef5747fa11bf0d05eb9fc7437277c588c36b8d286850956d444caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639adef781ef5747fa11bf0d05eb9fc7437277c588c36b8d286850956d444caa->enter($__internal_639adef781ef5747fa11bf0d05eb9fc7437277c588c36b8d286850956d444caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_687aba89000eecaaf2dc89639d1048d4883ad00879c0b7e2568bd2c5a69ce6f0->leave($__internal_687aba89000eecaaf2dc89639d1048d4883ad00879c0b7e2568bd2c5a69ce6f0_prof);

        
        $__internal_639adef781ef5747fa11bf0d05eb9fc7437277c588c36b8d286850956d444caa->leave($__internal_639adef781ef5747fa11bf0d05eb9fc7437277c588c36b8d286850956d444caa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
