<?php

/* forms/fields/pagemedia/pagemedia.html.twig */
class __TwigTemplate_af7a2ae41a760cec29baaad97da1860b3408e8dbb310dc5801ed734824cf1e26 extends Twig_Template
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
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute(($context["context"] ?? null), "folderExists", array())) {
            // line 4
            echo "<div class=\"form-field grid vertical\">
    <div class=\"form-label\">
        <label>";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
            echo "</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        ";
            // line 9
            $context["uploadLimit"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "system", array()), "media", array()), "upload_limit", array()) / 1024) / 1024);
            // line 10
            echo "        ";
            $context["dropzoneSettings"] = array("maxFileSize" => ($context["uploadLimit"] ?? null));
            // line 11
            echo "        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/media/";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
            echo ".json\"
             data-media-local=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
            echo "\"
             data-media-path=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["context"] ?? null), "relativePagePath", array())), "html", null, true);
            echo "\"
             data-dropzone-options=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["dropzoneSettings"] ?? null)), "html_attr");
            echo "\"></div>
        <span>";
            // line 17
            echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), "
"), "html", null, true);
            echo "</span>
    </div>
</div>
";
        } else {
            // line 21
            echo "<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED"), "html", null, true);
            echo "
        </div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/pagemedia/pagemedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  73 => 21,  65 => 17,  61 => 16,  57 => 15,  51 => 14,  45 => 13,  41 => 11,  38 => 10,  36 => 9,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = (value is null ? field.default : value) %}

{% if context.folderExists %}
<div class=\"form-field grid vertical\">
    <div class=\"form-label\">
        <label>{{ field.label|tu }}</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        {% set uploadLimit = grav.config.system.media.upload_limit / 1024 / 1024 %}
        {% set dropzoneSettings = { maxFileSize: uploadLimit } %}
        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"{{ base_url }}/media/{{ admin.route|trim('/') }}.json\"
             data-media-local=\"{{ base_url_relative_frontend|rtrim('/') }}/{{ admin.route|trim('/') }}\"
             data-media-path=\"{{ url(context.relativePagePath) }}\"
             data-dropzone-options=\"{{ dropzoneSettings|json_encode|e('html_attr') }}\"></div>
        <span>{{ value|join(\"\\n\") }}</span>
    </div>
</div>
{% else %}
<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            {{ \"PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED\"|tu }}
        </div>
    </div>
</div>
{% endif %}
", "forms/fields/pagemedia/pagemedia.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/plugins/admin/themes/grav/templates/forms/fields/pagemedia/pagemedia.html.twig");
    }
}
