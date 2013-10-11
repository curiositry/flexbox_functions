Flexbox Functions 
=================

Flexbox is and awesome tool for responsive frontend development. However, the spec is still in its infancy: the syntax has gone through three major revisions, and to support older browsers, it takes 4+ lines of code to do almost anything anything with flexbox.

For those who's preferred CSS preprocessor is PHP, I have made a simple script that include methods for all the flexbox properties I know. It really eases the pain of working with flexbox.

*NOTE: I have changed the License from GPL3 to MIT. This is a much more open-ended licence, and you can use it in non open source projects now. If you need an even more permissive licence, let me know and it will probably be granted.*

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
### Demo
I have included a demo I built with the script. It is a fully responsive three column layout that reorders to put the sidebar and widget area at the bottom on mobile devices. It's not perfect since it was built extremely quickly and somewhat sloppily, but it give an idea of how the script & flexbox can be used for responsive design.

**Some screenshots of the demo:**

[Large Screen](http://postimg.org/image/nzsi52l4z/)

[Medium Screen](http://s21.postimg.org/juhlj5ncz/)

[Small Screen](http://s21.postimg.org/4x94i5a4j/)

[Small Screen — where the sidebars go](http://s21.postimg.org/nbjnm4mf7/)





### Method Names
When naming the methods I chose semantics and guess-ability over brevity. In general, they are: [property name]_[current syntax value]. If the property name or value has a hyphen it is replaced by an underscore, and colons are also replaced by underscores. For example: 
```display: flex;``` becomes ```display_flex()``` and ```flex-direction: row-reverse;``` becomes ```flex_direction_row_reverse()```

I plan to maintain another version with abbreviated method names in the future.

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

Comments and critiques appreciated! Since I don't have a dontation option, if you feel like supporting the development of Flexbox Functions tell you friends and followers about it. Spreading the word will make me happier than donating money.


