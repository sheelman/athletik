<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_e71f014b88195d1a1f57dbd1a91931bcba8c97c7306b5bbafadc217adad1e918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71f014b88195d1a1f57dbd1a91931bcba8c97c7306b5bbafadc217adad1e918->enter($__internal_e71f014b88195d1a1f57dbd1a91931bcba8c97c7306b5bbafadc217adad1e918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d64ffcfc3175363f97f2e24a0b3752f49cc22faa2dcb5e9718dd63043d231de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64ffcfc3175363f97f2e24a0b3752f49cc22faa2dcb5e9718dd63043d231de7->enter($__internal_d64ffcfc3175363f97f2e24a0b3752f49cc22faa2dcb5e9718dd63043d231de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e71f014b88195d1a1f57dbd1a91931bcba8c97c7306b5bbafadc217adad1e918->leave($__internal_e71f014b88195d1a1f57dbd1a91931bcba8c97c7306b5bbafadc217adad1e918_prof);

        
        $__internal_d64ffcfc3175363f97f2e24a0b3752f49cc22faa2dcb5e9718dd63043d231de7->leave($__internal_d64ffcfc3175363f97f2e24a0b3752f49cc22faa2dcb5e9718dd63043d231de7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
