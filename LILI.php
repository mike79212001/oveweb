<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Welly tung">
    <link rel="shortcut icon" href="picture/OVE.LOGO.png">

    <title>最詳細的情報就在"傲飛娛樂""</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/hero.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>


    <!--上排按鈕-->
    <div class="navbar-wrapper  btn-group-justified ">
      <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header ">
              <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
               </button>          
              <a class="navbar-brand" href="/">傲飛</a>
            </div>
            <div class="navbar-collapse collapse ">
              <ul class="nav navbar-nav ">
                <li><a href="activity.php">活動</a></li>
                <li><a href="announcement.php">公告</a></li>
                <li><a href="about_us.php">關於傲飛</a></li>
                <li><a href="hero.php">暴雪英霸情報</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
<?php 
	include_once 'class/User.php';
	if(isLogin()) 
		echo '	
    			<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$_COOKIE['name'].'<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="modify_user.php">修改帳號設定</a></li>
						<li><a href="logout.php">登出</a></li>
					</ul>
				</li>
    		';
	else {
		echo '	
    			<li><a href="login.php">登入</a></li>
                <li><a href="register.php">註冊</a></li>
    		';
	} 	
?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--上排按鈕結束-->




    <!--英雄選擇圖片-->
    <div  class="topbackground " >
    	<div class="container-fluid">
		    <div class="row hero_form_firstrow">
 			   <div class="col-xs-1 col-md-1"><a href="hero.php" class="thumbnail piccol"><img src="picture/100_100/ETC.png" ></a></div>
 			   <div class="col-xs-1 col-md-1"><a href="ABATHUR.php" class="thumbnail piccol"><img src="picture/100_100/ABATHUR.png" ></a></div>
 			   <div class="col-xs-1 col-md-1"><a href="ARTHAS.php" class="thumbnail piccol"><img src="picture/100_100/ARTHAS.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="BRITHTWING.php" class="thumbnail piccol"><img src="picture/100_100/BRITHTWING.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="DIABLO.php" class="thumbnail piccol"><img src="picture/100_100/DIABLO.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="FALSTAD.php" class="thumbnail piccol"><img src="picture/100_100/FALSTAD.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="GAZLOWE.php" class="thumbnail piccol"><img src="picture/100_100/GAZLOWE.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="ILLIDAN.php" class="thumbnail piccol"><img src="picture/100_100/ILLIDAN.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="LILI.php" class="thumbnail piccol"><img src="picture/100_100/LILI.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="MALFIRION.php" class="thumbnail piccol"><img src="picture/100_100/MALFIRION.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="MURADIN.php" class="thumbnail piccol"><img src="picture/100_100/MURADIN.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="MURKY.php" class="thumbnail piccol"><img src="picture/100_100/MURKY.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="NAZEEBO.php" class="thumbnail piccol"><img src="picture/100_100/NAZEEBO.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="NERRIGAN.php" class="thumbnail piccol"><img src="picture/100_100/NERRIGAN.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="NOVA.php" class="thumbnail piccol"><img src="picture/100_100/NOVA.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="RAYNOR.php" class="thumbnail piccol"><img src="picture/100_100/RAYNOR.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="SONYA.php" class="thumbnail piccol"><img src="picture/100_100/SONYA.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="STGHAMMER.php" class="thumbnail piccol"><img src="picture/100_100/STGHAMMER.png" ></a></div>  			   
 			   <div class="col-xs-1 col-md-1"><a href="STITCHES.php" class="thumbnail piccol"><img src="picture/100_100/STITCHES.png" ></a></div>  			   
 			   <div class="col-xs-1 col-md-1"><a href="TASSADAR.php" class="thumbnail piccol"><img src="picture/100_100/TASSADAR.png" ></a></div>  			   
 			   <div class="col-xs-1 col-md-1"><a href="TYCHUS.php" class="thumbnail piccol"><img src="picture/100_100/TYCHUS.png" ></a></div>  			   
 			   <div class="col-xs-1 col-md-1"><a href="TYRANDE.php" class="thumbnail piccol"><img src="picture/100_100/TYRANDE.png" ></a></div>  			   
 			   <div class="col-xs-1 col-md-1"><a href="TYREAL.php" class="thumbnail piccol"><img src="picture/100_100/TYREAL.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="UTHER.php" class="thumbnail piccol"><img src="picture/100_100/UTHER.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="VALLA.php" class="thumbnail piccol"><img src="picture/100_100/VALLA.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="ZAGARA.php" class="thumbnail piccol"><img src="picture/100_100/ZAGARA.png" ></a></div> 
 			   <div class="col-xs-1 col-md-1"><a href="ZERATUL.php" class="thumbnail piccol"><img src="picture/100_100/ZERATUL.png" ></a></div>  			    			    			    			   		    			   			   
		    </div>
	    
		</div>
    </div>
    <!--英雄選擇圖片結束-->



    <!-- content here-->
    <div  class="contentbackground" >

        <div class="contenttext ">
			<div class="LILI"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Li Li/300_300/LILI.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:LILI</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:835(每等+135)<br><br>生命回復:1.738(每等+0.281)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:20(每等+6)<br><br>攻擊速度:0.8</h3></font></span>						
				</div>				
                <!--圖片左方能力區結束-->

                <!--文字說明-->		
				<div class="panel-group hero_text" id="accordion">
  						<div class="panel panel-default ">
    						<div class="panel-heading ">
     				 			<h4 class="panel-title ">
      					  			<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
         								 英雄介紹
       					  			</a>
      							 </h4>
    						</div>
    							<div id="collapse1" class="panel-collapse collapse in">
     					 			<div class="panel-body"><!--以下文字要改成英雄介紹的翻譯-->
      									 出生在迷?島。麗麗是傳奇的熊貓人的侄女，最喜歡的事情莫過於探索陌生新奇的世界、並認識新朋友。
     					 			</div>
    							</div>
 			 			</div>
  						<div class="panel panel-default ">
    						<div class="panel-heading ">
     				 			<h4 class="panel-title ">
      					  			<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
         								 英雄小知識
       					  			</a>
      							 </h4>
    						</div>
    							<div id="collapse2" class="panel-collapse collapse in">
     					 			<div class="panel-body"><!--以下文字要改成英雄介紹的翻譯-->
      								     所扮演的是一名輔助型英雄，通過治療與支援盟友或使敵人失去攻擊能力來幫助團隊。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Li Li/Abilities/Healing Brew.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Healing Brew(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">30mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">3秒</font>
    						<br class="fon2"><font color="fffff"><br>治療附近生命最少的友軍單位100+(等級*13)並回復20魔力，優先治療友方英雄，魔力回復效果對自身無效。</font>
    				</span>

					<br>
    				<img src="picture/Li Li/Abilities/Cloud Serpent.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Cloud Serpent(W) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">40mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">8秒</font>
    						<br class="fon2"><font color="fffff"><br>召喚1隻擁有15+(等級*4)傷害的法力龍跟隨友軍單位，持續10秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Li Li/Abilities/Blinding Wind.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Blinding Wind(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">120秒</font>
    						<br class="fon2"><font color="fffff"><br>對附近三個敵方單位釋出矇蔽之風造成50+(等級*12)的傷害，英雄優先。被擊中的目標在4秒內下1個普通攻擊失效。</font>
    				</span>
    				
					<br>
    				<img src="picture/Li Li/Abilities/Jug of 1,000 Cups.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Jug of 1000 Cups(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">70秒</font>
    						<br class="fon2"><font color="fffff"><br>在6秒內快速治癒附近受傷最重的單位600+(等級*72)生命值並回復120點魔力，英雄優先且自身不會獲得魔力回復效果。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Li Li/Abilities/Water Dragon.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Water Dragon(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">45秒</font>
    						<br class="fon2"><font color="fffff"><br>對敵方目標英雄召喚一隻水龍造成260+(等級*25)的傷害，附近敵軍承受50%的傷害值。受到攻擊的單位在3秒內減少40%的移動速度。</font>
    				</span>   
  
					<br>
    				<img src="picture/Li Li/Abilities/Fast Feet.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Fast Feet(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>受到傷害時在1秒內提高15%移動速度。</font>
    				</span>       				
  				    				
  				
 						   							 
				</div>
				<!--能力說明結束-->	


				<!--天賦說明-->
				<div class="talent">
				  <span ><font color="#fffff"><h1>天賦能力</h1></font></span>
                  <!--等級1-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級1可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Li Li/Talents/1/Path of the Wizard.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Wizard</span></font><br><font color="00ffff">每等額外增加5魔量和0.1魔力回復。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Li Li/Talents/1/Gale Force.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Gale Force(E)</span></font><br><font color="00ffff">Blinding WindG傷害提高25%。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Li Li/Talents/1/Mass Vortex.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Mass Vortes(E)</span></font><br><font color="00ffff">Blinding Wind能傷害5個敵方單位。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Li Li/Talents/1/Bribe.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bribe</span></font><br><font color="00ffff">擊殺敵方小兵，可以獲得賄賂層數，疊加到20層時，可直接擊敗一個傭兵營地，但對骷髏無效。</font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Li Li/Talents/1/Healing Ward.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Healing Ward</span></font><br><font color="00ffff">放置一根治癒圖騰再地板上對附近友軍每秒造成2%最大生命回復持續10秒。</font></span>				  	
                    </div>                                                                
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Li Li/Talents/4/Bringer of Gifts.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bringer of Gifts(W)</span></font><br><font color="00ffff">Cloud Serpent同時會治癒目標100+(等級*13)的生命值與20的魔力。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Li Li/Talents/4/Lingering Blind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ligering Blind(E)</span></font><br><font color="00ffff">Blinding Wind的攻擊失效效果變成2次。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Li Li/Talents/4/Protective Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Protective Shield Dance Your Pants Off</span></font><br><font color="00ffff">為一個友方英雄放置一個300+(等級*30)的護盾持續5秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Li Li/Talents/4/Envenom.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Envenom</span></font><br><font color="00ffff">給敵方英雄下毒，6秒內造成180+(等級*30)點傷害。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Li Li/Talents/7/First Sip.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">First Sip(Q)</span></font><br><font color="00ffff">Healing Brew可回復額外50+(等級*6.5)的生命值。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Li Li/Talents/7/The Good Stuff.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">The Good Stuff(Q)</span></font><br><font color="00ffff">Healing Brew治癒效果提升25%。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Li Li/Talents/7/CalldownMULE.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Calldown: MULE</span></font><br><font color="00ffff">召喚1個工兵修復目標位置附近的建築持續60秒，每秒修復100的生命值並每5秒補充一個彈藥。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Li Li/Talents/7/Clairvoyance.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Clairvoyance  </span></font><br><font color="00ffff">施放後始目標區域的所有單位顯形，持續4秒。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Li Li/Talents/10/Jug of 1,000 Cups.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Jug of 1000 Cups(R)</span></font><br><font color="00ffff">在6秒內快速治癒附近受傷最重的單位600+(等級*72)生命值並回復120點魔力，英雄優先且自身不會獲得魔力回復效果。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Li Li/Talents/10/Water Dragon.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Water Dragon(R)</span></font><br><font color="00ffff">對敵方目標英雄召喚一隻水龍造成260+(等級*25)的傷害，附近敵軍承受50%的傷害值。受到攻擊的單位在3秒內減少40%的移動速度。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Li Li/Talents/13/Elusive Feet (Trait).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Elusive Feet(Trait)</span></font><br><font color="00ffff">在10秒內承受傷害時獲得2次的格擋機會(減少50%普通攻擊傷害)，此效果每10秒只能觸發1次。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Li Li/Talents/13/Lightning Serpent.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Lightning Serpent(W)</span></font><br><font color="00ffff">Cloud Serpent可以額外攻擊3個附近敵方單位造成4+(等級*2)的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Li Li/Talents/13/Hindering Winds.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hindering Winds(E)</span></font><br><font color="00ffff">Blinding Wind同時減緩敵軍25%移動速度，持續2秒。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Li Li/Talents/13/Shrink Ray.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shrink Ray</span></font><br><font color="00ffff">在四秒內使一個敵方英雄減少50%傷害和50%的移動速度。</font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Li Li/Talents/13/Ice Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ice Block</span></font><br><font color="00ffff">使自身無敵無法動作持續3秒。</font></span>				  	
                    </div>                                                                
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Li Li/Talents/16/Magical Essence.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Magical Essence</span></font><br><font color="00ffff">增加一般技能25%的施法距離。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Li Li/Talents/16/Herbal Cleanse.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Herbal Cleanse(Q)</span></font><br><font color="00ffff">Healing Brew會解除目標單位所受到的控場技能並增加20%的移動速度，持續2秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Li Li/Talents/16/Two For One.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Two For One(Q)</span></font><br><font color="00ffff">Healing Brew可以治療附近2個受傷最重的單位。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Li Li/Talents/16/Timeless Creature.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Timeless Creature(W)</span></font><br><font color="00ffff">法力龍持續時間增加50%。</font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Li Li/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin</span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。</font></span>				  	
                    </div>                                                                
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Li Li/Talents/20/Resurgence of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resurgence of the Storm</span></font><br><font color="00ffff">死亡後於5秒後在祭壇復活，冷卻時間120秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Li Li/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Li Li/Talents/20/Storm Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Storm Shield</span></font><br><font color="00ffff">自身和周圍隊友產生最大生命值20％的護盾，持續時間3秒。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Li Li/Talents/20/Jug of 1,000,000 Cups.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Jug of 1000000 Cups(R)</span></font><br><font color="00ffff">治癒效果提升成2倍同樣時間內。</font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Li Li/Talents/20/Double Dragon.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Double Dragon(R)</span></font><br><font color="00ffff">水龍擊中對方英雄後會再產生1隻水龍攻擊施法目標所在地點。</font></span>				  	
                    </div>                                                                
                  </div>			  
				  <!--等級20結束-->					  				  				  				  				  				
				</div>								
				<!--天賦說明結束-->		


        </div>
	</div>
    <!-- content here end-->		
		
		
		
		
		
		




		<!-- page tail -->
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  <div class="container">
		<div class="footer small text-center">
			<ul class="list-inline">
			  <li>Copyright &copy;</li>
			  <li>2014 傲飛娛樂有限公司 All Rights Reserved</li>
			  <li>Welly Tung</li>
			  <li>Mike Kao</li>
			</ul> 
		</div>


  </div>
</nav>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--     <script src="js/jquery-1.11.1.js"></script> -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--     <script src="js/bootstrap.js"></script> -->
<!--     <script src="js/docs.min.js"></script> -->
  </body>
</html>

