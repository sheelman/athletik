<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ec463a5141422177decfe70c9e2421022bc554f5e1b060402d014ad6f52df54 extends Twig_Template
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
        $__internal_15a044223914f7a8cdd81a23641687ecd96ca8a62a26b6d19abf9065b91e5d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a044223914f7a8cdd81a23641687ecd96ca8a62a26b6d19abf9065b91e5d7c->enter($__internal_15a044223914f7a8cdd81a23641687ecd96ca8a62a26b6d19abf9065b91e5d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a9d6729a832b1c3afdb246a5bf75d3e501db8915e233450007a832b6409df138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d6729a832b1c3afdb246a5bf75d3e501db8915e233450007a832b6409df138->enter($__internal_a9d6729a832b1c3afdb246a5bf75d3e501db8915e233450007a832b6409df138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_15a044223914f7a8cdd81a23641687ecd96ca8a62a26b6d19abf9065b91e5d7c->leave($__internal_15a044223914f7a8cdd81a23641687ecd96ca8a62a26b6d19abf9065b91e5d7c_prof);

        
        $__internal_a9d6729a832b1c3afdb246a5bf75d3e501db8915e233450007a832b6409df138->leave($__internal_a9d6729a832b1c3afdb246a5bf75d3e501db8915e233450007a832b6409df138_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
