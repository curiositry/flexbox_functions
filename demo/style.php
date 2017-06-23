<?php 
header("Content-type: text/css"); 
include("../vendor/autoload.php");

use curiositry\flexbox_functions as flexbox;

?>

/*RESET CSS*/

html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}



body{
  <?php echo flexbox\display_flex(); ?>
  height: 100%;
  font-size: 20px;
  line-height: 135%;
}

header{
  <?php echo flexbox\display_flex(); ?> 
  width: 100%;
  background-color: #F7DC68;
}

a{
  color: #994F00;
}

p{
  color: #333;
  font-family: "Palatino Linotype", Palatino, Palladio, "URW Palladio L", "Book Antiqua", Baskerville, "Bookman Old Style", "Bitstream Charter", "Nimbus Roman No9 L", Garamond, "Apple Garamond", "ITC Garamond Narrow", "New Century Schoolbook", "Century Schoolbook", "Century Schoolbook L", Georgia, serif;
}

h1{
  font-size: 2.5em;
  color: #112E31;
  line-height: 1em;
  font-family: "Palatino Linotype", Palatino, Palladio, "URW Palladio L", "Book Antiqua", Baskerville, "Bookman Old Style", "Bitstream Charter", "Nimbus Roman No9 L", Garamond, "Apple Garamond", "ITC Garamond Narrow", "New Century Schoolbook", "Century Schoolbook", "Century Schoolbook L", Georgia, serif;

}

  h2{
  font-size: 1.7em;
  color: #112E31;
  font-family: "Palatino Linotype", Palatino, Palladio, "URW Palladio L", "Book Antiqua", Baskerville, "Bookman Old Style", "Bitstream Charter", "Nimbus Roman No9 L", Garamond, "Apple Garamond", "ITC Garamond Narrow", "New Century Schoolbook", "Century Schoolbook", "Century Schoolbook L", Georgia, serif;
}

h3{
  font-size: 1.2em;
  font-weight: 700;
  color: #112E31;
  font-family: "Palatino Linotype", Palatino, Palladio, "URW Palladio L", "Book Antiqua", Baskerville, "Bookman Old Style", "Bitstream Charter", "Nimbus Roman No9 L", Garamond, "Apple Garamond", "ITC Garamond Narrow", "New Century Schoolbook", "Century Schoolbook", "Century Schoolbook L", Georgia, serif;
}

.logo{
  <?php echo flexbox\flex(1.5); ?> 
  <?php echo flexbox\display_inline_flex(); ?> 
  <?php echo flexbox\align_items_center(); ?>
}

.logo img{
  width: 100%;
}

.navigation{
  <?php echo flexbox\display_inline_flex(); ?> 
  <?php echo flexbox\flex(4); ?>   
}

.nav_list{
  <?php echo flexbox\display_inline_flex(); ?> 
  <?php echo flexbox\flex(4); ?> 
  <?php echo flexbox\justify_content_space_around(); ?>
  <?php echo flexbox\align_items_center(); ?>
  min-height: 70px;
  list-style-type: none;
  width: 100%;
  -webkit-margin-start:0;
  -webkit-padding-start:0;
}

.content{
    <?php  echo flexbox\display_flex(); ?> 
}

.main{
  padding: 2%;
  <?php echo flexbox\order(20); ?> 
  <?php echo flexbox\flex(20); ?> 
}

.aside{
  padding: 2%;
  padding-top: 23px;
  <?php echo flexbox\order(30); ?> 
  <?php echo flexbox\flex(5); ?> 
}

.widgets{
  padding: 2%;
  padding-top: 23px;
  <?php echo flexbox\order(10); ?> 
  <?php echo flexbox\flex(4); ?> 
}

.footer{
  <?php echo flexbox\display_flex(); ?> 
  <?php echo flexbox\justify_content_center(); ?>
  <?php echo flexbox\align_items_end(); ?>
  padding: 20px;
  background-color: #112E31;
  color: #F7DC68;
  margin-top: 20px;
}

.footer p{
  color: #F7DC68;
}




@media all and (max-width:600px){
  .content{
    <?php echo flexbox\display_flex(); ?>
    <?php echo flexbox\flex_direction_column(); ?>
    <?php echo flexbox\align_items_start(); ?>
  }

  .widgets{
    <?php echo flexbox\order(40); ?> 
  }
}

@media all and (max-width:440px){
  .nav_list{
    display: inline;
  }

  .nav_link, .nav_item, .navigation, header{
    display: inline;
  }

  .nav_item{
    padding: 10px;
  }

  header{
    background-color: #fff;
  }
}