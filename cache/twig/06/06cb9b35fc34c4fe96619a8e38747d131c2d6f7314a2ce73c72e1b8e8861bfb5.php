<?php

/* @Page:/Users/dev/Downloads/grav-admin/user/pages/03.ateliers/05-encadrement/carrousel */
class __TwigTemplate_22b0997e7d6fd2f854b5a0a29c1bc9bf13311d651b7678a8f51b57c4365da237 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 2
            echo "<div>
";
            // line 3
            echo $this->getAttribute($context["p"], "content", array());
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Page:/Users/dev/Downloads/grav-admin/user/pages/03.ateliers/05-encadrement/carrousel";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for p in page.collection %}
<div>
{{ p.content }}
</div>
{% endfor %}", "@Page:/Users/dev/Downloads/grav-admin/user/pages/03.ateliers/05-encadrement/carrousel", "");
    }
}
