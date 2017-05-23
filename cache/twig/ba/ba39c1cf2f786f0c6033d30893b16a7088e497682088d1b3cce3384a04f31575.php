<?php

/* partials/base.html.twig */
class __TwigTemplate_813f406e97b6ba8576a80a3fb98853b54c9a0871d0a454a9eada1051f0a0709c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>

";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "</head>
<body id=\"top\" class=\"";
        // line 46
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 48
        $this->displayBlock('header', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('showcase', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 87
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 87)->display($context);
        // line 88
        echo "        </div>
    </div>
    ";
        // line 90
        $this->displayBlock('bottom', $context, $blocks);
        // line 103
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

<link rel=\"stylesheet\" href=\"http://yui.yahooapis.com/pure/0.6.0/pure-min.css\">
<link rel=\"authorization_endpoint\" href=\"https://indieauth.com/auth\">
    
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/reviews.css", 1 => 100), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 25
        echo "
        ";
        // line 26
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 10))) {
            // line 27
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 28
            echo "        ";
        }
        // line 29
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 30
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 31
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 32
            echo "        ";
        }
        // line 33
        echo "    ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 38
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 39
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 40
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 41
        echo "    ";
    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        // line 49
        echo "        <header id=\"header\">
            <div id=\"logo\">
                <h3><a href=\"";
        // line 51
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "</a></h3>
            </div>
            <div id=\"navbar\">
                ";
        // line 54
        $this->displayBlock('header_extra', $context, $blocks);
        // line 55
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 56
            echo "                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 56)->display($context);
            // line 57
            echo "                ";
        }
        // line 58
        echo "                ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 61
        echo "                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        ";
    }

    // line 54
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 58
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 59
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 59)->display($context);
        // line 60
        echo "                ";
    }

    // line 66
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        // line 69
        echo "        <section id=\"body\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "        </section>
        ";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        // line 75
        echo "        <footer id=\"footer\">
            <div class=\"totop\">
                <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
<!-- 
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
 -->
        </footer>
        ";
    }

    // line 90
    public function block_bottom($context, array $blocks = array())
    {
        // line 91
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    ";
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
        return array (  300 => 91,  297 => 90,  285 => 75,  282 => 74,  277 => 70,  272 => 71,  270 => 70,  265 => 69,  262 => 68,  257 => 66,  253 => 60,  250 => 59,  247 => 58,  242 => 54,  235 => 61,  232 => 58,  229 => 57,  226 => 56,  223 => 55,  221 => 54,  213 => 51,  209 => 49,  206 => 48,  202 => 41,  199 => 40,  196 => 39,  193 => 38,  190 => 37,  187 => 36,  183 => 33,  180 => 32,  177 => 31,  174 => 30,  171 => 29,  168 => 28,  165 => 27,  163 => 26,  160 => 25,  157 => 24,  154 => 23,  151 => 22,  148 => 21,  145 => 20,  142 => 19,  139 => 18,  136 => 17,  128 => 42,  126 => 36,  120 => 34,  118 => 17,  110 => 12,  106 => 11,  103 => 10,  101 => 9,  93 => 8,  90 => 7,  87 => 6,  81 => 103,  79 => 90,  75 => 88,  73 => 87,  68 => 84,  66 => 74,  63 => 73,  61 => 68,  58 => 67,  56 => 66,  53 => 65,  51 => 48,  46 => 46,  43 => 45,  41 => 6,  35 => 3,  32 => 2,  30 => 1,);
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
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>

{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

<link rel=\"stylesheet\" href=\"http://yui.yahooapis.com/pure/0.6.0/pure-min.css\">
<link rel=\"authorization_endpoint\" href=\"https://indieauth.com/auth\">
    
    {% block stylesheets %}
        {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 103) %}
        {% do assets.addCss('theme://css-compiled/nucleus.css',102) %}
        {% do assets.addCss('theme://css-compiled/template.css',101) %}
        {% do assets.addCss('theme://css/custom.css',100) %}
        {% do assets.addCss('theme://css/reviews.css',100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
        {% do assets.addCss('theme://css/slidebars.min.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery',101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.addJs('theme://js/antimatter.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"header\">
            <div id=\"logo\">
                <h3><a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ config.site.title }}</a></h3>
            </div>
            <div id=\"navbar\">
                {% block header_extra %}{% endblock %}
                {% if config.plugins.langswitcher.enabled %}
                {% include 'partials/langswitcher.html.twig' %}
                {% endif %}
                {% block header_navigation %}
                {% include 'partials/navigation.html.twig' %}
                {% endblock %}
                <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
            </div>
        </header>
        {% endblock %}

        {% block showcase %}{% endblock %}

        {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
            {% block content %}{% endblock %}
        </section>
        {% endblock %}

        {% block footer %}
        <footer id=\"footer\">
            <div class=\"totop\">
                <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
<!-- 
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
 -->
        </footer>
        {% endblock %}
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        {% include 'partials/navigation.html.twig' %}
        </div>
    </div>
    {% block bottom %}
        {{ assets.js('bottom') }}
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/mytheme/templates/partials/base.html.twig");
    }
}
