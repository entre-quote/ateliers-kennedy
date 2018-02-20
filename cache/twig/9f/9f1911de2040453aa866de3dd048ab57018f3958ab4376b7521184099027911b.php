<?php

/* @Page:/Users/dev/Boulot/Context/Ateliers Kennedy/ateliers-kennedy/user/pages/01.home/06-autrement */
class __TwigTemplate_c0aacdf39d1da0cc190819db5416f19cb19d916a97aff38f120f84d034b73584 extends Twig_Template
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
        echo "<p>Être au travail (mais pas seulement)
Depuis plus de 50 ans, des moments de partage sont organisés tout au long de l’année pour donner sa place à la convivialité, à la force du « être ensemble »</p>
<p>===</p>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 5
            echo "<article class=\"center\">
";
            // line 6
            echo $this->getAttribute($context["p"], "content", array());
            echo "
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Page:/Users/dev/Boulot/Context/Ateliers Kennedy/ateliers-kennedy/user/pages/01.home/06-autrement";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>Être au travail (mais pas seulement)
Depuis plus de 50 ans, des moments de partage sont organisés tout au long de l’année pour donner sa place à la convivialité, à la force du « être ensemble »</p>
<p>===</p>
{% for p in page.collection %}
<article class=\"center\">
{{ p.content }}
</article>
{% endfor %}", "@Page:/Users/dev/Boulot/Context/Ateliers Kennedy/ateliers-kennedy/user/pages/01.home/06-autrement", "");
    }
}
