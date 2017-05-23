<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_ffab4fe71e2b0cf473a559b1ba1068887a850394d12807a695c645f3521abb89 extends Twig_Template
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
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", array()) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", array()) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", array()))) : ($this->getAttribute(($context["blog"] ?? null), "url", array())));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", array()) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", array())));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 5
            echo "<div class=\"sidebar-content\">
    <h4>SimpleSearch</h4>
    ";
            // line 7
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 7)->display($context);
            // line 8
            echo "</div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "twigfeeds", array()), "enabled", array())) {
            // line 12
            echo "<div class=\"sidebar-content\">
<h4>Stream</h4>

";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["twig_feeds"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["feed"]) {
                // line 16
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["feed"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 17
                    echo "        <p>
            <a href=\"";
                    // line 18
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a>
        </p>
              <time>";
                    // line 20
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nicetimeFilter($this->getAttribute($this->getAttribute($context["item"], "date", array()), "date", array()), false);
                    echo "</time>

    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['feed'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 29
            echo "<div class=\"sidebar-content syndicate\">
<!-- 
    <h4>Subscribe</h4>
 -->
    <a class=\"button\" href=\"";
            // line 33
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 34
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 34,  96 => 33,  90 => 29,  88 => 28,  85 => 27,  80 => 24,  67 => 20,  60 => 18,  57 => 17,  52 => 16,  48 => 15,  43 => 12,  41 => 11,  38 => 10,  34 => 8,  32 => 7,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% if config.plugins.simplesearch.enabled %}
<div class=\"sidebar-content\">
    <h4>SimpleSearch</h4>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}

{% if config.plugins.twigfeeds.enabled %}
<div class=\"sidebar-content\">
<h4>Stream</h4>

{% for name, feed in twig_feeds %}
    {% for item in feed.items %}
        <p>
            <a href=\"{{ item.url }}\">{{ item.title }}</a>
        </p>
              <time>{{ item.date.date|nicetime(false) }}</time>

    {% endfor %}
{% endfor %}

</div>
{% endif %}

{% if config.plugins.feed.enabled %}
<div class=\"sidebar-content syndicate\">
<!-- 
    <h4>Subscribe</h4>
 -->
    <a class=\"button\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</div>
{% endif %}", "partials/sidebar.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/mytheme/templates/partials/sidebar.html.twig");
    }
}
