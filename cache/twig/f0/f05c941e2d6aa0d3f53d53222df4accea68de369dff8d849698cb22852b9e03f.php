<?php

/* partials/share.html.twig */
class __TwigTemplate_469583bfc7da9c80070badc0ce474bcfd7d9121fb34de4936e4fe00fab5d4099 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", array()), "twitter", array())) {
            // line 2
            echo "<a class=\"twitter\" href=\"https://twitter.com/intent/tweet?text=";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo " by ";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", array()), "twitter", array());
            echo " - ";
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "\"><span class=\"icon-twitter\"> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("TWEET");
            echo "</span></a>
";
        }
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", array()), "facebook", array())) {
            // line 5
            echo "<a class=\"facebook\" href=\"#\" onclick=\"
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
      'facebook-share-dialog',
      'width=626,height=436');
    return false;\"><span class=\"icon-facebook-rect\"> ";
            // line 10
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SHARE");
            echo "</span>
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  35 => 5,  33 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if theme_config.social.twitter %}
<a class=\"twitter\" href=\"https://twitter.com/intent/tweet?text={{page.title}} by {{ theme_config.social.twitter }} - {{ page.url(true) }}\"><span class=\"icon-twitter\"> {{ 'TWEET'|t }}</span></a>
{% endif %}
{% if theme_config.social.facebook %}
<a class=\"facebook\" href=\"#\" onclick=\"
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
      'facebook-share-dialog',
      'width=626,height=436');
    return false;\"><span class=\"icon-facebook-rect\"> {{ 'SHARE'|t }}</span>
</a>
{% endif %}
", "partials/share.html.twig", "/home/ljdm/drconopoima.com/user/themes/cacti/templates/partials/share.html.twig");
    }
}
