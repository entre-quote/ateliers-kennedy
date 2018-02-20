<?php

/* @Page:/Users/dev/Boulot/Context/Ateliers Kennedy/ateliers-kennedy/user/pages/01.home */
class __TwigTemplate_16ac1c2a8095f7d0330c056630d378927c82e3c0b27513bd37321cef3a7ec7e1 extends Twig_Template
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
        $context["presentation"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.tag" => "presentation"))), "method");
        // line 2
        $context["medicosocial"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.tag" => "medico"))), "method");
        // line 3
        $context["actioncom"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.tag" => "actioncom"))), "method");
        // line 4
        $context["saesat"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.tag" => "saesat"))), "method");
        // line 5
        $context["autrement"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.tag" => "autrement"))), "method");
        // line 6
        $context["partenaires"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.tag" => "partenaires"))), "method");
        // line 7
        $context["atelier"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.tag" => "atelier"))), "method");
        // line 8
        $context["agenda"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.tag" => "agenda"))), "method");
        // line 9
        $context["carrousel"] = $this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.tag" => "carrousel"))), "method");
        // line 10
        echo "<div class=\"intro grid\">
    <div>
        <img src=\"";
        // line 12
        echo ($context["theme_url"] ?? null);
        echo "/images/logo-ak.svg\" alt=\"AK\">
        <a href=\"http://www.adpep34.com/\"><img src=\"";
        // line 13
        echo ($context["theme_url"] ?? null);
        echo "/images/logo-pep.jpg\" alt=\"Les PEP 34 - La solidarité en action\"></a>
    </div>
    <div>
        <span>
        L’ESAT Ateliers Kennedy<br>
        est un établissement de l’association ADPEP34
        <span>
    </div>
    <div>
        <a href=\"http://www.adpep34.com\">www.adpep34.com</a>
    </div>
</div>
<div class=\"home-slider\">

  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carrousel"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 28
            echo "  ";
            echo $this->getAttribute($context["p"], "content", array());
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
</div>
<article id=presentation>
<div class=\"wrapper\">
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["presentation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 35
            echo "<h2>";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h2>
<div>";
            // line 36
            echo $this->getAttribute($context["p"], "summary", array());
            echo "</div>
<a href=\"";
            // line 37
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"read-more\">Plus</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</div>
</article>
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["agenda"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 42
            echo "<article class=blue id=\"agenda\">
<div class=\"wrapper\">
    <h2>";
            // line 44
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h2>
    ";
            // line 45
            echo $this->getAttribute($context["p"], "content", array());
            echo "
</div>
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "<article class=light-blue id=\"medico\">
<div class=\"wrapper\">
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["medicosocial"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 52
            echo "<h2>";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h2>
<div>";
            // line 53
            echo $this->getAttribute($context["p"], "summary", array());
            echo "</div>
<a href=\"";
            // line 54
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"read-more\">Plus</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</div>
</article>
<article class=\"atelier\" id=ateliers>
<div class=\"wrapper\">
";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["atelier"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 61
            echo "    <h2>";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h2>
    ";
            // line 62
            echo $this->getAttribute($context["p"], "content", array());
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</div>
</article>
<article class=blue id=actionco>
<div class=\"wrapper\">
";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actioncom"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 69
            echo "<h2>";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h2>
<div>";
            // line 70
            echo $this->getAttribute($context["p"], "summary", array());
            echo "</div>
<a href=\"";
            // line 71
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"read-more\">Plus</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "</div>
</article>
<article id=\"saesat\">
<div class=\"wrapper\">
";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["saesat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 78
            echo "<h2>";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h2>
<div>";
            // line 79
            echo $this->getAttribute($context["p"], "summary", array());
            echo "</div>
<a href=\"";
            // line 80
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"read-more\">Plus</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "</div>
</article>
<article class=light-blue id=autrement>
<div class=\"wrapper\">
";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["autrement"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 87
            echo "<h2>";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h2>
<div>";
            // line 88
            echo $this->getAttribute($context["p"], "summary", array());
            echo "</div>
<a href=\"";
            // line 89
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"read-more\">Plus</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "</div>
</article>
<article id=partenaires>
<div class=\"wrapper\">
";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partenaires"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 96
            echo "<h2>";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h2>
<div>";
            // line 97
            echo $this->getAttribute($context["p"], "summary", array());
            echo "</div>
<a href=\"";
            // line 98
            echo $this->getAttribute($context["p"], "url", array());
            echo "\" class=\"read-more\">Plus</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "</div>
</article>
<article class=\"contact\" id=contact>
<div class=\"wrapper\">
<h2>Contact</h2>
<form action=\"https://formspree.io/erick@entre-quote.com\" method=\"POST\">
    <div class=grid>
      <input type=\"text\" name=\"name\" placeholder=\"Nom Prénom\" required>
      <input type=\"email\" name=\"_replyto\" placeholder=\"Adresse email\" required>
    </div>
    <input type=\"text\" name=\"_subject\" placeholder=\"Sujet\" required>
    <textarea name=\"message\" placeholder=\"Message\" required></textarea>
    <button type=\"submit\">Envoi</button>
</form>
</div>
</article>
<article class=\"light-blue infos\">
    <div class=wrapper>
        <h2>Infos</h2>
        <div class=grid>
            <div>
                <span class=\"bold\">Horaires d’ouvertures</span>
                <span>Lundi / Mercredi / Jeudi de 8h25 à 16h25</span>
                <span>Mardi / Vendredi de 8h25 à 15h55</span>
            </div>
            <div>
                <span class=\"bold\">Accès</span>
                <span>Bus lignes 11, 7 et La Ronde - Arrêt \"Les Bouisses\"</span>
                <span>L’établissement dispose d’un parking</span>
            </div>
        </div>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/dev/Boulot/Context/Ateliers Kennedy/ateliers-kennedy/user/pages/01.home";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 100,  276 => 98,  272 => 97,  267 => 96,  263 => 95,  257 => 91,  249 => 89,  245 => 88,  240 => 87,  236 => 86,  230 => 82,  222 => 80,  218 => 79,  213 => 78,  209 => 77,  203 => 73,  195 => 71,  191 => 70,  186 => 69,  182 => 68,  176 => 64,  168 => 62,  163 => 61,  159 => 60,  153 => 56,  145 => 54,  141 => 53,  136 => 52,  132 => 51,  128 => 49,  118 => 45,  114 => 44,  110 => 42,  106 => 41,  102 => 39,  94 => 37,  90 => 36,  85 => 35,  81 => 34,  75 => 30,  66 => 28,  62 => 27,  45 => 13,  41 => 12,  37 => 10,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set presentation = page.collection( { items: { '@taxonomy.tag': 'presentation' } } ) %}
{% set medicosocial = page.collection( { items: { '@taxonomy.tag': 'medico' } } ) %}
{% set actioncom = page.collection( { items: { '@taxonomy.tag': 'actioncom' } } ) %}
{% set saesat = page.collection( { items: { '@taxonomy.tag': 'saesat' } } ) %}
{% set autrement = page.collection( { items: { '@taxonomy.tag': 'autrement' } } ) %}
{% set partenaires = page.collection( { items: { '@taxonomy.tag': 'partenaires' } } ) %}
{% set atelier = page.collection( { items: { '@taxonomy.tag': 'atelier' } } ) %}
{% set agenda = page.collection( { items: { '@taxonomy.tag': 'agenda' } } ) %}
{% set carrousel = page.collection( { items: { '@taxonomy.tag': 'carrousel' } } ) %}
<div class=\"intro grid\">
    <div>
        <img src=\"{{ theme_url }}/images/logo-ak.svg\" alt=\"AK\">
        <a href=\"http://www.adpep34.com/\"><img src=\"{{ theme_url }}/images/logo-pep.jpg\" alt=\"Les PEP 34 - La solidarité en action\"></a>
    </div>
    <div>
        <span>
        L’ESAT Ateliers Kennedy<br>
        est un établissement de l’association ADPEP34
        <span>
    </div>
    <div>
        <a href=\"http://www.adpep34.com\">www.adpep34.com</a>
    </div>
</div>
<div class=\"home-slider\">

  {% for p in carrousel %}
  {{ p.content }}
  {% endfor %}

</div>
<article id=presentation>
<div class=\"wrapper\">
{% for p in presentation %}
<h2>{{ p.title }}</h2>
<div>{{ p.summary }}</div>
<a href=\"{{ p.url }}\" class=\"read-more\">Plus</a>
{% endfor %}
</div>
</article>
{% for p in agenda %}
<article class=blue id=\"agenda\">
<div class=\"wrapper\">
    <h2>{{ p.title }}</h2>
    {{ p.content }}
</div>
</article>
{% endfor %}
<article class=light-blue id=\"medico\">
<div class=\"wrapper\">
{% for p in medicosocial %}
<h2>{{ p.title }}</h2>
<div>{{ p.summary }}</div>
<a href=\"{{ p.url }}\" class=\"read-more\">Plus</a>
{% endfor %}
</div>
</article>
<article class=\"atelier\" id=ateliers>
<div class=\"wrapper\">
{% for p in atelier %}
    <h2>{{ p.title }}</h2>
    {{ p.content }}
{% endfor %}
</div>
</article>
<article class=blue id=actionco>
<div class=\"wrapper\">
{% for p in actioncom %}
<h2>{{ p.title }}</h2>
<div>{{ p.summary }}</div>
<a href=\"{{ p.url }}\" class=\"read-more\">Plus</a>
{% endfor %}
</div>
</article>
<article id=\"saesat\">
<div class=\"wrapper\">
{% for p in saesat %}
<h2>{{ p.title }}</h2>
<div>{{ p.summary }}</div>
<a href=\"{{ p.url }}\" class=\"read-more\">Plus</a>
{% endfor %}
</div>
</article>
<article class=light-blue id=autrement>
<div class=\"wrapper\">
{% for p in autrement %}
<h2>{{ p.title }}</h2>
<div>{{ p.summary }}</div>
<a href=\"{{ p.url }}\" class=\"read-more\">Plus</a>
{% endfor %}
</div>
</article>
<article id=partenaires>
<div class=\"wrapper\">
{% for p in partenaires %}
<h2>{{ p.title }}</h2>
<div>{{ p.summary }}</div>
<a href=\"{{ p.url }}\" class=\"read-more\">Plus</a>
{% endfor %}
</div>
</article>
<article class=\"contact\" id=contact>
<div class=\"wrapper\">
<h2>Contact</h2>
<form action=\"https://formspree.io/erick@entre-quote.com\" method=\"POST\">
    <div class=grid>
      <input type=\"text\" name=\"name\" placeholder=\"Nom Prénom\" required>
      <input type=\"email\" name=\"_replyto\" placeholder=\"Adresse email\" required>
    </div>
    <input type=\"text\" name=\"_subject\" placeholder=\"Sujet\" required>
    <textarea name=\"message\" placeholder=\"Message\" required></textarea>
    <button type=\"submit\">Envoi</button>
</form>
</div>
</article>
<article class=\"light-blue infos\">
    <div class=wrapper>
        <h2>Infos</h2>
        <div class=grid>
            <div>
                <span class=\"bold\">Horaires d’ouvertures</span>
                <span>Lundi / Mercredi / Jeudi de 8h25 à 16h25</span>
                <span>Mardi / Vendredi de 8h25 à 15h55</span>
            </div>
            <div>
                <span class=\"bold\">Accès</span>
                <span>Bus lignes 11, 7 et La Ronde - Arrêt \"Les Bouisses\"</span>
                <span>L’établissement dispose d’un parking</span>
            </div>
        </div>
    </div>
</article>", "@Page:/Users/dev/Boulot/Context/Ateliers Kennedy/ateliers-kennedy/user/pages/01.home", "");
    }
}
