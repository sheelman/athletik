<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_80a9d177030794b93b7d5085705ee9d978de2e28a41aaaa96f77a59924e5b7a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a9d177030794b93b7d5085705ee9d978de2e28a41aaaa96f77a59924e5b7a8->enter($__internal_80a9d177030794b93b7d5085705ee9d978de2e28a41aaaa96f77a59924e5b7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_cae7306e90ebe1beb5130f032ccd637494d0f06f409efb4c000c81e2127e8b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae7306e90ebe1beb5130f032ccd637494d0f06f409efb4c000c81e2127e8b91->enter($__internal_cae7306e90ebe1beb5130f032ccd637494d0f06f409efb4c000c81e2127e8b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_80a9d177030794b93b7d5085705ee9d978de2e28a41aaaa96f77a59924e5b7a8->leave($__internal_80a9d177030794b93b7d5085705ee9d978de2e28a41aaaa96f77a59924e5b7a8_prof);

        
        $__internal_cae7306e90ebe1beb5130f032ccd637494d0f06f409efb4c000c81e2127e8b91->leave($__internal_cae7306e90ebe1beb5130f032ccd637494d0f06f409efb4c000c81e2127e8b91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
