<?php

/* :default:result.html.twig */
class __TwigTemplate_d064da0debbb2e3ca1c404ca51aef78978a9b1a4083219ab96c1c513f9b50d43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":default:result.html.twig", 2);
        $this->blocks = array(
            'classement' => array($this, 'block_classement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2e9c9bb9184f486b6cb54efdd99a6d5eee7e2ada246bb4ecdbfd0dc2da93eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e9c9bb9184f486b6cb54efdd99a6d5eee7e2ada246bb4ecdbfd0dc2da93eef->enter($__internal_b2e9c9bb9184f486b6cb54efdd99a6d5eee7e2ada246bb4ecdbfd0dc2da93eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:result.html.twig"));

        $__internal_6b72254c0ff010831294065d9047e5da5e880dde54f017883b63005518771868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b72254c0ff010831294065d9047e5da5e880dde54f017883b63005518771868->enter($__internal_6b72254c0ff010831294065d9047e5da5e880dde54f017883b63005518771868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2e9c9bb9184f486b6cb54efdd99a6d5eee7e2ada246bb4ecdbfd0dc2da93eef->leave($__internal_b2e9c9bb9184f486b6cb54efdd99a6d5eee7e2ada246bb4ecdbfd0dc2da93eef_prof);

        
        $__internal_6b72254c0ff010831294065d9047e5da5e880dde54f017883b63005518771868->leave($__internal_6b72254c0ff010831294065d9047e5da5e880dde54f017883b63005518771868_prof);

    }

    // line 4
    public function block_classement($context, array $blocks = array())
    {
        $__internal_9b9209e6b2e4d33ec6cc840f9d5041e3e4e886a4677010686db4f4466851e233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b9209e6b2e4d33ec6cc840f9d5041e3e4e886a4677010686db4f4466851e233->enter($__internal_9b9209e6b2e4d33ec6cc840f9d5041e3e4e886a4677010686db4f4466851e233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        $__internal_bd498c46e0ec957bfb8cb3bed30f2b967a7a4a6b580af16d215407f6d87bf234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd498c46e0ec957bfb8cb3bed30f2b967a7a4a6b580af16d215407f6d87bf234->enter($__internal_bd498c46e0ec957bfb8cb3bed30f2b967a7a4a6b580af16d215407f6d87bf234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classement"));

        // line 5
        echo "    ";
        if (array_key_exists("events", $context)) {
            // line 6
            echo "    <h1>RESULTATS DES COURSES MAGUEULE</h1>
    <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("globalResults");
            echo "\" class=\"btn btn-primary\">Classement Général</a>
    <div class=\"container-fluid\">
        
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 11
                echo "                <div class =\"resultcol col-xs-12 col-sm-6 col-md-3 col-lg-2\">
                    <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("event", array("meetingName" => $this->getAttribute($context["event"], "name", array()))), "html", null, true);
                echo "\" class=\"resultCol\"><h4 class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
                echo "</h4></a>
                    <ul class=\"list-group\">
                        <li class=\"resultli list-group-item-heading\">Coureur<span class=\"badge\">points</span></li>
                        ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
                foreach ($context['_seq'] as $context["_key"] => $context["resultat"]) {
                    // line 16
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["resultat"], "meeting", array()), "id", array()) == $this->getAttribute($context["event"], "id", array()))) {
                        // line 17
                        echo "                                ";
                        if ( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()))) {
                            // line 18
                            echo "                                ";
                            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "athlete", array()), "firstname", array()) == $this->getAttribute($this->getAttribute($context["resultat"], "athlete", array()), "firstname", array()))) {
                                // line 19
                                echo "                                <li class=\"row resultli user list-group-item justify-content-between\"><div class=\"divli \">";
                                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($context["resultat"], "athlete", array()), "firstname", array())), "html", null, true);
                                echo "
                                        <span class=\"badge\">";
                                // line 20
                                if ((null === $this->getAttribute($context["resultat"], "points", array()))) {
                                    echo "NotRanYet";
                                } else {
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "points", array()), "html", null, true);
                                }
                                echo "</span></div></li>
                                ";
                            } else {
                                // line 22
                                echo "                                <li class=\"row resultli list-group-item justify-content-between\"><div class=\"divli \">";
                                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($context["resultat"], "athlete", array()), "firstname", array())), "html", null, true);
                                echo "<span class=\"badge\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "points", array()), "html", null, true);
                                echo "</span></div></li>
                                ";
                            }
                            // line 24
                            echo "                                ";
                        } else {
                            // line 25
                            echo "                                <li class=\"row resultli list-group-item justify-content-between\"><div class=\"divli \">";
                            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($context["resultat"], "athlete", array()), "firstname", array())), "html", null, true);
                            echo "<span class=\"badge\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "points", array()), "html", null, true);
                            echo "</span></div></li>
                                ";
                        }
                        // line 27
                        echo "                            ";
                    }
                    // line 28
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                    </ul>
                    
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        
    </div>
   ";
        } elseif (        // line 35
array_key_exists("results", $context)) {
            // line 36
            echo "       <h1>Global Results</h1>
    <div class=\"container\">
        
            
                    <ul class=\"list-group\">
                        <li class=\"resultli list-group-item-heading\">Coureur<span class=\"badge\">points</span></li>
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
            foreach ($context['_seq'] as $context["_key"] => $context["resultat"]) {
                // line 43
                echo "                                ";
                if ( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()))) {
                    // line 44
                    echo "                                ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "athlete", array()), "firstname", array()) == $this->getAttribute($context["resultat"], "firstname", array()))) {
                        // line 45
                        echo "                                <li class=\"row resultli user list-group-item justify-content-between\"><div class=\"divli \">";
                        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["resultat"], "firstname", array())), "html", null, true);
                        echo "
                                        <span class=\"badge\">";
                        // line 46
                        if ((null === $this->getAttribute($context["resultat"], "total", array()))) {
                            echo "NotRanYet";
                        } else {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "total", array()), "html", null, true);
                        }
                        echo "</span></div></li>
                                ";
                    } else {
                        // line 48
                        echo "                                <li class=\"row resultli list-group-item justify-content-between\"><div class=\"divli \">";
                        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["resultat"], "firstname", array())), "html", null, true);
                        echo "<span class=\"badge\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "total", array()), "html", null, true);
                        echo "</span></div></li>
                                ";
                    }
                    // line 50
                    echo "                                ";
                } else {
                    // line 51
                    echo "                                <li class=\"row resultli list-group-item justify-content-between\"><div class=\"divli \">";
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["resultat"], "firstname", array())), "html", null, true);
                    echo "<span class=\"badge\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["resultat"], "total", array()), "html", null, true);
                    echo "</span></div></li>
                        ";
                }
                // line 53
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                    </ul>
                    
                </div>
            
   ";
        }
        // line 58
        echo " 
";
        
        $__internal_bd498c46e0ec957bfb8cb3bed30f2b967a7a4a6b580af16d215407f6d87bf234->leave($__internal_bd498c46e0ec957bfb8cb3bed30f2b967a7a4a6b580af16d215407f6d87bf234_prof);

        
        $__internal_9b9209e6b2e4d33ec6cc840f9d5041e3e4e886a4677010686db4f4466851e233->leave($__internal_9b9209e6b2e4d33ec6cc840f9d5041e3e4e886a4677010686db4f4466851e233_prof);

    }

    public function getTemplateName()
    {
        return ":default:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 58,  203 => 54,  197 => 53,  189 => 51,  186 => 50,  178 => 48,  169 => 46,  164 => 45,  161 => 44,  158 => 43,  154 => 42,  146 => 36,  144 => 35,  140 => 33,  131 => 29,  125 => 28,  122 => 27,  114 => 25,  111 => 24,  103 => 22,  94 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  76 => 15,  68 => 12,  65 => 11,  61 => 10,  55 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig'%}

{% block classement %}
    {% if events is defined %}
    <h1>RESULTATS DES COURSES MAGUEULE</h1>
    <a href=\"{{path('globalResults')}}\" class=\"btn btn-primary\">Classement Général</a>
    <div class=\"container-fluid\">
        
            {% for event in events %}
                <div class =\"resultcol col-xs-12 col-sm-6 col-md-3 col-lg-2\">
                    <a href=\"{{ path('event', {'meetingName': event.name}) }}\" class=\"resultCol\"><h4 class=\"text-center\">{{ event.name }}</h4></a>
                    <ul class=\"list-group\">
                        <li class=\"resultli list-group-item-heading\">Coureur<span class=\"badge\">points</span></li>
                        {% for resultat in results %}
                            {% if resultat.meeting.id == event.id%}
                                {% if app.user is not null %}
                                {% if app.user.athlete.firstname == resultat.athlete.firstname %}
                                <li class=\"row resultli user list-group-item justify-content-between\"><div class=\"divli \">{{resultat.athlete.firstname|title}}
                                        <span class=\"badge\">{% if resultat.points is null%}NotRanYet{% else %}{{resultat.points}}{% endif %}</span></div></li>
                                {% else %}
                                <li class=\"row resultli list-group-item justify-content-between\"><div class=\"divli \">{{resultat.athlete.firstname|title}}<span class=\"badge\">{{resultat.points}}</span></div></li>
                                {% endif %}
                                {% else %}
                                <li class=\"row resultli list-group-item justify-content-between\"><div class=\"divli \">{{resultat.athlete.firstname|title}}<span class=\"badge\">{{resultat.points}}</span></div></li>
                                {% endif %}
                            {% endif %}
                        {%endfor%}
                    </ul>
                    
                </div>
            {% endfor %}
        
    </div>
   {% elseif results is defined %}
       <h1>Global Results</h1>
    <div class=\"container\">
        
            
                    <ul class=\"list-group\">
                        <li class=\"resultli list-group-item-heading\">Coureur<span class=\"badge\">points</span></li>
                        {% for resultat in results %}
                                {% if app.user is not null %}
                                {% if app.user.athlete.firstname == resultat.firstname %}
                                <li class=\"row resultli user list-group-item justify-content-between\"><div class=\"divli \">{{resultat.firstname|title}}
                                        <span class=\"badge\">{% if resultat.total is null%}NotRanYet{% else %}{{resultat.total}}{% endif %}</span></div></li>
                                {% else %}
                                <li class=\"row resultli list-group-item justify-content-between\"><div class=\"divli \">{{resultat.firstname|title}}<span class=\"badge\">{{resultat.total}}</span></div></li>
                                {% endif %}
                                {% else %}
                                <li class=\"row resultli list-group-item justify-content-between\"><div class=\"divli \">{{resultat.firstname|title}}<span class=\"badge\">{{resultat.total}}</span></div></li>
                        {% endif %}
                        {%endfor%}
                    </ul>
                    
                </div>
            
   {% endif %} 
{% endblock %}
", ":default:result.html.twig", "/home/sheelman/Bureau/web/synfony/athletik/app/Resources/views/default/result.html.twig");
    }
}
