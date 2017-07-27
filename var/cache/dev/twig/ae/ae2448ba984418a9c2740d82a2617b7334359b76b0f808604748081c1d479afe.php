<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_6d9852e0eba1c76f4fe6f9d7dd70c7c33b19427e1c44e2d62d867f5c3d19e96f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9852e0eba1c76f4fe6f9d7dd70c7c33b19427e1c44e2d62d867f5c3d19e96f->enter($__internal_6d9852e0eba1c76f4fe6f9d7dd70c7c33b19427e1c44e2d62d867f5c3d19e96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_eccc9f62d6d39adb061042c9dd017ee0c05c0343290605405a27e5c8eb2c67b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eccc9f62d6d39adb061042c9dd017ee0c05c0343290605405a27e5c8eb2c67b1->enter($__internal_eccc9f62d6d39adb061042c9dd017ee0c05c0343290605405a27e5c8eb2c67b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6d9852e0eba1c76f4fe6f9d7dd70c7c33b19427e1c44e2d62d867f5c3d19e96f->leave($__internal_6d9852e0eba1c76f4fe6f9d7dd70c7c33b19427e1c44e2d62d867f5c3d19e96f_prof);

        
        $__internal_eccc9f62d6d39adb061042c9dd017ee0c05c0343290605405a27e5c8eb2c67b1->leave($__internal_eccc9f62d6d39adb061042c9dd017ee0c05c0343290605405a27e5c8eb2c67b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
