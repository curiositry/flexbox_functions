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

Then call a flexbox method like this:

``` php
flexbox::order(1);
```

### Flexbox Methods & Structure

There is a method for each property & value that I know of in the Flexbox spec. Order & value take a variable, but other than that I had to use separate methods for each value because of the changes in syntax.

* display:flex
* flex
* order
* justify-content:
	- start
	- center
	- end
	- space-between
	- space-around

* align-items:
	- start
	- center
	- end
	- baseline
	- stretch

* align-self:
	- auto
	- start
	- center
	- end
	- baseline
	- stretch
	
* align-content:
	- start
	- center
	- end
	- space-between
	- space-around
	- stretch

* flex-direction:
	- row
	- row-reverse
	- column
	- column-reverse

* flex-wrap:
	- nowrap
	- wrap
	- wrap-reverse

### Quirks
- If you comment out a php flexbox class call in style.php, using *css* comments, it doesn't work. **You must use PHP comments inside the PHP tags**

### Conclusion

Comments and critiques appreciated!

