<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_7fb8a430ac7f72abdbea788fd592e1b815f7bb1d0ea321304703092362061c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb8a430ac7f72abdbea788fd592e1b815f7bb1d0ea321304703092362061c2d->enter($__internal_7fb8a430ac7f72abdbea788fd592e1b815f7bb1d0ea321304703092362061c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_f67318d9cfe6ee31a1a856f1eafa6a2663a7357d0cdb55754d978b29595a6cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67318d9cfe6ee31a1a856f1eafa6a2663a7357d0cdb55754d978b29595a6cd6->enter($__internal_f67318d9cfe6ee31a1a856f1eafa6a2663a7357d0cdb55754d978b29595a6cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7fb8a430ac7f72abdbea788fd592e1b815f7bb1d0ea321304703092362061c2d->leave($__internal_7fb8a430ac7f72abdbea788fd592e1b815f7bb1d0ea321304703092362061c2d_prof);

        
        $__internal_f67318d9cfe6ee31a1a856f1eafa6a2663a7357d0cdb55754d978b29595a6cd6->leave($__internal_f67318d9cfe6ee31a1a856f1eafa6a2663a7357d0cdb55754d978b29595a6cd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
