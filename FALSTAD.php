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
			<div class="FALSTAD"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Falstad/300_300/FALTASD.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:FALSTAD</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:710(每等+120)<br><br>生命回復:1.48(每等+0.25)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:34(每等+9)<br><br>攻擊速度:0.7</h3></font></span>						
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
      									弗斯塔德·蠻錘是蠻錘氏族的族長，同時也是鐵爐堡中三錘議會的成員。弗斯塔德從沒死過，聲稱其死亡的人都是在說謊！
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
      								     弗斯塔德能從極遠距離攻擊他的敵人，並且能飛越地形。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Falstad/Abilities/Hammerang.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Hammerang(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">70mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">10秒</font>
    						<br class="fon2"><font color="fffff"><br>對路徑上的敵人造成50+(等級*12)傷害，投擲後槌子會返回手中。</font>
    				</span>

					<br>
    				<img src="picture/Falstad/Abilities/Thunderstorm.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Thunderstorm(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">15秒</font>
    						<br class="fon2"><font color="fffff"><br>被動效果:每8秒隨機對附近敵人造成40+(等級*10)的傷害。<BR>主動效果:對附近最多4個敵人造成540+(等級*10)傷害，攻擊同一敵人多次時每次攻擊傷害降低25%。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Falstad/Abilities/Barrel Roll.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Barrel Roll(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">16秒</font>
    						<br class="fon2"><font color="fffff"><br>衝向目標區域，產生75+(等級*15)點的護盾，持續2秒。</font>
    				</span>
    				
					<br>
    				<img src="picture/Falstad/Abilities/Aerial Blitzkrieg.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Aerial Blitzkrieg(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>延遲1.5秒後，對附近地人造成150+(等級*27)的傷害，並暈眩1.5秒。 </font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Falstad/Abilities/Shock and Awe.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Shockand Awe(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>短暫延遲後，對路徑上的敵人造成280+(等級*31)的傷害。</font>
    				</span>   
  
					<br>
    				<img src="picture/Falstad/Abilities/Tailwind.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Tailwind &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100</font>
    						<br class="fon2"><font color="fffff"><br>6秒內未受到傷害，增加20%的移動速度。</font>
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
				  	<img src="picture/Falstad/Talents/1/Path of the Assassin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Assassin</span></font><br><font color="00ffff">每提升一級，增加額外2點傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Falstad/Talents/1/Range.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Range(E)</span></font><br><font color="00ffff">Barrel Roll(E)飛行距離增加20%。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Falstad/Talents/1/Dog Fight.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Dog Fight(E)</span></font><br><font color="00ffff">Barrel Roll(E)護盾時間增加3秒。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Falstad/Talents/1/Bribe.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bribe</span></font><br><font color="00ffff">擊殺敵方小兵，可以獲得賄賂層數，疊加到20層時，可直接擊敗一個傭兵營地，但對骷髏無效。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Falstad/Talents/4/Vampiric Assault.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Vampiric Assault</span></font><br><font color="00ffff">基礎攻擊15%的傷害回復自身生命。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Falstad/Talents/4/Stormhammer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stormhammer</span></font><br><font color="00ffff">基礎攻擊對附近一個目標造成50%傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Falstad/Talents/4/Wildhammer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Wildhammer(Q)</span></font><br><font color="00ffff">Hammerang(Q)對第一個敵人造成150%的傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Falstad/Talents/4/Zap!.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Zap!(W)</span></font><br><font color="00ffff">Thunderstorm(W)的被動效果減少2秒冷卻時間。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Falstad/Talents/7/Battle Momentum.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battle Momentum</span></font><br><font color="00ffff">普通攻擊將減少技能冷卻0.5秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Falstad/Talents/7/Fly Away!.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fly Away!(Z)</span></font><br><font color="00ffff">飛行的冷卻時間減少15秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Falstad/Talents/7/BOOMerang.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">BOOMerang(Q)</span></font><br><font color="00ffff">Hammerang(Q)可再次使用技能，在槌子周圍造成25+(等級*12)傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Falstad/Talents/7/First Aid.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">First Aid</span></font><br><font color="00ffff">主動技，在6秒內回復35%最大生命值的生命。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Falstad/Talents/10/Aerial Blitzkrieg.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Aerial Blitzkrieg(R)</span></font><br><font color="00ffff">延遲1.5秒後，對附近地人造成150+(等級*27)的傷害，並暈眩1.5秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Falstad/Talents/10/Shock and Awe.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shockand Awe(R)</span></font><br><font color="00ffff">短暫延遲後，對路徑上的敵人造成280+(等級*31)的傷害。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Falstad/Talents/13/Giant Killer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Giant Killer</span></font><br><font color="00ffff">基礎攻擊對敵方英雄造成額外最大生命1.5%的傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Falstad/Talents/13/Crippling Hammer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Crippling Hammer(Q)</span></font><br><font color="00ffff">Hammerang(Q)緩速效果增加至50%。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Falstad/Talents/13/Overdrive.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Overdrive </span></font><br><font color="00ffff">主動技，增加技能25%傷害，但是耗魔增加40%，持續5秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Falstad/Talents/13/Lightning Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Lightning Storm(W)</span></font><br><font color="00ffff">Thunderstorm(W)被動效果可以攻擊兩個敵人。 </font></span>				  	
                    </div>                                                                                                                       
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Falstad/Talents/16/Gust of Wind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Gust of Wind</span></font><br><font color="00ffff">被動能力Tailwind降低為3秒內未受到傷害，增加20%的移動速度。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Falstad/Talents/16/Afterburner.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Afterburner(E)</span></font><br><font color="00ffff">使用Barrel Roll(E)後，增加75%移動速度，持續3秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Falstad/Talents/16/Rewind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rewind</span></font><br><font color="00ffff">基礎技能冷卻時間減少10秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Falstad/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin</span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。 </font></span>				  	
                    </div>                                                                                                                       
                  </div>					  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Falstad/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Falstad/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Falstad/Talents/20/Preparation.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Preparation(R)</span></font><br><font color="00ffff">Aerial Blitzkrieg(R)的延遲時間減少50%，產生一個50%最大生命值的護盾。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Falstad/Talents/20/Blast of Awe.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blast of Awe(R</span></font><br><font color="00ffff">Shockand Awe(R)距離變為2倍並增加25%傷害。 </font></span>				  	
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
    <!-- <script src="js/jquery-1.11.1.js"></script> -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/bootstrap.js"></script> -->
    <!-- <script src="js/docs.min.js"></script> -->
  </body>
</html>

