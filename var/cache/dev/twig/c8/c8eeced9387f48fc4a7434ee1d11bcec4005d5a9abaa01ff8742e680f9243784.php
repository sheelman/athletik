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
        $__internal_f65aa2fa935d77c81f158d53e698b2d4050f68f2994528d9ce664f2bd7f94948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65aa2fa935d77c81f158d53e698b2d4050f68f2994528d9ce664f2bd7f94948->enter($__internal_f65aa2fa935d77c81f158d53e698b2d4050f68f2994528d9ce664f2bd7f94948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6f16d47de385adeb93868f0c3adacce623d145de8bc7b74266054522cda1f474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f16d47de385adeb93868f0c3adacce623d145de8bc7b74266054522cda1f474->enter($__internal_6f16d47de385adeb93868f0c3adacce623d145de8bc7b74266054522cda1f474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f65aa2fa935d77c81f158d53e698b2d4050f68f2994528d9ce664f2bd7f94948->leave($__internal_f65aa2fa935d77c81f158d53e698b2d4050f68f2994528d9ce664f2bd7f94948_prof);

        
        $__internal_6f16d47de385adeb93868f0c3adacce623d145de8bc7b74266054522cda1f474->leave($__internal_6f16d47de385adeb93868f0c3adacce623d145de8bc7b74266054522cda1f474_prof);

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
