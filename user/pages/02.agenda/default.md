---
title: Agenda
published: true
taxonomy:
    tag:
        - agenda
process:
    markdown: true
    twig: true
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

<div class=agenda-content>

{% for p in page.collection %}

<div>
<h2 class="news-title">{{ p.title }}</h2>
{{ p.content }}
</div>

{% endfor %}
</div>
