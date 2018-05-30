# ![A small fox logo][web-logo] **[TheVulpeVenture.com][web-link]**

## Custom WordPress theme derived from the [TwentySeventeen theme][wp-link].
---

This theme incorporates a custom div that utilizes wordpress' `the_post_thumbnail_url` to generate custom backgrounds for pages based on the content's featured images.

```
<div id="content-background" style='background-image: url("<?php the_post_thumbnail_url( 'thevulpeventure-featured-image'); ?>")'></div>
```
![This is an example of thevulpeventure.com. It showcases the custom backgrounds generated with the custom code above][web-image]


### The website hopes to achieve the following:
---
- Simply and quickly separate all post content by type (i.e. recipe) and content (i.e. video), which is achieved via categories and post-type templates.
- Allow for a level of visual customization without the need for the author to code, achieved with the custom code above.
- Findable, achieved with WordPress' built in SEO in combination with SEO strategies of reblogging and hyperlinking.

[©Poly entertainment][poly-link]

[web-link]: https://thevulpeventure.com
[wp-link]: https://wordpress.org/themes/twentyseventeen/
[poly-link]: http://www.polyentertainment.com/
[web-image]: https://i.imgur.com/BlngjQB.jpg
[web-logo]: https://i.imgur.com/Zg3sAZY.png