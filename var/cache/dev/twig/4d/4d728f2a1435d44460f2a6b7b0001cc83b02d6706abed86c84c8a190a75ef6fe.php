<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_150a56723bd217e34d5a97d590d14cfe3e69e52cd038c254ccd6d68fb54caf87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150a56723bd217e34d5a97d590d14cfe3e69e52cd038c254ccd6d68fb54caf87->enter($__internal_150a56723bd217e34d5a97d590d14cfe3e69e52cd038c254ccd6d68fb54caf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_a32bce8c5f35f52cd6599c19829833d1423508d04be99895d904c76eb36f21ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32bce8c5f35f52cd6599c19829833d1423508d04be99895d904c76eb36f21ff->enter($__internal_a32bce8c5f35f52cd6599c19829833d1423508d04be99895d904c76eb36f21ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_150a56723bd217e34d5a97d590d14cfe3e69e52cd038c254ccd6d68fb54caf87->leave($__internal_150a56723bd217e34d5a97d590d14cfe3e69e52cd038c254ccd6d68fb54caf87_prof);

        
        $__internal_a32bce8c5f35f52cd6599c19829833d1423508d04be99895d904c76eb36f21ff->leave($__internal_a32bce8c5f35f52cd6599c19829833d1423508d04be99895d904c76eb36f21ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
