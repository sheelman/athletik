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
        $__internal_67c3bce795c52b0730ad428c147c3823cc6789c4e04e24208ad34debffdc28af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c3bce795c52b0730ad428c147c3823cc6789c4e04e24208ad34debffdc28af->enter($__internal_67c3bce795c52b0730ad428c147c3823cc6789c4e04e24208ad34debffdc28af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_87ab8b5ae0aeb7eba72d321dbb8cc9caff7980cb2ece234ca6ea2cc325e9a672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ab8b5ae0aeb7eba72d321dbb8cc9caff7980cb2ece234ca6ea2cc325e9a672->enter($__internal_87ab8b5ae0aeb7eba72d321dbb8cc9caff7980cb2ece234ca6ea2cc325e9a672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_67c3bce795c52b0730ad428c147c3823cc6789c4e04e24208ad34debffdc28af->leave($__internal_67c3bce795c52b0730ad428c147c3823cc6789c4e04e24208ad34debffdc28af_prof);

        
        $__internal_87ab8b5ae0aeb7eba72d321dbb8cc9caff7980cb2ece234ca6ea2cc325e9a672->leave($__internal_87ab8b5ae0aeb7eba72d321dbb8cc9caff7980cb2ece234ca6ea2cc325e9a672_prof);

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
