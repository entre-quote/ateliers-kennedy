<?php

/* @Page:/Users/dev/Downloads/grav-admin/user/pages/02.agenda */
class __TwigTemplate_d2c992b1463034a2498239df7557912feaf4759ef949e80c126a5ec7ff0d0d1a extends Twig_Template
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
        echo "<div class=agenda-content>

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 4
            echo "
<div>
<h2 class=\"news-title\">";
            // line 6
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h2>
";
            // line 7
            echo $this->getAttribute($context["p"], "content", array());
            echo "
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/dev/Downloads/grav-admin/user/pages/02.agenda";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=agenda-content>

{% for p in page.collection %}

<div>
<h2 class=\"news-title\">{{ p.title }}</h2>
{{ p.content }}
</div>

{% endfor %}
</div>", "@Page:/Users/dev/Downloads/grav-admin/user/pages/02.agenda", "");
    }
}
