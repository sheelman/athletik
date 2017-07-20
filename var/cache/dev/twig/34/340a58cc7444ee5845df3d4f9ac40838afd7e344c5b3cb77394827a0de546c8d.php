<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69787b8f45555631b7dd60dddf820b29a6106424c88235bb45364dc950e1a374 extends Twig_Template
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
        $__internal_f9bc45be9cefb9e5be2d51152fe029842d8df6f4a732099136c5995e10e3e5a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9bc45be9cefb9e5be2d51152fe029842d8df6f4a732099136c5995e10e3e5a7->enter($__internal_f9bc45be9cefb9e5be2d51152fe029842d8df6f4a732099136c5995e10e3e5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d80fd2e2661808d33bacd7f689d2690010fdecbac9150eb955578f538c1b84b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80fd2e2661808d33bacd7f689d2690010fdecbac9150eb955578f538c1b84b3->enter($__internal_d80fd2e2661808d33bacd7f689d2690010fdecbac9150eb955578f538c1b84b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f9bc45be9cefb9e5be2d51152fe029842d8df6f4a732099136c5995e10e3e5a7->leave($__internal_f9bc45be9cefb9e5be2d51152fe029842d8df6f4a732099136c5995e10e3e5a7_prof);

        
        $__internal_d80fd2e2661808d33bacd7f689d2690010fdecbac9150eb955578f538c1b84b3->leave($__internal_d80fd2e2661808d33bacd7f689d2690010fdecbac9150eb955578f538c1b84b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
