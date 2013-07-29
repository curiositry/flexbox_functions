Flexbox Functions 
=================

Flexbox is a CSS3 module that makes creating responsive layouts easier. However, the spec is still in its infancy. The syntax has gone through three major revisions, and to support older browsers, it takes a minimum of four lines of code to do anything with flexbox.

For those who's preferred CSS preprocessor is PHP, I have made methods in the flexbox class for all the flexbox properties I know, which speeds up development greatly.

For those who's preferred CSS preprocessor is PHP, I have made a flexbox class and put all the flexbox properties I know as methods of it. This speeds up flexbox development immensely.



### Usage

Include `flexbox_functions.php` in `style.php`:

``` php
<?php 
header("Content-type: text/css"); 
include("flexbox_functions.php");
?>
```

Then call a flexbox function like this:

``` php
flexbox::order(1);
```

Comments and critiques appreciated!
