<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a613460bff8d95f3e4cd222f89856befc9503068b7f3b576bb61fe5bbbc2221 extends Twig_Template
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
        $__internal_7591e5591e2a1e92026ea2fbf3286f6114b41610f943665174f4f4803219330b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7591e5591e2a1e92026ea2fbf3286f6114b41610f943665174f4f4803219330b->enter($__internal_7591e5591e2a1e92026ea2fbf3286f6114b41610f943665174f4f4803219330b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f5a0282f281ae88dc8aca388744e4d495a688095a189b304afdaf07786d047f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a0282f281ae88dc8aca388744e4d495a688095a189b304afdaf07786d047f7->enter($__internal_f5a0282f281ae88dc8aca388744e4d495a688095a189b304afdaf07786d047f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7591e5591e2a1e92026ea2fbf3286f6114b41610f943665174f4f4803219330b->leave($__internal_7591e5591e2a1e92026ea2fbf3286f6114b41610f943665174f4f4803219330b_prof);

        
        $__internal_f5a0282f281ae88dc8aca388744e4d495a688095a189b304afdaf07786d047f7->leave($__internal_f5a0282f281ae88dc8aca388744e4d495a688095a189b304afdaf07786d047f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
