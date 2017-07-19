<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_cc1f2aef96040c72b5855f92f9f895726a1740a209c96b1ea354975d270cc28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1f2aef96040c72b5855f92f9f895726a1740a209c96b1ea354975d270cc28c->enter($__internal_cc1f2aef96040c72b5855f92f9f895726a1740a209c96b1ea354975d270cc28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_10e58509334333da666ebf83c60c096123b88ee3824ce7616506fdbe3fabd3b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e58509334333da666ebf83c60c096123b88ee3824ce7616506fdbe3fabd3b3->enter($__internal_10e58509334333da666ebf83c60c096123b88ee3824ce7616506fdbe3fabd3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_cc1f2aef96040c72b5855f92f9f895726a1740a209c96b1ea354975d270cc28c->leave($__internal_cc1f2aef96040c72b5855f92f9f895726a1740a209c96b1ea354975d270cc28c_prof);

        
        $__internal_10e58509334333da666ebf83c60c096123b88ee3824ce7616506fdbe3fabd3b3->leave($__internal_10e58509334333da666ebf83c60c096123b88ee3824ce7616506fdbe3fabd3b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
