<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6a70998442965774cc90829eee21db4b47643f5cea3c586197cc7950b57ea4af extends Twig_Template
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
        $__internal_d81ba54eca36f31218b4cf00b6746ae3ef36f4431baa9bb60a4d36bf9cbe9f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81ba54eca36f31218b4cf00b6746ae3ef36f4431baa9bb60a4d36bf9cbe9f53->enter($__internal_d81ba54eca36f31218b4cf00b6746ae3ef36f4431baa9bb60a4d36bf9cbe9f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_ddc02649df0484b520790c4d6cc42d1fb1b29527c43bdb5a7c75a50436ee485a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc02649df0484b520790c4d6cc42d1fb1b29527c43bdb5a7c75a50436ee485a->enter($__internal_ddc02649df0484b520790c4d6cc42d1fb1b29527c43bdb5a7c75a50436ee485a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d81ba54eca36f31218b4cf00b6746ae3ef36f4431baa9bb60a4d36bf9cbe9f53->leave($__internal_d81ba54eca36f31218b4cf00b6746ae3ef36f4431baa9bb60a4d36bf9cbe9f53_prof);

        
        $__internal_ddc02649df0484b520790c4d6cc42d1fb1b29527c43bdb5a7c75a50436ee485a->leave($__internal_ddc02649df0484b520790c4d6cc42d1fb1b29527c43bdb5a7c75a50436ee485a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
