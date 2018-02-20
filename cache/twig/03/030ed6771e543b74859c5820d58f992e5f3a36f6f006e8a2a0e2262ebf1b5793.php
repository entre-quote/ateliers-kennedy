<?php

/* details.html.twig */
class __TwigTemplate_0b83c4f1e6d6d1d5deec01721c4f73d178f5dc0256af1112f35225f5b00cfed8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "details.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["first_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 5
        echo "
<article class=details>
    <div class=wrapper>
        <div class=center><h2>";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2></div>

        ";
        // line 10
        $context["content"] = twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "summary", array())));
        // line 11
        echo "        <div class=details-content>";
        echo ($context["content"] ?? null);
        echo "</div>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  43 => 10,  38 => 8,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
{% set first_image = page.media.images|first %}

<article class=details>
    <div class=wrapper>
        <div class=center><h2>{{ page.title }}</h2></div>

        {% set content = page.content|slice(page.summary|length) %}
        <div class=details-content>{{ content }}</div>
    </div>
</article>
{% endblock %}
", "details.html.twig", "/Users/dev/Downloads/grav-admin/user/themes/ak/templates/details.html.twig");
    }
}
