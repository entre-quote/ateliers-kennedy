---
title: Ateliers
published: true
taxonomy:
    tag:
        - atelier
process:
    markdown: true
    twig: true
content:
    items: '@self.children'
    order:
        by: folder
        dir: asc
    limit: 0
    pagination: false
---

L’ESAT Ateliers Kennedy propose une diversité de métiers et d’activités répartis en deux pôles :  
La production sur site et les prestations extérieures

<div class="grid-3-small-2 has-gutter">
{% for p in page.collection %}
{% set first_image = p.media.images|first %}


<article>

<a href="{{ p.url }}">
    <div class=atelier-img>
        {{ first_image.cropResize(370,250) }}
    </div>
    <h2>{{ p.title }}</h2>
    <p>{{ p.summary }}</p>
</a>
</article>
{% endfor %}

</div>
