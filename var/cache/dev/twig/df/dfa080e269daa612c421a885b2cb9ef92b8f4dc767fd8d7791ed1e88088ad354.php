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
        $__internal_227e84d4c0c9a39edd06a96fc4f67f188a293825244116fe7791aca8c9833a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227e84d4c0c9a39edd06a96fc4f67f188a293825244116fe7791aca8c9833a1e->enter($__internal_227e84d4c0c9a39edd06a96fc4f67f188a293825244116fe7791aca8c9833a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_357083725738adff805dce77906aa40e97a218197d4e929981cc71632bd650cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357083725738adff805dce77906aa40e97a218197d4e929981cc71632bd650cc->enter($__internal_357083725738adff805dce77906aa40e97a218197d4e929981cc71632bd650cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_227e84d4c0c9a39edd06a96fc4f67f188a293825244116fe7791aca8c9833a1e->leave($__internal_227e84d4c0c9a39edd06a96fc4f67f188a293825244116fe7791aca8c9833a1e_prof);

        
        $__internal_357083725738adff805dce77906aa40e97a218197d4e929981cc71632bd650cc->leave($__internal_357083725738adff805dce77906aa40e97a218197d4e929981cc71632bd650cc_prof);

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
