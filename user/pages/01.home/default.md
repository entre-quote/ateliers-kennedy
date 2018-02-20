---
title: Accueil
body_classes: home
process:
    markdown: true
    twig: true
content:
    items: '@self.children'
---

{% set presentation = page.collection( { items: { '@taxonomy.tag': 'presentation' } } ) %}
{% set medicosocial = page.collection( { items: { '@taxonomy.tag': 'medico' } } ) %}
{% set actioncom = page.collection( { items: { '@taxonomy.tag': 'actioncom' } } ) %}
{% set saesat = page.collection( { items: { '@taxonomy.tag': 'saesat' } } ) %}
{% set autrement = page.collection( { items: { '@taxonomy.tag': 'autrement' } } ) %}
{% set partenaires = page.collection( { items: { '@taxonomy.tag': 'partenaires' } } ) %}
{% set atelier = page.collection( { items: { '@taxonomy.tag': 'atelier' } } ) %}
{% set agenda = page.collection( { items: { '@taxonomy.tag': 'agenda' } } ) %}
{% set carrousel = page.collection( { items: { '@taxonomy.tag': 'carrousel' } } ) %}

<div class="intro grid">
    <div>
        <img src="{{ theme_url }}/images/logo-ak.svg" alt="AK">
        <a href="http://www.adpep34.com/"><img src="{{ theme_url }}/images/logo-pep.jpg" alt="Les PEP 34 - La solidarité en action"></a>
    </div>
    <div>
        <span>
        L’ESAT Ateliers Kennedy<br>
        est un établissement de l’association ADPEP34
        <span>
    </div>
    <div>
        <a href="http://www.adpep34.com">www.adpep34.com</a>
    </div>
</div>

<div class="home-slider">

  {% for p in carrousel %}
  {{ p.content }}
  {% endfor %}

</div>

<article id=presentation>
<div class="wrapper">
{% for p in presentation %}
<h2>{{ p.title }}</h2>
<div>{{ p.summary }}</div>
<a href="{{ p.url }}" class="read-more">Plus</a>
{% endfor %}
</div>
</article>

{% for p in agenda %}
<article class=blue id="agenda">
<div class="wrapper">
    <h2>{{ p.title }}</h2>
    {{ p.content }}
</div>
</article>
{% endfor %}

<article class=light-blue id="medico">
<div class="wrapper">
{% for p in medicosocial %}
<h2>{{ p.title }}</h2>
<div>{{ p.summary }}</div>
<a href="{{ p.url }}" class="read-more">Plus</a>
{% endfor %}
</div>
</article>

<article class="atelier" id=ateliers>
<div class="wrapper">
{% for p in atelier %}
    <h2>{{ p.title }}</h2>
    {{ p.content }}
{% endfor %}
</div>
</article>

<article class=blue id=actionco>
<div class="wrapper">
{% for p in actioncom %}
<h2>{{ p.title }}</h2>
<div>{{ p.summary }}</div>
<a href="{{ p.url }}" class="read-more">Plus</a>
{% endfor %}
</div>
</article>

<article id="saesat">
<div class="wrapper">
{% for p in saesat %}
<h2>{{ p.title }}</h2>
<div>{{ p.summary }}</div>
<a href="{{ p.url }}" class="read-more">Plus</a>
{% endfor %}
</div>
</article>

<article class=light-blue id=autrement>
<div class="wrapper">
{% for p in autrement %}
<h2>{{ p.title }}</h2>
<div>{{ p.summary }}</div>
<a href="{{ p.url }}" class="read-more">Plus</a>
{% endfor %}
</div>
</article>

<article id=partenaires>
<div class="wrapper">
{% for p in partenaires %}
<h2>{{ p.title }}</h2>
<div>{{ p.summary }}</div>
<a href="{{ p.url }}" class="read-more">Plus</a>
{% endfor %}
</div>
</article>

<article class="contact" id=contact>
<div class="wrapper">
<h2>Contact</h2>
<form action="https://formspree.io/erick@entre-quote.com" method="POST">
    <div class=grid>
      <input type="text" name="name" placeholder="Nom Prénom" required>
      <input type="email" name="_replyto" placeholder="Adresse email" required>
    </div>
    <input type="text" name="_subject" placeholder="Sujet" required>
    <textarea name="message" placeholder="Message" required></textarea>
    <button type="submit">Envoi</button>
</form>
</div>
</article>

<article class="light-blue infos">
    <div class=wrapper>
        <h2>Infos</h2>
        <div class=grid>
            <div>
                <span class="bold">Horaires d’ouvertures</span>
                <span>Lundi / Mercredi / Jeudi de 8h25 à 16h25</span>
                <span>Mardi / Vendredi de 8h25 à 15h55</span>
            </div>
            <div>
                <span class="bold">Accès</span>
                <span>Bus lignes 11, 7 et La Ronde - Arrêt "Les Bouisses"</span>
                <span>L’établissement dispose d’un parking</span>
            </div>
        </div>
    </div>
</article>
