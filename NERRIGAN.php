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
			<div class="KERRIGAN"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Kerrigan/300_300/KERRIGAN.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:KERRIGAN</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:830(每等+150)<br><br>生命回復:1.664(每等+0.313)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:40(每等+11)<br><br>攻擊速度:0.8</h3></font></span>						
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
      									 曾是一名人族並具有萬夫莫敵的強勁靈能，然而卻被同胞拋棄，留下她被蟲族改造成了刀鋒女皇。如今她已從黑暗力量的侵蝕中脫離，卻面臨著足以使銀河湮滅的危機。
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
      								    不僅具有強大的殺傷與進攻性，還可以在施放技能和進行攻擊時獲得靈能護盾的保護。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Kerrigan/Abilities/Ravage.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Ravage(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">8秒</font>
    						<br class="fon2"><font color="fffff"><br>跳向一個目標，造成50+(等級*20)傷害，如果擊殺目標，冷卻歸零。</font>
    				</span>

					<br>
    				<img src="picture/Kerrigan/Abilities/Impaling Blades.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Impoling Blades	(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>範圍技，對目標區域敵人造成125+(等級*20)傷害，並暈眩一秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Kerrigan/Abilities/Primal Grasp.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Primal Grasp(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">8秒</font>
    						<br class="fon2"><font color="fffff"><br>將目標範圍內的敵人拉向自己，造成50+(等級*13)傷害。</font>
    				</span>
    				
					<br>
    				<img src="picture/Kerrigan/Abilities/Maelstrom.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Maelstorm(R) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">120秒</font>
    						<br class="fon2"><font color="fffff"><br>對附近的敵人造成50+(等級*5)傷害，持續9秒。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Kerrigan/Abilities/Summon Ultralisk.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Summon Ultralisk(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">120秒</font>
    						<br class="fon2"><font color="fffff"><br>招換一隻雷獸，造成40+(等級*8)傷害，並對附近敵人造成20+(等級*4)的濺射傷害。</font>
    				</span>   
  
					<br>
    				<img src="picture/Kerrigan/Abilities/Assimilation.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Assimilation&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100</font>
    						<br class="fon2"><font color="fffff"><br>10%的攻擊傷害會轉為持續6秒的護盾，攻擊敵方應雄時獲得雙倍效果，護盾最大值200+(等級*100)。</font>
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
				  	<img src="picture/Kerrigan/Talents/1/Path of the Assassin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Assassin</span></font><br><font color="00ffff">每提升一級，增加額外2點傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/1/Siphoning Impact.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Siphoning Impact(Q)</span></font><br><font color="00ffff">使用Ravage(Q)時會回復5%最大生命。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/1/Sharpened Blades.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sharpened Blades(W)</span></font><br><font color="00ffff">Impoling Blades	(W)增加15%傷害。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Kerrigan/Talents/1/Sweeping Grasp.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sweeping Grasp(E)</span></font><br><font color="00ffff">增加Primal Grasp(E)範圍20%。</font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/4/Focused Attack.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Focused Attack</span></font><br><font color="00ffff">每10秒，下次基礎攻擊增加額外50%傷害，每次基礎功及減少冷卻時間1秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/4/Fury of the Swarm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Swarm</span></font><br><font color="00ffff">基礎攻擊造成額外50%濺射傷害。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Kerrigan/Talents/4/Psionic Pulse.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Psionic Pulse(E)</span></font><br><font color="00ffff">Primal Grasp(E)施法後，在凱莉根周圍的敵人會受到29+(等級*6.5)傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Kerrigan/Talents/4/Envenom.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Envenom</span></font><br><font color="00ffff">主動技，使一個敵人中毒，在6秒內造成180+(等級*30)傷害。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/7/Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Block</span></font><br><font color="00ffff">週期性的減少50%來自英雄的基礎攻擊，最多可以疊加兩層。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/7/Battle Momentum.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battle Momentum</span></font><br><font color="00ffff">普通攻擊將減少技能冷卻0.5秒 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Kerrigan/Talents/7/Impaling Swarm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Impaling Swarm(W)</span></font><br><font color="00ffff">Impoling Blades	(W)在目標地點孵化2隻異化蟲。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Kerrigan/Talents/7/Clean Kill (Q).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Clean Kill(Q)</span></font><br><font color="00ffff">若Ravage(Q)擊殺目標，可以返回90%消耗的魔力。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/7/Searing Attacks.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Searing Attacks </span></font><br><font color="00ffff">主動技，基礎攻擊提升50%持續5秒。每次攻擊消耗15點法力值。</font></span>				  	
                    </div>                                                                                   
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/10/Maelstrom.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Summon Ultralisk(R) </span></font><br><font color="00ffff">對附近的敵人造成50+(等級*5)傷害，持續9秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/10/Summon Ultralisk.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Summon Ultralisk(R) </span></font><br><font color="00ffff">招換一隻雷獸，造成40+(等級*8)傷害，並對附近敵人造成20+(等級*4)的濺射傷害。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/13/Lingering Essence.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Lingering Essence</span></font><br><font color="00ffff">護盾持續時間增至12秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/13/Eviscerate.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Eviscerate(Q)</span></font><br><font color="00ffff">增加Ravage(Q)的距離25%。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Kerrigan/Talents/13/Double Strike.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Double Strike</span></font><br><font color="00ffff">使用一般技能後的下一次基礎攻擊增加50%傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Kerrigan/Talents/13/Overdrive.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Overdrive</span></font><br><font color="00ffff">主動技，增加技能25%傷害，但是耗魔增加40%，持續5秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/13/Sprint.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sprint  </span></font><br><font color="00ffff">主動技，增加75%，持續3秒。</font></span>				  	
                    </div>                                                                                   
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/16/Executioner.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Executioner</span></font><br><font color="00ffff">基礎攻擊對被減速、被定身、被擊暈的目標造成40%額外傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/16/Blade Torrent.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blade Torrent(W)</span></font><br><font color="00ffff">Impoling Blades	(W)範圍增加50%。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Kerrigan/Talents/16/Blood for Blood.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blood for Blood</span></font><br><font color="00ffff">主動技，吸取目標敵人15%最大生命值，並使其移動速度降低30%，持續3秒。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Kerrigan/Talents/16/Rewind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rewind</span></font><br><font color="00ffff">基礎技能冷卻時間減少10秒。</font></span>				  	
                    </div>                                                                                 
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Kerrigan/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Kerrigan/Talents/20/Omegastorm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Omegastorm(R)</span></font><br><font color="00ffff">Maelstorm(R)範圍增加25%，護盾值額外增加100%。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Kerrigan/Talents/20/Torrasque.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Torrasque(R)</span></font><br><font color="00ffff">雷獸持續時間和生命量額外增加100%。</font></span>				  	
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

