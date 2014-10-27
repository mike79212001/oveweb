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
			<div class="NOVA"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Nova/300_300/NOVY.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:NOVY</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:700(每等+110)<br><br>生命回復:1.457(每等+0.227)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:39(每等+10)<br><br>攻擊速度:0.8</h3></font></span>						
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
      									 乃是人族帝國麾下的最難以捉摸的戰士，也是迄今為止為人所知最強大的靈能戰士之一。她意志堅定也非常致命，任何人都絕對不願意被她的瞄準鏡鎖定。
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
      								     不在戰斗狀態下時將會隱形。除此之外，她還能從遠處狙擊敵人，並設置自己的鏡像來迷惑敵手。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Nova/Abilities/Snipe.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Snipe(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>指向技，造成100+(等級*35)傷害。</font>
    				</span>

					<br>
    				<img src="picture/Nova/Abilities/Pinning Shot.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Pinning Shot(W) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">80mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">15秒</font>
    						<br class="fon2"><font color="fffff"><br>造成50+(等級*18)傷害，並減少目標移動速度30%，持續2.25秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Nova/Abilities/Holo Decoy.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Holo Decoy(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">15秒</font>
    						<br class="fon2"><font color="fffff"><br>創造一個持續5秒鏡像攻擊敵人，但是不會造成傷害，使用此既能不會解除隱身。</font>
    				</span>
    				
					<br>
    				<img src="picture/Nova/Abilities/Triple Tap.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Triple Tap(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>鎖定一個目標英雄，對第一個接觸的英雄或建築打出三發射擊傷害，每次傷害為80+(等級*33)。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Nova/Abilities/Precision Strike.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Precision Strike(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">60秒</font>
    						<br class="fon2"><font color="fffff"><br>延遲3秒後，對目標範圍內的敵人造成335+(等級*35)的傷害。</font>
    				</span>   
  
					<br>
    				<img src="picture/Nova/Abilities/Permanent CloakSniper.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Permanent Cloak, Sniper&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>脫離戰鬥2秒後進入隱身狀態，受到傷害或攻擊時會解除隱身。</font>
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
				  	<img src="picture/Nova/Talents/1/Psi-Op Rangefinder.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Psi-Op Rangefinder(Q)</span></font><br><font color="00ffff">Snipe(Q)射程增加20%。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nova/Talents/1/Path of the Wizard.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Wizard</span></font><br><font color="00ffff">每等額外增加5魔量和0.1魔力回復。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nova/Talents/1/Ambush Snipe.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ambush Snipe(Q)</span></font><br><font color="00ffff">隱形的時候使用Snipe(Q)增加20%傷害。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Nova/Talents/1/Tazer Rounds.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Tazer Rounds(W)</span></font><br><font color="00ffff">Pinning Shot(W)緩速時間增加至3秒。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Nova/Talents/4/FN92 Sniper Rifle.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">FN92 Snier Rifle</span></font><br><font color="00ffff">基礎攻擊距離從6.5增加至7.5。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nova/Talents/4/Vampiric Assault.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Vampiric Assault</span></font><br><font color="00ffff">基礎攻擊15%的傷害回覆自身生命。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Nova/Talents/4/Focused Attack.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Focused Attack</span></font><br><font color="00ffff">每10秒，下次基礎攻擊增加額外50%傷害，每次基礎功及減少冷卻時間1秒。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Nova/Talents/4/Extended Projection.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Extended Projection(E)</span></font><br><font color="00ffff">Holo Decoy(E)施放範圍增加100%。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Nova/Talents/4/Envenom.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Envenom</span></font><br><font color="00ffff">主動技，使一個敵人中毒，造成180+(等級*30)傷害。</font></span>				  	
                    </div>                                                                                  
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Nova/Talents/7/Battle Momentum.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battle Momentum</span></font><br><font color="00ffff">普通攻擊將減少技能冷卻0.5秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nova/Talents/7/Digital Shrapnel.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Digital Shrapnel(E)</span></font><br><font color="00ffff">Holo Decoy(E)鏡像消失時會爆炸，對附近敵人造成50+(等級*18)傷害。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Nova/Talents/7/Explosive Round.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Explosive Round(Q)</span></font><br><font color="00ffff">Snipe(Q)擊中目標時，周圍敵人受到50%傷害。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Nova/Talents/7/Explosive Round.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Follow Through</span></font><br><font color="00ffff">使用技能後，下一次基礎攻擊增加25%傷害。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Nova/Talents/10/Triple Tap.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Triple Tap(R)</span></font><br><font color="00ffff">鎖定一個目標英雄，對第一個接觸的英雄或建築打出三發射擊傷害，每次傷害為80+(等級*33)。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nova/Talents/10/Precision Strike.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Precision Strike(R)</span></font><br><font color="00ffff">延遲3秒後，對目標範圍內的敵人造成335+(等級*35)的傷害。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Nova/Talents/13/Advanced Cloaking.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Advanced Cloaking</span></font><br><font color="00ffff">當隱身時，移動速度增加25%，每2秒回復1%的生命。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nova/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spell Shield</span></font><br><font color="00ffff">週期性的減少50%來自英雄技能的傷害，最多可以充能兩次。
 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Nova/Talents/13/Holo Drone.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Holo Drone(E)</span></font><br><font color="00ffff">Holo Decoy(E)產生的鏡像可以對敵人造成傷害，可以使用Snipe(Q)和Pinning Shot(W)，但所造成的傷害較少。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Nova/Talents/13/Remote Access.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Remote Access(E)</span></font><br><font color="00ffff">可以控制Holo Decoy(E)產生的鏡像，該鏡像的視野增加100%。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Nova/Talents/13/Overdrive.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Overdrive    </span></font><br><font color="00ffff">主動技，增加技能25%傷害，但是耗魔增加40%，持續5秒。</font></span>				  	
                    </div>                                                                                  
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Nova/Talents/16/Crippling Shot.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Crippling Shot(W)</span></font><br><font color="00ffff">被Pinning Shot(W)擊中的敵人，在2秒內會承受額外25%的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nova/Talents/16/Railgun.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Railgun(Q)</span></font><br><font color="00ffff">Snipe(Q)穿透第一個敵人後對後面的敵人造成50%傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Nova/Talents/16/Blood for Blood.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blood for Blood </span></font><br><font color="00ffff">主動技，吸取目標敵人15%最大生命值，並使其移動速度降低30%，持續3秒。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Nova/Talents/16/Rewind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rewind</span></font><br><font color="00ffff">基礎技能冷卻時間減少10秒。</font></span>				  	
                    </div>                                                                                   
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Nova/Talents/20/Onslaught of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Onslaught of the storm</span></font><br><font color="00ffff">被技能擊殺的敵人會爆炸造成500傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nova/Talents/20/Onslaught of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Nova/Talents/20/Fast Reload.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fast Reload(R)</span></font><br><font color="00ffff">Triple Tap(R)擊殺敵方英雄，冷卻時間歸零。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Nova/Talents/20/Precision Barrage.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Precision Barrage(R)</span></font><br><font color="00ffff">Precision Strike(R)有兩次充能，兩次間隔冷卻時間為3秒。</font></span>				  	
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

