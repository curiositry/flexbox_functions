Flexbox Functions 
=================

Flexbox is a CSS3 module that makes creating responsive layouts easier. However, the spec is still in its infancy. The syntax has gone through three major revisions, and to support older browsers, it takes a minimum of four lines of code to do anything with flexbox.

For those who's preferred CSS preprocessor is PHP, I have pull all the flexbox properties I know of into bite-sized functions that speed up development immensely.


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
