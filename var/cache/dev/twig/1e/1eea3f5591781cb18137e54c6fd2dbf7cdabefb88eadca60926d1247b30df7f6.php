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
        $__internal_0616236c06ac3b28e4a2859d5f4cc3e563bc5fa2e285cd90bce22d35c29f853e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0616236c06ac3b28e4a2859d5f4cc3e563bc5fa2e285cd90bce22d35c29f853e->enter($__internal_0616236c06ac3b28e4a2859d5f4cc3e563bc5fa2e285cd90bce22d35c29f853e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6e75ef83a7a8e15fa7e9830313d92db83bd2635b5fa13f74ccb8a15cec8ee923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e75ef83a7a8e15fa7e9830313d92db83bd2635b5fa13f74ccb8a15cec8ee923->enter($__internal_6e75ef83a7a8e15fa7e9830313d92db83bd2635b5fa13f74ccb8a15cec8ee923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_0616236c06ac3b28e4a2859d5f4cc3e563bc5fa2e285cd90bce22d35c29f853e->leave($__internal_0616236c06ac3b28e4a2859d5f4cc3e563bc5fa2e285cd90bce22d35c29f853e_prof);

        
        $__internal_6e75ef83a7a8e15fa7e9830313d92db83bd2635b5fa13f74ccb8a15cec8ee923->leave($__internal_6e75ef83a7a8e15fa7e9830313d92db83bd2635b5fa13f74ccb8a15cec8ee923_prof);

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
