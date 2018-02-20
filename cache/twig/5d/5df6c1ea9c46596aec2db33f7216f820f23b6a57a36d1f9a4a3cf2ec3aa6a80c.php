<?php

/* atelier.html.twig */
class __TwigTemplate_751233b83802d7286a7cafa7573a2bdc8a463cc3e291ee60ce988975275abbaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "atelier.html.twig", 1);
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
    <div class=\"atelier-slider\">

        ";
        // line 7
        $context["carrousel"] = $this->getAttribute(($context["page"] ?? null), "collection", array());
        // line 8
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carrousel"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 9
            echo "        ";
            echo $this->getAttribute($context["p"], "content", array());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    </div>

    <article class=\" atelier-item\">
        <div class=wrapper>
        

        ";
        // line 18
        $context["content"] = twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "summary", array())));
        // line 19
        echo "        ";
        echo ($context["content"] ?? null);
        echo "
        </div>
    </article>
";
    }

    public function getTemplateName()
    {
        return "atelier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  61 => 18,  52 => 11,  43 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
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

    <div class=\"atelier-slider\">

        {% set carrousel = page.collection %}
        {% for p in carrousel %}
        {{ p.content }}
        {% endfor %}

    </div>

    <article class=\" atelier-item\">
        <div class=wrapper>
        

        {% set content = page.content|slice(page.summary|length) %}
        {{ content }}
        </div>
    </article>
{% endblock %}
", "atelier.html.twig", "/Users/dev/Downloads/grav-admin/user/themes/ak/templates/atelier.html.twig");
    }
}
