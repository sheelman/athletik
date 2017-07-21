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
        $__internal_cfaf9e9d0766d9564dbedc277d7d11d3b6c50e68b17a47724bc3a5253566805f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfaf9e9d0766d9564dbedc277d7d11d3b6c50e68b17a47724bc3a5253566805f->enter($__internal_cfaf9e9d0766d9564dbedc277d7d11d3b6c50e68b17a47724bc3a5253566805f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_806ce7f24dfb7c86b4c892e20c17e96d523bc88afa74232aa1f32ab711f327d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806ce7f24dfb7c86b4c892e20c17e96d523bc88afa74232aa1f32ab711f327d3->enter($__internal_806ce7f24dfb7c86b4c892e20c17e96d523bc88afa74232aa1f32ab711f327d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cfaf9e9d0766d9564dbedc277d7d11d3b6c50e68b17a47724bc3a5253566805f->leave($__internal_cfaf9e9d0766d9564dbedc277d7d11d3b6c50e68b17a47724bc3a5253566805f_prof);

        
        $__internal_806ce7f24dfb7c86b4c892e20c17e96d523bc88afa74232aa1f32ab711f327d3->leave($__internal_806ce7f24dfb7c86b4c892e20c17e96d523bc88afa74232aa1f32ab711f327d3_prof);

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
