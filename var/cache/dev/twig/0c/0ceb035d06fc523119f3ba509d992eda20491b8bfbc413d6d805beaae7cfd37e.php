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
        $__internal_6f60cb9c8f1a5caf67cb7f6fb5e1a6b9f6ab9042cae5cdf6b81400685deffe21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f60cb9c8f1a5caf67cb7f6fb5e1a6b9f6ab9042cae5cdf6b81400685deffe21->enter($__internal_6f60cb9c8f1a5caf67cb7f6fb5e1a6b9f6ab9042cae5cdf6b81400685deffe21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_4d6a7bbd0e2fd92782b44db8fee943ba5faf9cd42ab6b696679d6ffffc2d614b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6a7bbd0e2fd92782b44db8fee943ba5faf9cd42ab6b696679d6ffffc2d614b->enter($__internal_4d6a7bbd0e2fd92782b44db8fee943ba5faf9cd42ab6b696679d6ffffc2d614b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_6f60cb9c8f1a5caf67cb7f6fb5e1a6b9f6ab9042cae5cdf6b81400685deffe21->leave($__internal_6f60cb9c8f1a5caf67cb7f6fb5e1a6b9f6ab9042cae5cdf6b81400685deffe21_prof);

        
        $__internal_4d6a7bbd0e2fd92782b44db8fee943ba5faf9cd42ab6b696679d6ffffc2d614b->leave($__internal_4d6a7bbd0e2fd92782b44db8fee943ba5faf9cd42ab6b696679d6ffffc2d614b_prof);

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
