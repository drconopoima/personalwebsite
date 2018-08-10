<?php

/* partials/profile.html.twig */
class __TwigTemplate_ba630236b1ce1581ab5299a080c383849cd670d4e2c75a1df0c5ff770dc3cece extends Twig_Template
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
        echo "<div class=\"profile\">
    <header id=\"header\">
        ";
        // line 3
        $context["profile"] = $this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/about"), "method");
        // line 4
        echo "        <a href='";
        echo $this->getAttribute(($context["profile"] ?? null), "url", array());
        echo "'>
            <img id=\"avatar\" src=\"";
        // line 5
        echo ($context["avatar_url"] ?? null);
        echo "\"/>
        </a>
        <h1>";
        // line 7
        echo $this->getAttribute(($context["theme_config"] ?? null), "author", array());
        echo "</h1>
        <h2>";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.DESCRIPTION");
        echo "</h2>
    </header>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  35 => 7,  30 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"profile\">
    <header id=\"header\">
        {% set profile = pages.find('/about') %}
        <a href='{{ profile.url }}'>
            <img id=\"avatar\" src=\"{{ avatar_url }}\"/>
        </a>
        <h1>{{ theme_config.author }}</h1>
        <h2>{{ 'SITE.DESCRIPTION'|t }}</h2>
    </header>
</div>
", "partials/profile.html.twig", "/home/ljdm/drconopoima.com/user/themes/cacti/templates/partials/profile.html.twig");
    }
}
