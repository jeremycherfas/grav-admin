<?php

/* partials/comments.html.twig */
class __TwigTemplate_7e3bf52e58e7eafb38cfa7505254a38793725d067a645ee3e45ec49600285912 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "enable_comments_plugin", array())) {
            // line 2
            echo "    
<!-- Moved here from below to change order of presentation -->
    
    ";
            // line 5
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "comments", array()))) {
                // line 6
                echo "
<div class=\"comment\">
        <h3>";
                // line 8
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_COMMENTS.COMMENTS");
                echo "</h3>
</div>

<!-- Changed presentation from table to div -->

            ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array_reverse($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "comments", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 14
                    echo "<div class=\"comment-content\">
                    ";
                    // line 15
                    echo $this->getAttribute($context["comment"], "text", array());
                    echo "
</div>
<div class=\"commenter\">
<p>";
                    // line 18
                    echo $this->getAttribute($context["comment"], "author", array());
                    echo "<br />
";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()));
                    echo "</p>
</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "
    ";
            }
            // line 24
            echo "
<!-- End of presentation block -->

<div class=\"comment\">    
    <h3>";
            // line 28
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_COMMENTS.ADD_COMMENT");
            echo "</h3>
</div>

    <form name=\"";
            // line 31
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "name", array());
            echo "\"
          action=\"";
            // line 32
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array())) ? ((($context["base_url"] ?? null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array()))) : ($this->getAttribute(($context["page"] ?? null), "url", array())));
            echo "\"
          method=\"";
            // line 33
            echo _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "method", array())), "POST");
            echo "\">

        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 36
                echo "            ";
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 37
                echo "            ";
                if ($this->getAttribute($context["field"], "evaluateDefault", array())) {
                    // line 38
                    echo "                ";
                    $context["value"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateStringFunc($this->env, $context, $this->getAttribute($context["field"], "evaluateDefault", array()));
                    // line 39
                    echo "            ";
                }
                // line 40
                echo "
            ";
                // line 41
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "authenticated", array()))) {
                    // line 42
                    echo "                ";
                    if (($this->getAttribute($context["field"], "name", array()) == "name")) {
                        // line 43
                        echo "                    <input type=\"hidden\" name=\"";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array());
                        echo "\">
                ";
                    } elseif (($this->getAttribute(                    // line 44
$context["field"], "name", array()) == "email")) {
                        // line 45
                        echo "                    <input type=\"hidden\" name=\"";
                        echo $this->getAttribute($context["field"], "name", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array());
                        echo "\">
                ";
                    } else {
                        // line 47
                        echo "                    <div>
                        ";
                        // line 48
                        $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "partials/comments.html.twig", 48)->display($context);
                        // line 49
                        echo "                    </div>
                ";
                    }
                    // line 51
                    echo "            ";
                } else {
                    // line 52
                    echo "                <div>
                    ";
                    // line 53
                    $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "partials/comments.html.twig", 53)->display($context);
                    // line 54
                    echo "                </div>
            ";
                }
                // line 56
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        ";
            $this->loadTemplate("forms/fields/formname/formname.html.twig", "partials/comments.html.twig", 57)->display($context);
            // line 58
            echo "
        <div class=\"buttons\">
        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 61
                echo "            <button class=\"button\" type=\"";
                echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
                echo "\">";
                echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
                echo "</button>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </div>

        ";
            // line 65
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
            echo "
    </form>

    <div class=\"alert\">";
            // line 68
            echo $this->getAttribute(($context["form"] ?? null), "message", array());
            echo "</div>

<!--  Presentation was here -->

";
        }
        // line 73
        echo "
";
        // line 74
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->dump($this->env, $context, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "comments", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 74,  224 => 73,  216 => 68,  210 => 65,  206 => 63,  195 => 61,  191 => 60,  187 => 58,  184 => 57,  170 => 56,  166 => 54,  164 => 53,  161 => 52,  158 => 51,  154 => 49,  152 => 48,  149 => 47,  141 => 45,  139 => 44,  132 => 43,  129 => 42,  127 => 41,  124 => 40,  121 => 39,  118 => 38,  115 => 37,  112 => 36,  95 => 35,  90 => 33,  86 => 32,  82 => 31,  76 => 28,  70 => 24,  66 => 22,  57 => 19,  53 => 18,  47 => 15,  44 => 14,  40 => 13,  32 => 8,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if grav.twig.enable_comments_plugin %}
    
<!-- Moved here from below to change order of presentation -->
    
    {% if grav.twig.comments|length %}

<div class=\"comment\">
        <h3>{{'PLUGIN_COMMENTS.COMMENTS'|t}}</h3>
</div>

<!-- Changed presentation from table to div -->

            {% for comment in grav.twig.comments|array_reverse %}
<div class=\"comment-content\">
                    {{comment.text}}
</div>
<div class=\"commenter\">
<p>{{comment.author}}<br />
{{comment.date|e}}</p>
</div>
            {% endfor %}

    {% endif %}

<!-- End of presentation block -->

<div class=\"comment\">    
    <h3>{{'PLUGIN_COMMENTS.ADD_COMMENT'|t}}</h3>
</div>

    <form name=\"{{ grav.config.plugins.comments.form.name }}\"
          action=\"{{ grav.config.plugins.comments.form.action ?  base_url ~ grav.config.plugins.comments.form.action : page.url }}\"
          method=\"{{ grav.config.plugins.comments.form.method|upper|default('POST') }}\">

        {% for field in grav.config.plugins.comments.form.fields %}
            {% set value = form.value(field.name) %}
            {% if field.evaluateDefault %}
                {% set value = evaluate(field.evaluateDefault) %}
            {% endif %}

            {% if config.plugins.login.enabled and grav.user.authenticated %}
                {% if field.name == 'name' %}
                    <input type=\"hidden\" name=\"{{field.name}}\" value=\"{{grav.user.fullname}}\">
                {% elseif field.name == 'email' %}
                    <input type=\"hidden\" name=\"{{field.name}}\" value=\"{{grav.user.email}}\">
                {% else %}
                    <div>
                        {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" %}
                    </div>
                {% endif %}
            {% else %}
                <div>
                    {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" %}
                </div>
            {% endif %}
        {% endfor %}
        {% include \"forms/fields/formname/formname.html.twig\" %}

        <div class=\"buttons\">
        {% for button in grav.config.plugins.comments.form.buttons %}
            <button class=\"button\" type=\"{{ button.type|default('submit') }}\">{{ button.value|t|default('Submit') }}</button>
        {% endfor %}
        </div>

        {{ nonce_field('form', 'form-nonce')|raw }}
    </form>

    <div class=\"alert\">{{ form.message }}</div>

<!--  Presentation was here -->

{% endif %}

{{ dump(grav.twig.comments) }}
", "partials/comments.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/themes/mytheme/templates/partials/comments.html.twig");
    }
}
