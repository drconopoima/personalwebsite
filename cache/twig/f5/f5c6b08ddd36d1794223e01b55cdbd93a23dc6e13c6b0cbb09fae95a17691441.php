<?php

/* post-list.html.twig */
class __TwigTemplate_8cd52f0dd1d65a8742cbbfb55364e6cc9136abeae391f3f233e110d758395e76 extends Twig_Template
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
        $this->loadTemplate("post-list.html.twig", "post-list.html.twig", 1, "1840927162")->display($context);
    }

    public function getTemplateName()
    {
        return "post-list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection %}
    {% set pagination = collection.params.pagination %}

    {% set jscroll_init %}
    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    {% endset %}

    {% block javascripts %}
        {{ parent() }}
        {% do assets.addInlineJs(jscroll_init) %}
    {% endblock %}

    {% block header %}
        {% if theme_config.home_profile %}
            {% include 'partials/profile.html.twig' %}
        {% else %}
            {{ parent() }}
        {% endif %}
    {% endblock %}

    {% block content %}
    <hgroup>
      <ul id=\"post-list\" class=\"infinite-scroll\">
          {% for post in collection %}
            {% include 'partials/post-item.html.twig' %}
            {% endfor %}
          {% if config.plugins.pagination.enabled and collection.params.pagination %}
              {% include 'partials/load-more.html.twig' %}
          {% endif %}
      </ul>
    </hgroup>

    {% endblock %}

{% endembed %}
", "post-list.html.twig", "/home/ljdm/drconopoima.com/user/themes/cacti/templates/post-list.html.twig");
    }
}


/* post-list.html.twig */
class __TwigTemplate_8cd52f0dd1d65a8742cbbfb55364e6cc9136abeae391f3f233e110d758395e76_1840927162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post-list.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array());
        // line 4
        $context["pagination"] = $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array());
        // line 6
        $context["jscroll_init"] = ('' === $tmp = "    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", array(0 => ($context["jscroll_init"] ?? null)), "method");
        // line 18
        echo "    ";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "home_profile", array())) {
            // line 22
            echo "            ";
            $this->loadTemplate("partials/profile.html.twig", "post-list.html.twig", 22)->display($context);
            // line 23
            echo "        ";
        } else {
            // line 24
            echo "            ";
            $this->displayParentBlock("header", $context, $blocks);
            echo "
        ";
        }
        // line 26
        echo "    ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "    <hgroup>
      <ul id=\"post-list\" class=\"infinite-scroll\">
          ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 32
            echo "            ";
            $this->loadTemplate("partials/post-item.html.twig", "post-list.html.twig", 32)->display($context);
            // line 33
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "          ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 35
            echo "              ";
            $this->loadTemplate("partials/load-more.html.twig", "post-list.html.twig", 35)->display($context);
            // line 36
            echo "          ";
        }
        // line 37
        echo "      </ul>
    </hgroup>

    ";
    }

    public function getTemplateName()
    {
        return "post-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 37,  211 => 36,  208 => 35,  205 => 34,  191 => 33,  188 => 32,  171 => 31,  167 => 29,  164 => 28,  160 => 26,  154 => 24,  151 => 23,  148 => 22,  145 => 21,  142 => 20,  138 => 18,  136 => 17,  131 => 16,  128 => 15,  124 => 1,  116 => 6,  114 => 4,  112 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection %}
    {% set pagination = collection.params.pagination %}

    {% set jscroll_init %}
    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    {% endset %}

    {% block javascripts %}
        {{ parent() }}
        {% do assets.addInlineJs(jscroll_init) %}
    {% endblock %}

    {% block header %}
        {% if theme_config.home_profile %}
            {% include 'partials/profile.html.twig' %}
        {% else %}
            {{ parent() }}
        {% endif %}
    {% endblock %}

    {% block content %}
    <hgroup>
      <ul id=\"post-list\" class=\"infinite-scroll\">
          {% for post in collection %}
            {% include 'partials/post-item.html.twig' %}
            {% endfor %}
          {% if config.plugins.pagination.enabled and collection.params.pagination %}
              {% include 'partials/load-more.html.twig' %}
          {% endif %}
      </ul>
    </hgroup>

    {% endblock %}

{% endembed %}
", "post-list.html.twig", "/home/ljdm/drconopoima.com/user/themes/cacti/templates/post-list.html.twig");
    }
}
