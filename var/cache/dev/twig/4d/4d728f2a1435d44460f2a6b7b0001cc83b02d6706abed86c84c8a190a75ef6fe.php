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
        $__internal_5116f2be6560bfce02fcfa479d6c17c4c40e32092e77d53afdc6431bf0c6f3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5116f2be6560bfce02fcfa479d6c17c4c40e32092e77d53afdc6431bf0c6f3ce->enter($__internal_5116f2be6560bfce02fcfa479d6c17c4c40e32092e77d53afdc6431bf0c6f3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f90ce5733ac5a23c617200833681128c751b4b75ba6c505721aebe9236dc4868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90ce5733ac5a23c617200833681128c751b4b75ba6c505721aebe9236dc4868->enter($__internal_f90ce5733ac5a23c617200833681128c751b4b75ba6c505721aebe9236dc4868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_5116f2be6560bfce02fcfa479d6c17c4c40e32092e77d53afdc6431bf0c6f3ce->leave($__internal_5116f2be6560bfce02fcfa479d6c17c4c40e32092e77d53afdc6431bf0c6f3ce_prof);

        
        $__internal_f90ce5733ac5a23c617200833681128c751b4b75ba6c505721aebe9236dc4868->leave($__internal_f90ce5733ac5a23c617200833681128c751b4b75ba6c505721aebe9236dc4868_prof);

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
