<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4e540f3812fcd25533c70884c2c679309efa0efa5dc560bb4bbc05c57dfc7ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc31091c50aab15a66d250824b1b216e77b97468f4c2b336a1d5628e9a93ee7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc31091c50aab15a66d250824b1b216e77b97468f4c2b336a1d5628e9a93ee7f->enter($__internal_dc31091c50aab15a66d250824b1b216e77b97468f4c2b336a1d5628e9a93ee7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_a022e2ea6c647452976265b77477ef798c3e52f59527f36d1336620e252e8ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a022e2ea6c647452976265b77477ef798c3e52f59527f36d1336620e252e8ed2->enter($__internal_a022e2ea6c647452976265b77477ef798c3e52f59527f36d1336620e252e8ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc31091c50aab15a66d250824b1b216e77b97468f4c2b336a1d5628e9a93ee7f->leave($__internal_dc31091c50aab15a66d250824b1b216e77b97468f4c2b336a1d5628e9a93ee7f_prof);

        
        $__internal_a022e2ea6c647452976265b77477ef798c3e52f59527f36d1336620e252e8ed2->leave($__internal_a022e2ea6c647452976265b77477ef798c3e52f59527f36d1336620e252e8ed2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_566552a59fa72f1596454c47713fcc2df66a7f83d9b26cda17b047303b06d8ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566552a59fa72f1596454c47713fcc2df66a7f83d9b26cda17b047303b06d8ed->enter($__internal_566552a59fa72f1596454c47713fcc2df66a7f83d9b26cda17b047303b06d8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_00894b525fdd51aabff856f3e7418becfe8c754001f31e545f6ef3934415465b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00894b525fdd51aabff856f3e7418becfe8c754001f31e545f6ef3934415465b->enter($__internal_00894b525fdd51aabff856f3e7418becfe8c754001f31e545f6ef3934415465b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_00894b525fdd51aabff856f3e7418becfe8c754001f31e545f6ef3934415465b->leave($__internal_00894b525fdd51aabff856f3e7418becfe8c754001f31e545f6ef3934415465b_prof);

        
        $__internal_566552a59fa72f1596454c47713fcc2df66a7f83d9b26cda17b047303b06d8ed->leave($__internal_566552a59fa72f1596454c47713fcc2df66a7f83d9b26cda17b047303b06d8ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
