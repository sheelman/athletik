<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e4c16c19f8f2434e75928f1a7ab60aa30c50591555f8553767133b1a1101f476 extends Twig_Template
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
        $__internal_9976a2d36217b58a1977ce70b44f0ee3be58a2a261348bff2b30161de1ec129b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9976a2d36217b58a1977ce70b44f0ee3be58a2a261348bff2b30161de1ec129b->enter($__internal_9976a2d36217b58a1977ce70b44f0ee3be58a2a261348bff2b30161de1ec129b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_4aa199d68c133ccf872a30dce2ac9e55ffc50f62dd829d836be737e4007141e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa199d68c133ccf872a30dce2ac9e55ffc50f62dd829d836be737e4007141e7->enter($__internal_4aa199d68c133ccf872a30dce2ac9e55ffc50f62dd829d836be737e4007141e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9976a2d36217b58a1977ce70b44f0ee3be58a2a261348bff2b30161de1ec129b->leave($__internal_9976a2d36217b58a1977ce70b44f0ee3be58a2a261348bff2b30161de1ec129b_prof);

        
        $__internal_4aa199d68c133ccf872a30dce2ac9e55ffc50f62dd829d836be737e4007141e7->leave($__internal_4aa199d68c133ccf872a30dce2ac9e55ffc50f62dd829d836be737e4007141e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
