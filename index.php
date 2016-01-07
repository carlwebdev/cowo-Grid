<!DOCTYPE html>
<html>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<head>
<meta charset="UTF-8">
<title>cowo-Grid - a simple responsive sass grid by @carlwebdev</title>
<meta name="description" content="cowo-Grid is a simple simple responsive sass grid built by cowowo.cat"> 
<meta name="keywords" content="css reset"> 		
<link rel="shortcut icon" href="assets/favicon/favicon.ico">
<link rel="stylesheet" href="assets/css/global.css" > 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
</head>
<body>
<div id="page">

<a href="https://github.com/carlwebdev/cowoGrid" target="_blank"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/52760788cde945287fbb584134c4cbc2bc36f904/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f77686974655f6666666666662e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png"></a>

	<header>
 	 <div class="frame">
      <div class="inner">
      
        <div id="main_logo"><h1>cowo-Grid</h1></div>  
        <div id="slogan"><h2><span>a simple responsive sass grid</span> <span>by <a href="https://twitter.com/carlwebdev" target="_blank">@carlwebdev</a></span></h2></div>  
        
      </div> <!-- /inner -->
		</div> <!-- /frame -->      
  </header>
  
  
 


  <main>
     <div class="frame">
        <div class="inner">
    
<? /*
<div class="section_title">Rows</div>
<div class="section_description">Create rows...</div>
<div class="section_separator">Rows with same component</div>
*/ ?>

<div class="section_separator"></div>


<div class="row">
	<div class="col span_1of1">1of1</div>   
</div>

<div class="row">
	<? for ($x = 0; $x <= 1; $x++) { ?>
    <div class="col span_1of2">1of2</div>
  <? } ?>   
</div>

<div class="row">
	<? for ($x = 0; $x <= 2; $x++) { ?>
    <div class="col span_1of3">1of3</div>
  <? } ?>  
</div>

<div class="row">
	<? for ($x = 0; $x <= 3; $x++) { ?>
    <div class="col span_1of4">1of4</div> 
  <? } ?>     
</div>

<div class="row">
	<? for ($x = 0; $x <= 4; $x++) { ?>
    <div class="col span_1of5">1of5</div>   
  <? } ?>   
</div>

<div class="row">
	<? for ($x = 0; $x <= 5; $x++) { ?>
    <div class="col span_1of6">1of6</div>   
  <? } ?> 
</div>

<div class="row">
	<? for ($x = 0; $x <= 6; $x++) { ?>
    <div class="col span_1of7">1of7</div> 
  <? } ?>    
</div>

<div class="row">
	<? for ($x = 0; $x <= 7; $x++) { ?>
    <div class="col span_1of8">1of8</div> 
  <? } ?>    
</div>

<div class="row">
	<? for ($x = 0; $x <= 8; $x++) { ?>
    <div class="col span_1of9">1of9</div>
  <? } ?>  
</div>

<div class="row">
	<? for ($x = 0; $x <= 9; $x++) { ?>
    <div class="col span_1of10">1of10</div> 
  <? } ?>    
</div>

<div class="row">
	<? for ($x = 0; $x <= 10; $x++) { ?>
    <div class="col span_1of11">1of11</div>
  <? } ?>       
</div>

<div class="row">
	<? for ($x = 0; $x <= 11; $x++) { ?>
    <div class="col span_1of12">1of12</div> 
  <? } ?>       
</div>




<div class="section_separator"></div>


<div class="row">
	<div class="col span_1of12">1of12</div>
	<div class="col span_11of12">11of12</div> 
</div>

<div class="row">
	<div class="col span_2of12">2of12</div>
	<div class="col span_10of12">10of12</div> 
</div>

<div class="row">
	<div class="col span_3of12">3of12</div>
	<div class="col span_9of12">9of12</div> 
</div>

<div class="row">
	<div class="col span_4of12">4of12</div>
	<div class="col span_8of12">8of12</div> 
</div>

<div class="row">
	<div class="col span_5of12">5of12</div>
	<div class="col span_7of12">7of12</div> 
</div>

<div class="row">
	<div class="col span_6of12">6of12</div>
    <div class="col span_6of12">6of12</div>
</div>

<div class="row">
	<div class="col span_7of12">7of12</div>
    <div class="col span_5of12">5of12</div>
</div>

<div class="row">
	<div class="col span_8of12">8of12</div>
    <div class="col span_4of12">4of12</div>
</div>

<div class="row">
	<div class="col span_9of12">9of12</div>
    <div class="col span_3of12">3of12</div>
</div>

<div class="row">
	<div class="col span_10of12">10of12</div>
    <div class="col span_2of12">2of12</div>
</div>

<div class="row">
	<div class="col span_11of12">11of12</div>
    <div class="col span_1of12">1of12</div>
</div>

<div class="row">
	<div class="col span_12of12">12of12</div>
</div>



<div class="section_separator"></div>


<div class="row">
	<div class="col span_1of12">1of12</div>
  <div class="col span_1of12">1of12</div> 
	<div class="col span_10of12">10of12</div>  
</div>

<div class="row">
	<div class="col span_2of12">2of12</div>
  <div class="col span_2of12">2of12</div>   
	<div class="col span_8of12">8of12</div>
</div>

<div class="row">
	<div class="col span_3of12">3of12</div>
  <div class="col span_3of12">3of12</div>  
	<div class="col span_6of12">6of12</div> 
</div>

<div class="row">
	<div class="col span_3of12">3of12</div>
	<div class="col span_6of12">6of12</div> 
  <div class="col span_3of12">3of12</div>
</div>

<div class="row">
	<div class="col span_2of12">2of12</div>
	<div class="col span_8of12">8of12</div>
  <div class="col span_2of12">2of12</div> 
</div>

<div class="row">
	<div class="col span_1of12">1of12</div>
	<div class="col span_10of12">10of12</div>
  <div class="col span_1of12">1of12</div> 
</div>

<div class="row">
	<div class="col span_2of12">2of12</div>
	<div class="col span_8of12">8of12</div>
  <div class="col span_2of12">2of12</div> 
</div>

<div class="row">
	<div class="col span_3of12">3of12</div>
	<div class="col span_6of12">6of12</div> 
  <div class="col span_3of12">3of12</div>
</div>

<div class="row">
	<div class="col span_6of12">6of12</div>
  <div class="col span_3of12">3of12</div>
  <div class="col span_3of12">3of12</div>  	 
</div>

<div class="row">
	<div class="col span_8of12">8of12</div>
  <div class="col span_2of12">2of12</div>
  <div class="col span_2of12">2of12</div>   	
</div>

<div class="row">
	<div class="col span_10of12">10of12</div>
  <div class="col span_1of12">1of12</div>
  <div class="col span_1of12">1of12</div> 	  
</div>



  
        </div> <!-- /inner -->
      </div> <!-- /frame -->  
    </main>
    


        
    
    <footer>
     	<div class="frame">
        <div class="inner">

          <div class="footerContent">
            Made in Barcelona<br>
            <span>by</span> <a href="http://cowowo.cat" target="_blank"><img src="assets/img/logos/logo_cowowo.png"></a>
          </div>
        
        </div> <!-- /inner -->
      </div> <!-- /frame -->    
    </footer>


</div> <!-- /page -->
</body>
</html>