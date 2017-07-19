<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_b232c3fd026fc0037a08155abd33b710fabd954581e79771178bfb0797443094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_243b9f062cfda7e9faa8ac48888b20e68d8afbfe5e192c67f2f139d524d3c9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243b9f062cfda7e9faa8ac48888b20e68d8afbfe5e192c67f2f139d524d3c9a4->enter($__internal_243b9f062cfda7e9faa8ac48888b20e68d8afbfe5e192c67f2f139d524d3c9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_5e468260d9426d51af10f12064d673761b7b1a3a124938800fafa6db7b77bfef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e468260d9426d51af10f12064d673761b7b1a3a124938800fafa6db7b77bfef->enter($__internal_5e468260d9426d51af10f12064d673761b7b1a3a124938800fafa6db7b77bfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_243b9f062cfda7e9faa8ac48888b20e68d8afbfe5e192c67f2f139d524d3c9a4->leave($__internal_243b9f062cfda7e9faa8ac48888b20e68d8afbfe5e192c67f2f139d524d3c9a4_prof);

        
        $__internal_5e468260d9426d51af10f12064d673761b7b1a3a124938800fafa6db7b77bfef->leave($__internal_5e468260d9426d51af10f12064d673761b7b1a3a124938800fafa6db7b77bfef_prof);

    }

    // line 3
    public function block_layout($context, array $blocks = array())
    {
        $__internal_48c8ce17faeebabfc46bceddc3b10ef74ef4f2d293aaf4c67af93f0ca49bca4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c8ce17faeebabfc46bceddc3b10ef74ef4f2d293aaf4c67af93f0ca49bca4a->enter($__internal_48c8ce17faeebabfc46bceddc3b10ef74ef4f2d293aaf4c67af93f0ca49bca4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        $__internal_c65149235c05c47f3eb151be3798a88bb619340864e1e20a1249d662d0d67a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65149235c05c47f3eb151be3798a88bb619340864e1e20a1249d662d0d67a33->enter($__internal_c65149235c05c47f3eb151be3798a88bb619340864e1e20a1249d662d0d67a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 4
        echo "        <div>
            ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 13
        echo "        </div>

        ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        <div>
            ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "        </div>
";
        
        $__internal_c65149235c05c47f3eb151be3798a88bb619340864e1e20a1249d662d0d67a33->leave($__internal_c65149235c05c47f3eb151be3798a88bb619340864e1e20a1249d662d0d67a33_prof);

        
        $__internal_48c8ce17faeebabfc46bceddc3b10ef74ef4f2d293aaf4c67af93f0ca49bca4a->leave($__internal_48c8ce17faeebabfc46bceddc3b10ef74ef4f2d293aaf4c67af93f0ca49bca4a_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae9a3f0525d5edbbf407c0c548aa004d01ce2ad3a502302cd0d0e4946426087f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9a3f0525d5edbbf407c0c548aa004d01ce2ad3a502302cd0d0e4946426087f->enter($__internal_ae9a3f0525d5edbbf407c0c548aa004d01ce2ad3a502302cd0d0e4946426087f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b4b3edbea4104b623696ea235b1132b95d085a6b3bf832cc30b986d0e65d2df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b3edbea4104b623696ea235b1132b95d085a6b3bf832cc30b986d0e65d2df4->enter($__internal_b4b3edbea4104b623696ea235b1132b95d085a6b3bf832cc30b986d0e65d2df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_b4b3edbea4104b623696ea235b1132b95d085a6b3bf832cc30b986d0e65d2df4->leave($__internal_b4b3edbea4104b623696ea235b1132b95d085a6b3bf832cc30b986d0e65d2df4_prof);

        
        $__internal_ae9a3f0525d5edbbf407c0c548aa004d01ce2ad3a502302cd0d0e4946426087f->leave($__internal_ae9a3f0525d5edbbf407c0c548aa004d01ce2ad3a502302cd0d0e4946426087f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 27,  134 => 26,  123 => 28,  121 => 26,  117 => 24,  114 => 23,  108 => 22,  99 => 19,  94 => 18,  89 => 17,  84 => 16,  82 => 15,  78 => 13,  70 => 11,  64 => 8,  60 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block layout %}
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
{% endblock %}
", "@FOSUser/layout.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
