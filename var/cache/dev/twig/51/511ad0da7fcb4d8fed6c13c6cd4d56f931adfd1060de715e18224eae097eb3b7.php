<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_47db3a1357b044442177d9b84f481c446a2d879ce53f2273c46671a2cd4e1fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47db3a1357b044442177d9b84f481c446a2d879ce53f2273c46671a2cd4e1fda->enter($__internal_47db3a1357b044442177d9b84f481c446a2d879ce53f2273c46671a2cd4e1fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_8f18b9b66af9ef79b258595df69bbc6fe32a5d438194e76aff0501e0f5024f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f18b9b66af9ef79b258595df69bbc6fe32a5d438194e76aff0501e0f5024f07->enter($__internal_8f18b9b66af9ef79b258595df69bbc6fe32a5d438194e76aff0501e0f5024f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_47db3a1357b044442177d9b84f481c446a2d879ce53f2273c46671a2cd4e1fda->leave($__internal_47db3a1357b044442177d9b84f481c446a2d879ce53f2273c46671a2cd4e1fda_prof);

        
        $__internal_8f18b9b66af9ef79b258595df69bbc6fe32a5d438194e76aff0501e0f5024f07->leave($__internal_8f18b9b66af9ef79b258595df69bbc6fe32a5d438194e76aff0501e0f5024f07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
