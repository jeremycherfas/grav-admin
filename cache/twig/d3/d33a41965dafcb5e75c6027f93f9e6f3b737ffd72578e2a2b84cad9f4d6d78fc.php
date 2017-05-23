<?php

/* item.html.twig */
class __TwigTemplate_4a556b8255375fc6b646285d06d9442ac09b96979b8be5848f30fa24e646869a extends Twig_Template
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
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "599633049")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
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

\t{% block content %}
\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}
\t\t
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}

<!--
Added for webmentions
-->

\t{% if config.plugins.webmention.enabled %}
\t\t {% include 'partials/webmention.html.twig' with {'page': page} %}
\t{% endif %}\t

<!-- 
Added for comments
 -->

\t{% if config.plugins.comments.enabled %}\t\t\t    
\t\t {% include 'partials/comments.html.twig' with {'page': page} %}
\t{% endif %}
\t
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/mytheme/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_4a556b8255375fc6b646285d06d9442ac09b96979b8be5848f30fa24e646869a_599633049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
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
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 5
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 5)->display($context);
            // line 6
            echo "\t\t";
        }
        // line 7
        echo "\t\t
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3\">
\t\t\t    ";
        // line 10
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 10)->display(array_merge($context, array("blog" => $this->getAttribute(($context["page"] ?? null), "parent", array()), "truncate" => false)));
        // line 11
        echo "
<!--
Added for webmentions
-->

\t";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "webmention", array()), "enabled", array())) {
            // line 17
            echo "\t\t ";
            $this->loadTemplate("partials/webmention.html.twig", "item.html.twig", 17)->display(array_merge($context, array("page" => ($context["page"] ?? null))));
            // line 18
            echo "\t";
        }
        echo "\t

<!-- 
Added for comments
 -->

\t";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array())) {
            echo "\t\t\t    
\t\t ";
            // line 25
            $this->loadTemplate("partials/comments.html.twig", "item.html.twig", 25)->display(array_merge($context, array("page" => ($context["page"] ?? null))));
            // line 26
            echo "\t";
        }
        // line 27
        echo "\t
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 30
        $this->loadTemplate("partials/sidebar.html.twig", "item.html.twig", 30)->display(array_merge($context, array("blog" => $this->getAttribute(($context["page"] ?? null), "parent", array()))));
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 31,  161 => 30,  156 => 27,  153 => 26,  151 => 25,  147 => 24,  137 => 18,  134 => 17,  132 => 16,  125 => 11,  123 => 10,  118 => 7,  115 => 6,  112 => 5,  109 => 4,  106 => 3,  19 => 1,);
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

\t{% block content %}
\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %}
\t\t
\t\t<div class=\"blog-content-item grid pure-g-r\">
\t\t\t<div id=\"item\" class=\"block pure-u-2-3\">
\t\t\t    {% include 'partials/blog_item.html.twig' with {'blog':page.parent, 'truncate':false} %}

<!--
Added for webmentions
-->

\t{% if config.plugins.webmention.enabled %}
\t\t {% include 'partials/webmention.html.twig' with {'page': page} %}
\t{% endif %}\t

<!-- 
Added for comments
 -->

\t{% if config.plugins.comments.enabled %}\t\t\t    
\t\t {% include 'partials/comments.html.twig' with {'page': page} %}
\t{% endif %}
\t
\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t{% include 'partials/sidebar.html.twig' with {'blog':page.parent}%}
\t\t\t</div>
\t\t</div>
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/mytheme/templates/item.html.twig");
    }
}
