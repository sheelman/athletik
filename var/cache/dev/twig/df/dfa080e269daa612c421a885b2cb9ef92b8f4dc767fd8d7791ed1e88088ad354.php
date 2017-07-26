<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_d419a2a7597cb89430176137047bad76b4852da843430358a13f78e79bd7ecba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d419a2a7597cb89430176137047bad76b4852da843430358a13f78e79bd7ecba->enter($__internal_d419a2a7597cb89430176137047bad76b4852da843430358a13f78e79bd7ecba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_815aebb9998d452810f67f795ea3040e91604d340bf26a9fdc06e977d18af7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815aebb9998d452810f67f795ea3040e91604d340bf26a9fdc06e977d18af7d6->enter($__internal_815aebb9998d452810f67f795ea3040e91604d340bf26a9fdc06e977d18af7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d419a2a7597cb89430176137047bad76b4852da843430358a13f78e79bd7ecba->leave($__internal_d419a2a7597cb89430176137047bad76b4852da843430358a13f78e79bd7ecba_prof);

        
        $__internal_815aebb9998d452810f67f795ea3040e91604d340bf26a9fdc06e977d18af7d6->leave($__internal_815aebb9998d452810f67f795ea3040e91604d340bf26a9fdc06e977d18af7d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
