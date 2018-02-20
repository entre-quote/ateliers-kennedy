<?php

/* partials/base.html.twig */
class __TwigTemplate_b1a18e7eda5a4964ae4eb5632c75de02cc45283a6660e7652eee5791b51ee9d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "</head>
<body id=\"top\" class=\"";
        // line 26
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

    ";
        // line 28
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "
    ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
    ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "
    ";
        // line 76
        $this->displayBlock('bottom', $context, $blocks);
        // line 88
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "http://yui.yahooapis.com/pure/0.6.0/pure-min.css", 1 => 100), "method");
        // line 18
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", 1 => 99), "method");
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/styles.css", 1 => 95), "method");
        // line 21
        echo "    ";
    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        // line 29
        echo "    <header class=\"header\">
        <div class=\"\">

            <a href=\"";
        // line 32
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\" class=\"logo-wrapper\">
                <h1 class=\"logo\">
                    Ateliers Kennedy
                </h1>
                <span class=\"logo\">ESAT</span>
            </a>
            ";
        // line 38
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 45
        echo "        </div>
    </header>
    ";
    }

    // line 38
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 39
        echo "            <nav class=\"main-nav\">
                <a href=\"\" class=\"mobile-menu\"><span class=\"bar\"></span></a>

                ";
        // line 42
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 42)->display($context);
        // line 43
        echo "            </nav>
            ";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "    <main>
        ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "    </main>
    ";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        // line 56
        echo "    <footer>
        <div class=\"wrapper grid-3-small-2\">
            <div>
                <h1 class=\"logo\">Ateliers Kennedy</h1>
            </div>
            <div>
                <address>
                    <span>285 Rue du Mas de Prunet</span>
                34070 Montpellier
                </address>
            </div>
            <div>
                <span>04 67 42 62 78</span>
                <a href=\"mailto:accueil@ak-adpep34.fr\">accueil@ak-adpep34.fr</a>
            </div>
        </div>
        <a href=\"#top\" class=\"scroll-to-top\"><img src=\"";
        // line 72
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/scroll.svg");
        echo "\" alt=\"\"></a>
    </footer>
    ";
    }

    // line 76
    public function block_bottom($context, array $blocks = array())
    {
        // line 77
        echo "
    ";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 84
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/init.js");
        echo "\"></script>
    ";
        // line 85
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "

    ";
    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 80
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 80,  246 => 79,  243 => 78,  236 => 85,  232 => 84,  225 => 81,  223 => 78,  220 => 77,  217 => 76,  210 => 72,  192 => 56,  189 => 55,  184 => 51,  179 => 52,  177 => 51,  174 => 50,  171 => 49,  166 => 43,  164 => 42,  159 => 39,  156 => 38,  150 => 45,  148 => 38,  139 => 32,  134 => 29,  131 => 28,  127 => 21,  124 => 20,  122 => 19,  119 => 18,  116 => 17,  113 => 16,  105 => 22,  103 => 16,  98 => 14,  94 => 13,  91 => 12,  89 => 11,  78 => 7,  75 => 6,  72 => 5,  65 => 88,  63 => 76,  60 => 75,  58 => 55,  55 => 54,  53 => 49,  50 => 48,  48 => 28,  43 => 26,  40 => 25,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
    {% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
    {% do assets.addCss('http://yui.yahooapis.com/pure/0.6.0/pure-min.css', 100) %}
    {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', 99) %}
    {# do assets.addCss('theme://css/custom.css', 96) #}
    {% do assets.addCss('theme://css-compiled/styles.css', 95) %}
    {% endblock %}
    {{ assets.css() }}

    {% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

    {% block header %}
    <header class=\"header\">
        <div class=\"\">

            <a href=\"{{ base_url == '' ? '/' : base_url }}\" class=\"logo-wrapper\">
                <h1 class=\"logo\">
                    Ateliers Kennedy
                </h1>
                <span class=\"logo\">ESAT</span>
            </a>
            {% block header_navigation %}
            <nav class=\"main-nav\">
                <a href=\"\" class=\"mobile-menu\"><span class=\"bar\"></span></a>

                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
        </div>
    </header>
    {% endblock %}

    {% block body %}
    <main>
        {% block content %}{% endblock %}
    </main>
    {% endblock %}

    {% block footer %}
    <footer>
        <div class=\"wrapper grid-3-small-2\">
            <div>
                <h1 class=\"logo\">Ateliers Kennedy</h1>
            </div>
            <div>
                <address>
                    <span>285 Rue du Mas de Prunet</span>
                34070 Montpellier
                </address>
            </div>
            <div>
                <span>04 67 42 62 78</span>
                <a href=\"mailto:accueil@ak-adpep34.fr\">accueil@ak-adpep34.fr</a>
            </div>
        </div>
        <a href=\"#top\" class=\"scroll-to-top\"><img src=\"{{ url('theme://images/scroll.svg') }}\" alt=\"\"></a>
    </footer>
    {% endblock %}

    {% block bottom %}

    {% block javascripts %}
    {% do assets.addJs('jquery', 100) %}
    {% endblock %}
    {{ assets.js() }}
    <script type=\"text/javascript\" src=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js\"></script>

    <script type=\"text/javascript\" src=\"{{ url('theme://js/init.js') }}\"></script>
    {{ assets.js('bottom') }}

    {% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Users/dev/Downloads/grav-admin/user/themes/ak/templates/partials/base.html.twig");
    }
}
