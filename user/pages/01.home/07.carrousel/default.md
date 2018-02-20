---
title: Carrousel
published: true
taxonomy:
    tag:
        - carrousel
process:
    markdown: true
    twig: true
cache_enable: false
visible: false
content:
    items:
        - '@self.children'
    order:
        by: folder
        dir: asc
    limit: 0
    pagination: false
---

{% for p in page.collection %}
{% set first_image = p.media.images|first %}

<div>
{{ p.content }}
</div>

{% endfor %}
