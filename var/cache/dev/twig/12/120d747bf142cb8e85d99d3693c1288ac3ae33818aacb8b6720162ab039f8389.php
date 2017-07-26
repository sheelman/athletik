<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edfd1465209c9d125585cbafb26200c37d4fd9f57e8ce02a06d644486cfb69e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfd1465209c9d125585cbafb26200c37d4fd9f57e8ce02a06d644486cfb69e2->enter($__internal_edfd1465209c9d125585cbafb26200c37d4fd9f57e8ce02a06d644486cfb69e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_bf745a12828dbd85e46eabcce7cc09ac21405576502e57e33b501ddd2b3c9690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf745a12828dbd85e46eabcce7cc09ac21405576502e57e33b501ddd2b3c9690->enter($__internal_bf745a12828dbd85e46eabcce7cc09ac21405576502e57e33b501ddd2b3c9690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_edfd1465209c9d125585cbafb26200c37d4fd9f57e8ce02a06d644486cfb69e2->leave($__internal_edfd1465209c9d125585cbafb26200c37d4fd9f57e8ce02a06d644486cfb69e2_prof);

        
        $__internal_bf745a12828dbd85e46eabcce7cc09ac21405576502e57e33b501ddd2b3c9690->leave($__internal_bf745a12828dbd85e46eabcce7cc09ac21405576502e57e33b501ddd2b3c9690_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2af7b904d3fbbd5dc09b92e5aeea43d0083e89111ee0b2650a54b487d30be73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af7b904d3fbbd5dc09b92e5aeea43d0083e89111ee0b2650a54b487d30be73b->enter($__internal_2af7b904d3fbbd5dc09b92e5aeea43d0083e89111ee0b2650a54b487d30be73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a89c1f1b5729a2a0fc4641dfbfc48b224ae260b8a4732f2d35b3012fe50ae48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a89c1f1b5729a2a0fc4641dfbfc48b224ae260b8a4732f2d35b3012fe50ae48->enter($__internal_0a89c1f1b5729a2a0fc4641dfbfc48b224ae260b8a4732f2d35b3012fe50ae48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0a89c1f1b5729a2a0fc4641dfbfc48b224ae260b8a4732f2d35b3012fe50ae48->leave($__internal_0a89c1f1b5729a2a0fc4641dfbfc48b224ae260b8a4732f2d35b3012fe50ae48_prof);

        
        $__internal_2af7b904d3fbbd5dc09b92e5aeea43d0083e89111ee0b2650a54b487d30be73b->leave($__internal_2af7b904d3fbbd5dc09b92e5aeea43d0083e89111ee0b2650a54b487d30be73b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
