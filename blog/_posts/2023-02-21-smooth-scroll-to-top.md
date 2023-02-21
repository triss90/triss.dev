---
title: Smooth scroll-to-top
slug: smooth-scroll-to-top
date: 2023-02-21
categories: js
---

# Smooth scroll-to-top

<p class='timestamp'><time datetime='21-02-2023'>21-02-2023</time></p>
<hr>

Back in the day, circa 2010, when we needed to scroll to top we would use the jQuery library to accomplish this. 

I dug out the following snippet from a project I launched way back in 2010. 
While the project is long since obsolete, it does serve to show just how far we've come:

```javascript
// Select all links with hashes
$('a[href*="#"]')
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
    && 
    location.hostname == this.hostname
  ) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) {
          return false;
        } else {
          $target.attr('tabindex','-1');
          $target.focus();
        };
      });
    }
  }
});
```
I believe this, or at least a version of it, was originally posted by Chris Coyier over at [css-tricks.com](https://css-tricks.com),
though I can't be sure.

It simply targets all ` # ` links and applies smooth scrolling to their respective elements.

Today there's luckily a much simpler and better way to achieve this effect, and it's even available in native Javascript:

```html
<a href="#0" onclick="scrollToTop();">scroll-to-top</a>

<script>
function scrollToTop() {
  window.scrollTo({
      top: 0,
      left: 0,
      behavior: 'smooth'
  });
}
</script>
```
Simply trigger this function with a button at the position you want to scroll from and watch the window magically scroll to the top.

I've recently implemented this feature in the footer on this site.

Try it for yourself:
<a href="#0" style="display: inline;" onclick="scrollToTop();return false;" class="totop" title="Go to top" aria-label="Go to top">&#8593; Top &#8593;</a>