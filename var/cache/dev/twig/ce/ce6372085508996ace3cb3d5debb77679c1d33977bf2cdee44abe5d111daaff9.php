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
        $__internal_adac55be3bc816bb87d9a0529b8c2e9027150209dc94bb9fbbfbec5601dadf2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adac55be3bc816bb87d9a0529b8c2e9027150209dc94bb9fbbfbec5601dadf2e->enter($__internal_adac55be3bc816bb87d9a0529b8c2e9027150209dc94bb9fbbfbec5601dadf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e7a6c9aacdab6aaa38916deeda51aa04f89264322112b1d73676c64b304a16ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a6c9aacdab6aaa38916deeda51aa04f89264322112b1d73676c64b304a16ba->enter($__internal_e7a6c9aacdab6aaa38916deeda51aa04f89264322112b1d73676c64b304a16ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_adac55be3bc816bb87d9a0529b8c2e9027150209dc94bb9fbbfbec5601dadf2e->leave($__internal_adac55be3bc816bb87d9a0529b8c2e9027150209dc94bb9fbbfbec5601dadf2e_prof);

        
        $__internal_e7a6c9aacdab6aaa38916deeda51aa04f89264322112b1d73676c64b304a16ba->leave($__internal_e7a6c9aacdab6aaa38916deeda51aa04f89264322112b1d73676c64b304a16ba_prof);

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
