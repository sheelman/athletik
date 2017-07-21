<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0f52fd5d75bf84a2e90fc07ec2872336c4eb2373bdaef862c6473dde17dc8724 extends Twig_Template
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
        $__internal_9f0727aa6815482891f50ea64a4789e0f603e31dad1803008f31ece4210e5c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0727aa6815482891f50ea64a4789e0f603e31dad1803008f31ece4210e5c1f->enter($__internal_9f0727aa6815482891f50ea64a4789e0f603e31dad1803008f31ece4210e5c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_83a8fe9710c1070d0037144c4d06df5cadb542b9dee9f121d0c28ae58c7f168b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a8fe9710c1070d0037144c4d06df5cadb542b9dee9f121d0c28ae58c7f168b->enter($__internal_83a8fe9710c1070d0037144c4d06df5cadb542b9dee9f121d0c28ae58c7f168b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9f0727aa6815482891f50ea64a4789e0f603e31dad1803008f31ece4210e5c1f->leave($__internal_9f0727aa6815482891f50ea64a4789e0f603e31dad1803008f31ece4210e5c1f_prof);

        
        $__internal_83a8fe9710c1070d0037144c4d06df5cadb542b9dee9f121d0c28ae58c7f168b->leave($__internal_83a8fe9710c1070d0037144c4d06df5cadb542b9dee9f121d0c28ae58c7f168b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
