---
title: Sass Mixin Grid system
slug: sass-mixin-grid-system
date: 2015-11-15
categories: css
---

# Sass Mixin Grid system
<p class='timestamp'><time datetime='15-11-2015'>15-11-2015</time></p>
<hr>

Regular CSS grid systems have many upsides, but certainly a few downsides as well. One of the bigger downsides is that you often end up with one `div` with a ton of class. This makes the markup clumsy and unreadable! To combat this I've made a SCSS Mixin grid system. It's modular, simple and incredibly easy to use.

To use the grid system you'll need to use two separate Mixins. One for the container and one for every grid item.

### The container Mixin
``` css
@mixin row() {
  font-size: 0;
  box-sizing: border-box;
  padding: 0 10px 0 10px;
  max-width: 1200px;
  margin: 0 auto;
  @media only screen and (min-width: 750px) {
    padding: 0 10% 0 10%;
  }
  @media only screen and (min-width: 975px) {
    padding: 0 5% 0 5%;
  }
  @media only screen and (min-width: 1200px) {
    padding: 0;
  }
}
```

#### How to use
``` css
.wrapper {
  @include row();
}
```

This Mixin takes no values. It simply sets the size and position of the container, and makes sure that it'll adapt to different screen sizes. It saves

<hr>

### The grid Item
``` css
@mixin col($col, $sum, $gap: 1em, $align: top) {
  width: 100%;
  font-size: 16px;
  display: inline-block;
  vertical-align: $align;
  box-sizing: border-box;
  padding-left: $gap;
  padding-right: $gap;
  @media only screen and (min-width: 750px) {
    width: percentage($col/$sum);
    vertical-align: $align;
  }
}
```

The grid Mixin is vastly more exiting. It takes 4 paramaters:
1. $col - The amount of columns you want this grid item to take up
2. $sum - The total amount of columns in your grid (12 is a good number)
3. $gap - The left and right padding. The standard is `1em`
4. $align - The vertical alignment of the item


You can easily modify the Mixin, for example to add additional breakpoints to modify the grid.

#### How to use
``` css
.content {
 @include col(9,12,2em,bottom);
}
.sidebar {
 @include col(3,12);
}
```

### Example
<p data-height="450" data-theme-id="16012" data-slug-hash="LpozKX" data-default-tab="result" data-user="triss90" class='codepen'>See the Pen <a href='http://codepen.io/triss90/pen/LpozKX/'>SASS Mixin Grid</a> by Tristan Oliver Mose Jensen White (<a href='http://codepen.io/triss90'>@triss90</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//assets.codepen.io/assets/embed/ei.js"></script>
