<?php

/* partials/load-more.html.twig */
class __TwigTemplate_9fac6711620703cee7b20ea5613d767fefa32a7b558047d73cac35c42557a9da extends Twig_Template
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
        if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", array())) {
            // line 2
            echo "    <div class=\"next\"><a rel=\"next\" href=\"";
            echo ($context["base_url"] ?? null);
            echo "/tmpl:infinite";
            echo $this->getAttribute(($context["pagination"] ?? null), "params", array());
            echo $this->getAttribute(($context["pagination"] ?? null), "nextUrl", array());
            echo "\">Load More...</a></div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/load-more.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pagination.hasNext %}
    <div class=\"next\"><a rel=\"next\" href=\"{{ base_url }}/tmpl:infinite{{ pagination.params }}{{ pagination.nextUrl }}\">Load More...</a></div>
{% endif %}
", "partials/load-more.html.twig", "/home/ljdm/drconopoima.com/user/themes/cacti/templates/partials/load-more.html.twig");
    }
}
