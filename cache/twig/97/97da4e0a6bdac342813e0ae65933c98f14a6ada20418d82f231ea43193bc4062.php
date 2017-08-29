<?php

/* partials/share.html.twig */
class __TwigTemplate_4dd01cdab16702feb5940c2fa596a25b75130e3bffa611126dcb6ec2667053a8 extends Twig_Template
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
            echo "\" title=\"Twitter Share\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
";
        }
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", array()), "facebook", array())) {
            // line 5
            echo " <a class=\"facebook\" href=\"#\" onclick=\"
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
      'facebook-share-dialog',
      'width=626,height=436');
    return false;\" title=\"Facebook Share\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
</a>
";
        }
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", array()), "linkedin", array())) {
            // line 14
            echo "\t<a class=\"linkedin share\" href=\"https://www.linkedin.com/shareArticle?mini=true&url=";
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "&title=";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "\" title=\"Linkedin Share\" target=\"_blank\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
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
        return array (  45 => 14,  43 => 13,  33 => 5,  31 => 4,  21 => 2,  19 => 1,);
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
<a class=\"twitter\" href=\"https://twitter.com/intent/tweet?text={{page.title}} by {{ theme_config.social.twitter }} - {{ page.url(true) }}\" title=\"Twitter Share\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
{% endif %}
{% if theme_config.social.facebook %}
 <a class=\"facebook\" href=\"#\" onclick=\"
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
      'facebook-share-dialog',
      'width=626,height=436');
    return false;\" title=\"Facebook Share\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
</a>
{% endif %}
{% if theme_config.social.linkedin %}
\t<a class=\"linkedin share\" href=\"https://www.linkedin.com/shareArticle?mini=true&url={{ page.url(true) }}&title={{page.title}}\" title=\"Linkedin Share\" target=\"_blank\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
{% endif %}", "partials/share.html.twig", "C:\\xampp7\\htdocs\\ajibari.com\\user\\themes\\cacti\\templates\\partials\\share.html.twig");
    }
}
