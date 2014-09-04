## Sass
We use Sass to compile our CSS. Typically we use the rem unit for everything.

## Gulp
Gulp can be used to run a post-compile fix to create fallbacks for all of our rem declarations that are neccessary for IE8.

## Respond.js
Respond is a library that allows IE6-8 to read media queries which is essential since we are using a grid system. This should only be loaded conditionally if you are trying to support those browsers.

## Modernizr.js
Modernizr is used for feature detection. It also ships with html5shiv.js which enables HTML5 elements in IE.

## Foundation
We use the basic grid logic from the Foundation library in order to create our grid system.