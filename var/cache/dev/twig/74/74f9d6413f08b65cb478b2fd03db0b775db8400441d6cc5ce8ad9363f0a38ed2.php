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
        $__internal_a6766bab72e2f4384ebf984723da71c30f66d2f511896bd1dfac5563f165b8db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6766bab72e2f4384ebf984723da71c30f66d2f511896bd1dfac5563f165b8db->enter($__internal_a6766bab72e2f4384ebf984723da71c30f66d2f511896bd1dfac5563f165b8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ba15218a75cd7110a14c8ddb4404cb5873edebebbedf851f0938af8420cc73ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba15218a75cd7110a14c8ddb4404cb5873edebebbedf851f0938af8420cc73ff->enter($__internal_ba15218a75cd7110a14c8ddb4404cb5873edebebbedf851f0938af8420cc73ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a6766bab72e2f4384ebf984723da71c30f66d2f511896bd1dfac5563f165b8db->leave($__internal_a6766bab72e2f4384ebf984723da71c30f66d2f511896bd1dfac5563f165b8db_prof);

        
        $__internal_ba15218a75cd7110a14c8ddb4404cb5873edebebbedf851f0938af8420cc73ff->leave($__internal_ba15218a75cd7110a14c8ddb4404cb5873edebebbedf851f0938af8420cc73ff_prof);

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
