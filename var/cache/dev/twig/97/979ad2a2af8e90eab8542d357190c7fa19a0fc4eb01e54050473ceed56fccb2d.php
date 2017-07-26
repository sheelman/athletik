<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_11d55d799ec8b5c1a91458894714402fafaf051ccf85cf50f7c99bba9401df0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d55d799ec8b5c1a91458894714402fafaf051ccf85cf50f7c99bba9401df0e->enter($__internal_11d55d799ec8b5c1a91458894714402fafaf051ccf85cf50f7c99bba9401df0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f3665b013ac3106860c32b77908cea336949388c66c9608fa3f6cb27c5fb351d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3665b013ac3106860c32b77908cea336949388c66c9608fa3f6cb27c5fb351d->enter($__internal_f3665b013ac3106860c32b77908cea336949388c66c9608fa3f6cb27c5fb351d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_11d55d799ec8b5c1a91458894714402fafaf051ccf85cf50f7c99bba9401df0e->leave($__internal_11d55d799ec8b5c1a91458894714402fafaf051ccf85cf50f7c99bba9401df0e_prof);

        
        $__internal_f3665b013ac3106860c32b77908cea336949388c66c9608fa3f6cb27c5fb351d->leave($__internal_f3665b013ac3106860c32b77908cea336949388c66c9608fa3f6cb27c5fb351d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
