<?php

/* modular/index.html.twig */
class __TwigTemplate_077424545476ea55cb206b78d0e312f37048bd378afe8e57f86287cf7dfddd84 extends Twig_Template
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
        echo "<div class=\"modular-row callout white\">
\t";
        // line 2
        echo ($context["content"] ?? null);
        echo "

 
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 6
            $context["check"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "taxonomy", array()), "tag", array()), 0, array());
            // line 7
            echo "
";
            // line 9
            echo "\t";
            if ((($context["check"] ?? null) == "link")) {
                // line 10
                echo "
\t<h1><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i><a href=\"";
                // line 11
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "link", array());
                echo "\"> ";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a></h1>

\t";
            } else {
                // line 14
                echo "
    <h1><a href=\"";
                // line 15
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a></h1>

\t";
            }
            // line 18
            echo "
\t\t<h2 class=\"subhead\">";
            // line 19
            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array());
            echo "</h2>
        <p>";
            // line 20
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
            echo "</p>
        <p>";
            // line 21
            echo $this->getAttribute($context["p"], "content", array());
            echo "</p>
                
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modular/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  73 => 21,  69 => 20,  65 => 19,  62 => 18,  54 => 15,  51 => 14,  43 => 11,  40 => 10,  37 => 9,  34 => 7,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row callout white\">
\t{{ content }}

 
{% for p in page.find('/blog').children.order('date', 'desc').slice(0, 1) %}
{% set check = p.header.taxonomy.tag.0 %}

{# tests for whether the Tag is link #}
\t{% if check == \"link\" %}

\t<h1><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i><a href=\"{{p.header.link}}\"> {{ p.title }}</a></h1>

\t{% else %}

    <h1><a href=\"{{p.url}}\">{{ p.title }}</a></h1>

\t{% endif %}

\t\t<h2 class=\"subhead\">{{ p.header.subhead }}</h2>
        <p>{{ p.date|date(\"M j, Y\")}}</p>
        <p>{{ p.content }}</p>
                
{% endfor %}
</div>
", "modular/index.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/mytheme/templates/modular/index.html.twig");
    }
}
