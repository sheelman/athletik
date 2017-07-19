<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_1289cf0413a3952285cdf38b4b66d42aa5f2844fb06e626605b96e620f890f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1289cf0413a3952285cdf38b4b66d42aa5f2844fb06e626605b96e620f890f9c->enter($__internal_1289cf0413a3952285cdf38b4b66d42aa5f2844fb06e626605b96e620f890f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_c58ae5d66b8e4a417d1d0884715e6f73597b36885c6a78622bc0b9e5fe19e4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58ae5d66b8e4a417d1d0884715e6f73597b36885c6a78622bc0b9e5fe19e4e9->enter($__internal_c58ae5d66b8e4a417d1d0884715e6f73597b36885c6a78622bc0b9e5fe19e4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1289cf0413a3952285cdf38b4b66d42aa5f2844fb06e626605b96e620f890f9c->leave($__internal_1289cf0413a3952285cdf38b4b66d42aa5f2844fb06e626605b96e620f890f9c_prof);

        
        $__internal_c58ae5d66b8e4a417d1d0884715e6f73597b36885c6a78622bc0b9e5fe19e4e9->leave($__internal_c58ae5d66b8e4a417d1d0884715e6f73597b36885c6a78622bc0b9e5fe19e4e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
