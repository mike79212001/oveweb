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
			<div class="MURKY"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Murky/300_300/MURKY.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:MURKY</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:250(每等+60)<br><br>生命回復:5(每等+0.125)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:xx(每等+xx)<br><br>魔力回復:xx(每等+xx)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:18(每等+6)<br><br>攻擊速度:0.8</h3></font></span>						
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
      									 Mrgglglbrlg rmrmgllg mrggggm. Mrrglglgy, mgllglgl mgggrrmgl? MRGGGLGLLM! Mrrggllgggllggll mrrglrlg mrrg mrrg mrrrg.
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
      								     擅長騷擾對手並呼叫同伴與投擲河豚，而他的蛋能讓他在死亡後快速復活。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Murky/Abilities/Slime.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Slime(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						
    						
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">4秒</font>
    						<br class="fon2"><font color="fffff"><br>對附近敵人造成7+(等級*3)的傷害，且在6秒內造成額外42+(等級*18)的傷害；被擊中的目標會顯形並減少20%的移動速度。</font>
    				</span>

					<br>
    				<img src="picture/Murky/Abilities/Pufferfish.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Puffer Fish(W)  &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">9秒</font>
    						<br class="fon2"><font color="fffff"><br>對目標區域投擲1隻河豚並在4秒後爆炸並對區域內敵人造成87+(等級*10)的傷害(對建築物造成4倍的傷害)；敵人可以先殺死河豚阻止其爆炸。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Murky/Abilities/Safety Bubble.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Safety Bubble(E) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">14秒</font>
    						<br class="fon2"><font color="fffff"><br>在2秒內無敵但無法攻擊或使用技能。</font>
    				</span>
    				
					<br>
    				<img src="picture/Murky/Abilities/March of the Murlocs.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">March of the Murlocs(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>在區域內呼叫一群魚人大軍，魚人會直線前進並衝向第一個發現的敵方英雄或建築；每個魚人會在5秒內造成61+(等級*7)的傷害並緩速目標10%。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Murky/Abilities/Octo-Grab.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Octo-Grap(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">30秒</font>
    						<br class="fon2"><font color="fffff"><br>召喚1隻章魚並暈眩敵方目標英雄3秒，每秒造成1點傷害。</font>
    				</span>   
  
					<br>
    				<img src="picture/Murky/Abilities/Spawn Egg.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Spawn Egg(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">45秒</font>
    						<br class="fon2"><font color="fffff"><br>在目標區域放置1顆可顯示附近視野的蛋，當你死亡5秒後將會自蛋中復活。</font>
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
				  	<img src="picture/Murky/Talents/1/Demolitionist.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Demolitionist</span></font><br><font color="00ffff">基礎攻擊建築時減少一發彈藥並額外造成10%傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Murky/Talents/1/Bigger Slime.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bigger Slime(Q)</span></font><br><font color="00ffff">Slime的傷害範圍增加30%。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Murky/Talents/1/Bubble Breeze.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bubble Breeze(E)</span></font><br><font color="00ffff">Satety Bubble獲得20%移動加速。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Murky/Talents/1/Bribe.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bribe</span></font><br><font color="00ffff">擊殺敵方小兵，可以獲得賄賂層數，疊加到20層時，可直接擊敗一個傭兵營地，但對骷髏無效。</font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Murky/Talents/4/Minion Killer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Minion Killer</span></font><br><font color="00ffff">對小兵、僱傭兵與招喚物增加25%的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Murky/Talents/4/Slimy End.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Slimy End(Q)</span></font><br><font color="00ffff">死亡時自動觸發Slime。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Murky/Talents/4/Envenom.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Envenom</span></font><br><font color="00ffff">給敵方英雄下毒，6秒內造成180+(等級*30)點傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Murky/Talents/4/Promote.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Promote</span></font><br><font color="00ffff">使用後增加小兵200%的血量與100%的傷害，能充能2次。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Murky/Talents/7/Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Block</span></font><br><font color="00ffff">週期性的減少50%來自英雄的基礎攻擊，最多可以疊加兩層。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Murky/Talents/7/Out With A Bang.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Out With A Bang(W)</span></font><br><font color="00ffff">死亡時留下1隻河豚。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Murky/Talents/7/Wrath of Cod.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Wrath of Cod(W)</span></font><br><font color="00ffff">原本Puffer Fish對建築的傷害加乘將適用於其它敵軍。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Murky/Talents/7/Assault Egg.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Assault Egg(Trait)</span></font><br><font color="00ffff">Spawn Egg冷卻時間減少20秒並增加200%生命值。</font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Murky/Talents/7/Clairvoyance.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Clairvoyance </span></font><br><font color="00ffff">施放後始目標區域的所有單位顯形，持續4秒。</font></span>				  	
                    </div>                                                         
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Murky/Talents/10/March of the Murlocs.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">March of the Murlocs(R)</span></font><br><font color="00ffff">在區域內呼叫一群魚人大軍，魚人會直線前進並衝向第一個發現的敵方英雄或建築；每個魚人會在5秒內造成61+(等級*7)的傷害並緩速目標10%。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Murky/Talents/10/Octo-Grab.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Octo-Grap(R)</span></font><br><font color="00ffff">召喚1隻章魚並暈眩敵方目標英雄3秒，每秒造成1點傷害。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Murky/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spell Shield </span></font><br><font color="00ffff">週期性的減少50%來自英雄技能的傷害，最多可以充能兩次。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Murky/Talents/13/Slime Advantage.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Slime Advantage(Q)</span></font><br><font color="00ffff">你的普通攻擊會對受到Slime影響之目標產生額外50%的傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Murky/Talents/13/Tufferfish.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Tuffer Fish(W)</span></font><br><font color="00ffff">河豚爆炸前會對敵人造成一次額外傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Murky/Talents/13/Bubble Machine.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bubble Machine(E)</span></font><br><font color="00ffff">Safety Bubble減少5秒冷卻時間。</font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Murky/Talents/13/Hidden Assault.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hidden Assault(Trait) </span></font><br><font color="00ffff">當你從蛋中復活時會維持隱形10秒，並增加蛋的視野150%。</font></span>				  	
                    </div>                                                         
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Murky/Talents/16/Master of Slime.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Master of Slmie(Q)</span></font><br><font color="00ffff">Slime持續時間增加2秒，效果持續期間再次受到Slime傷害將會額外造成21+(等級*9)的傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Murky/Talents/16/Pufferfish School.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Puffer Fish School(W)</span></font><br><font color="00ffff">Puffer Fish可充能2次。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Murky/Talents/16/Compressed Air.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Compressed Air(W)</span></font><br><font color="00ffff">Puffer Fish傷害範圍增加50%。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Murky/Talents/16/Beneath Contempt.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Beneath Contempt(E)</span></font><br><font color="00ffff">使用Satety Bubble後，建築與小兵將無法攻擊你，持續5秒。</font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Murky/Talents/16/Blood for Blood.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blood for Blood</span></font><br><font color="00ffff">主動技，吸取目標敵人15%最大生命值，並使其移動速度降低30%，持續3秒。</font></span>				  	
                    </div>                                                                              
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Murky/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Murky/Talents/20/Swift StormYour Hero is no longer dismounted from taking damage..png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Swift Storm</span></font><br><font color="00ffff">承受傷害時不會解除坐騎並增加60%的騎馬移動速度。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Murky/Talents/20/Never-Ending Murlocs.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Never-ending Murlocs(R)</span></font><br><font color="00ffff">March of the Murlocs攻擊距離變長且黏住目標時間延長2秒。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Murky/Talents/20/And A Shark Tool.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">... And A Shark TOO!(R)</span></font><br><font color="00ffff">章魚的傷害增加10000%+(等級*1000)%。</font></span>				  	
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

