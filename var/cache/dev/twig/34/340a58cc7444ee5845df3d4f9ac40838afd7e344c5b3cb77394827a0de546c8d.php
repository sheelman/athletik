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
        $__internal_e2888a52bfccdb466daf4d50936eb8026596ec8e42474909ee6edc208901e942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2888a52bfccdb466daf4d50936eb8026596ec8e42474909ee6edc208901e942->enter($__internal_e2888a52bfccdb466daf4d50936eb8026596ec8e42474909ee6edc208901e942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c272a265cc68dc03c13fb0af3ea724fbba7c792e33558b98259d8d5978a19fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c272a265cc68dc03c13fb0af3ea724fbba7c792e33558b98259d8d5978a19fa7->enter($__internal_c272a265cc68dc03c13fb0af3ea724fbba7c792e33558b98259d8d5978a19fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e2888a52bfccdb466daf4d50936eb8026596ec8e42474909ee6edc208901e942->leave($__internal_e2888a52bfccdb466daf4d50936eb8026596ec8e42474909ee6edc208901e942_prof);

        
        $__internal_c272a265cc68dc03c13fb0af3ea724fbba7c792e33558b98259d8d5978a19fa7->leave($__internal_c272a265cc68dc03c13fb0af3ea724fbba7c792e33558b98259d8d5978a19fa7_prof);

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
