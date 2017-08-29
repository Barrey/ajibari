<?php

/* post.html.twig */
class __TwigTemplate_e465ef9f9373e0fb46b0391612036256a4dcd5f8f0be21d6a5d38ba71457b7d1 extends Twig_Template
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
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "1407642513")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% block content %}
    <article class=\"post\">
        <header>
            <h1>{{ page.title }}</h1>
            <h2 class=\"headline\">{{ 'MONTHS_OF_THE_YEAR'|ta(page.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}</h2>
        </header>
        <section id=\"post-body\">
            {{ page.content }}
        </section>
    </article>
    <footer id=\"post-meta\" class=\"clearfix\">
        <a href=\"http://twitter.com/{{ theme_config.social.twitter|trim('@') }}\">
            <img class=\"avatar\" src=\"{{ avatar_url }}\">
            <div>
                <span class=\"dark\">{{ theme_config.author }}</span>
                <span>{{ 'SITE.DESCRIPTION'|t }}</span>
            </div>
        </a>

        <section id=\"sharing\">
            {% include 'partials/share.html.twig' %}
        </section>
    </footer>

    <nav id=\"post-nav\">
        {% if not page.isFirst %}
        <span class=\"prev\">
            <a href=\"{{ page.nextSibling.url }}\"><span class=\"arrow\">←</span> {{ page.nextSibling.title }}</a>
        </span>
        {% endif %}

        {% if not page.isLast %}
        <span class=\"next\">
            <a href=\"{{ page.prevSibling.url }}\">{{ page.prevSibling.title }} <span class=\"arrow\">→</span></a>
        </span>
        {% endif %}
    </nav>


    <!-- Disqus comments -->
    {% if page.header.disqus %}
        <div class=\"archive readmore\">
            <h3>Comments</h3>
            {% include 'partials/disqus.html.twig' %}
        </div>
    {% endif %}

    <!-- Archive post list -->
    {% if page.header.archive %}
        <ul id=\"post-list\" class=\"archive readmore\">
            <h3>Read more</h3>
            {% for post in site.posts %}
                <li>
                    <a href=\"{{ post.url }}\">{{ post.title }}<aside class=\"dates\">{{ post.date|date(\"M d\")  }}</aside></a>
                </li>
            {% endfor %}
        </ul>
    {% endif %}

    {% endblock %}


{% endembed %}
", "post.html.twig", "C:\\xampp7\\htdocs\\ajibari.com\\user\\themes\\cacti\\templates\\post.html.twig");
    }
}


/* post.html.twig */
class __TwigTemplate_e465ef9f9373e0fb46b0391612036256a4dcd5f8f0be21d6a5d38ba71457b7d1_1407642513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <article class=\"post\">
        <header>
            <h1>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
            <h2 class=\"headline\">";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "n") - 1));
        echo " ";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d, Y");
        echo "</h2>
        </header>
        <section id=\"post-body\">
            ";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        </section>
    </article>
    <footer id=\"post-meta\" class=\"clearfix\">
        <a href=\"http://twitter.com/";
        // line 14
        echo twig_trim_filter($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", array()), "twitter", array()), "@");
        echo "\">
            <img class=\"avatar\" src=\"";
        // line 15
        echo ($context["avatar_url"] ?? null);
        echo "\">
            <div>
                <span class=\"dark\">";
        // line 17
        echo $this->getAttribute(($context["theme_config"] ?? null), "author", array());
        echo "</span>
                <span>";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SITE.DESCRIPTION");
        echo "</span>
            </div>
        </a>

        <section id=\"sharing\">
            ";
        // line 23
        $this->loadTemplate("partials/share.html.twig", "post.html.twig", 23)->display($context);
        // line 24
        echo "        </section>
    </footer>

    <nav id=\"post-nav\">
        ";
        // line 28
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
            // line 29
            echo "        <span class=\"prev\">
            <a href=\"";
            // line 30
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
            echo "\"><span class=\"arrow\">←</span> ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "title", array());
            echo "</a>
        </span>
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
            // line 35
            echo "        <span class=\"next\">
            <a href=\"";
            // line 36
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "title", array());
            echo " <span class=\"arrow\">→</span></a>
        </span>
        ";
        }
        // line 39
        echo "    </nav>


    <!-- Disqus comments -->
    ";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "disqus", array())) {
            // line 44
            echo "        <div class=\"archive readmore\">
            <h3>Comments</h3>
            ";
            // line 46
            $this->loadTemplate("partials/disqus.html.twig", "post.html.twig", 46)->display($context);
            // line 47
            echo "        </div>
    ";
        }
        // line 49
        echo "
    <!-- Archive post list -->
    ";
        // line 51
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "archive", array())) {
            // line 52
            echo "        <ul id=\"post-list\" class=\"archive readmore\">
            <h3>Read more</h3>
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "posts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 55
                echo "                <li>
                    <a href=\"";
                // line 56
                echo $this->getAttribute($context["post"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["post"], "title", array());
                echo "<aside class=\"dates\">";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "M d");
                echo "</aside></a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </ul>
    ";
        }
        // line 61
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 61,  268 => 59,  255 => 56,  252 => 55,  248 => 54,  244 => 52,  242 => 51,  238 => 49,  234 => 47,  232 => 46,  228 => 44,  226 => 43,  220 => 39,  212 => 36,  209 => 35,  207 => 34,  204 => 33,  196 => 30,  193 => 29,  191 => 28,  185 => 24,  183 => 23,  175 => 18,  171 => 17,  166 => 15,  162 => 14,  155 => 10,  147 => 7,  143 => 6,  139 => 4,  136 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% block content %}
    <article class=\"post\">
        <header>
            <h1>{{ page.title }}</h1>
            <h2 class=\"headline\">{{ 'MONTHS_OF_THE_YEAR'|ta(page.date|date('n') - 1) }} {{ page.date|date(\"d, Y\") }}</h2>
        </header>
        <section id=\"post-body\">
            {{ page.content }}
        </section>
    </article>
    <footer id=\"post-meta\" class=\"clearfix\">
        <a href=\"http://twitter.com/{{ theme_config.social.twitter|trim('@') }}\">
            <img class=\"avatar\" src=\"{{ avatar_url }}\">
            <div>
                <span class=\"dark\">{{ theme_config.author }}</span>
                <span>{{ 'SITE.DESCRIPTION'|t }}</span>
            </div>
        </a>

        <section id=\"sharing\">
            {% include 'partials/share.html.twig' %}
        </section>
    </footer>

    <nav id=\"post-nav\">
        {% if not page.isFirst %}
        <span class=\"prev\">
            <a href=\"{{ page.nextSibling.url }}\"><span class=\"arrow\">←</span> {{ page.nextSibling.title }}</a>
        </span>
        {% endif %}

        {% if not page.isLast %}
        <span class=\"next\">
            <a href=\"{{ page.prevSibling.url }}\">{{ page.prevSibling.title }} <span class=\"arrow\">→</span></a>
        </span>
        {% endif %}
    </nav>


    <!-- Disqus comments -->
    {% if page.header.disqus %}
        <div class=\"archive readmore\">
            <h3>Comments</h3>
            {% include 'partials/disqus.html.twig' %}
        </div>
    {% endif %}

    <!-- Archive post list -->
    {% if page.header.archive %}
        <ul id=\"post-list\" class=\"archive readmore\">
            <h3>Read more</h3>
            {% for post in site.posts %}
                <li>
                    <a href=\"{{ post.url }}\">{{ post.title }}<aside class=\"dates\">{{ post.date|date(\"M d\")  }}</aside></a>
                </li>
            {% endfor %}
        </ul>
    {% endif %}

    {% endblock %}


{% endembed %}
", "post.html.twig", "C:\\xampp7\\htdocs\\ajibari.com\\user\\themes\\cacti\\templates\\post.html.twig");
    }
}
