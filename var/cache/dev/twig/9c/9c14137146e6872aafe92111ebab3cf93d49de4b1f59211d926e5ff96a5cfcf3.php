<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_2adac7ee1b9a400888fba5f2c577ebc4f3c1d361ee7806e1d669de2fa67b1dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adac7ee1b9a400888fba5f2c577ebc4f3c1d361ee7806e1d669de2fa67b1dc4->enter($__internal_2adac7ee1b9a400888fba5f2c577ebc4f3c1d361ee7806e1d669de2fa67b1dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_d3d10e17071498cbede08d29dafd2e5cbbdc5062c08de19b76d0623e7e9bb437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d10e17071498cbede08d29dafd2e5cbbdc5062c08de19b76d0623e7e9bb437->enter($__internal_d3d10e17071498cbede08d29dafd2e5cbbdc5062c08de19b76d0623e7e9bb437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2adac7ee1b9a400888fba5f2c577ebc4f3c1d361ee7806e1d669de2fa67b1dc4->leave($__internal_2adac7ee1b9a400888fba5f2c577ebc4f3c1d361ee7806e1d669de2fa67b1dc4_prof);

        
        $__internal_d3d10e17071498cbede08d29dafd2e5cbbdc5062c08de19b76d0623e7e9bb437->leave($__internal_d3d10e17071498cbede08d29dafd2e5cbbdc5062c08de19b76d0623e7e9bb437_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
