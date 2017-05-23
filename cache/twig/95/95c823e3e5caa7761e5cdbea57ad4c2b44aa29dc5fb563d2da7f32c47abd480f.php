<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_21fc90f66515c97a36335e2b6ae15a86270b6d5619dac25afb251e0b3a62a32e extends Twig_Template
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
        echo "<div class=\"list-item h-entry\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_height", array()), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_file", array());
        // line 7
        echo "
    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"";
        // line 10
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "c");
        echo "\">
                <span>";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d");
        echo "</span>
                <em>";
        // line 12
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M");
        echo "</em>
            </time>
        </span>
        ";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 16
            echo "            <h1 class=\"p-name\">
                ";
            // line 17
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 18
                echo "                <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                ";
            }
            // line 20
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
            </h1>
        ";
        } else {
            // line 23
            echo "            <h1 class=\"p-name\"><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h1>
        ";
        }
        // line 25
        echo "
\t\t\t";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subhead", array())) {
            echo " 
\t\t\t<h2 class=\"subhead\">
\t\t\t\t";
            // line 28
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subhead", array());
            echo "
\t\t\t</h2>
\t\t\t";
        }
        // line 30
        echo " 

        ";
        // line 32
        if (($context["header_image"] ?? null)) {
            // line 33
            echo "            ";
            if (($context["header_image_file"] ?? null)) {
                // line 34
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["header_image_file"] ?? null), array(), "array");
                // line 35
                echo "            ";
            } else {
                // line 36
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
                // line 37
                echo "            ";
            }
            // line 38
            echo "            ";
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", array(0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)), "method"), "html", array());
            echo "
        ";
        }
        // line 40
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 45
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 46
            echo "        <div class=\"e-content\">        
            ";
            // line 47
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
        </div>
        ";
            // line 49
            if ( !($context["truncate"] ?? null)) {
                // line 50
                echo "        ";
                $context["show_prev_next"] = true;
                // line 51
                echo "        ";
            }
            // line 52
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 53
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 54
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "
            <p><a href=\"";
            // line 55
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">More this way ...</a></p>
        </div>
    ";
        } elseif (        // line 57
($context["truncate"] ?? null)) {
            // line 58
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 59
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
            <p><a href=\"";
            // line 60
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">More this way ...</a></p>
        </div>
    ";
        } else {
            // line 63
            echo "        <div class=\"e-content\">
            ";
            // line 64
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
            
                    ";
            // line 66
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
                // line 67
                echo "        <span class=\"tags\">
            ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 69
                    echo "            <a href=\"";
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["blog"] ?? null), "url", array()), "/");
                    echo "/tag";
                    echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                    echo $context["tag"];
                    echo "\" class=\"p-category\">";
                    echo $context["tag"];
                    echo "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </span>
        ";
            }
            // line 73
            echo "
        </div>

        ";
            // line 76
            $context["show_prev_next"] = true;
            // line 77
            echo "    ";
        }
        // line 78
        echo "
    ";
        // line 79
        if (($context["show_prev_next"] ?? null)) {
            // line 80
            echo "
        <p class=\"prev-next\">
            ";
            // line 82
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 83
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next post </a>
            ";
            }
            // line 85
            echo "
            ";
            // line 86
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 87
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\">Previous post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 89
            echo "        </p>
    ";
        }
        // line 91
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 91,  252 => 89,  246 => 87,  244 => 86,  241 => 85,  235 => 83,  233 => 82,  229 => 80,  227 => 79,  224 => 78,  221 => 77,  219 => 76,  214 => 73,  210 => 71,  196 => 69,  192 => 68,  189 => 67,  187 => 66,  182 => 64,  179 => 63,  173 => 60,  169 => 59,  166 => 58,  164 => 57,  159 => 55,  155 => 54,  152 => 53,  149 => 52,  146 => 51,  143 => 50,  141 => 49,  136 => 47,  133 => 46,  131 => 45,  124 => 40,  118 => 38,  115 => 37,  112 => 36,  109 => 35,  106 => 34,  103 => 33,  101 => 32,  97 => 30,  91 => 28,  86 => 26,  83 => 25,  75 => 23,  66 => 20,  60 => 18,  58 => 17,  55 => 16,  53 => 15,  47 => 12,  43 => 11,  39 => 10,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-item h-entry\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
                <span>{{ page.date|date(\"d\") }}</span>
                <em>{{ page.date|date(\"M\") }}</em>
            </time>
        </span>
        {% if page.header.link %}
            <h1 class=\"p-name\">
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
            </h1>
        {% else %}
            <h1 class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></h1>
        {% endif %}

\t\t\t{% if page.header.subhead %} 
\t\t\t<h2 class=\"subhead\">
\t\t\t\t{{ page.header.subhead }}
\t\t\t</h2>
\t\t\t{% endif%} 

        {% if header_image %}
            {% if header_image_file %}
                {% set header_image_media = page.media.images[header_image_file] %}
            {% else %}
                {% set header_image_media = page.media.images|first %}
            {% endif %}
            {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}
        {% endif %}

    </div>

    <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
        <div class=\"e-content\">        
            {{ page.content }}
        </div>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <div class=\"p-summary e-content\">
            {{ page.summary }}
            <p><a href=\"{{ page.url }}\">More this way ...</a></p>
        </div>
    {% elseif truncate %}
        <div class=\"p-summary e-content\">
            {{ page.content }}
            <p><a href=\"{{ page.url }}\">More this way ...</a></p>
        </div>
    {% else %}
        <div class=\"e-content\">
            {{ page.content }}
            
                    {% if page.taxonomy.tag %}
        <span class=\"tags\">
            {% for tag in page.taxonomy.tag %}
            <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">{{ tag }}</a>
            {% endfor %}
        </span>
        {% endif %}

        </div>

        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Next post </a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">Previous post <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

    </div>
</div>", "partials/blog_item.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/mytheme/templates/partials/blog_item.html.twig");
    }
}
