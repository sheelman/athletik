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
        $__internal_adb126bff4ea26d89e573ce4be0fad0ac49ee7b3548a42d4ed3ec4b0c21952fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adb126bff4ea26d89e573ce4be0fad0ac49ee7b3548a42d4ed3ec4b0c21952fb->enter($__internal_adb126bff4ea26d89e573ce4be0fad0ac49ee7b3548a42d4ed3ec4b0c21952fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_0893cc86b2b86d9ff0278acaaa692f1c1ad6faaa3d16a6ddb6e580944f4ac47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0893cc86b2b86d9ff0278acaaa692f1c1ad6faaa3d16a6ddb6e580944f4ac47c->enter($__internal_0893cc86b2b86d9ff0278acaaa692f1c1ad6faaa3d16a6ddb6e580944f4ac47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_adb126bff4ea26d89e573ce4be0fad0ac49ee7b3548a42d4ed3ec4b0c21952fb->leave($__internal_adb126bff4ea26d89e573ce4be0fad0ac49ee7b3548a42d4ed3ec4b0c21952fb_prof);

        
        $__internal_0893cc86b2b86d9ff0278acaaa692f1c1ad6faaa3d16a6ddb6e580944f4ac47c->leave($__internal_0893cc86b2b86d9ff0278acaaa692f1c1ad6faaa3d16a6ddb6e580944f4ac47c_prof);

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
