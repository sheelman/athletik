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
        $__internal_055ec7c297632a9c4ff83012f84382a5a38f040a0bde013c7ea253a65ed86e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055ec7c297632a9c4ff83012f84382a5a38f040a0bde013c7ea253a65ed86e7c->enter($__internal_055ec7c297632a9c4ff83012f84382a5a38f040a0bde013c7ea253a65ed86e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6ff04be8d7c9d62c4f92a8772005061a16cf145c1f6143acbebf968bd517337b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff04be8d7c9d62c4f92a8772005061a16cf145c1f6143acbebf968bd517337b->enter($__internal_6ff04be8d7c9d62c4f92a8772005061a16cf145c1f6143acbebf968bd517337b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_055ec7c297632a9c4ff83012f84382a5a38f040a0bde013c7ea253a65ed86e7c->leave($__internal_055ec7c297632a9c4ff83012f84382a5a38f040a0bde013c7ea253a65ed86e7c_prof);

        
        $__internal_6ff04be8d7c9d62c4f92a8772005061a16cf145c1f6143acbebf968bd517337b->leave($__internal_6ff04be8d7c9d62c4f92a8772005061a16cf145c1f6143acbebf968bd517337b_prof);

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
