<?php

/* partials/langswitcher.html.twig */
class __TwigTemplate_583f700ddb53fb103bbc69641f59e7e5a98dadaf9167e4439c3683a1c61984a7 extends Twig_Template
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
        echo "<ul class=\"langswitcher\" style=\"z-index:1010 !important;\">
  <div class=\"col-3 col-tb-5 col-st-8 col-mb-12\" id=\"laguange-selector\">
    <script>
      function setCookieLocale(key, domain, url) {
        var date = new Date();
        date.setTime(date.getTime() + (14 * 86400 * 1000));
        var expires = \"; expires=\" + date.toGMTString();
        document.cookie = '__LOCALE__=' + key + '; path=/ ;' + expires + '; domain=' + domain;
        //location.reload(url);
        location.replace(url);
      }
    </script>

    <!-- Bootstrap to get a more pleasant language selector -->

    <div class=\"dropdown\">

      <!-- Print the active language as the first element of the selector -->

      ";
        // line 20
        $context["flag_icon"] = "[color=white][fa=fa-flag /][/color]";
        // line 21
        echo "
      <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"languageSelector\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          ";
        // line 23
        echo call_user_func_array($this->env->getFilter('shortcodes')->getCallable(), array(($context["flag_icon"] ?? null)));
        echo "
 ";
        // line 24
        echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array()))));
        echo "
        </button>

      <!-- Important to start the dropdown list of language options before adding each of the extra languages -->

      <div class=\"dropdown-menu\" aria-labelledby=\"languageSelector\">

        <!-- Print the rest of the languages in the selector -->

        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["langswitcher"] ?? null), "languages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 34
            echo "          ";
            $context["show_language"] = true;
            // line 35
            echo "          ";
            if (($context["language"] != $this->getAttribute(($context["langswitcher"] ?? null), "current", array()))) {
                // line 36
                echo "            ";
                $context["base_lang_url"] = (($context["base_url_simple"] ?? null) . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguageURLPrefix", array(0 => $context["language"]), "method"));
                // line 37
                echo "            ";
                $context["lang_url"] = ((($context["base_lang_url"] ?? null) . $this->getAttribute(($context["langswitcher"] ?? null), "page_route", array())) . $this->getAttribute(                // line 38
($context["page"] ?? null), "urlExtension", array()));
                // line 39
                echo "            ";
                $context["untranslated_pages_behavior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "langswitcher", array()), "untranslated_pages_behavior", array());
                // line 40
                echo "            ";
                if ((($context["untranslated_pages_behavior"] ?? null) != "none")) {
                    // line 41
                    echo "              ";
                    $context["translated_page"] = $this->getAttribute($this->getAttribute(($context["langswitcher"] ?? null), "translated_pages", array()), $context["language"], array(), "array");
                    // line 42
                    echo "              ";
                    if (( !                    // line 43
($context["translated_page"] ?? null) ||  !$this->getAttribute(($context["translated_page"] ?? null), "published", array()))) {
                        // line 44
                        echo "                ";
                        if ((($context["untranslated_pages_behavior"] ?? null) == "redirect")) {
                            // line 45
                            echo "                  ";
                            $context["lang_url"] = (($context["base_lang_url"] ?? null) . "/");
                            // line 46
                            echo "                ";
                        } elseif ((($context["untranslated_pages_behavior"] ?? null) == "hide")) {
                            // line 47
                            echo "                  ";
                            $context["show_language"] = false;
                            // line 48
                            echo "                ";
                        }
                        // line 50
                        echo "              ";
                    }
                    // line 51
                    echo "            ";
                }
                // line 52
                echo "          ";
                if (($context["show_language"] ?? null)) {
                    // line 53
                    echo "        <a class=\"dropdown-item\" href=\"";
                    echo (($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", array()));
                    echo "\" data-current=\"";
                    echo $this->getAttribute(($context["langswitcher"] ?? null), "current", array());
                    echo "\" style=\"padding-left:12px;\">
          <span class=\"flag-icon flag-icon-";
                    // line 54
                    echo $context["language"];
                    echo "\"></span> ";
                    echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($context["language"])));
                    echo "</a>
        <!--<option value=\"";
                    // line 55
                    echo $context["language"];
                    echo "\" data-current=\"";
                    echo $this->getAttribute(($context["langswitcher"] ?? null), "current", array());
                    echo "\" data-params=\"";
                    echo (($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", array()));
                    echo "\">";
                    echo twig_capitalize_string_filter($this->env, call_user_func_array($this->env->getFunction('native_name')->getCallable(), array($context["language"])));
                    echo "</option>-->
          ";
                }
                // line 57
                echo "        ";
            }
            // line 58
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "      </div>
    </div>
  </div>
</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/langswitcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 59,  143 => 58,  140 => 57,  129 => 55,  123 => 54,  116 => 53,  113 => 52,  110 => 51,  107 => 50,  104 => 48,  101 => 47,  98 => 46,  95 => 45,  92 => 44,  90 => 43,  88 => 42,  85 => 41,  82 => 40,  79 => 39,  77 => 38,  75 => 37,  72 => 36,  69 => 35,  66 => 34,  62 => 33,  50 => 24,  46 => 23,  42 => 21,  40 => 20,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"langswitcher\" style=\"z-index:1010 !important;\">
  <div class=\"col-3 col-tb-5 col-st-8 col-mb-12\" id=\"laguange-selector\">
    <script>
      function setCookieLocale(key, domain, url) {
        var date = new Date();
        date.setTime(date.getTime() + (14 * 86400 * 1000));
        var expires = \"; expires=\" + date.toGMTString();
        document.cookie = '__LOCALE__=' + key + '; path=/ ;' + expires + '; domain=' + domain;
        //location.reload(url);
        location.replace(url);
      }
    </script>

    <!-- Bootstrap to get a more pleasant language selector -->

    <div class=\"dropdown\">

      <!-- Print the active language as the first element of the selector -->

      {% set flag_icon = \"[color=white][fa=fa-flag /][/color]\" %}

      <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"languageSelector\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          {{ flag_icon|shortcodes }}
 {{ native_name(grav.language.getLanguage)|capitalize }}
        </button>

      <!-- Important to start the dropdown list of language options before adding each of the extra languages -->

      <div class=\"dropdown-menu\" aria-labelledby=\"languageSelector\">

        <!-- Print the rest of the languages in the selector -->

        {% for language in langswitcher.languages %}
          {% set show_language = true %}
          {% if language != langswitcher.current %}
            {% set base_lang_url = base_url_simple ~ grav.language.getLanguageURLPrefix(language) %}
            {% set lang_url = base_lang_url ~ langswitcher.page_route
        ~ page.urlExtension %}
            {% set untranslated_pages_behavior = grav.config.plugins.langswitcher.untranslated_pages_behavior %}
            {% if untranslated_pages_behavior != 'none' %}
              {% set translated_page = langswitcher.translated_pages[language] %}
              {% if
        (not translated_page) or (not translated_page.published) %}
                {% if untranslated_pages_behavior == 'redirect' %}
                  {% set lang_url = base_lang_url ~ '/' %}
                {% elseif untranslated_pages_behavior == 'hide' %}
                  {% set show_language = false %}
                {% endif
        %}
              {% endif %}
            {% endif %}
          {% if show_language %}
        <a class=\"dropdown-item\" href=\"{{ lang_url ~ uri.params }}\" data-current=\"{{ langswitcher.current }}\" style=\"padding-left:12px;\">
          <span class=\"flag-icon flag-icon-{{ language }}\"></span> {{ native_name(language)|capitalize }}</a>
        <!--<option value=\"{{ language }}\" data-current=\"{{ langswitcher.current }}\" data-params=\"{{ lang_url ~ uri.params }}\">{{ native_name(language)|capitalize }}</option>-->
          {% endif %}
        {% endif %}
      {% endfor %}
      </div>
    </div>
  </div>
</ul>
", "partials/langswitcher.html.twig", "/home/ljdm/drconopoima.com/user/themes/cacti/templates/partials/langswitcher.html.twig");
    }
}
