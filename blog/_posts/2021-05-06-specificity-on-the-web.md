---
title: Specificity on the Web
slug: specificity-on-the-web
date: 2021-05-06
categories: html, css
---

<style>
table {
  //font-size: 1rem;
  width: 100%;
  max-width: 100% !important;
  overflow: hidden;
  background-color: transparent;
  border-collapse: collapse;
  border-spacing: 0;
}
.special-highlight-1 {
  color: #ec5f67
}
.special-highlight-2 {
  color: #99c794;
}
.special-highlight-3 {
  color: #c594c5;
}
.special-highlight-4 {
  color: #fac863;
}
#specificity-illustration {
  max-width: 100%;
  height: auto;
}
</style>

# Specificity on the Web

<p class='timestamp'><time datetime='06-05-2021'>06-05-2021</time></p>
<hr>

I've never given much thought to CSS specificity. I guess the cascading aspects of CSS was logical enough to never warrant much investigation.

Lately though, while browsing online, I stumbled upon the [MDN post](https://developer.mozilla.org/en-US/docs/Web/CSS/Specificity) that went into details about CSS specificity. This sparked my curiosity!

When talking about specificity, we're talking about the priority with which styles apply to elements on a HTML page.
Not every class, pseudo-class and ID is equal, and the cascading nature of CSS does not decide everything!

Generally speaking, CSS specificity is ranked with 5 values illustrated in the chart below, starting with the CSS rule `!important` which has the highest specificity, and ending with the universal CSS selector `*{}` which the lowest specificity.

<table>
  <thead>
    <tr>
      <th>Specificity</th>
      <th>Type</th>
      <!-- <th>Example</th> -->
      <th>Calculated</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1,0,0,0,0</td>
      <td>!important</td>
      <!-- <td><span class="special-highlight-1">body</span> {<br>
      &nbsp;&nbsp;&nbsp;<span class="special-highlight-2">background</span>: <span class="special-highlight-3">firebrick</span> <span class="special-highlight-1">!important</span>;<br>
      }
      </td> -->
      <td>10000</td>
    </tr>
    <tr>
      <td>0,1,0,0,0</td>
      <td>&lt;style=“”&gt;</td>
      <!-- <td><span class="special-highlight-1">&lt;div</span> <span class="special-highlight-2">style</span>=<span class="special-highlight-4">"background: lightsalmon"</span><span class="special-highlight-1">&gt;<wbr>&lt;/div&gt;</span></td> -->
      <td>1000</td>
    </tr>
    <tr>
      <td>0,0,1,0,0</td>
      <td>IDs</td>
      <!-- <td><span class="special-highlight-1">#myID</span> {<br>
      &nbsp;&nbsp;&nbsp;<span class="special-highlight-2">background</span>: <span class="special-highlight-3">olivedrab</span>;<br>
      }
      </td> -->
      <td>100</td>
    </tr>
    <tr>
      <td>0,0,0,1,0</td>
      <td>Classes,<wbr> Pseudo-classes,<wbr> Attributes</td>
      <!-- <td><span class="special-highlight-1">.myClass</span> {<br>
      &nbsp;&nbsp;&nbsp;<span class="special-highlight-2">background</span>: <span class="special-highlight-3">skyblue</span>;<br>
      }<br>
      <span class="special-highlight-1">a:hover</span> {<br>
      &nbsp;&nbsp;&nbsp;<span class="special-highlight-2">background</span>: <span class="special-highlight-3">springgreen</span>;<br>
      }<br>
      <span class="special-highlight-1">a[target="_blank" rel="noopener"]</span> {<br>
      &nbsp;&nbsp;&nbsp;<span class="special-highlight-2">background</span>: <span class="special-highlight-3">navajowhite</span>;<br>
      }
      </td> -->
      <td>10</td>
    </tr>
    <tr>
      <td>0,0,0,0,1</td>
      <td>Elements</td>
      <!-- <td><span class="special-highlight-1">div</span> {<br>
      &nbsp;&nbsp;&nbsp;<span class="special-highlight-2">background</span>: <span class="special-highlight-3">fuchsia</span>;<br>
      }
      </td> -->
      <td>1</td>
    </tr>
    <tr>
      <td>0,0,0,0,0</td>
      <td>* (Universal selector)</td>
      <!-- <td><span class="special-highlight-1">*</span> {<br>
      &nbsp;&nbsp;&nbsp;<span class="special-highlight-2">background</span>: <span class="special-highlight-3">goldenrod</span>;<br>
      }
      </td> -->
      <td>0</td>
    </tr>
  </tbody>
</table>

Or represented visually:

<svg id="specificity-illustration" width="1173px" height="990px" viewBox="0 0 1173 990" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
    <linearGradient x1="-2.91415424%" y1="25.0612191%" x2="100%" y2="64.9023274%" id="linearGradient-1">
        <stop stop-color="#63498A" offset="0%"></stop>
        <stop stop-color="#6E0058" offset="100%"></stop>
    </linearGradient>
    <path d="M283,21 L542,162.477 L542,154.157288 L566,154.157288 L566,175.157288 L565.214,175.157 L565.842712,175.5 L283,330 L0.157287525,175.5 L0.785,175.157 L0,175.157288 L0,154.157288 L24,154.157288 L24,162.476 L283,21 Z" id="path-2"></path>
    <linearGradient x1="2.26904571%" y1="31.6460125%" x2="107.262049%" y2="70.9223505%" id="linearGradient-3">
        <stop stop-color="#8634FF" offset="0%"></stop>
        <stop stop-color="#A60185" offset="100%"></stop>
    </linearGradient>
    <polygon id="path-4" points="0.157287525 154.5 283 8.57647287e-15 565.842712 154.5 283 309"></polygon>
    <path d="M283,21 L542,162.477 L542,154.157288 L566,154.157288 L566,175.157288 L565.214,175.157 L565.842712,175.5 L283,330 L0.157287525,175.5 L0.785,175.157 L0,175.157288 L0,154.157288 L24,154.157288 L24,162.476 L283,21 Z" id="path-5"></path>
    <polygon id="path-6" points="0.157287525 154.5 283 8.57647287e-15 565.842712 154.5 283 309"></polygon>
    <path d="M283,21 L542,162.477 L542,154.157288 L566,154.157288 L566,175.157288 L565.214,175.157 L565.842712,175.5 L283,330 L0.157287525,175.5 L0.785,175.157 L0,175.157288 L0,154.157288 L24,154.157288 L24,162.476 L283,21 Z" id="path-7"></path>
    <polygon id="path-8" points="0.157287525 154.5 283 8.57647287e-15 565.842712 154.5 283 309"></polygon>
    <path d="M283,21 L542,162.477 L542,154.157288 L566,154.157288 L566,175.157288 L565.214,175.157 L565.842712,175.5 L283,330 L0.157287525,175.5 L0.785,175.157 L0,175.157288 L0,154.157288 L24,154.157288 L24,162.476 L283,21 Z" id="path-9"></path>
    <polygon id="path-10" points="0.157287525 154.5 283 8.57647287e-15 565.842712 154.5 283 309"></polygon>
    <path d="M283,21 L542,162.477 L542,154.157288 L566,154.157288 L566,175.157288 L565.214,175.157 L565.842712,175.5 L283,330 L0.157287525,175.5 L0.785,175.157 L0,175.157288 L0,154.157288 L24,154.157288 L24,162.476 L283,21 Z" id="path-11"></path>
    <polygon id="path-12" points="0.157287525 154.5 283 8.57647287e-15 565.842712 154.5 283 309"></polygon>
    <path d="M283,21 L542,162.477 L542,154.157288 L566,154.157288 L566,175.157288 L565.214,175.157 L565.842712,175.5 L283,330 L0.157287525,175.5 L0.785,175.157 L0,175.157288 L0,154.157288 L24,154.157288 L24,162.476 L283,21 Z" id="path-13"></path>
    <polygon id="path-14" points="0.157287525 154.5 283 8.57647287e-15 565.842712 154.5 283 309"></polygon>
    <path d="M283,21 L542,162.477 L542,154.157288 L566,154.157288 L566,175.157288 L565.214,175.157 L565.842712,175.5 L283,330 L0.157287525,175.5 L0.785,175.157 L0,175.157288 L0,154.157288 L24,154.157288 L24,162.476 L283,21 Z" id="path-15"></path>
    <polygon id="path-16" points="0.157287525 154.5 283 8.57647287e-15 565.842712 154.5 283 309"></polygon>
    <path d="M283,21 L542,162.477 L542,154.157288 L566,154.157288 L566,175.157288 L565.214,175.157 L565.842712,175.5 L283,330 L0.157287525,175.5 L0.785,175.157 L0,175.157288 L0,154.157288 L24,154.157288 L24,162.476 L283,21 Z" id="path-17"></path>
    <polygon id="path-18" points="0.157287525 154.5 283 8.57647287e-15 565.842712 154.5 283 309"></polygon>
    <text id="text-19" font-family="Helvetica" font-size="25" font-weight="normal" letter-spacing="0.928571429" fill="#FFFFFF">
        <tspan x="115" y="232">!important</tspan>
    </text>
    <filter x="-2.5%" y="-10.0%" width="103.3%" height="113.3%" filterUnits="objectBoundingBox" id="filter-20">
        <feOffset dx="-2" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
    </filter>
    <text id="text-21" font-family="Helvetica" font-size="25" font-weight="normal" letter-spacing="0.928571429" fill="#FFFFFF">
        <tspan x="412.755786" y="714.957927">Pseudo</tspan>
    </text>
    <filter x="-3.3%" y="-10.0%" width="104.4%" height="113.3%" filterUnits="objectBoundingBox" id="filter-22">
        <feOffset dx="-2" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
    </filter>
    <text id="text-23" font-family="Helvetica" font-size="25" font-weight="normal" letter-spacing="0.928571429" fill="#FFFFFF">
        <tspan x="716.595371" y="892.633659">Attributes</tspan>
    </text>
    <filter x="-2.6%" y="-10.0%" width="103.5%" height="113.3%" filterUnits="objectBoundingBox" id="filter-24">
        <feOffset dx="-2" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
    </filter>
    <text id="text-25" font-family="Helvetica" font-size="25" font-weight="normal" letter-spacing="0.928571429" fill="#FFFFFF">
        <tspan x="100.941474" y="339.234736">&lt;style=“”&gt;</tspan>
    </text>
    <filter x="-2.5%" y="-10.0%" width="103.3%" height="113.3%" filterUnits="objectBoundingBox" id="filter-26">
        <feOffset dx="-2" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
    </filter>
    <text id="text-27" font-family="Helvetica" font-size="25" font-weight="normal" letter-spacing="0.928571429" fill="#FFFFFF">
        <tspan x="105.740622" y="431.986402">IDs</tspan>
    </text>
    <filter x="-7.3%" y="-10.0%" width="109.8%" height="113.3%" filterUnits="objectBoundingBox" id="filter-28">
        <feOffset dx="-2" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
    </filter>
    <text id="text-29" font-family="Helvetica" font-size="25" font-weight="normal" letter-spacing="0.928571429" fill="#FFFFFF">
        <tspan x="102.781059" y="551.910468">Classes</tspan>
    </text>
    <filter x="-3.1%" y="-10.0%" width="104.2%" height="113.3%" filterUnits="objectBoundingBox" id="filter-30">
        <feOffset dx="-2" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
    </filter>
    <text id="text-31" font-family="Helvetica" font-size="25" font-weight="normal" letter-spacing="0.928571429" fill="#FFFFFF">
        <tspan x="99.0635807" y="654.755773">Elements</tspan>
    </text>
    <filter x="-2.7%" y="-10.0%" width="103.6%" height="113.3%" filterUnits="objectBoundingBox" id="filter-32">
        <feOffset dx="-2" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
    </filter>
    <text id="text-33" font-family="Helvetica" font-size="25" font-weight="normal" letter-spacing="0.928571429" fill="#FFFFFF">
        <tspan x="100.911147" y="726.291686">*</tspan>
    </text>
    <filter x="-27.3%" y="-10.0%" width="136.4%" height="113.3%" filterUnits="objectBoundingBox" id="filter-34">
        <feOffset dx="-2" dy="-2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
        <feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.5 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
    </filter>
</defs>
<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Group-2">
        <g id="layer" transform="translate(0.000000, 528.000000)">
            <g id="Combined-Shape">
                <use fill="#898989" xlink:href="#path-2"></use>
                <use fill="url(#linearGradient-1)" xlink:href="#path-2"></use>
            </g>
            <g id="Rectangle-Copy-8">
                <use fill="#D8D8D8" xlink:href="#path-4"></use>
                <use fill="url(#linearGradient-3)" xlink:href="#path-4"></use>
            </g>
        </g>
        <g id="layer-copy-7" transform="translate(0.000000, 431.000000)">
            <g id="Combined-Shape">
                <use fill="#898989" xlink:href="#path-5"></use>
                <use fill="url(#linearGradient-1)" xlink:href="#path-5"></use>
            </g>
            <g id="Rectangle-Copy-8">
                <use fill="#D8D8D8" xlink:href="#path-6"></use>
                <use fill="url(#linearGradient-3)" xlink:href="#path-6"></use>
            </g>
        </g>
        <g id="layer-copy" transform="translate(0.000000, 330.000000)">
            <g id="Combined-Shape">
                <use fill="#898989" xlink:href="#path-7"></use>
                <use fill="url(#linearGradient-1)" xlink:href="#path-7"></use>
            </g>
            <g id="Rectangle-Copy-8">
                <use fill="#D8D8D8" xlink:href="#path-8"></use>
                <use fill="url(#linearGradient-3)" xlink:href="#path-8"></use>
            </g>
        </g>
        <g id="layer-copy-2" transform="translate(0.000000, 223.000000)">
            <g id="Combined-Shape">
                <use fill="#898989" xlink:href="#path-9"></use>
                <use fill="url(#linearGradient-1)" xlink:href="#path-9"></use>
            </g>
            <g id="Rectangle-Copy-8">
                <use fill="#D8D8D8" xlink:href="#path-10"></use>
                <use fill="url(#linearGradient-3)" xlink:href="#path-10"></use>
            </g>
        </g>
        <g id="layer-copy-5" transform="translate(307.000000, 495.000000)">
            <g id="Combined-Shape">
                <use fill="#898989" xlink:href="#path-11"></use>
                <use fill="url(#linearGradient-1)" xlink:href="#path-11"></use>
            </g>
            <g id="Rectangle-Copy-8">
                <use fill="#D8D8D8" xlink:href="#path-12"></use>
                <use fill="url(#linearGradient-3)" xlink:href="#path-12"></use>
            </g>
        </g>
        <g id="layer-copy-6" transform="translate(607.000000, 660.000000)">
            <g id="Combined-Shape">
                <use fill="#898989" xlink:href="#path-13"></use>
                <use fill="url(#linearGradient-1)" xlink:href="#path-13"></use>
            </g>
            <g id="Rectangle-Copy-8">
                <use fill="#D8D8D8" xlink:href="#path-14"></use>
                <use fill="url(#linearGradient-3)" xlink:href="#path-14"></use>
            </g>
        </g>
        <g id="layer-copy-3" transform="translate(0.000000, 112.000000)">
            <g id="Combined-Shape">
                <use fill="#898989" xlink:href="#path-15"></use>
                <use fill="url(#linearGradient-1)" xlink:href="#path-15"></use>
            </g>
            <g id="Rectangle-Copy-8">
                <use fill="#D8D8D8" xlink:href="#path-16"></use>
                <use fill="url(#linearGradient-3)" xlink:href="#path-16"></use>
            </g>
        </g>
        <g id="layer-copy-4">
            <g id="Combined-Shape">
                <use fill="#898989" xlink:href="#path-17"></use>
                <use fill="url(#linearGradient-1)" xlink:href="#path-17"></use>
            </g>
            <g id="Rectangle-Copy-8">
                <use fill="#D8D8D8" xlink:href="#path-18"></use>
                <use fill="url(#linearGradient-3)" xlink:href="#path-18"></use>
            </g>
        </g>
        <g id="!important" transform="translate(175.500000, 223.000000) rotate(28.000000) translate(-175.500000, -223.000000) " fill="#FFFFFF" fill-opacity="1">
            <use filter="url(#filter-20)" xlink:href="#text-19"></use>
            <use xlink:href="#text-19"></use>
        </g>
        <g id="Pseudo" transform="translate(458.255786, 705.957927) rotate(28.000000) translate(-458.255786, -705.957927) " fill="#FFFFFF" fill-opacity="1">
            <use filter="url(#filter-22)" xlink:href="#text-21"></use>
            <use xlink:href="#text-21"></use>
        </g>
        <g id="Attributes" transform="translate(774.095371, 883.633659) rotate(28.000000) translate(-774.095371, -883.633659) " fill="#FFFFFF" fill-opacity="1">
            <use filter="url(#filter-24)" xlink:href="#text-23"></use>
            <use xlink:href="#text-23"></use>
        </g>
        <g id="&lt;style=“”&gt;" transform="translate(161.941474, 330.234736) rotate(28.000000) translate(-161.941474, -330.234736) " fill="#FFFFFF" fill-opacity="1">
            <use filter="url(#filter-26)" xlink:href="#text-25"></use>
            <use xlink:href="#text-25"></use>
        </g>
        <g id="IDs" transform="translate(126.240622, 422.986402) rotate(28.000000) translate(-126.240622, -422.986402) " fill="#FFFFFF" fill-opacity="1">
            <use filter="url(#filter-28)" xlink:href="#text-27"></use>
            <use xlink:href="#text-27"></use>
        </g>
        <g id="Classes" transform="translate(150.781059, 542.910468) rotate(28.000000) translate(-150.781059, -542.910468) " fill="#FFFFFF" fill-opacity="1">
            <use filter="url(#filter-30)" xlink:href="#text-29"></use>
            <use xlink:href="#text-29"></use>
        </g>
        <g id="Elements" transform="translate(155.063581, 645.755773) rotate(28.000000) translate(-155.063581, -645.755773) " fill="#FFFFFF" fill-opacity="1">
            <use filter="url(#filter-32)" xlink:href="#text-31"></use>
            <use xlink:href="#text-31"></use>
        </g>
        <g id="*" transform="translate(106.411147, 717.291686) rotate(28.000000) translate(-106.411147, -717.291686) " fill="#FFFFFF" fill-opacity="1">
            <use filter="url(#filter-34)" xlink:href="#text-33"></use>
            <use xlink:href="#text-33"></use>
        </g>
    </g>
</g>
</svg>


Using a selector like this:

```HTML
<a href="" class="highlight">Test Link</a>
```

```CSS
a.highlight:hover{
   background: skyblue;
}
```

Would net the combined specificity: `0,0,0,2,1`. The class `.hightlight` accounts for `0,0,0,1,0`, the pseuod-class `:hover` accounts for `0,0,0,1,0` and lastly the element `a` accounts for `0,0,0,0,1`, resulting in `0,0,0,2,1`.

This all result in a calculated specificity of **21**.

If you were to add an ID to this element, and add styling to the ID:

```HTML
<a href="" class="highlight" id="link">Test Link</a>
```

```CSS
a.highlight:hover{
   background: skyblue;
}
#link {
   background: dodgerblue;
}
```

This would override the first selector completely, having a calculated specificity of **100**, which vastly outweighs the first selector's **21**.
