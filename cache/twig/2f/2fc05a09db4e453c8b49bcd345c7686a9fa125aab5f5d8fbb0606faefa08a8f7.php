<?php

/* {{ grav.language.getLanguage }} */
class __TwigTemplate_ae752bb331c032fb1542e80387d7a07a250c79dddf0b9a5a930e5032e5798fa6 extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array());
    }

    public function getTemplateName()
    {
        return "{{ grav.language.getLanguage }}";
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
        return new Twig_Source("{{ grav.language.getLanguage }}", "{{ grav.language.getLanguage }}", "");
    }
}
