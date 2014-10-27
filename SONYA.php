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
			<div class="SONYA"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Sonya/300_300/SONYA.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:SONYA</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:930(每等+210)<br><br>生命回復:1.938(每等+0.5)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:38(每等+7)<br><br>攻擊速度:0.8</h3></font></span>						
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
      									來自北方寒風凜冽恐懼之地，兇悍野蠻人戰士族群。在經歷了家破族滅的災厄之後，在庇護所世界中遊蕩，尋求戰鬥和她族人們的安身之處。
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
      								     依靠怒氣的戰士，她的攻擊和技能會吸取敵人的生命力，並在怒氣磅礡難以抵擋。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Sonya/Abilities/Ancient Spear.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Anciet Spear(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力->怒氣</font>
    						<font color ="ffff" class="fon">X</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">13秒</font>
    						<br class="fon2"><font color="fffff"><br>投擲一根長矛並將自己拉向第一個被擊中的敵人，造成70+(等級*14)傷害並短暫地擊暈他們。如果此技能擊中，獲得20點怒氣。</font>
    				</span>

					<br>
    				<img src="picture/Sonya/Abilities/Seismic Slam.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Seismic Slam(W) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力->怒氣</font>
    						<font color ="ffff" class="fon">15mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">1秒</font>
    						<br class="fon2"><font color="fffff"><br>對敵人造成90+(等級*13)傷害，對目標後面的敵人造成23+(等級*3)傷害。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Sonya/Abilities/Fury.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Fury&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力->怒氣</font>
    						<font color ="ffff" class="fon">X</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">X</font>
    						<br class="fon2"><font color="fffff"><br>使用怒氣而不是魔力。受到傷害和造成傷害時獲得怒氣。使用技能後增加10%的移動速度，持續4秒。</font>
    				</span>
    				
					<br>
    				<img src="picture/Sonya/Abilities/Whirlwind.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Whirlwind(E)  &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力->怒氣</font>
    						<font color ="ffff" class="fon">20mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">1秒</font>
    						<br class="fon2"><font color="fffff"><br>3秒內對附近敵人造成140+(等級*28)傷害，傷害的20%轉化為治療。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Sonya/Abilities/Wrath of the Berserker.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Wrath of the Berserker(R) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力->怒氣</font>
    						<font color ="ffff" class="fon">X</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">30秒</font>
    						<br class="fon2"><font color="fffff"><br>基礎攻擊和技能攻擊增加額外30%的傷害，被沉默、擊暈、減速、定身的持續時間減少50%，持續10秒每增加4點怒氣可以延長1秒持續時間。</font>
    				</span>   
  
					<br>
    				<img src="picture/Sonya/Abilities/Leap.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Leap(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力->怒氣</font>
    						<font color ="ffff" class="fon">X</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">50秒</font>
    						<br class="fon2"><font color="fffff"><br>跳向空中，對附近敵人造成50+(等級*11)傷害，並暈眩他們1.5秒。</font>
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
				  	<img src="picture/Sonya/Talents/1/Path of the Warrior.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Warrior</span></font><br><font color="00ffff">英雄每級額外增加35最大血量。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sonya/Talents/1/Endless Fury.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Endless Fury</span></font><br><font color="00ffff">怒氣值上限增加至150。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sonya/Talents/1/Shot of Fury.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Short of Fury </span></font><br><font color="00ffff">主動技，增加25點怒氣。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Sonya/Talents/1/War Paint.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">War Point</span></font><br><font color="00ffff">基礎功及傷害的25%轉為治療。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Sonya/Talents/4/Superiority.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Superiority</span></font><br><font color="00ffff">來自非英雄的傷害減少50%。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sonya/Talents/4/Focused Attack.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Focused Attack</span></font><br><font color="00ffff">每10秒，下次基礎攻擊增加額外50%傷害，每次基礎功及減少冷卻時間1秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Sonya/Talents/4/Boon Of The Ancients.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Boon on the Ancients(Q)</span></font><br><font color="00ffff">Anciet Spear(Q)擊中敵人時減少冷卻時間5秒。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Sonya/Talents/4/Furious Blow.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Furious Blow(W)</span></font><br><font color="00ffff">Seismic Slam(W)傷害提高50%，怒氣消耗增加至20。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Sonya/Talents/7/Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Block</span></font><br><font color="00ffff">週期性的減少50%來自英雄的基礎攻擊，最多可以疊加兩層。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sonya/Talents/7/Poisoned Spear.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Poisoned Spear(Q)</span></font><br><font color="00ffff">Anciet Spear(Q)在4秒內增加50%傷害。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Sonya/Talents/7/Shattered Ground.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shattered Ground(W)</span></font><br><font color="00ffff">Seismic Slam(W)對主要目標傷害增加100%。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Sonya/Talents/7/fer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ferocious Healing</span></font><br><font color="00ffff">主動技，回復最大生命值10%。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Sonya/Talents/10/Leap.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Leap(R) </span></font><br><font color="00ffff">跳向空中，對附近敵人造成50+(等級*11)傷害，並暈眩他們1.5秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sonya/Talents/10/Wrath of the Berserker.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Wrath of the Berserker(R) </span></font><br><font color="00ffff">基礎攻擊和技能攻擊增加額外30%的傷害，被沉默、擊暈、減速、定身的持續時間減少50%，持續10秒每增加4點怒氣可以延長1秒持續時間。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Sonya/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spell Shield </span></font><br><font color="00ffff">週期性的減少50%來自英雄技能的傷害，最多可以充能兩次。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sonya/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Composite Spear(Q) </span></font><br><font color="00ffff">Anciet Spear(Q)距離增加30%。 </font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Sonya/Talents/13/Aftershock.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Aftershock(W)</span></font><br><font color="00ffff">Seismic Slam(W)減少50%怒氣消耗。 </font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Sonya/Talents/13/Wind Shear.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Wind Shear(E) </span></font><br><font color="00ffff">Whirlwind(E)移除所有限制移動速度的負面效果，治癒量增加至25%。 </font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Sonya/Talents/13/Dust Devils.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Dust Devils(E)</span></font><br><font color="00ffff">Whirlwind(E)傷害增加25%。 </font></span>				  	
                    </div>                                                                                                     
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Sonya/Talents/16/Imposing Presence.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Imposing Presence</span></font><br><font color="00ffff">受到攻擊時，攻擊者降低30%攻擊速度。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sonya/Talents/16/Mystical Spear.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Mystical Spear(Q) </span></font><br><font color="00ffff">Anciet Spear(Q)未擊中敵人也會將自己拉至目標地點，但不會獲得怒氣。 </font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Sonya/Talents/16/Enduring Whirlwind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Enduring Whirlwind(E)</span></font><br><font color="00ffff">Whirlwind(E)持續時間變為2倍。 </font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Sonya/Talents/16/No Escape.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">No Escape </span></font><br><font color="00ffff">使用技能時增加的移動速度變為20%。 </font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Sonya/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin</span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。 </font></span>				  	
                    </div>                                                                                                     
                  </div>					  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Sonya/Talents/20/Resurgence of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resurgence of the Storm </span></font><br><font color="00ffff">死亡後於5秒後在祭壇復活，冷卻時間120秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sonya/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm </span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。 </font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Sonya/Talents/20/Arreat Crater.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Arreat Crater(R)</span></font><br><font color="00ffff">跳躍至指定地點，並在目標地點周圍建立一個無法跨越的地形。 </font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Sonya/Talents/20/Anger Management.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Anger Management(R) </span></font><br><font color="00ffff">得2點怒氣可以延長Wrath of the Berserker(R)持續時間1秒，被沉默、擊暈、減速、定身的持續時間減少至75%。 </font></span>				  	
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

