<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_ceda7794412715ac4ce9e58a651e7c266b99dab10def59d9e6af69adc55b788f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceda7794412715ac4ce9e58a651e7c266b99dab10def59d9e6af69adc55b788f->enter($__internal_ceda7794412715ac4ce9e58a651e7c266b99dab10def59d9e6af69adc55b788f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_77400b258c8ec2f9ba77040de63ff85628bd6ace3f50deec5b4307eb3e4220ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77400b258c8ec2f9ba77040de63ff85628bd6ace3f50deec5b4307eb3e4220ac->enter($__internal_77400b258c8ec2f9ba77040de63ff85628bd6ace3f50deec5b4307eb3e4220ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ceda7794412715ac4ce9e58a651e7c266b99dab10def59d9e6af69adc55b788f->leave($__internal_ceda7794412715ac4ce9e58a651e7c266b99dab10def59d9e6af69adc55b788f_prof);

        
        $__internal_77400b258c8ec2f9ba77040de63ff85628bd6ace3f50deec5b4307eb3e4220ac->leave($__internal_77400b258c8ec2f9ba77040de63ff85628bd6ace3f50deec5b4307eb3e4220ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
