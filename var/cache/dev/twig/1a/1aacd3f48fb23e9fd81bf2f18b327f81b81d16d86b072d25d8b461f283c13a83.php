<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_130a90136dd082eb3de237d864dcfe2d695e2391f156d577ab8f168e5550fd7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130a90136dd082eb3de237d864dcfe2d695e2391f156d577ab8f168e5550fd7e->enter($__internal_130a90136dd082eb3de237d864dcfe2d695e2391f156d577ab8f168e5550fd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_09ed7da7093155f29fb031d5ba215236cf640d186feb0254f602d6d6c43cf810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ed7da7093155f29fb031d5ba215236cf640d186feb0254f602d6d6c43cf810->enter($__internal_09ed7da7093155f29fb031d5ba215236cf640d186feb0254f602d6d6c43cf810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_130a90136dd082eb3de237d864dcfe2d695e2391f156d577ab8f168e5550fd7e->leave($__internal_130a90136dd082eb3de237d864dcfe2d695e2391f156d577ab8f168e5550fd7e_prof);

        
        $__internal_09ed7da7093155f29fb031d5ba215236cf640d186feb0254f602d6d6c43cf810->leave($__internal_09ed7da7093155f29fb031d5ba215236cf640d186feb0254f602d6d6c43cf810_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
