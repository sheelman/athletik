<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fe41488acc3417521100e0f07c1fec3596110dade835cd2bbecc8d7f60cf9337 extends Twig_Template
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
        $__internal_c6c0d6057914bee1cebe8740e34a8fb2898bb574ad6444920f9430e842fad64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c0d6057914bee1cebe8740e34a8fb2898bb574ad6444920f9430e842fad64d->enter($__internal_c6c0d6057914bee1cebe8740e34a8fb2898bb574ad6444920f9430e842fad64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_7f482e8c6356f3bbf0c5665dc1b23042cabc85e6c1cff02f01f254a116e39b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f482e8c6356f3bbf0c5665dc1b23042cabc85e6c1cff02f01f254a116e39b3e->enter($__internal_7f482e8c6356f3bbf0c5665dc1b23042cabc85e6c1cff02f01f254a116e39b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c6c0d6057914bee1cebe8740e34a8fb2898bb574ad6444920f9430e842fad64d->leave($__internal_c6c0d6057914bee1cebe8740e34a8fb2898bb574ad6444920f9430e842fad64d_prof);

        
        $__internal_7f482e8c6356f3bbf0c5665dc1b23042cabc85e6c1cff02f01f254a116e39b3e->leave($__internal_7f482e8c6356f3bbf0c5665dc1b23042cabc85e6c1cff02f01f254a116e39b3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
