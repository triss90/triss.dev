---
title: Creating a JS Library
slug: creating-a-js-library
date: 2019-05-15
categories: js
---

# Creating a JS Library
<p class='timestamp'><time datetime='15-05-2019'>15-05-2019</time></p>
<hr>

Lately I've been dabbling in JS libraries. Specifically I've been trying my hand at creating a few.
- [Muds](https://github.com/triss90/muds.io) - A simple, open source WYSIWYG editor
- [DobBot](https://github.com/triss90/dotbot) - A framework for creating a randomized, dotted background pattern.

While I don't claim to be an expert on the field. I did learn a thing or two in the process.

## The dream!
``` javascript
var instance = new myLibrary({
  selector: "#selector",
  anOption: 123,
  anotherOption: "Some option"
)};
```

The example above is a brilliant way of initializing a new instance of a library or module. My initial goal was create something that would adhere to this format.

I found that It would take 3 simple steps.
- Create some way of handling initial settings or options
- Figure out a way of overwriting these
- Write the library logic itself


## Creating the library
Start out by creating a new self invoking function like so
``` javascript
(function(){

})();
```

Next step is to name the library, thus making it globally accessible: `window.myLib = myLib;`

You can now initialize the library like so

``` html
<script src="path/to/my/library.js"></script>
<script>
    var instance = new myLib({
    
    )};
</script>
```

next we need to add some default options
``` javascript
(function(){
	myLib.defaults = {
		selector: '',
		text: 'Hello World!',
		color: 'black'
	};
	window.myLib = myLib;
})();
```

With our default options in place. It's time to write the logic that'll merge our user-defined options with the defaults
``` javascript
(function(){
    const myLib = function(opts) {
        // Merge default options with user options
    	this.options = Object.assign(myLib.defaults, opts);
    	
    	// Define merged options
        this.selector = document.querySelector(this.options.selector);
        this.text = this.options.text;
        this.color = this.options.color;
    }
	myLib.defaults = {...};
	window.myLib = myLib;
})();
```

With this in place, all there's left to do, is to write the library logic itself. 

This demo library simply prints a text.

``` javascript
(function(){
    const myLib = function(opts) {...}
    
    // library logic
    myLib.prototype.init = function() {		
        this.selector.style.color = this.color;
        this.selector.innerHTML = this.text;
    };
    
	myLib.defaults = {...};
	window.myLib = myLib;
})();
```

Now you can run the init function and you're all set!
``` javascript
(function(){
    const myLib = function(opts) {
        ...
        this.init();
    }
    
    myLib.prototype.init = function() {...};
    myLib.defaults = {...};
    window.myLib = myLib;
})();
```

## User options
The user can overwrite our default options when initializing the library like this:
``` html
<script src="path/to/my/library.js"></script>
<script>
    var instance = new myLib({
        selector: '#myLibrary',
        text: 'Hello Earth!',
        color: 'red'
    )};
</script>
```

## Browser support
While `Object.assign()` is amazing, it's not supported by Internet Explorer 11. So if you need to support IE11 you'll have to merge the options manually. 
Merging the the options can be done by looping through the attributes like this:

``` javascript
function merge_options(defaults,user_options) {
    let new_options = {};
    let attrname;
    for (attrname in defaults) {
        new_options[attrname] = defaults[attrname];
    }
    for (attrname in user_options) {
        new_options[attrname] = user_options[attrname];
    }
    return new_options;
}
this.options = merge_options(myLib.defaults, opts);
```

Simply replace the following with the example above
``` javascript 
this.options = Object.assign(myLib.defaults, opts);
```

## Example
<p class="codepen" data-height="265" data-theme-id="light" data-default-tab="html,result" data-user="triss90" data-slug-hash="afd2a9184f4c76b101c916937c415075" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="JS Library example">
  <span>See the Pen <a href="https://codepen.io/triss90/pen/afd2a9184f4c76b101c916937c415075/">
  JS Library example</a> by Tristan  White (<a href="https://codepen.io/triss90">@triss90</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>