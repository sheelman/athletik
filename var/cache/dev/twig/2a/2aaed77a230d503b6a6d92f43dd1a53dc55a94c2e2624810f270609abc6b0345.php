<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3e3f39508b4382a848393181ef1fb966c38c4ff5a26a2d0ff786833e01e587dc extends Twig_Template
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
        $__internal_3b8cc6093aea25b602f215210a66cb1c275b99dc2edcc65adef1d94bed88c1b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8cc6093aea25b602f215210a66cb1c275b99dc2edcc65adef1d94bed88c1b1->enter($__internal_3b8cc6093aea25b602f215210a66cb1c275b99dc2edcc65adef1d94bed88c1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_adbca6d74726aa33a879fdeb52710d386f2b3b3fb0845a38d124806b2e1302a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbca6d74726aa33a879fdeb52710d386f2b3b3fb0845a38d124806b2e1302a1->enter($__internal_adbca6d74726aa33a879fdeb52710d386f2b3b3fb0845a38d124806b2e1302a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3b8cc6093aea25b602f215210a66cb1c275b99dc2edcc65adef1d94bed88c1b1->leave($__internal_3b8cc6093aea25b602f215210a66cb1c275b99dc2edcc65adef1d94bed88c1b1_prof);

        
        $__internal_adbca6d74726aa33a879fdeb52710d386f2b3b3fb0845a38d124806b2e1302a1->leave($__internal_adbca6d74726aa33a879fdeb52710d386f2b3b3fb0845a38d124806b2e1302a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
