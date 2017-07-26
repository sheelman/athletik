<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_341bca784c0a3405c0f51f98425917af5a5539683db9357a8607b685208e27d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341bca784c0a3405c0f51f98425917af5a5539683db9357a8607b685208e27d8->enter($__internal_341bca784c0a3405c0f51f98425917af5a5539683db9357a8607b685208e27d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_4a9c72d3d9c245eb097ec3b574ac0ab0534d8222b558e9f8f69609833b415d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9c72d3d9c245eb097ec3b574ac0ab0534d8222b558e9f8f69609833b415d28->enter($__internal_4a9c72d3d9c245eb097ec3b574ac0ab0534d8222b558e9f8f69609833b415d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_341bca784c0a3405c0f51f98425917af5a5539683db9357a8607b685208e27d8->leave($__internal_341bca784c0a3405c0f51f98425917af5a5539683db9357a8607b685208e27d8_prof);

        
        $__internal_4a9c72d3d9c245eb097ec3b574ac0ab0534d8222b558e9f8f69609833b415d28->leave($__internal_4a9c72d3d9c245eb097ec3b574ac0ab0534d8222b558e9f8f69609833b415d28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
