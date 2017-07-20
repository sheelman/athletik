<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32e4c481536383d50cd9dd37f75507a360c64fe4de6b769666c5d971623fa9e5 extends Twig_Template
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
        $__internal_e898a02b1968c8a973313e2ff88ca2870da2e636ee0b1d74047bbda56b77156b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e898a02b1968c8a973313e2ff88ca2870da2e636ee0b1d74047bbda56b77156b->enter($__internal_e898a02b1968c8a973313e2ff88ca2870da2e636ee0b1d74047bbda56b77156b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b087a2eec0b6acedbf1beec76cef9f07c920700252efa14322e512c188e8c7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b087a2eec0b6acedbf1beec76cef9f07c920700252efa14322e512c188e8c7b1->enter($__internal_b087a2eec0b6acedbf1beec76cef9f07c920700252efa14322e512c188e8c7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e898a02b1968c8a973313e2ff88ca2870da2e636ee0b1d74047bbda56b77156b->leave($__internal_e898a02b1968c8a973313e2ff88ca2870da2e636ee0b1d74047bbda56b77156b_prof);

        
        $__internal_b087a2eec0b6acedbf1beec76cef9f07c920700252efa14322e512c188e8c7b1->leave($__internal_b087a2eec0b6acedbf1beec76cef9f07c920700252efa14322e512c188e8c7b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
