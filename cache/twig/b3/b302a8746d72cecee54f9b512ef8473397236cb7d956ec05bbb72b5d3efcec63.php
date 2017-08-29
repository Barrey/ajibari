<?php

/* partials/base.html.twig */
class __TwigTemplate_ffd003cf4e1508c0c09b729cb309c09a5308567a8d9c78f30a90a54877a5e729 extends Twig_Template
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
        $context["avatar_url"] = (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/about"), "method"), "media", array()), "images", array())), "url", array())) ? ($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", array(0 => "/about"), "method"), "media", array()), "images", array())), "url", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/avatar.png")));
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

  <title>";
        // line 11
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.TITLE"), "html");
        echo "</title>
  <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico");
        echo "\" />
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"My Blog\" href=\"/rss.xml\">
  ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

  ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

  ";
        // line 27
        $this->loadTemplate("partials/script.html.twig", "partials/base.html.twig", 27)->display($context);
        // line 28
        echo "
</head>
<body>

    ";
        // line 32
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 32)->display($context);
        // line 33
        echo "
    <section id=\"wrapper\">
        ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 40
        echo "
        <div class=\"";
        // line 41
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
        ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "        </div>

        ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "    </section>

    ";
        // line 50
        if ($this->getAttribute(($context["site"] ?? null), "analytics", array())) {
            // line 51
            echo "    ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 51)->display($context);
            // line 52
            echo "    ";
        }
        // line 53
        echo "</body>
</html>
";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css", 1 => 100), "method");
        // line 16
        echo "    ";
        $this->loadTemplate("partials/css.html.twig", "partials/base.html.twig", 16)->display($context);
        // line 17
        echo "  ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 22
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/main.js", 1 => 100), "method");
        // line 23
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.jscroll.min.js"), "method");
        // line 24
        echo "  ";
    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        // line 36
        echo "            ";
        if (( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header", array()) === false) && $this->getAttribute(($context["theme_config"] ?? null), "title_header", array()))) {
            // line 37
            echo "                ";
            $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 37)->display($context);
            // line 38
            echo "            ";
        }
        // line 39
        echo "        ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
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
        return array (  176 => 47,  173 => 46,  170 => 45,  165 => 42,  161 => 39,  158 => 38,  155 => 37,  152 => 36,  149 => 35,  145 => 24,  142 => 23,  139 => 22,  136 => 21,  133 => 20,  129 => 17,  126 => 16,  123 => 15,  120 => 14,  114 => 53,  111 => 52,  108 => 51,  106 => 50,  102 => 48,  100 => 45,  96 => 43,  94 => 42,  90 => 41,  87 => 40,  85 => 35,  81 => 33,  79 => 32,  73 => 28,  71 => 27,  65 => 25,  63 => 20,  57 => 18,  55 => 14,  50 => 12,  42 => 11,  33 => 5,  30 => 4,  28 => 3,  26 => 2,  24 => 1,);
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
{% set avatar_url = pages.find('/about').media.images|first.url ?: url('theme://images/avatar.png') %}
{% import 'macros/dates.twig' as dates %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ 'SITE.TITLE'|t|e('html') }}</title>
  <link rel=\"shortcut icon\" href=\"{{ url('theme://images/favicon.ico') }}\" />
  <link rel=\"alternate\" type=\"application/rss+xml\" title=\"My Blog\" href=\"/rss.xml\">
  {% block stylesheets %}
    {% do assets.addCss('theme://css/style.css',100) %}
    {% include 'partials/css.html.twig' %}
  {% endblock %}
  {{ assets.css() }}

  {% block javascripts %}
      {% do assets.addJs('jquery',101) %}
      {% do assets.addJs('theme://js/main.js',100) %}
      {% do assets.addJs('theme://js/jquery.jscroll.min.js') %}
  {% endblock %}
  {{ assets.js() }}

  {% include 'partials/script.html.twig' %}

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
", "partials/base.html.twig", "C:\\xampp7\\htdocs\\ajibari.com\\user\\themes\\cacti\\templates\\partials\\base.html.twig");
    }
}
