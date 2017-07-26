<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_fa23e3b9b673510d9a12271dd78d68b6b24be93b332d8e68d76f4cb4a6bfec0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa23e3b9b673510d9a12271dd78d68b6b24be93b332d8e68d76f4cb4a6bfec0c->enter($__internal_fa23e3b9b673510d9a12271dd78d68b6b24be93b332d8e68d76f4cb4a6bfec0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0774a949a7082d249e10688d80a957668e6b0e0f8ea9828fb564c7cb3e462de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0774a949a7082d249e10688d80a957668e6b0e0f8ea9828fb564c7cb3e462de3->enter($__internal_0774a949a7082d249e10688d80a957668e6b0e0f8ea9828fb564c7cb3e462de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fa23e3b9b673510d9a12271dd78d68b6b24be93b332d8e68d76f4cb4a6bfec0c->leave($__internal_fa23e3b9b673510d9a12271dd78d68b6b24be93b332d8e68d76f4cb4a6bfec0c_prof);

        
        $__internal_0774a949a7082d249e10688d80a957668e6b0e0f8ea9828fb564c7cb3e462de3->leave($__internal_0774a949a7082d249e10688d80a957668e6b0e0f8ea9828fb564c7cb3e462de3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
