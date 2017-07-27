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
        $__internal_cb98526cd3bc31eeb2932570077a2cd0fdadbe4cf89a5f4f97260c33b8ff579a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb98526cd3bc31eeb2932570077a2cd0fdadbe4cf89a5f4f97260c33b8ff579a->enter($__internal_cb98526cd3bc31eeb2932570077a2cd0fdadbe4cf89a5f4f97260c33b8ff579a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e0eda660021319752f0cd4f7a3a7397e396f715db8229fea7fa3e0cc5e97cedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0eda660021319752f0cd4f7a3a7397e396f715db8229fea7fa3e0cc5e97cedc->enter($__internal_e0eda660021319752f0cd4f7a3a7397e396f715db8229fea7fa3e0cc5e97cedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cb98526cd3bc31eeb2932570077a2cd0fdadbe4cf89a5f4f97260c33b8ff579a->leave($__internal_cb98526cd3bc31eeb2932570077a2cd0fdadbe4cf89a5f4f97260c33b8ff579a_prof);

        
        $__internal_e0eda660021319752f0cd4f7a3a7397e396f715db8229fea7fa3e0cc5e97cedc->leave($__internal_e0eda660021319752f0cd4f7a3a7397e396f715db8229fea7fa3e0cc5e97cedc_prof);

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
