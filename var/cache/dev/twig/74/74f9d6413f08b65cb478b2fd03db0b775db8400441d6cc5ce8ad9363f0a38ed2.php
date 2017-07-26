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
        $__internal_d248b1cec73691c6a84e629b41ee95aa23f3b2890134e85086ca30e05b82ef61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d248b1cec73691c6a84e629b41ee95aa23f3b2890134e85086ca30e05b82ef61->enter($__internal_d248b1cec73691c6a84e629b41ee95aa23f3b2890134e85086ca30e05b82ef61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_cc6e73c708ef884eb325c4e410141ebbd5fafb62cf6cddb86d4cda304baaaf57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6e73c708ef884eb325c4e410141ebbd5fafb62cf6cddb86d4cda304baaaf57->enter($__internal_cc6e73c708ef884eb325c4e410141ebbd5fafb62cf6cddb86d4cda304baaaf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_d248b1cec73691c6a84e629b41ee95aa23f3b2890134e85086ca30e05b82ef61->leave($__internal_d248b1cec73691c6a84e629b41ee95aa23f3b2890134e85086ca30e05b82ef61_prof);

        
        $__internal_cc6e73c708ef884eb325c4e410141ebbd5fafb62cf6cddb86d4cda304baaaf57->leave($__internal_cc6e73c708ef884eb325c4e410141ebbd5fafb62cf6cddb86d4cda304baaaf57_prof);

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
