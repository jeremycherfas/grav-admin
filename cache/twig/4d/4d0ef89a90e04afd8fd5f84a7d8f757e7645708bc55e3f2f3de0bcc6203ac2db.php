<?php

/* forms/field.html.twig */
class __TwigTemplate_c4685feedee0cb51d6915ac26449c690ea08988f306ae02dffddbb3c96bd9999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'prepend' => array($this, 'block_prepend'),
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) && ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) &&  !($context["toggleableChecked"] ?? null));
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 5
        $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", array()) == "vertical");
        // line 6
        echo "
";
        // line 7
        if (($this->getAttribute(($context["field"] ?? null), "yaml", array()) && twig_test_iterable(($context["value"] ?? null)))) {
            // line 8
            echo "    ";
            $context["value"] = $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->toYamlFilter(($context["value"] ?? null));
        }
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 12
        echo "    <div class=\"form-field grid";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        if ($this->getAttribute(($context["field"] ?? null), "toggleable", array())) {
            echo " form-field-toggleable";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "field_classes", array()), "html", null, true);
        echo "\">
        ";
        // line 13
        $this->displayBlock('contents', $context, $blocks);
        // line 80
        echo "    </div>
";
    }

    // line 13
    public function block_contents($context, array $blocks = array())
    {
        // line 14
        echo "            <div class=\"form-label";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-1-3";
        }
        echo "\">
                ";
        // line 15
        if ($this->getAttribute(($context["field"] ?? null), "toggleable", array())) {
            // line 16
            echo "                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\">
                        <input type=\"checkbox\"
                               id=\"toggleable_";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()), "html", null, true);
            echo "\"
                               ";
            // line 19
            if (($context["toggleableChecked"] ?? null)) {
                echo "value=\"1\"";
            }
            // line 20
            echo "                               name=\"toggleable_";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\"
                               ";
            // line 21
            if (($context["toggleableChecked"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 22
            echo "                        >
                        <label for=\"toggleable_";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()), "html", null, true);
            echo "\"></label>
                    </span>
                ";
        }
        // line 26
        echo "                <label";
        echo (($this->getAttribute(($context["field"] ?? null), "toggleable", array())) ? (((" class=\"toggleable\" for=\"toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", array())) . "\"")) : (""));
        echo ">
                ";
        // line 27
        $this->displayBlock('label', $context, $blocks);
        // line 35
        echo "                </label>
            </div>
            <div class=\"form-data";
        // line 37
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3";
        }
        echo "\"
                ";
        // line 38
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 43
        echo "            >
                ";
        // line 44
        $this->displayBlock('group', $context, $blocks);
        // line 73
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", array())) {
            // line 74
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array()), "html", null, true);
            echo "\">
                        <span class=\"form-description\">";
            // line 75
            echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "description", array()));
            echo "</span>
                    </div>
                ";
        }
        // line 78
        echo "            </div>
        ";
    }

    // line 27
    public function block_label($context, array $blocks = array())
    {
        // line 28
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 29
            echo "                    <span class=\"hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "help", array())), "html");
            echo "\">";
            echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array()));
            echo "</span>
                    ";
        } else {
            // line 31
            echo "                    ";
            echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array()));
            echo "
                    ";
        }
        // line 33
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 38
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 39
        echo "                data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", array()), "html", null, true);
        echo "\"
                data-grav-disabled=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
                data-grav-default=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 44
    public function block_group($context, array $blocks = array())
    {
        // line 45
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 72
        echo "                ";
    }

    // line 45
    public function block_input($context, array $blocks = array())
    {
        // line 46
        echo "                        <div class=\"form-input-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array()), "html", null, true);
        echo "\">
                            ";
        // line 47
        $this->displayBlock('prepend', $context, $blocks);
        // line 48
        echo "                            <input
                                ";
        // line 50
        echo "                                name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
        echo "\"
                                value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html", null, true);
        echo "\"
                                ";
        // line 53
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 68
        echo "                            />
                            ";
        // line 69
        $this->displayBlock('append', $context, $blocks);
        // line 70
        echo "                        </div>
                    ";
    }

    // line 47
    public function block_prepend($context, array $blocks = array())
    {
    }

    // line 53
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 54
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
            echo "\" ";
        }
        // line 55
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        // line 56
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", array()));
            echo "\" ";
        }
        // line 57
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 58
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", array())) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "placeholder", array())), "html", null, true);
            echo "\"";
        }
        // line 59
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 60
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 61
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 62
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", array()), "html", null, true);
            echo "\"";
        }
        // line 63
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 64
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array()), "html", null, true);
            echo "\"";
        }
        // line 65
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array()))), "html", null, true);
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 66
($context["field"] ?? null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "title", array()))), "html", null, true);
            echo "\" ";
        }
        // line 67
        echo "                                ";
    }

    // line 69
    public function block_append($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 69,  344 => 67,  338 => 66,  331 => 65,  324 => 64,  319 => 63,  312 => 62,  307 => 61,  302 => 60,  297 => 59,  290 => 58,  285 => 57,  278 => 56,  271 => 55,  264 => 54,  261 => 53,  256 => 47,  251 => 70,  249 => 69,  246 => 68,  243 => 53,  239 => 51,  234 => 50,  231 => 48,  229 => 47,  222 => 46,  219 => 45,  215 => 72,  212 => 45,  209 => 44,  203 => 41,  199 => 40,  194 => 39,  191 => 38,  184 => 33,  178 => 31,  170 => 29,  167 => 28,  164 => 27,  159 => 78,  153 => 75,  146 => 74,  143 => 73,  141 => 44,  138 => 43,  136 => 38,  130 => 37,  126 => 35,  124 => 27,  119 => 26,  113 => 23,  110 => 22,  106 => 21,  101 => 20,  97 => 19,  93 => 18,  87 => 16,  85 => 15,  78 => 14,  75 => 13,  70 => 80,  68 => 13,  56 => 12,  50 => 11,  47 => 10,  43 => 8,  41 => 7,  38 => 6,  36 => 5,  34 => 4,  32 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}
{% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
{% set value = (value is null ? field.default : value) %}
{% set vertical = field.style == 'vertical' %}

{% if field.yaml and value is iterable %}
    {% set value = value|toYaml %}
{% endif %}

{% block field %}
    <div class=\"form-field grid{% if vertical %} vertical{% endif %}{% if field.toggleable %} form-field-toggleable{% endif %} {{ field.field_classes }}\">
        {% block contents %}
            <div class=\"form-label{% if not vertical %} block size-1-3{% endif %}\">
                {% if field.toggleable %}
                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\">
                        <input type=\"checkbox\"
                               id=\"toggleable_{{ field.name }}\"
                               {% if toggleableChecked %}value=\"1\"{% endif %}
                               name=\"toggleable_{{ (scope ~ field.name)|fieldName }}\"
                               {% if toggleableChecked %}checked=\"checked\"{% endif %}
                        >
                        <label for=\"toggleable_{{ field.name }}\"></label>
                    </span>
                {% endif %}
                <label{{ (field.toggleable ? ' class=\"toggleable\" for=\"toggleable_' ~ field.name ~ '\"')|raw }}>
                {% block label %}
                    {% if field.help %}
                    <span class=\"hint--bottom\" data-hint=\"{{ field.help|tu|e('html') }}\">{{ field.label|tu|raw }}</span>
                    {% else %}
                    {{ field.label|tu|raw }}
                    {% endif %}
                    {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                {% endblock %}
                </label>
            </div>
            <div class=\"form-data{% if not vertical %} block size-2-3{% endif %}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ toggleableChecked }}\"
                data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"form-input-wrapper {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|join(', ') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|tu }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|e|tu }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|e|tu }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.size }} {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">{{ field.description|tu|raw }}</span>
                    </div>
                {% endif %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "forms/field.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/plugins/admin/themes/grav/templates/forms/field.html.twig");
    }
}
