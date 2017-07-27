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
        $__internal_fa0fecacce557a8b84322993f6527b3e65d061bde9c60274176ef37c9802bb8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0fecacce557a8b84322993f6527b3e65d061bde9c60274176ef37c9802bb8d->enter($__internal_fa0fecacce557a8b84322993f6527b3e65d061bde9c60274176ef37c9802bb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e3142c0da16585fd3a0318da68b9420ed64f361249fba521b60cd84296a288cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3142c0da16585fd3a0318da68b9420ed64f361249fba521b60cd84296a288cf->enter($__internal_e3142c0da16585fd3a0318da68b9420ed64f361249fba521b60cd84296a288cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fa0fecacce557a8b84322993f6527b3e65d061bde9c60274176ef37c9802bb8d->leave($__internal_fa0fecacce557a8b84322993f6527b3e65d061bde9c60274176ef37c9802bb8d_prof);

        
        $__internal_e3142c0da16585fd3a0318da68b9420ed64f361249fba521b60cd84296a288cf->leave($__internal_e3142c0da16585fd3a0318da68b9420ed64f361249fba521b60cd84296a288cf_prof);

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
