<?php

/* partials/post-item.html.twig */
class __TwigTemplate_d738d668c59a2db77688b5a973236e45697322b776369fd8b1d8049c3309c326 extends Twig_Template
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
        echo "<li>
  <a href='";
        // line 2
        echo $this->getAttribute(($context["post"] ?? null), "url", array());
        echo "'>
    <div class=\"post-item-title\">
      <header><!--
      -->";
        // line 5
        echo $this->getAttribute(($context["post"] ?? null), "title", array());
        echo "<!--
      --></header>
      <div class=\"post-item-date\">
          <aside class=\"dates\">";
        // line 8
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", array()), "d");
        echo "
            ";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? null), "date", array()), "n") - 1));
        echo "
          </aside>
      </div>
    </div>
    <h2>";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "header", array()), "headline", array());
        echo "</h2>
  </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "partials/post-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  38 => 9,  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li>
  <a href='{{ post.url }}'>
    <div class=\"post-item-title\">
      <header><!--
      -->{{post.title }}<!--
      --></header>
      <div class=\"post-item-date\">
          <aside class=\"dates\">{{ post.date|date('d') }}
            {{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }}
          </aside>
      </div>
    </div>
    <h2>{{ post.header.headline }}</h2>
  </a>
</li>
", "partials/post-item.html.twig", "/home/ljdm/drconopoima.com/user/themes/cacti/templates/partials/post-item.html.twig");
    }
}
