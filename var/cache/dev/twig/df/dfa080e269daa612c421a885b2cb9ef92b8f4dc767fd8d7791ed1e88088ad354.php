<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_c720938a9ba254f4b872a6bff038fc18b92bb16086bb15b50bacd4dde46f68ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c720938a9ba254f4b872a6bff038fc18b92bb16086bb15b50bacd4dde46f68ce->enter($__internal_c720938a9ba254f4b872a6bff038fc18b92bb16086bb15b50bacd4dde46f68ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f4a2d66410929d200bbced71fd4c8faec6993b040f659f6ff3fc51b0e29bf6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4a2d66410929d200bbced71fd4c8faec6993b040f659f6ff3fc51b0e29bf6b1->enter($__internal_f4a2d66410929d200bbced71fd4c8faec6993b040f659f6ff3fc51b0e29bf6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c720938a9ba254f4b872a6bff038fc18b92bb16086bb15b50bacd4dde46f68ce->leave($__internal_c720938a9ba254f4b872a6bff038fc18b92bb16086bb15b50bacd4dde46f68ce_prof);

        
        $__internal_f4a2d66410929d200bbced71fd4c8faec6993b040f659f6ff3fc51b0e29bf6b1->leave($__internal_f4a2d66410929d200bbced71fd4c8faec6993b040f659f6ff3fc51b0e29bf6b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
