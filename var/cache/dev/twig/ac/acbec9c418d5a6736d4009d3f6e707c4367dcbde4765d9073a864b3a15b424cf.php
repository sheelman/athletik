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
        $__internal_f3b5fdf1fca0451c469e92739f9989826f964c7269b0d7067d25f8119f2a34bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b5fdf1fca0451c469e92739f9989826f964c7269b0d7067d25f8119f2a34bb->enter($__internal_f3b5fdf1fca0451c469e92739f9989826f964c7269b0d7067d25f8119f2a34bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e59043bd81aaa3e4ca9bbc332fbf3fc1eeec263bd82174bbe128d806f081860f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59043bd81aaa3e4ca9bbc332fbf3fc1eeec263bd82174bbe128d806f081860f->enter($__internal_e59043bd81aaa3e4ca9bbc332fbf3fc1eeec263bd82174bbe128d806f081860f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f3b5fdf1fca0451c469e92739f9989826f964c7269b0d7067d25f8119f2a34bb->leave($__internal_f3b5fdf1fca0451c469e92739f9989826f964c7269b0d7067d25f8119f2a34bb_prof);

        
        $__internal_e59043bd81aaa3e4ca9bbc332fbf3fc1eeec263bd82174bbe128d806f081860f->leave($__internal_e59043bd81aaa3e4ca9bbc332fbf3fc1eeec263bd82174bbe128d806f081860f_prof);

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
