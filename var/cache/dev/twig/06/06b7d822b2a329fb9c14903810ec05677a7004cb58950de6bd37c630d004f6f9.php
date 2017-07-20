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
        $__internal_6cc509797c0b9936bb82a97214b65d4a2a930379ec70a185ca1f2a06a4e8f6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc509797c0b9936bb82a97214b65d4a2a930379ec70a185ca1f2a06a4e8f6b1->enter($__internal_6cc509797c0b9936bb82a97214b65d4a2a930379ec70a185ca1f2a06a4e8f6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_9e310bc4f809d1f17c44c0aba7eedc33ff2ac9878772e73adf517ac4fd9ca9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e310bc4f809d1f17c44c0aba7eedc33ff2ac9878772e73adf517ac4fd9ca9cb->enter($__internal_9e310bc4f809d1f17c44c0aba7eedc33ff2ac9878772e73adf517ac4fd9ca9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6cc509797c0b9936bb82a97214b65d4a2a930379ec70a185ca1f2a06a4e8f6b1->leave($__internal_6cc509797c0b9936bb82a97214b65d4a2a930379ec70a185ca1f2a06a4e8f6b1_prof);

        
        $__internal_9e310bc4f809d1f17c44c0aba7eedc33ff2ac9878772e73adf517ac4fd9ca9cb->leave($__internal_9e310bc4f809d1f17c44c0aba7eedc33ff2ac9878772e73adf517ac4fd9ca9cb_prof);

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
