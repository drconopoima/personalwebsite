<?php

/* partials/navigation.html.twig */
class __TwigTemplate_3578311093582036e6daec8280cd1f16f250e11a59cab6817341739e3ba1cd59 extends Twig_Template
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
        echo "<section id=\"navigation\">

    <nav class=\"main-nav\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            echo "            ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 6
            echo "            <a class=\"";
            echo ($context["current_page"] ?? null);
            echo "\" href=\"";
            echo $this->getAttribute($context["page"], "url", array());
            echo "\">
                ";
            // line 7
            if ($this->getAttribute($context["page"], "home", array())) {
                echo "<span class=\"arrow\">←</span> ";
            }
            // line 8
            echo "                ";
            if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                echo "\"></i>";
            }
            // line 9
            echo "                ";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        <!-- Begin MailChimp Signup Form -->
        <a href=\"https://drconopoima.us19.list-manage.com/subscribe/post?u=d4b59a3bfa0a927fa5d50b3b7&amp;id=3d84824274\" class=\"btn btn-primary text-white\"  name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"button\">";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SUBSCRIBE");
        echo "
        </a>

        <!--End mc_embed_signup-->
    </nav>
    ";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 19
            echo "        ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/navigation.html.twig", 19)->display($context);
            // line 20
            echo "    ";
        }
        // line 21
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  75 => 20,  72 => 19,  70 => 18,  62 => 13,  59 => 12,  49 => 9,  42 => 8,  38 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navigation\">

    <nav class=\"main-nav\">
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <a class=\"{{ current_page }}\" href=\"{{ page.url }}\">
                {% if page.home %}<span class=\"arrow\">←</span> {% endif %}
                {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                {{ page.menu }}
            </a>
        {% endfor %}
        <!-- Begin MailChimp Signup Form -->
        <a href=\"https://drconopoima.us19.list-manage.com/subscribe/post?u=d4b59a3bfa0a927fa5d50b3b7&amp;id=3d84824274\" class=\"btn btn-primary text-white\"  name=\"subscribe\" id=\"mc-embedded-subscribe\" class=\"button\">{{ 'SUBSCRIBE'|t }}
        </a>

        <!--End mc_embed_signup-->
    </nav>
    {% if config.plugins.langswitcher.enabled %}
        {% include 'partials/langswitcher.html.twig' %}
    {% endif %}
</section>
", "partials/navigation.html.twig", "/home/ljdm/drconopoima.com/user/themes/cacti/templates/partials/navigation.html.twig");
    }
}
