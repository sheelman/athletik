<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_a6258756c609d9966ea5b8713a098e1f5e2e153dc3abde0ae0e67a7b662fcdeb extends Twig_Template
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
        $__internal_20a5223f62e2abfd1a2a972bb63126d1876778b9149abbe2530b17d595af5cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a5223f62e2abfd1a2a972bb63126d1876778b9149abbe2530b17d595af5cce->enter($__internal_20a5223f62e2abfd1a2a972bb63126d1876778b9149abbe2530b17d595af5cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_5cb175512f266180ef2ad9edd35b09f8d8d039e4a7b56c9663dfb3a14202c8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb175512f266180ef2ad9edd35b09f8d8d039e4a7b56c9663dfb3a14202c8de->enter($__internal_5cb175512f266180ef2ad9edd35b09f8d8d039e4a7b56c9663dfb3a14202c8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_20a5223f62e2abfd1a2a972bb63126d1876778b9149abbe2530b17d595af5cce->leave($__internal_20a5223f62e2abfd1a2a972bb63126d1876778b9149abbe2530b17d595af5cce_prof);

        
        $__internal_5cb175512f266180ef2ad9edd35b09f8d8d039e4a7b56c9663dfb3a14202c8de->leave($__internal_5cb175512f266180ef2ad9edd35b09f8d8d039e4a7b56c9663dfb3a14202c8de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
