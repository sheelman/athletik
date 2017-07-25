<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_f6b11ad8411806b53e1704da0d04fda4bbdf7458778f4e0c54256c6909ea8182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b11ad8411806b53e1704da0d04fda4bbdf7458778f4e0c54256c6909ea8182->enter($__internal_f6b11ad8411806b53e1704da0d04fda4bbdf7458778f4e0c54256c6909ea8182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f52787cee73dfbd90c8acb8614ab65c6715cde902d2be53851caeeac9ca36381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52787cee73dfbd90c8acb8614ab65c6715cde902d2be53851caeeac9ca36381->enter($__internal_f52787cee73dfbd90c8acb8614ab65c6715cde902d2be53851caeeac9ca36381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f6b11ad8411806b53e1704da0d04fda4bbdf7458778f4e0c54256c6909ea8182->leave($__internal_f6b11ad8411806b53e1704da0d04fda4bbdf7458778f4e0c54256c6909ea8182_prof);

        
        $__internal_f52787cee73dfbd90c8acb8614ab65c6715cde902d2be53851caeeac9ca36381->leave($__internal_f52787cee73dfbd90c8acb8614ab65c6715cde902d2be53851caeeac9ca36381_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
