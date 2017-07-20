<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_8218ce9191f1efe66ee4e2a5c1901f35b744b63e4476082fa9d270b764082481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8218ce9191f1efe66ee4e2a5c1901f35b744b63e4476082fa9d270b764082481->enter($__internal_8218ce9191f1efe66ee4e2a5c1901f35b744b63e4476082fa9d270b764082481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1db73f73868833acc084932269a42f187d485e1d9ed69d76109280d0029cd10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db73f73868833acc084932269a42f187d485e1d9ed69d76109280d0029cd10d->enter($__internal_1db73f73868833acc084932269a42f187d485e1d9ed69d76109280d0029cd10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8218ce9191f1efe66ee4e2a5c1901f35b744b63e4476082fa9d270b764082481->leave($__internal_8218ce9191f1efe66ee4e2a5c1901f35b744b63e4476082fa9d270b764082481_prof);

        
        $__internal_1db73f73868833acc084932269a42f187d485e1d9ed69d76109280d0029cd10d->leave($__internal_1db73f73868833acc084932269a42f187d485e1d9ed69d76109280d0029cd10d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
