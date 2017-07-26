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
        $__internal_8fe13322694e9bfc0e8b4d156c2fb54b06ad483cd5d4987b5895ca825b1cc2b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe13322694e9bfc0e8b4d156c2fb54b06ad483cd5d4987b5895ca825b1cc2b9->enter($__internal_8fe13322694e9bfc0e8b4d156c2fb54b06ad483cd5d4987b5895ca825b1cc2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_230b36137af9622a425b7dff26f2e14ccc929df21dd0ff1b9b3f9b45f3b8f2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230b36137af9622a425b7dff26f2e14ccc929df21dd0ff1b9b3f9b45f3b8f2f4->enter($__internal_230b36137af9622a425b7dff26f2e14ccc929df21dd0ff1b9b3f9b45f3b8f2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8fe13322694e9bfc0e8b4d156c2fb54b06ad483cd5d4987b5895ca825b1cc2b9->leave($__internal_8fe13322694e9bfc0e8b4d156c2fb54b06ad483cd5d4987b5895ca825b1cc2b9_prof);

        
        $__internal_230b36137af9622a425b7dff26f2e14ccc929df21dd0ff1b9b3f9b45f3b8f2f4->leave($__internal_230b36137af9622a425b7dff26f2e14ccc929df21dd0ff1b9b3f9b45f3b8f2f4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_967ef3fab57b32d8301b943c930220e249542ea4c6e2e9c522a9f9ab0b0b64c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967ef3fab57b32d8301b943c930220e249542ea4c6e2e9c522a9f9ab0b0b64c9->enter($__internal_967ef3fab57b32d8301b943c930220e249542ea4c6e2e9c522a9f9ab0b0b64c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8562fd9943fe9380d9d5b756eba793c4477d1c40eeb6d1f2791eeb7131fb8055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8562fd9943fe9380d9d5b756eba793c4477d1c40eeb6d1f2791eeb7131fb8055->enter($__internal_8562fd9943fe9380d9d5b756eba793c4477d1c40eeb6d1f2791eeb7131fb8055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8562fd9943fe9380d9d5b756eba793c4477d1c40eeb6d1f2791eeb7131fb8055->leave($__internal_8562fd9943fe9380d9d5b756eba793c4477d1c40eeb6d1f2791eeb7131fb8055_prof);

        
        $__internal_967ef3fab57b32d8301b943c930220e249542ea4c6e2e9c522a9f9ab0b0b64c9->leave($__internal_967ef3fab57b32d8301b943c930220e249542ea4c6e2e9c522a9f9ab0b0b64c9_prof);

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
