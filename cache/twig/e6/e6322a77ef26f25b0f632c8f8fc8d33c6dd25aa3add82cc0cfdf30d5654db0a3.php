<?php

/* partials/base.html.twig */
class __TwigTemplate_f6a8b4582ec28528dfbe9aaa7826c4f921d92ec8de8694b0786197f3c278d737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        $context["avatar_url"] = (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/about"), "method"), "media", array()), "images", array())), "url", array())) ? ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/about"), "method"), "media", array()), "images", array())), "url", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/avatar.jpeg")));
        // line 3
        $context["dates"] = $this->loadTemplate("macros/dates.twig", "partials/base.html.twig", 3);
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- GSuite verification meta tag -->

  <meta name=\"google-site-verification\" content=\"n5M1DPRm-A2KJMNBO0AtBExlJ5c6PGAJYqg_0EAxxlE\" />

  <title>";
        // line 15
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE"), "html");
        echo "</title>
  <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico");
        echo "\" />
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"DrConopoima\" href=\"/rss.xml\">
  ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

  ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
</head>
<body>

    ";
        // line 34
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 34)->display($context);
        // line 35
        echo "
    <section id=\"wrapper\">
        ";
        // line 37
        $this->displayBlock('header', $context, $blocks);
        // line 42
        echo "
        <div class=\"";
        // line 43
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
        ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "        </div>

        ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "    </section>

    ";
        // line 52
        if ($this->getAttribute(($context["site"] ?? null), "analytics", array())) {
            // line 53
            echo "    ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 53)->display($context);
            // line 54
            echo "    ";
        }
        // line 55
        echo "</body>
</html>
";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css", 1 => 100), "method");
        // line 20
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/flag-icon.min.css", 1 => 100), "method");
        // line 21
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 22
        echo "  ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 27
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/main.js", 1 => 100), "method");
        // line 28
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.jscroll.min.js"), "method");
        // line 29
        echo "  ";
    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        // line 38
        echo "            ";
        if (( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header", array()) === false) && $this->getAttribute(($context["theme_config"] ?? null), "title_header", array()))) {
            // line 39
            echo "                ";
            $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 39)->display($context);
            // line 40
            echo "            ";
        }
        // line 41
        echo "        ";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 49,  174 => 48,  171 => 47,  166 => 44,  162 => 41,  159 => 40,  156 => 39,  153 => 38,  150 => 37,  146 => 29,  143 => 28,  140 => 27,  137 => 26,  134 => 25,  130 => 22,  127 => 21,  124 => 20,  121 => 19,  118 => 18,  112 => 55,  109 => 54,  106 => 53,  104 => 52,  100 => 50,  98 => 47,  94 => 45,  92 => 44,  88 => 43,  85 => 42,  83 => 37,  79 => 35,  77 => 34,  69 => 30,  67 => 25,  61 => 23,  59 => 18,  54 => 16,  46 => 15,  33 => 5,  30 => 4,  28 => 3,  26 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set avatar_url = pages.find('/about').media.images|first.url ?: url('theme://images/avatar.jpeg') %}
{% import 'macros/dates.twig' as dates %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- GSuite verification meta tag -->

  <meta name=\"google-site-verification\" content=\"n5M1DPRm-A2KJMNBO0AtBExlJ5c6PGAJYqg_0EAxxlE\" />

  <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ 'SITE.TITLE'|t|e('html') }}</title>
  <link rel=\"shortcut icon\" href=\"{{ url('theme://images/favicon.ico') }}\" />
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"DrConopoima\" href=\"/rss.xml\">
  {% block stylesheets %}
    {% do assets.addCss('theme://css/style.css',100) %}
    {% do assets.addCss('theme://css/flag-icon.min.css',100) %}
    {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
  {% endblock %}
  {{ assets.css() }}

  {% block javascripts %}
      {% do assets.addJs('jquery',101) %}
      {% do assets.addJs('theme://js/main.js',100) %}
      {% do assets.addJs('theme://js/jquery.jscroll.min.js') %}
  {% endblock %}
  {{ assets.js() }}
</head>
<body>

    {% include 'partials/navigation.html.twig' %}

    <section id=\"wrapper\">
        {% block header %}
            {% if page.header.header is not same as(false) and theme_config.title_header %}
                {% include 'partials/header.html.twig' %}
            {% endif %}
        {% endblock %}

        <div class=\"{{ page.header.class }}\">
        {% block content %}{% endblock %}
        </div>

        {% block footer %}
        {% include 'partials/footer.html.twig' %}
        {% endblock %}
    </section>

    {% if site.analytics %}
    {% include 'partials/analytics.html.twig' %}
    {% endif %}
</body>
</html>
", "partials/base.html.twig", "/home/ljdm/drconopoima.com/user/themes/cacti/templates/partials/base.html.twig");
    }
}
