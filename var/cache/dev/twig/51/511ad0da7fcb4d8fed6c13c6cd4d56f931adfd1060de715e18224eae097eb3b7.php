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
        $__internal_b2e033b36673aa8d676e7d7cbdd7fe93f39fb304603d76a72868a2290b04a6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e033b36673aa8d676e7d7cbdd7fe93f39fb304603d76a72868a2290b04a6b1->enter($__internal_b2e033b36673aa8d676e7d7cbdd7fe93f39fb304603d76a72868a2290b04a6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5039ba112b6277a46fa1b2d595a117c96b5545230c805739aff48b8074b2c95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5039ba112b6277a46fa1b2d595a117c96b5545230c805739aff48b8074b2c95a->enter($__internal_5039ba112b6277a46fa1b2d595a117c96b5545230c805739aff48b8074b2c95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b2e033b36673aa8d676e7d7cbdd7fe93f39fb304603d76a72868a2290b04a6b1->leave($__internal_b2e033b36673aa8d676e7d7cbdd7fe93f39fb304603d76a72868a2290b04a6b1_prof);

        
        $__internal_5039ba112b6277a46fa1b2d595a117c96b5545230c805739aff48b8074b2c95a->leave($__internal_5039ba112b6277a46fa1b2d595a117c96b5545230c805739aff48b8074b2c95a_prof);

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
