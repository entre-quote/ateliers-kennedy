<?php

/* @Page:/Users/dev/Boulot/Context/Ateliers Kennedy/ateliers-kennedy/user/pages/03.ateliers */
class __TwigTemplate_7d1777efa1cd0c63e50cb44d8d064165ad21aa46aa064cfbe736f319ed280255 extends Twig_Template
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
        echo "<p>L’ESAT Ateliers Kennedy propose une diversité de métiers et d’activités répartis en deux pôles :<br />
La production sur site et les prestations extérieures</p>
<div class=\"grid-3-small-2 has-gutter\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 5
            $context["first_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
            // line 6
            echo "
<article>

<a href=\"";
            // line 9
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">
    <div class=atelier-img>
        ";
            // line 11
            echo $this->getAttribute(($context["first_image"] ?? null), "cropResize", array(0 => 370, 1 => 250), "method");
            echo "
    </div>
    <h2>";
            // line 13
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h2>
    <p>";
            // line 14
            echo $this->getAttribute($context["p"], "summary", array());
            echo "</p>
</a>
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/dev/Boulot/Context/Ateliers Kennedy/ateliers-kennedy/user/pages/03.ateliers";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  49 => 14,  45 => 13,  40 => 11,  35 => 9,  30 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>L’ESAT Ateliers Kennedy propose une diversité de métiers et d’activités répartis en deux pôles :<br />
La production sur site et les prestations extérieures</p>
<div class=\"grid-3-small-2 has-gutter\">
{% for p in page.collection %}
{% set first_image = p.media.images|first %}

<article>

<a href=\"{{ p.url }}\">
    <div class=atelier-img>
        {{ first_image.cropResize(370,250) }}
    </div>
    <h2>{{ p.title }}</h2>
    <p>{{ p.summary }}</p>
</a>
</article>
{% endfor %}

</div>", "@Page:/Users/dev/Boulot/Context/Ateliers Kennedy/ateliers-kennedy/user/pages/03.ateliers", "");
    }
}
