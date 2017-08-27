<?php

/* partials/css.html.twig */
class __TwigTemplate_2bfb42397ff4e4bd338d0c62bf5ced308ab574df25b9a0b49108a34bd065bdb9 extends Twig_Template
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
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://fonts/font-awesome-4.7.0/css/font-awesome.css", 1 => 100), "method");
        // line 2
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
    }

    public function getTemplateName()
    {
        return "partials/css.html.twig";
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
        return new Twig_Source("{% do assets.addCss('theme://fonts/font-awesome-4.7.0/css/font-awesome.css',100) %}
{% do assets.addCss('theme://css/custom.css',100) %}
", "partials/css.html.twig", "C:\\xampp7\\htdocs\\ajibari.com\\user\\themes\\cacti\\templates\\partials\\css.html.twig");
    }
}
