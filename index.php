<?php
require 'lib/game.inc.php';
$view= new Site\View();
?>

<!doctype html>
<html lang='en'>
<!--

			Hello, I am the HTML duck. I kind of lame..tend to be
			pretty DRY


		                                   .....
		                                 ;"'   "";""'"';'
		                                ;     ". ;'',;":":
		                               :'    '"" ;"':"':"'
		                              ,"         ';""""
		                              ;          ,:
		                              :        ;'"
		                              :     '":
		                              ';      :
		                               ':     ;
		                                :     ':
		                     ,;"'"'"....'      :
		                  ,."'        '"        :
		                ,;"                     :
		              ,""   .;"'''              :
		;;.       ,.;""   ;'                    :
		':"""""""""'   ,;"           '.        ;
		 ';       ,.;"""              :       ;'
		  :''   ;'"                  ::     ;"'
		  '.    '"""'               ;"   ,;"'
		   :      ';.             ,;' ,.'"
		    ;       '"""":..  ,.;." ,''
		    ';            """"""'  ;'
		     ';.                  ;'
		       ';.           .  ;;'
		        ,:";.   '':':';;'
		       ,',; """""'";;:'
		       : :          ';;. ,..
		       ':'"""""";.   : """':.
		        ;.    ;"''   ':   .;:
		         ''"..;'


		-->
<?php echo $view->presenthead("Home") ?>
<body>
<?php echo $view->presentheader() ?>

<div class="container Main">
<!--<div class="hvr-float-shadow">-->
   <h1 class="Title">Hello, I'm Alex</h1>
<!--</div>-->
<h2 class="Title"> <span class="Typed"></span></h2>

<!--<p>Born in Michigan. Senior at Michigan State University Studying Computer Science with a Cognitive in Psychology. </p>-->
<!--<p>I'm been doing Research for <a href="http://hintzelab.msu.edu/">Arends Hintze Lab</a>-->
<!--    and work for <a href="https://www.phpmichigan.com/">Sparrow Health Insurance</a> in the IT Department.</p>-->

<div class="row Main">
    <div class="col-xs-3 col-md-3"><a href="http://www.linkedin.com/in/alexlambert52" class="thumbnail" target="_blank"><img class="img-responsive box"  src="images/in.png"/></a></div>
    <div class="col-xs-3 col-md-3"><a href="http://devpost.com/wert23239" class="thumbnail" target="_blank"><img class="img-responsive box"  src="images/devpost.jpg"/></a></div>
    <div class="col-xs-3 col-md-3"><a href="http://github.com/wert23239" class="thumbnail" target="_blank"><img class="img-responsive box" src="images/github.png"/></a></div>
    <div class="col-xs-3 col-md-3"><a href="mailto:lambe168@msu.edu"  class="thumbnail" target="_top"><img class="img-responsive box"  src="images/gmail.png"/></a></div>
</div>
</div>

<!--<div class="containerrep">-->
<!---->
<!--    <span><a style="margin-left:1em;color:black;" href="https://github.com/wert23239" target="_blank"><img style="height:2em;width:2em;" src="images/github.png" alt="Github" ></a></span>-->
<!--      <span><a style="margin-left:1em;color:black;" href="https://www.linkedin.com/in/alexlambert52" target="_blank"><img style="height:2em;width:2em;" width="2em" height="2em" src="images/linkedin.png" alt="Linkedin"></a></span>-->
<!--</div>-->


</body>
</html>
