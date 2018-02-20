<?php

/* partials/navigation.html.twig */
class __TwigTemplate_e2bdc00677b10ffc59c03d3bc3c426445630dce3fe0678ec8410ed8def03641e extends Twig_Template
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
        if (($this->getAttribute(($context["page"] ?? null), "slug", array()) == "home")) {
            // line 2
            echo "    <div class=\"grid home-nav\">
        <div>
            <div><a href=\"#presentation\">Présentation</a></div>
            <div><a href=\"#medico\">Médico-social</a></div>
            <div><a href=\"#ateliers\">Ateliers</a></div>
            <div><a href=\"#actionco\">Actions commerciales</a></div>
        </div>
        <div>
            <div><a href=\"#saesat\">SAESAT</a></div>
            <div><a href=\"#autrement\">Autrement</a></div>
            <div><a href=\"#partenaires\">Partenaires</a></div>
            <div><a href=\"#contact\">Contact - Infos</a></div>
        </div>
    </div>
";
        } else {
            // line 17
            echo "    <div class=\"grid page-nav\">
        <div>
            <div><a href=\"/\">Présentation</a></div>
            <div><a href=\"/home/\">Médico-social</a></div>
            <div><a href=\"/home/\">Ateliers</a></div>
            <div><a href=\"/home/\">Actions commerciales</a></div>
        </div>
        <div>
            <div><a href=\"/home/#saesat\">SAESAT</a></div>
            <div><a href=\"/home/#autrement\">Autrement</a></div>
            <div><a href=\"/home/#partenaires\">Partenaires</a></div>
            <div><a href=\"/home/#contact\">Contact - Infos</a></div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 17,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if page.slug == 'home' %}
    <div class=\"grid home-nav\">
        <div>
            <div><a href=\"#presentation\">Présentation</a></div>
            <div><a href=\"#medico\">Médico-social</a></div>
            <div><a href=\"#ateliers\">Ateliers</a></div>
            <div><a href=\"#actionco\">Actions commerciales</a></div>
        </div>
        <div>
            <div><a href=\"#saesat\">SAESAT</a></div>
            <div><a href=\"#autrement\">Autrement</a></div>
            <div><a href=\"#partenaires\">Partenaires</a></div>
            <div><a href=\"#contact\">Contact - Infos</a></div>
        </div>
    </div>
{% else %}
    <div class=\"grid page-nav\">
        <div>
            <div><a href=\"/\">Présentation</a></div>
            <div><a href=\"/home/\">Médico-social</a></div>
            <div><a href=\"/home/\">Ateliers</a></div>
            <div><a href=\"/home/\">Actions commerciales</a></div>
        </div>
        <div>
            <div><a href=\"/home/#saesat\">SAESAT</a></div>
            <div><a href=\"/home/#autrement\">Autrement</a></div>
            <div><a href=\"/home/#partenaires\">Partenaires</a></div>
            <div><a href=\"/home/#contact\">Contact - Infos</a></div>
        </div>
    </div>
{% endif %}
", "partials/navigation.html.twig", "/Users/dev/Downloads/grav-admin/user/themes/ak/templates/partials/navigation.html.twig");
    }
}
