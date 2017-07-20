<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8c1b7229f37d58e1983aba035fb09422e2028941705f2b5c0631ef2ce67dc990 extends Twig_Template
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
        $__internal_1219c42be2ab65d0a2e6f789086d68e46b41081e7faa1b548cb505489667e949 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1219c42be2ab65d0a2e6f789086d68e46b41081e7faa1b548cb505489667e949->enter($__internal_1219c42be2ab65d0a2e6f789086d68e46b41081e7faa1b548cb505489667e949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_4b17663b1ddd73d7b087dfcb2b46d6ec4f5290e3176ae229d0d2046269aed536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b17663b1ddd73d7b087dfcb2b46d6ec4f5290e3176ae229d0d2046269aed536->enter($__internal_4b17663b1ddd73d7b087dfcb2b46d6ec4f5290e3176ae229d0d2046269aed536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1219c42be2ab65d0a2e6f789086d68e46b41081e7faa1b548cb505489667e949->leave($__internal_1219c42be2ab65d0a2e6f789086d68e46b41081e7faa1b548cb505489667e949_prof);

        
        $__internal_4b17663b1ddd73d7b087dfcb2b46d6ec4f5290e3176ae229d0d2046269aed536->leave($__internal_4b17663b1ddd73d7b087dfcb2b46d6ec4f5290e3176ae229d0d2046269aed536_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
