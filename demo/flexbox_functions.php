<?php
// ___                      __      __        ___       __                    
//  |   /\  |    |__/    | /__`    /  ` |__| |__   /\  |__)                   
//  |  /~~\ |___ |  \    | .__/    \__, |  | |___ /~~\ |    .                 
                                                                           
//  __        __                 ___    ___       ___     __   __   __   ___  
// /__` |__| /  \ |  |     |\/| |__      |  |__| |__     /  ` /  \ |  \ |__   
// .__/ |  | \__/ |/\|     |  | |___     |  |  | |___    \__, \__/ |__/ |___ .

//                                                       - Linus Torvalds


class flexbox{

// Flexbox Initializations

// display: flex
static public function display_flex(){
  	echo "

	display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
	display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
	display: -ms-flexbox;      /* TWEENER - IE 10 */
	display: -webkit-flex;     /* NEW - Chrome */
	display: flex;             /* NEW, Spec - Opera 12.1, Firefox 20+ */

	";
}

// display: inline-flex
static public function display_inline_flex(){
  	echo "

	display:-webkit-inline-box;      /* OLD - iOS 6-, Safari 3.1-6 */
	display:-moz-inline-box;		 /* OLD - Firefox 19- (buggy but mostly works) */
	display:-ms-inline-flexbox;	 	 /* TWEENER - IE 10 */
	display:-webkit-inline-flex;	 /* NEW - Chrome */
	display:inline-flex;             /* NEW, Spec - Opera 12.1, Firefox 20+ */

	";
}

// flex: sets the fraction of available space to be used by element
//  NOTE: A WIDTH MAY NEED TO BE SET TO KEEP ELEMENT FROM COLLAPSING WITH OLDER SYNTAX
static public function flex($value){
  	echo "

	-webkit-box-flex: $value;      /* OLD - iOS 6-, Safari 3.1-6 */
	-moz-box-flex: $value;         /* OLD - Firefox 19- */
	-webkit-flex: $value;          /* Chrome */
	-ms-flex: $value;              /* IE 10 */
	flex: $value;                  /* NEW, Spec - Opera 12.1, Firefox 20+ */

	";
}


// order: sets the order that element will be displayed in (independent of source-code order!)
static public function order($value){
  	echo "

	-webkit-box-ordinal-group: $value;   /* OLD - iOS 6-, Safari 3.1-6 */
	-moz-box-ordinal-group: $value;      /* OLD - Firefox 19- */
	-ms-flex-order: $value;              /* TWEENER - IE 10 */
	-webkit-order: $value;               /* NEW - Chrome */
	order: $value;                       /* NEW, Spec - Opera 12.1, Firefox 20+ */
	flex-order: $value;

	";
}

// JUSTIFY CONTENT METHODS
// justify-content: [flex-]start;
static public function justify_content_start(){
  	echo "

	-webkit-box-pack: start; 
	-moz-box-pack: start;
	-ms-flex-pack: start;
	-webkit-justify-content: flex-start;
	justify-content: flex-start;

	";
}


// justify content center (main axis centering)
static public function justify_content_center(){
  	echo "

	-webkit-box-pack: center; 
	-moz-box-pack: center;
	-ms-flex-pack: center;
	-webkit-justify-content: center;
	justify-content: center;

	";
}


// justify-content: [flex-]end;
static public function justify_content_end(){
  	echo "

	-webkit-box-pack: end; 
	-moz-box-pack: end;
	-ms-flex-pack: end;
	-webkit-justify-content: flex-end;
	justify-content: flex-end;

	";
}


// justify-content: space-between;
// distributes the space between but not before or after the elements
static public function justify_content_space_between(){
  	echo "

	-webkit-box-pack: justify; 
	-moz-box-pack: justify;
	-ms-flex-pack: justify;
	-webkit-justify-content: space-between;
	justify-content: space-between;

	";
}

// justify-content: space-around;
// distributes the space around the elements
static public function justify_content_space_around(){
  	echo "

	-webkit-box-pack: justify; 	/* The old syntax does not support space-around, so this falls back to space-between */
	-moz-box-pack: justify;		/* The old syntax does not support space-around, so this falls back to space-between */
	-ms-flex-pack: distribute;
	-webkit-justify-content: space-around;
	justify-content: space-around;

	";
}


// ALIGN ITEMS METHODS
// Align items aligns elements on the cross axis
// align-items: [flex-]start
static public function align_items_start(){
  	echo "

	-webkit-box-align: start; 
	-moz-box-align: start; 
	-ms-flex-align: start; 
	-webkit-align-items: flex-start;
	-moz-align-items: flex-start;
	align-items: flex-start;

	";
}


// align-items: center
static public function align_items_center(){
  	echo "

	-webkit-box-align: center; 
	-moz-box-align: center; 
	-ms-flex-align: center; 
	-webkit-align-items: center;
	-moz-align-items: center;
	align-items: center;

	";
}


// align-items: [flex-]end
static public function align_items_end(){
  	echo "

	-webkit-box-align: end; 
	-moz-box-align: end; 
	-ms-flex-align: end; 
	-webkit-align-items: flex-end;
	-moz-align-items: flex-end;
	align-items: flex-end;

	";
}

// align-items: baseline
// If the flex item's inline axis is the same as the cross axis, this value is identical to 'flex-start'. Otherwise, it participates in baseline alignment: all participating flex items on the line are aligned such that their baselines align, and the item with the largest distance between its baseline and its cross-start margin edge is placed flush against the cross-start edge of the line.
static public function align_items_baseline(){
  	echo "

	-webkit-box-align: baseline; 
	-moz-box-align: baseline; 
	-ms-flex-align: baseline; 
	-webkit-align-items: baseline;
	-moz-align-items: baseline;
	align-items: baseline;

	";
}

// align-items: stretch
// Flex items are stretched such as the cross-size of the item's margin box is the same as the line while respecting width and height constraints.
static public function align_items_stretch(){
  	echo "

	-webkit-box-align: stretch; 
	-moz-box-align: stretch; 
	-ms-flex-align: stretch; 
	-webkit-align-items: stretch;
	-moz-align-items: stretch;
	align-items: stretch;

	";
}


// ALIGN SELF METHODS
// NOTE: The old (2009) syntax does not support this property
// Align-self: Individual cross-axis alignment. Override to align individual items along the cross-axis

// align-self:auto
static public function align_self_auto(){
  	echo "

	-ms-flex-item-align: auto; 
	-webkit-align-self: auto;
	-moz-align-self: auto;
	align-self: auto;

	";
}

// align-self:start
static public function align_self_start(){
  	echo "

	-ms-flex-item-align: start; 
	-webkit-align-self: flex-start;
	-moz-align-self: flex-start;
	align-self: flex-start;

	";
}

// align-self:center
static public function align_self_center(){
  	echo "

	-ms-flex-item-align: center; 
	-webkit-align-self: center;
	-moz-align-self: center;
	align-self: center;

	";
}


// align-self:end
static public function align_self_end(){
  	echo "

	-ms-flex-item-align: end; 
	-webkit-align-self: flex-end;
	-moz-align-self: flex-end;
	align-self: flex-end;

	";
}


// align-self:baseline
static public function align_self_baseline(){
  	echo "

	-ms-flex-item-align: baseline;
	-webkit-align-self: baseline;
	-moz-align-self: baseline;
	align-self: baseline;

	";
}

// align-self:stretch
static public function align_self_stretch(){
  	echo "

	-ms-flex-item-align: stretch;
	-webkit-align-self: stretch;
	-moz-align-self: stretch;
	align-self: stretch;

	";
}


// ALIGN CONTENT METHODS
// NOTE: The old (2009) syntax does not support this property
// Flex line alignment: specifying alignment of flex lines along the cross-axis


// align-content: start
static public function align_content_start(){
  	echo "

	-ms-flex-line-pack: start; 
	-webkit-align-content: flex-start;
	-moz-align-content: flex-start;
	align-content: flex-start;

	";
}

// align-content: center
static public function align_content_center(){
  	echo "

	-ms-flex-line-pack: center; 
	-webkit-align-content: center;
	-moz-align-content: center;
	align-content: center;

	";
}

// align-content: end
static public function align_content_end(){
  	echo "

	-ms-flex-line-pack: end; 
	-webkit-align-content: flex-end;
	-moz-align-content: flex-end;
	align-content: flex-end;

	";
}

// align-content: space-between
static public function align_content_space_between(){
  	echo "

	-ms-flex-line-pack: justify; 
	-webkit-align-content: space-between;
	-moz-align-content: space-between;
	align-content: space-between;

	";
}

// align-content: space-around
static public function align_content_space_around(){
  	echo "

	-ms-flex-line-pack: distribute; 
	-webkit-align-content: space-around;
	-moz-align-content: space-around;
	align-content: space-around;

	";
}

// align-content: stretch
static public function align_content_stretch(){
  	echo "

	-ms-flex-line-pack: stretch; 
	-webkit-align-content: stretch;
	-moz-align-content: stretch;
	align-content: stretch;

	";
}




// FLEX DIRECTION METHODS
// Direction: specifying the direction of the main flexbox axis


static public function flex_direction_row(){
  	echo "

	box-direction: normal;
    box-orient: horizontal;
    flex-direction: row;

	";
}

static public function flex_direction_row_reverse(){
  	echo "

	box-direction: reverse;
    box-orient: horizontal;
    flex-direction: row-reverse;

	";
}

static public function flex_direction_column(){
  	echo "

	box-direction: normal;
    box-orient: vertical;
    flex-direction: column;
    -webkit-flex-direction:column;

	";
}


static public function flex_direction_column_reverse(){
  	echo "

	box-direction: reverse;
    box-orient: vertical;
    flex-direction: column-reverse;

	";
}


// FLEX WRAP METHODS
// Wrapping: specifying whether and how flex items wrap along the cross-axis
// Firefox doesn't currently support this syntax


static public function flex_wrap_nowrap(){
  	echo "

	box-lines: single;
    flex-wrap: nowrap;

	";
}

static public function flex_wrap_wrap(){
  	echo "

	box-lines: multiple;
    flex-wrap: wrap;

	";
}

// 2009 syntax does not support reverse wrapping at this time
static public function flex_wrap_wrap_reverse(){
  	echo "

    flex-wrap: wrap-reverse;

	";
}




} // end flexbox class

?>
