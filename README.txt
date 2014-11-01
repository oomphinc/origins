About the Oomph Base Theme
--------------------------
This Base Theme comes with Foundation, SASS, Gulp, Modernizr.js, and Respond.js installed.


Foundation
----------
We are using Foundation for our responsive grids.

Configuration files can be found at:
base-theme > sass > foundation > settings.scss

Website: http://foundation.zurb.com/


SASS
----
We are using SASS for our css preprocessor.

Configuration file can be found at:
base-theme > sass > _config.scss = order of files
base-theme > gulpfile.js = compiler settings

Website: http://sass-lang.com/


Gulp
----
We are using Gulp for our build tool.

Configuration file can be found at:
base-theme > gulpfile.js = gulp functions
base-theme > package.json = module dependancy list

Install Directions:
1. cd into your theme directory
2. run $ npm install = this will install the module dependancies listed in the base-theme > package.json
3. a new folder called "node_modules" will be created in your theme folder

We added a script to the base-theme > package.json file to remove all ".info" files within the "node_modules" folder, which was causing errors on admin pages and when trying to run drush commands

Website: http://gulpjs.com/


Modernizr.js
------------
File can be found at:
base-theme > js > modernizr.min.js

Website: http://modernizr.com/


Respond.js
----------
File can be found at:
base-theme > js > respond.min.js

Website: https://github.com/scottjehl/Respond


