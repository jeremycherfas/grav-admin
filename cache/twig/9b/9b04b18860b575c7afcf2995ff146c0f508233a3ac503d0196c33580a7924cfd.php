<?php

/* {{ grav.page.header.title }} */
class __TwigTemplate_e18459dac68909813dad98331cda5e35e76a408f83cca89a619a1bc86fb1f77d extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "page", array()), "header", array()), "title", array());
    }

    public function getTemplateName()
    {
        return "{{ grav.page.header.title }}";
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
        return new Twig_Source("{{ grav.page.header.title }}", "{{ grav.page.header.title }}", "");
    }
}
