<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_7c6d187735c89df97de7d356a71e3ffa8249898b4632f0b984164aafb7d02b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6d187735c89df97de7d356a71e3ffa8249898b4632f0b984164aafb7d02b30->enter($__internal_7c6d187735c89df97de7d356a71e3ffa8249898b4632f0b984164aafb7d02b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a5505d5651bca0cb4e52c338f4efed3fb48eb71533f8a452317e896695f4ab47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5505d5651bca0cb4e52c338f4efed3fb48eb71533f8a452317e896695f4ab47->enter($__internal_a5505d5651bca0cb4e52c338f4efed3fb48eb71533f8a452317e896695f4ab47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7c6d187735c89df97de7d356a71e3ffa8249898b4632f0b984164aafb7d02b30->leave($__internal_7c6d187735c89df97de7d356a71e3ffa8249898b4632f0b984164aafb7d02b30_prof);

        
        $__internal_a5505d5651bca0cb4e52c338f4efed3fb48eb71533f8a452317e896695f4ab47->leave($__internal_a5505d5651bca0cb4e52c338f4efed3fb48eb71533f8a452317e896695f4ab47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
