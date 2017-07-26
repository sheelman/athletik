<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_46a61dfdb1f1f10291938d6de7ae8079b8eaaa2a4cc6b10a0d9d62efe3a57a31 extends Twig_Template
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
        $__internal_f89d7360da5dc3082b38a90f8fcbf1162aa3d5b5ccd3c5e8365ea9904f5a32c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89d7360da5dc3082b38a90f8fcbf1162aa3d5b5ccd3c5e8365ea9904f5a32c6->enter($__internal_f89d7360da5dc3082b38a90f8fcbf1162aa3d5b5ccd3c5e8365ea9904f5a32c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_050041cff9f95442a13ca04a8e13bfb208a499ad68a0b79e8512a0da2c2e017d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050041cff9f95442a13ca04a8e13bfb208a499ad68a0b79e8512a0da2c2e017d->enter($__internal_050041cff9f95442a13ca04a8e13bfb208a499ad68a0b79e8512a0da2c2e017d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f89d7360da5dc3082b38a90f8fcbf1162aa3d5b5ccd3c5e8365ea9904f5a32c6->leave($__internal_f89d7360da5dc3082b38a90f8fcbf1162aa3d5b5ccd3c5e8365ea9904f5a32c6_prof);

        
        $__internal_050041cff9f95442a13ca04a8e13bfb208a499ad68a0b79e8512a0da2c2e017d->leave($__internal_050041cff9f95442a13ca04a8e13bfb208a499ad68a0b79e8512a0da2c2e017d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
