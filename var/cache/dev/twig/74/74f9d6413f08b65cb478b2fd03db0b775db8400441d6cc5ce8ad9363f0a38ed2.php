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
        $__internal_f58238660f48aa574520b85f4d904305746382e445212b6dc473b1d13012348c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58238660f48aa574520b85f4d904305746382e445212b6dc473b1d13012348c->enter($__internal_f58238660f48aa574520b85f4d904305746382e445212b6dc473b1d13012348c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_428c599a770288283641b96d5c8f18bf45c858386571c1fb5035cddc2a57f1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428c599a770288283641b96d5c8f18bf45c858386571c1fb5035cddc2a57f1d9->enter($__internal_428c599a770288283641b96d5c8f18bf45c858386571c1fb5035cddc2a57f1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f58238660f48aa574520b85f4d904305746382e445212b6dc473b1d13012348c->leave($__internal_f58238660f48aa574520b85f4d904305746382e445212b6dc473b1d13012348c_prof);

        
        $__internal_428c599a770288283641b96d5c8f18bf45c858386571c1fb5035cddc2a57f1d9->leave($__internal_428c599a770288283641b96d5c8f18bf45c858386571c1fb5035cddc2a57f1d9_prof);

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
