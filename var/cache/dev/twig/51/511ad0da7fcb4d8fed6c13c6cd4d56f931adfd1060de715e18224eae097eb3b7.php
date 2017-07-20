<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_852bef0413455d3ba83686b03714c1ae27571936cb8c0896f04357b93a78517f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852bef0413455d3ba83686b03714c1ae27571936cb8c0896f04357b93a78517f->enter($__internal_852bef0413455d3ba83686b03714c1ae27571936cb8c0896f04357b93a78517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6683616c7392dd3fa5820f86b4e77a5727f78b77cc80a8a7675b3ca751b8a0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6683616c7392dd3fa5820f86b4e77a5727f78b77cc80a8a7675b3ca751b8a0ba->enter($__internal_6683616c7392dd3fa5820f86b4e77a5727f78b77cc80a8a7675b3ca751b8a0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_852bef0413455d3ba83686b03714c1ae27571936cb8c0896f04357b93a78517f->leave($__internal_852bef0413455d3ba83686b03714c1ae27571936cb8c0896f04357b93a78517f_prof);

        
        $__internal_6683616c7392dd3fa5820f86b4e77a5727f78b77cc80a8a7675b3ca751b8a0ba->leave($__internal_6683616c7392dd3fa5820f86b4e77a5727f78b77cc80a8a7675b3ca751b8a0ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
