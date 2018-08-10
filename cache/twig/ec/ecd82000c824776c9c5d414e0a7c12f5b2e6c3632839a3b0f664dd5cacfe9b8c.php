<?php

/* login.html.twig */
class __TwigTemplate_2e518d28b8c21878deeacbe460041859e1ea61c9d431304d025dd18130d694c5 extends Twig_Template
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
        // line 1
        $context["user"] = $this->getAttribute(($context["grav"] ?? null), "user", array());
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute(($context["user"] ?? null), "username", array()) && $this->getAttribute(($context["user"] ?? null), "authenticated", array()))) {
            // line 4
            echo "    ";
            if (( !$this->getAttribute(($context["user"] ?? null), "authorized", array()) && $this->getAttribute(($context["user"] ?? null), "twofa_enabled", array()))) {
                // line 5
                echo "        ";
                $this->loadTemplate("partials/login-twofa.html.twig", "login.html.twig", 5)->display($context);
                // line 6
                echo "    ";
            } else {
                // line 7
                echo "        ";
                $this->loadTemplate("partials/login-logout.html.twig", "login.html.twig", 7)->display($context);
                // line 8
                echo "    ";
            }
        } else {
            // line 10
            echo "    ";
            $this->loadTemplate("partials/login-form.html.twig", "login.html.twig", 10)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  38 => 8,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set user = grav.user %}

{% if user.username and user.authenticated %}
    {% if not user.authorized and user.twofa_enabled %}
        {% include 'partials/login-twofa.html.twig' %}
    {% else %}
        {% include 'partials/login-logout.html.twig' %}
    {% endif %}
{% else %}
    {% include 'partials/login-form.html.twig' %}
{% endif %}", "login.html.twig", "/home/ljdm/drconopoima.com/user/plugins/admin/themes/grav/templates/login.html.twig");
    }
}
