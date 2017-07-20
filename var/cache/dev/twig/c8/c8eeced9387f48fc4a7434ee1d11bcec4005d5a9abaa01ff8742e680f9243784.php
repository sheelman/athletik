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
        $__internal_e55bb39fe7246733ffb4242d4f147da657ffa75feb7d049e44aa8bb7e27f5338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55bb39fe7246733ffb4242d4f147da657ffa75feb7d049e44aa8bb7e27f5338->enter($__internal_e55bb39fe7246733ffb4242d4f147da657ffa75feb7d049e44aa8bb7e27f5338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_685bb84c6f10897434376a5bed19d9ebc8c00b7ec3bd33a39fba50b1e04f9cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685bb84c6f10897434376a5bed19d9ebc8c00b7ec3bd33a39fba50b1e04f9cb2->enter($__internal_685bb84c6f10897434376a5bed19d9ebc8c00b7ec3bd33a39fba50b1e04f9cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e55bb39fe7246733ffb4242d4f147da657ffa75feb7d049e44aa8bb7e27f5338->leave($__internal_e55bb39fe7246733ffb4242d4f147da657ffa75feb7d049e44aa8bb7e27f5338_prof);

        
        $__internal_685bb84c6f10897434376a5bed19d9ebc8c00b7ec3bd33a39fba50b1e04f9cb2->leave($__internal_685bb84c6f10897434376a5bed19d9ebc8c00b7ec3bd33a39fba50b1e04f9cb2_prof);

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
