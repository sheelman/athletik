<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_ef13c69d279a4f80716b5497c44b74b2fc1b672a8f02e60b8560ac5ea9188fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef13c69d279a4f80716b5497c44b74b2fc1b672a8f02e60b8560ac5ea9188fda->enter($__internal_ef13c69d279a4f80716b5497c44b74b2fc1b672a8f02e60b8560ac5ea9188fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1fd43badf0774cf494678dec886d2faf2836457165d8c49f28aaf3263321b555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd43badf0774cf494678dec886d2faf2836457165d8c49f28aaf3263321b555->enter($__internal_1fd43badf0774cf494678dec886d2faf2836457165d8c49f28aaf3263321b555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ef13c69d279a4f80716b5497c44b74b2fc1b672a8f02e60b8560ac5ea9188fda->leave($__internal_ef13c69d279a4f80716b5497c44b74b2fc1b672a8f02e60b8560ac5ea9188fda_prof);

        
        $__internal_1fd43badf0774cf494678dec886d2faf2836457165d8c49f28aaf3263321b555->leave($__internal_1fd43badf0774cf494678dec886d2faf2836457165d8c49f28aaf3263321b555_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
