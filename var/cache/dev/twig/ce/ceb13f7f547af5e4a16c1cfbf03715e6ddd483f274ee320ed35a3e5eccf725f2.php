<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_de9a153f495f2df510782299b8240ac0c75ca597f78adecbb7a0c80359bb03f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9a153f495f2df510782299b8240ac0c75ca597f78adecbb7a0c80359bb03f0->enter($__internal_de9a153f495f2df510782299b8240ac0c75ca597f78adecbb7a0c80359bb03f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6b278cee86dcc6167fec5b1b97a26affca74ff2efa4365fd007c7a0686edb56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b278cee86dcc6167fec5b1b97a26affca74ff2efa4365fd007c7a0686edb56f->enter($__internal_6b278cee86dcc6167fec5b1b97a26affca74ff2efa4365fd007c7a0686edb56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_de9a153f495f2df510782299b8240ac0c75ca597f78adecbb7a0c80359bb03f0->leave($__internal_de9a153f495f2df510782299b8240ac0c75ca597f78adecbb7a0c80359bb03f0_prof);

        
        $__internal_6b278cee86dcc6167fec5b1b97a26affca74ff2efa4365fd007c7a0686edb56f->leave($__internal_6b278cee86dcc6167fec5b1b97a26affca74ff2efa4365fd007c7a0686edb56f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
