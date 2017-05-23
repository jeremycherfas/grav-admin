<?php

/* modular/recent.html.twig */
class __TwigTemplate_b764f4ec933f7536aed3ab50cc7ce9773821d411062d9c486f9374d85214cfe6 extends Twig_Template
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
        echo "<div class=\"modular-row features ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
\t";
        // line 2
        echo ($context["content"] ?? null);
        echo " 

\t<div class=\"feature-items\">
\t\t\t<div class=\"feature\" style=\"padding-right: 1rem;\">
\t\t\t\t<h4 style=\"text-align:right;\">Writing:</h4>
\t\t\t</div>
\t\t<div class=\"feature gray\">
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 1, 1 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo " 
\t\t\t<h4>
\t\t\t\t<a href=\"";
            // line 11
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a>
\t\t\t</h4>
\t\t\t\t";
            // line 13
            if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array())) {
                // line 14
                echo "\t\t\t\t\t<h5 class=\"recent\">";
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array());
                echo "</h5>
\t\t\t\t";
            }
            // line 15
            echo "\t
\t\t\t<p>
\t\t\t\t";
            // line 17
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
            echo "
\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo " 
\t\t</div>
\t\t<div class=\"feature\">
\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 2, 1 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo " 
\t\t\t<h4>
\t\t\t\t<a href=\"";
            // line 24
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a>
\t\t\t</h4>
\t\t\t\t";
            // line 26
            if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array())) {
                // line 27
                echo "\t\t\t\t\t<h5 class=\"recent\">";
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array());
                echo "</h5>
\t\t\t\t";
            }
            // line 28
            echo "\t
\t\t\t<p>
\t\t\t\t";
            // line 30
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
            echo "
\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo " 
\t\t</div>
\t\t<div class=\"feature gray\">
\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/blog"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 3, 1 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo " 
\t\t\t<h4>
\t\t\t\t<a href=\"";
            // line 37
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a>
\t\t\t</h4>
\t\t\t\t";
            // line 39
            if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array())) {
                // line 40
                echo "\t\t\t\t\t<h5 class=\"recent\">";
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array());
                echo "</h5>
\t\t\t\t";
            }
            // line 41
            echo "\t
\t\t\t<p>
\t\t\t\t";
            // line 43
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
            echo "
\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo " 
\t\t</div>
\t</div>
\t
\t<div class=\"feature-items\">
<div class=\"feature\" style=\"padding-right: 1rem;\">
\t\t\t\t<h4 style=\"text-align:right;\">Reading:</h4>
\t\t\t</div>
\t\t<div class=\"feature gray\">
\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/reviews"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 0, 1 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo " 
\t\t\t<h4>
\t\t\t\t<a href=\"";
            // line 56
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a>
\t\t\t</h4>
\t\t\t\t";
            // line 58
            if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array())) {
                // line 59
                echo "\t\t\t\t\t<h5 class=\"recent\">";
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array());
                echo "</h5>
\t\t\t\t";
            }
            // line 60
            echo "\t
\t\t\t<p>
\t\t\t\t";
            // line 62
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
            echo "
\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo " 
\t\t</div>
\t\t<div class=\"feature\">
\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/reviews"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 1, 1 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo " 
\t\t\t<h4>
\t\t\t\t<a href=\"";
            // line 69
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a>
\t\t\t</h4>
\t\t\t\t";
            // line 71
            if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array())) {
                // line 72
                echo "\t\t\t\t\t<h5 class=\"recent\">";
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array());
                echo "</h5>
\t\t\t\t";
            }
            // line 73
            echo "\t
\t\t\t<p>
\t\t\t\t";
            // line 75
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
            echo "
\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo " 
\t\t</div>
\t\t<div class=\"feature gray\">
\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", array(0 => "/reviews"), "method"), "children", array()), "order", array(0 => "date", 1 => "desc"), "method"), "slice", array(0 => 2, 1 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo " 
\t\t\t<h4>
\t\t\t\t<a href=\"";
            // line 82
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a>
\t\t\t</h4>
\t\t\t\t";
            // line 84
            if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array())) {
                // line 85
                echo "\t\t\t\t\t<h5 class=\"recent\">";
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "subhead", array());
                echo "</h5>
\t\t\t\t";
            }
            // line 86
            echo "\t
\t\t\t<p>
\t\t\t\t";
            // line 88
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "M j, Y");
            echo "
\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo " 

\t</div>
</div>
";
        // line 94
        $this->loadTemplate("partials/aboutme.html.twig", "modular/recent.html.twig", 94)->display($context);
    }

    public function getTemplateName()
    {
        return "modular/recent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 94,  275 => 90,  266 => 88,  262 => 86,  256 => 85,  254 => 84,  247 => 82,  240 => 80,  235 => 77,  226 => 75,  222 => 73,  216 => 72,  214 => 71,  207 => 69,  200 => 67,  195 => 64,  186 => 62,  182 => 60,  176 => 59,  174 => 58,  167 => 56,  160 => 54,  149 => 45,  140 => 43,  136 => 41,  130 => 40,  128 => 39,  121 => 37,  114 => 35,  109 => 32,  100 => 30,  96 => 28,  90 => 27,  88 => 26,  81 => 24,  74 => 22,  69 => 19,  60 => 17,  56 => 15,  50 => 14,  48 => 13,  41 => 11,  34 => 9,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row features {{ page.header.class}}\">
\t{{ content }} 

\t<div class=\"feature-items\">
\t\t\t<div class=\"feature\" style=\"padding-right: 1rem;\">
\t\t\t\t<h4 style=\"text-align:right;\">Writing:</h4>
\t\t\t</div>
\t\t<div class=\"feature gray\">
\t\t\t{% for p in page.find('/blog').children.order('date', 'desc').slice(1, 1) %} 
\t\t\t<h4>
\t\t\t\t<a href=\"{{p.url}}\">{{ p.title }}</a>
\t\t\t</h4>
\t\t\t\t{% if p.header.subhead %}
\t\t\t\t\t<h5 class=\"recent\">{{ p.header.subhead }}</h5>
\t\t\t\t{% endif %}\t
\t\t\t<p>
\t\t\t\t{{ p.date|date(\"M j, Y\")}}
\t\t\t</p>
\t\t\t{% endfor %} 
\t\t</div>
\t\t<div class=\"feature\">
\t\t\t{% for p in page.find('/blog').children.order('date', 'desc').slice(2, 1) %} 
\t\t\t<h4>
\t\t\t\t<a href=\"{{p.url}}\">{{ p.title }}</a>
\t\t\t</h4>
\t\t\t\t{% if p.header.subhead %}
\t\t\t\t\t<h5 class=\"recent\">{{ p.header.subhead }}</h5>
\t\t\t\t{% endif %}\t
\t\t\t<p>
\t\t\t\t{{ p.date|date(\"M j, Y\")}}
\t\t\t</p>
\t\t\t{% endfor %} 
\t\t</div>
\t\t<div class=\"feature gray\">
\t\t\t{% for p in page.find('/blog').children.order('date', 'desc').slice(3, 1) %} 
\t\t\t<h4>
\t\t\t\t<a href=\"{{p.url}}\">{{ p.title }}</a>
\t\t\t</h4>
\t\t\t\t{% if p.header.subhead %}
\t\t\t\t\t<h5 class=\"recent\">{{ p.header.subhead }}</h5>
\t\t\t\t{% endif %}\t
\t\t\t<p>
\t\t\t\t{{ p.date|date(\"M j, Y\")}}
\t\t\t</p>
\t\t\t{% endfor %} 
\t\t</div>
\t</div>
\t
\t<div class=\"feature-items\">
<div class=\"feature\" style=\"padding-right: 1rem;\">
\t\t\t\t<h4 style=\"text-align:right;\">Reading:</h4>
\t\t\t</div>
\t\t<div class=\"feature gray\">
\t\t\t{% for p in page.find('/reviews').children.order('date', 'desc').slice(0, 1) %} 
\t\t\t<h4>
\t\t\t\t<a href=\"{{p.url}}\">{{ p.title }}</a>
\t\t\t</h4>
\t\t\t\t{% if p.header.subhead %}
\t\t\t\t\t<h5 class=\"recent\">{{ p.header.subhead }}</h5>
\t\t\t\t{% endif %}\t
\t\t\t<p>
\t\t\t\t{{ p.date|date(\"M j, Y\")}}
\t\t\t</p>
\t\t\t{% endfor %} 
\t\t</div>
\t\t<div class=\"feature\">
\t\t\t{% for p in page.find('/reviews').children.order('date', 'desc').slice(1, 1) %} 
\t\t\t<h4>
\t\t\t\t<a href=\"{{p.url}}\">{{ p.title }}</a>
\t\t\t</h4>
\t\t\t\t{% if p.header.subhead %}
\t\t\t\t\t<h5 class=\"recent\">{{ p.header.subhead }}</h5>
\t\t\t\t{% endif %}\t
\t\t\t<p>
\t\t\t\t{{ p.date|date(\"M j, Y\")}}
\t\t\t</p>
\t\t\t{% endfor %} 
\t\t</div>
\t\t<div class=\"feature gray\">
\t\t\t{% for p in page.find('/reviews').children.order('date', 'desc').slice(2, 1) %} 
\t\t\t<h4>
\t\t\t\t<a href=\"{{p.url}}\">{{ p.title }}</a>
\t\t\t</h4>
\t\t\t\t{% if p.header.subhead %}
\t\t\t\t\t<h5 class=\"recent\">{{ p.header.subhead }}</h5>
\t\t\t\t{% endif %}\t
\t\t\t<p>
\t\t\t\t{{ p.date|date(\"M j, Y\")}}
\t\t\t</p>
\t\t\t{% endfor %} 

\t</div>
</div>
{% include 'partials/aboutme.html.twig' %}
", "modular/recent.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/mytheme/templates/modular/recent.html.twig");
    }
}
