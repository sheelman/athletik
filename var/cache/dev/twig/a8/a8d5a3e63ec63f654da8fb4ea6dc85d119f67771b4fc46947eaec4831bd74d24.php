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
        $__internal_44a221a5bc457ef835c3b0fbe2e86a4d2fce4a9c48854dd41891c0322a27dd46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a221a5bc457ef835c3b0fbe2e86a4d2fce4a9c48854dd41891c0322a27dd46->enter($__internal_44a221a5bc457ef835c3b0fbe2e86a4d2fce4a9c48854dd41891c0322a27dd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_584333364aae47944ce01aa6f0c40a46a786dc75ca058340d88f40ac8d50ebb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584333364aae47944ce01aa6f0c40a46a786dc75ca058340d88f40ac8d50ebb2->enter($__internal_584333364aae47944ce01aa6f0c40a46a786dc75ca058340d88f40ac8d50ebb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_44a221a5bc457ef835c3b0fbe2e86a4d2fce4a9c48854dd41891c0322a27dd46->leave($__internal_44a221a5bc457ef835c3b0fbe2e86a4d2fce4a9c48854dd41891c0322a27dd46_prof);

        
        $__internal_584333364aae47944ce01aa6f0c40a46a786dc75ca058340d88f40ac8d50ebb2->leave($__internal_584333364aae47944ce01aa6f0c40a46a786dc75ca058340d88f40ac8d50ebb2_prof);

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
