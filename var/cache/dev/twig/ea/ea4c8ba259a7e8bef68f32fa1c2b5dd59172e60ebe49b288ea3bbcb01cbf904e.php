<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b0ad4263d379055fb73f54e032e575e75e67954236cd3422b3514e51cd7388c extends Twig_Template
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
        $__internal_849b009b26e1c2346af10c6de5d986683cbea9b2ced0e1d6860d1753dfa207ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849b009b26e1c2346af10c6de5d986683cbea9b2ced0e1d6860d1753dfa207ab->enter($__internal_849b009b26e1c2346af10c6de5d986683cbea9b2ced0e1d6860d1753dfa207ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_38520ca0fd865ab1e3d1e2a3a7dade697ff226a2758ca843daad906e8089cbec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38520ca0fd865ab1e3d1e2a3a7dade697ff226a2758ca843daad906e8089cbec->enter($__internal_38520ca0fd865ab1e3d1e2a3a7dade697ff226a2758ca843daad906e8089cbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_849b009b26e1c2346af10c6de5d986683cbea9b2ced0e1d6860d1753dfa207ab->leave($__internal_849b009b26e1c2346af10c6de5d986683cbea9b2ced0e1d6860d1753dfa207ab_prof);

        
        $__internal_38520ca0fd865ab1e3d1e2a3a7dade697ff226a2758ca843daad906e8089cbec->leave($__internal_38520ca0fd865ab1e3d1e2a3a7dade697ff226a2758ca843daad906e8089cbec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
