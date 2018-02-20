---
title: carrousel
published: true
process:
    markdown: true
    twig: true
content:
    items: '@self.children'
---

{% for p in page.collection %}

<div>
{{ p.content }}
</div>

{% endfor %}
