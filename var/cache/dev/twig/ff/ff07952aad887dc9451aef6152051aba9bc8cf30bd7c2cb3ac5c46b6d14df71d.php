<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2c9ad4f1404f05ebfd2e19f1c722221f359290941177d29c1c236ec2741a614d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_bacd7774a9ef0c25222b5c33f072adaccb06e99f4e387fea8422deeee27469fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bacd7774a9ef0c25222b5c33f072adaccb06e99f4e387fea8422deeee27469fb->enter($__internal_bacd7774a9ef0c25222b5c33f072adaccb06e99f4e387fea8422deeee27469fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_9dfc40e21529524f1772db6e95b3d29929ba08a92b34df33004174ec14b796af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfc40e21529524f1772db6e95b3d29929ba08a92b34df33004174ec14b796af->enter($__internal_9dfc40e21529524f1772db6e95b3d29929ba08a92b34df33004174ec14b796af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bacd7774a9ef0c25222b5c33f072adaccb06e99f4e387fea8422deeee27469fb->leave($__internal_bacd7774a9ef0c25222b5c33f072adaccb06e99f4e387fea8422deeee27469fb_prof);

        
        $__internal_9dfc40e21529524f1772db6e95b3d29929ba08a92b34df33004174ec14b796af->leave($__internal_9dfc40e21529524f1772db6e95b3d29929ba08a92b34df33004174ec14b796af_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9ebe55f73a81a20a1b37a570c59dc1136a9faef00a1f823ff02ae2fc8e99883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ebe55f73a81a20a1b37a570c59dc1136a9faef00a1f823ff02ae2fc8e99883->enter($__internal_d9ebe55f73a81a20a1b37a570c59dc1136a9faef00a1f823ff02ae2fc8e99883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_907149b3224b6bc5a3758d09710f2f4158f3bca5c80e3ac4a5ea51911787fb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907149b3224b6bc5a3758d09710f2f4158f3bca5c80e3ac4a5ea51911787fb90->enter($__internal_907149b3224b6bc5a3758d09710f2f4158f3bca5c80e3ac4a5ea51911787fb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_907149b3224b6bc5a3758d09710f2f4158f3bca5c80e3ac4a5ea51911787fb90->leave($__internal_907149b3224b6bc5a3758d09710f2f4158f3bca5c80e3ac4a5ea51911787fb90_prof);

        
        $__internal_d9ebe55f73a81a20a1b37a570c59dc1136a9faef00a1f823ff02ae2fc8e99883->leave($__internal_d9ebe55f73a81a20a1b37a570c59dc1136a9faef00a1f823ff02ae2fc8e99883_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
