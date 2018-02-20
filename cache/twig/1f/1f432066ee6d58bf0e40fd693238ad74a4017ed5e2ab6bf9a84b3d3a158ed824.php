<?php

/* autrement.html.twig */
class __TwigTemplate_07c6da0c080d351ab06523e176ef9b49d2271597d48e9376a98e41d12f3d8702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "autrement.html.twig", 1);
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
        echo "
<article class=autrement>
    <div class=wrapper>
        <div class=center><h2>";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2></div>

        ";
        // line 9
        $context["content"] = twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "summary", array())));
        // line 10
        echo "        <div class=details-content>";
        echo ($context["content"] ?? null);
        echo "</div>
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "autrement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  41 => 9,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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

<article class=autrement>
    <div class=wrapper>
        <div class=center><h2>{{ page.title }}</h2></div>

        {% set content = page.content|slice(page.summary|length) %}
        <div class=details-content>{{ content }}</div>
    </div>
</article>
{% endblock %}
", "autrement.html.twig", "/Users/dev/Boulot/Context/Ateliers Kennedy/ateliers-kennedy/user/themes/ak/templates/autrement.html.twig");
    }
}
