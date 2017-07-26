<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb39a7468cd9f10b7c36d6f938ae87d2f517859c64820f496837ac04642d093c extends Twig_Template
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
        $__internal_30a2335e59007e4dfb0f627d6977361e89c55896ab3ad2e57198f34058052dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a2335e59007e4dfb0f627d6977361e89c55896ab3ad2e57198f34058052dd8->enter($__internal_30a2335e59007e4dfb0f627d6977361e89c55896ab3ad2e57198f34058052dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_7bade954a76d9f9613ee94b897e4040c20c2b1f6eac383741d8dc34e855661e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bade954a76d9f9613ee94b897e4040c20c2b1f6eac383741d8dc34e855661e3->enter($__internal_7bade954a76d9f9613ee94b897e4040c20c2b1f6eac383741d8dc34e855661e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_30a2335e59007e4dfb0f627d6977361e89c55896ab3ad2e57198f34058052dd8->leave($__internal_30a2335e59007e4dfb0f627d6977361e89c55896ab3ad2e57198f34058052dd8_prof);

        
        $__internal_7bade954a76d9f9613ee94b897e4040c20c2b1f6eac383741d8dc34e855661e3->leave($__internal_7bade954a76d9f9613ee94b897e4040c20c2b1f6eac383741d8dc34e855661e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
