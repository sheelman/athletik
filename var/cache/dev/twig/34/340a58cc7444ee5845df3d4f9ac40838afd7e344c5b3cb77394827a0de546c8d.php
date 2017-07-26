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
        $__internal_f167a3a7041528e055cd70c50a8e3b3c5695028dcdc89dabd5318e07d9c8bd80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f167a3a7041528e055cd70c50a8e3b3c5695028dcdc89dabd5318e07d9c8bd80->enter($__internal_f167a3a7041528e055cd70c50a8e3b3c5695028dcdc89dabd5318e07d9c8bd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7b4efecbb9338be9989e3c0c9810c9fc832bbb70a6c12e82413bf587bfa30af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4efecbb9338be9989e3c0c9810c9fc832bbb70a6c12e82413bf587bfa30af5->enter($__internal_7b4efecbb9338be9989e3c0c9810c9fc832bbb70a6c12e82413bf587bfa30af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f167a3a7041528e055cd70c50a8e3b3c5695028dcdc89dabd5318e07d9c8bd80->leave($__internal_f167a3a7041528e055cd70c50a8e3b3c5695028dcdc89dabd5318e07d9c8bd80_prof);

        
        $__internal_7b4efecbb9338be9989e3c0c9810c9fc832bbb70a6c12e82413bf587bfa30af5->leave($__internal_7b4efecbb9338be9989e3c0c9810c9fc832bbb70a6c12e82413bf587bfa30af5_prof);

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
