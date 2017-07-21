<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0f77dc164e26e520bbffc9446731e225ebe172848d7123bf5f36f7899f13473 extends Twig_Template
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
        $__internal_e40acae54b52bee88f23780cbf37a6d131cb9c502125846605b989a60ebd36be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40acae54b52bee88f23780cbf37a6d131cb9c502125846605b989a60ebd36be->enter($__internal_e40acae54b52bee88f23780cbf37a6d131cb9c502125846605b989a60ebd36be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_38507e02b547c27183e7a0e0f800ec4d3975ebe992449aa1e7f348f20e93e400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38507e02b547c27183e7a0e0f800ec4d3975ebe992449aa1e7f348f20e93e400->enter($__internal_38507e02b547c27183e7a0e0f800ec4d3975ebe992449aa1e7f348f20e93e400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e40acae54b52bee88f23780cbf37a6d131cb9c502125846605b989a60ebd36be->leave($__internal_e40acae54b52bee88f23780cbf37a6d131cb9c502125846605b989a60ebd36be_prof);

        
        $__internal_38507e02b547c27183e7a0e0f800ec4d3975ebe992449aa1e7f348f20e93e400->leave($__internal_38507e02b547c27183e7a0e0f800ec4d3975ebe992449aa1e7f348f20e93e400_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
