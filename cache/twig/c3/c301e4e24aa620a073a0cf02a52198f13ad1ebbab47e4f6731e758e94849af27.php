<?php

/* partials/webmention.html.twig */
class __TwigTemplate_d5769a1afc7c005456d218676b1a06e25ac5c582afdde7a7e0b34c16ffa88ee0 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "webmention", array()), "enabled", array())) {
            // line 2
            echo "
 \t\t";
            // line 3
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "webmention", array()), "data", array())) {
                // line 4
                echo "
<h1>Webmentions</h1>
<h2>Display that NEW stuff here</h2>
A bit like you were dispalying comments

";
                // line 10
                echo "
";
                // line 11
                $context["mf2"] = twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "webmention", array()), "data", array()), 0, array()), 4, 1);
                // line 12
                $context["properties"] = $this->getAttribute(($context["mf2"] ?? null), "properties", array());
                // line 13
                echo "

";
                // line 15
                $context["needle1"] = "h-entry";
                // line 16
                $context["needle2"] = "h-card";
                // line 17
                echo "
";
                // line 18
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["mf2"] ?? null), "source_mf2", array()), "items", array()), 0, array()), "type", array()), 0, array()) === ($context["needle1"] ?? null))) {
                    // line 19
                    echo "\t<p>Bingo: h-entry</p>
\t{
";
                }
                // line 22
                echo " \t\t
 \t\t";
            }
            // line 24
            echo "
";
        }
        // line 26
        echo "
";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->getAttribute(($context["page"] ?? null), "canonical", array()));
        echo "
";
        // line 28
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "webmention", array()), "receiver", array()), "file_data", array()));
        echo "
";
        // line 29
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "webmention", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/webmention.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  73 => 28,  69 => 27,  66 => 26,  62 => 24,  58 => 22,  53 => 19,  51 => 18,  48 => 17,  46 => 16,  44 => 15,  40 => 13,  38 => 12,  36 => 11,  33 => 10,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if config.plugins.webmention.enabled %}

 \t\t{% if config.plugins.webmention.data %}

<h1>Webmentions</h1>
<h2>Display that NEW stuff here</h2>
A bit like you were dispalying comments

{# Need a loop here in case more than one item in mf2 #}

{% set mf2 = config.plugins.webmention.data.0|slice(4,1) %}
{% set properties = mf2.properties %}


{% set needle1 = 'h-entry' %}
{% set needle2 = 'h-card' %}

{% if mf2.source_mf2.items.0.type.0 is same as(needle1) %}
\t<p>Bingo: h-entry</p>
\t{
{% endif %}
 \t\t
 \t\t{% endif %}

{% endif %}

{{ dump(page.canonical) }}
{{ dump(config.plugins.webmention.receiver.file_data) }}
{{ dump(config.plugins.webmention) }}
", "partials/webmention.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/mytheme/templates/partials/webmention.html.twig");
    }
}
