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
        $__internal_4ea4990cb030fe9b670ec2ecdc48771d8b8d458b1bfd9dca9879ac49ff87e2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea4990cb030fe9b670ec2ecdc48771d8b8d458b1bfd9dca9879ac49ff87e2f3->enter($__internal_4ea4990cb030fe9b670ec2ecdc48771d8b8d458b1bfd9dca9879ac49ff87e2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2d15e4c546ffecaa22ad2cb67b7a7b6800fbe9f3e3d86c8ee533681473f6a838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d15e4c546ffecaa22ad2cb67b7a7b6800fbe9f3e3d86c8ee533681473f6a838->enter($__internal_2d15e4c546ffecaa22ad2cb67b7a7b6800fbe9f3e3d86c8ee533681473f6a838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4ea4990cb030fe9b670ec2ecdc48771d8b8d458b1bfd9dca9879ac49ff87e2f3->leave($__internal_4ea4990cb030fe9b670ec2ecdc48771d8b8d458b1bfd9dca9879ac49ff87e2f3_prof);

        
        $__internal_2d15e4c546ffecaa22ad2cb67b7a7b6800fbe9f3e3d86c8ee533681473f6a838->leave($__internal_2d15e4c546ffecaa22ad2cb67b7a7b6800fbe9f3e3d86c8ee533681473f6a838_prof);

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
