<?php

/* forms/fields/formname/formname.html.twig */
class __TwigTemplate_46a995f1aef49c518f2958cee70520f86e6b7af832f8d6d73674cdf0f4395e89 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"__form-name__\" value=\"";
        echo $this->getAttribute(($context["form"] ?? null), "name", array());
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "forms/fields/formname/formname.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<input type=\"hidden\" name=\"__form-name__\" value=\"{{ form.name }}\" />", "forms/fields/formname/formname.html.twig", "/Applications/MAMP/htdocs/grav-admin/user/plugins/form/templates/forms/fields/formname/formname.html.twig");
    }
}
