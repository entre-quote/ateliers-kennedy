---
title: autrement
taxonomy:
    tag:
        - autrement
process:
    markdown: true
    twig: true
cache_enable: false
visible: true
content:
    items:
        - '@self.children'
    order:
        by: default
        dir: desc
    limit: 0
    pagination: false
---

Être au travail (mais pas seulement)
Depuis plus de 50 ans, des moments de partage sont organisés tout au long de l’année pour donner sa place à la convivialité, à la force du « être ensemble »

===

{% for p in page.collection %}

<article class="center">
{{ p.content }}
</article>

{% endfor %}
