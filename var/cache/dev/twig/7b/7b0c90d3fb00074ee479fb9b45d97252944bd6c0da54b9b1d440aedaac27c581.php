<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_20eff880b41225f724d1cf1bc0021c6e429e035589eb3755ec6e011b074dd3d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20eff880b41225f724d1cf1bc0021c6e429e035589eb3755ec6e011b074dd3d3->enter($__internal_20eff880b41225f724d1cf1bc0021c6e429e035589eb3755ec6e011b074dd3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_500259a4d7bb182f59f84ca176dc1c5dd29c099776a1971aed784ed890f7b013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500259a4d7bb182f59f84ca176dc1c5dd29c099776a1971aed784ed890f7b013->enter($__internal_500259a4d7bb182f59f84ca176dc1c5dd29c099776a1971aed784ed890f7b013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_20eff880b41225f724d1cf1bc0021c6e429e035589eb3755ec6e011b074dd3d3->leave($__internal_20eff880b41225f724d1cf1bc0021c6e429e035589eb3755ec6e011b074dd3d3_prof);

        
        $__internal_500259a4d7bb182f59f84ca176dc1c5dd29c099776a1971aed784ed890f7b013->leave($__internal_500259a4d7bb182f59f84ca176dc1c5dd29c099776a1971aed784ed890f7b013_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
