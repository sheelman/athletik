<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b65ab6b1d8e7083f1e0f3d23a73dbf55dc3df57b434c7617b736abb9ea4a4b99 extends Twig_Template
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
        $__internal_65bc76de3b54f034f0f2d9355c1fd2d1ef173a80dcb10df2451d751df723fab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bc76de3b54f034f0f2d9355c1fd2d1ef173a80dcb10df2451d751df723fab5->enter($__internal_65bc76de3b54f034f0f2d9355c1fd2d1ef173a80dcb10df2451d751df723fab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_62b1d6a416e0f0126b0417da3527cbfa9f974a9989beb812f51ef17f94981767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b1d6a416e0f0126b0417da3527cbfa9f974a9989beb812f51ef17f94981767->enter($__internal_62b1d6a416e0f0126b0417da3527cbfa9f974a9989beb812f51ef17f94981767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_65bc76de3b54f034f0f2d9355c1fd2d1ef173a80dcb10df2451d751df723fab5->leave($__internal_65bc76de3b54f034f0f2d9355c1fd2d1ef173a80dcb10df2451d751df723fab5_prof);

        
        $__internal_62b1d6a416e0f0126b0417da3527cbfa9f974a9989beb812f51ef17f94981767->leave($__internal_62b1d6a416e0f0126b0417da3527cbfa9f974a9989beb812f51ef17f94981767_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
