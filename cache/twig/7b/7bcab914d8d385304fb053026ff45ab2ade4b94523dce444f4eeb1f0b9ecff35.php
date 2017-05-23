<?php

/* modular/showcase.html.twig */
class __TwigTemplate_9489e129e019f7ca5aff4316b20de1192645125614ff91be17df8c98b9352997 extends Twig_Template
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
        $context["showcase_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -125), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        echo " ";
        if (($context["showcase_image"] ?? null)) {
            echo " 
<div class=\"modular-row showcase flush-top\" style=\"background-image: url(";
            // line 2
            echo $this->getAttribute(($context["showcase_image"] ?? null), "url", array());
            echo ");\">
\t";
        } else {
            // line 3
            echo " 
\t<div class=\"modular-row showcase\">
\t\t";
        }
        // line 5
        echo " 
\t\t<div class=\"mysearch\">
\t\t\t";
        // line 7
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "modular/showcase.html.twig", 7)->display($context);
        echo " 
\t\t</div>
\t\t";
        // line 9
        echo ($context["content"] ?? null);
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            echo " <a class=\"button";
            if ($this->getAttribute($context["button"], "primary", array())) {
                echo " primary";
            }
            echo "\" href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
\t</div>
";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  39 => 7,  35 => 5,  30 => 3,  25 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set showcase_image = page.media.images|first.grayscale().contrast(20).brightness(-125).colorize(-35,81,122) %} {% if showcase_image %} 
<div class=\"modular-row showcase flush-top\" style=\"background-image: url({{ showcase_image.url }});\">
\t{% else %} 
\t<div class=\"modular-row showcase\">
\t\t{% endif %} 
\t\t<div class=\"mysearch\">
\t\t\t{% include 'partials/simplesearch_searchbox.html.twig' %} 
\t\t</div>
\t\t{{ content }} {% for button in page.header.buttons %} <a class=\"button{% if button.primary %} primary{% endif %}\" href=\"{{ button.url }}\">{{ button.text }}</a> {% endfor %} 
\t</div>
", "modular/showcase.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/mytheme/templates/modular/showcase.html.twig");
    }
}
