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
        $__internal_7534372db592bc5fed48cafb792684eb7ddb650f891aec0b5c7d5885404bc63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7534372db592bc5fed48cafb792684eb7ddb650f891aec0b5c7d5885404bc63e->enter($__internal_7534372db592bc5fed48cafb792684eb7ddb650f891aec0b5c7d5885404bc63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6abf871547f5a1724d70807dee6e46389e17531802221e186a1b8b5fbc083b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abf871547f5a1724d70807dee6e46389e17531802221e186a1b8b5fbc083b77->enter($__internal_6abf871547f5a1724d70807dee6e46389e17531802221e186a1b8b5fbc083b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7534372db592bc5fed48cafb792684eb7ddb650f891aec0b5c7d5885404bc63e->leave($__internal_7534372db592bc5fed48cafb792684eb7ddb650f891aec0b5c7d5885404bc63e_prof);

        
        $__internal_6abf871547f5a1724d70807dee6e46389e17531802221e186a1b8b5fbc083b77->leave($__internal_6abf871547f5a1724d70807dee6e46389e17531802221e186a1b8b5fbc083b77_prof);

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
