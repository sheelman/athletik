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
        $__internal_bb88f8492b837ba62de379c7ed0e9bb1118ad4478896f829ed47b87805dd13bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb88f8492b837ba62de379c7ed0e9bb1118ad4478896f829ed47b87805dd13bb->enter($__internal_bb88f8492b837ba62de379c7ed0e9bb1118ad4478896f829ed47b87805dd13bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_bca55292beef3f10c6f6563eca7177254c3fd784a7ec8793e32796d3efcd3020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca55292beef3f10c6f6563eca7177254c3fd784a7ec8793e32796d3efcd3020->enter($__internal_bca55292beef3f10c6f6563eca7177254c3fd784a7ec8793e32796d3efcd3020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_bb88f8492b837ba62de379c7ed0e9bb1118ad4478896f829ed47b87805dd13bb->leave($__internal_bb88f8492b837ba62de379c7ed0e9bb1118ad4478896f829ed47b87805dd13bb_prof);

        
        $__internal_bca55292beef3f10c6f6563eca7177254c3fd784a7ec8793e32796d3efcd3020->leave($__internal_bca55292beef3f10c6f6563eca7177254c3fd784a7ec8793e32796d3efcd3020_prof);

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
