<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_ef73c5f4e695d329248feabf68b80005bccac7ba76a4d31426c8d4aa17d23215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef73c5f4e695d329248feabf68b80005bccac7ba76a4d31426c8d4aa17d23215->enter($__internal_ef73c5f4e695d329248feabf68b80005bccac7ba76a4d31426c8d4aa17d23215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_d269e18ab9c985d4cfb800f52057f57e5547e26ae790c28f304ddc9ff7f6e32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d269e18ab9c985d4cfb800f52057f57e5547e26ae790c28f304ddc9ff7f6e32a->enter($__internal_d269e18ab9c985d4cfb800f52057f57e5547e26ae790c28f304ddc9ff7f6e32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ef73c5f4e695d329248feabf68b80005bccac7ba76a4d31426c8d4aa17d23215->leave($__internal_ef73c5f4e695d329248feabf68b80005bccac7ba76a4d31426c8d4aa17d23215_prof);

        
        $__internal_d269e18ab9c985d4cfb800f52057f57e5547e26ae790c28f304ddc9ff7f6e32a->leave($__internal_d269e18ab9c985d4cfb800f52057f57e5547e26ae790c28f304ddc9ff7f6e32a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
