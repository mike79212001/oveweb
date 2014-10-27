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
			<div class="TASSADAR"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Tassadar/300_300/Tassadar.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:Tassadar</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:750(每等+125)<br><br>生命回復:1.813(每等+0.262)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:38(每等+6)<br><br>攻擊速度:1</h3></font></span>						
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
      									 執行官的他，英勇不懈的對抗著蟲族。在學習了卡拉和虛空的力量後，他終於準備好面對蟲族主宰與蟲群。。
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
      								     能為友軍施放臨時的護盾或是偵測敵軍，還能運用各種能力為自己的團隊改變戰場情勢。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Tassadar/Abilities/Plasma Shield.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Plasma Shield(Q) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">8秒</font>
    						<br class="fon2"><font color="fffff"><br>在友方單位上放置一個200+(等級*40)的護盾，持續8秒。</font>
    				</span>

					<br>
    				<img src="picture/Tassadar/Abilities/Psionic Storm.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Psionic Storm(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">65mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">8秒</font>
    						<br class="fon2"><font color="fffff"><br>在目標範圍內造成每秒55+(等級*5)的傷害，持續3秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Tassadar/Abilities/Dimensional Shift.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Dimensional Shift(E)  &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">20秒</font>
    						<br class="fon2"><font color="fffff"><br>在1.5秒內無敵並無法被看見。</font>
    				</span>
    				
					<br>
    				<img src="picture/Tassadar/Abilities/Archon.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Archon(R)  &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">80mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>變身成Archon獲得200+(等級*40)的護盾，並擁有64+(等級*12)的一般攻擊傷害與32+(等級*6)的濺射傷害。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Tassadar/Abilities/Force Wal.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Force Wall(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>創造一面不可逾越的牆，持續2.5秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Tassadar/Abilities/Oracle.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Oracle(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">25mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">30秒</font>
    						<br class="fon2"><font color="fffff"><br>大大的增加視野並能偵測到英雄，持續7秒。</font>
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
				  	<img src="picture/Tassadar/Talents/1/Path of the Wizard.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Wizard</span></font><br><font color="00ffff">每等額外增加5魔量和0.1魔力回復。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tassadar/Talents/1/Minion Bulwark.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Minion Bulwark(Q)</span></font><br><font color="00ffff">Plasma Shield對小兵與僱傭兵施放可以額外獲得50%的護盾值直到被打破。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tassadar/Talents/1/Overload.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Overload(W)</span></font><br><font color="00ffff">增加20%Psionic Storm所造成的傷害。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Tassadar/Talents/1/Healing Ward.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Healing Ward</span></font><br><font color="00ffff">放置一根治癒圖騰再地板上對附近友軍每秒造成2%最大生命回復持續10秒。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tassadar/Talents/4/Leeching Plasma.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Leeching Plasma(Q)</span></font><br><font color="00ffff">擁有Plasma Shield時，會擁有20%的普通攻擊吸血效果。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tassadar/Talents/4/Reinforce Structure.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Reinforce Structure(Q)</span></font><br><font color="00ffff">對建築施放Plasma Shield時可以獲得額外100%的護盾值與持續時間。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tassadar/Talents/4/Psi-Infusion.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Psi-Infusion(W)</span></font><br><font color="00ffff">Psionic Storm施放時每作用到一個單位就會返還5魔力，已經返還過的單位再次接觸不會再有效果。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tassadar/Talents/4/Mental Acuity.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Mental Acuity(Trait)</span></font><br><font color="00ffff">Oracle的冷卻減少10秒。</font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Tassadar/Talents/4/Promote.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Promote  </span></font><br><font color="00ffff">使用後增加小兵200%的血量與100%的傷害，能充能2次。</font></span>				  	
                    </div>                                                                               
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tassadar/Talents/7/Khala's Embrace.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Khala's Embrace(Q)</span></font><br><font color="00ffff">當Plasma Shield結束時50%的護盾值會被保留，此效果不能疊加。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tassadar/Talents/7/Static Charge.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Static Charge(W)</span></font><br><font color="00ffff">被Psionic Storm擊中後會留下標記，Tassadar的普通攻擊會消耗掉標記並造成額外50+(等級*5)的傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tassadar/Talents/7/Deep Shift.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Deep Shift(E)</span></font><br><font color="00ffff">Dimensional Shift的持續時間增加0.75秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tassadar/Talents/7/CalldownMULE.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Calldown: MULE</span></font><br><font color="00ffff">召喚1個工兵修復目標位置附近的建築持續60秒，每秒修復100的生命值並每5秒補充一個彈藥。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tassadar/Talents/10/Archon.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Archon(R)</span></font><br><font color="00ffff">變身成Archon獲得200+(等級*40)的護盾，並擁有64+(等級*12)的一般攻擊傷害與32+(等級*6)的濺射傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tassadar/Talents/10/Force Wall.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Force Wall(R) </span></font><br><font color="00ffff">創造一面不可逾越的牆，持續2.5秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tassadar/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spell Shield </span></font><br><font color="00ffff">週期性的減少50%來自英雄技能的傷害，最多可以充能兩次。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tassadar/Talents/13/Distortion Beam.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Distortion Beam</span></font><br><font color="00ffff">普通攻擊緩速敵人25%，持續1.5秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tassadar/Talents/13/Prescience.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Prescience(E)</span></font><br><font color="00ffff">當血量低於15%會自動使用Dimensional Shift，此效果須間隔60秒才會再次生效。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Tassadar/Talents/13/Scryer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Scryer(Trait)</span></font><br><font color="00ffff">Oracle持續時間增加3秒同時增加移動速度15%。 </font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Tassadar/Talents/13/Shrink Ray.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shrink Ray</span></font><br><font color="00ffff">在四秒內使一個敵方英雄減少50%傷害和50%的移動速度。 </font></span>				  	
                    </div>                                                                   
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tassadar/Talents/16/Evasive Shielding.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Evasive Shielding(Q)</span></font><br><font color="00ffff">擁有Plasma Shield的單位同時會增加25%的移動速度，持續4秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tassadar/Talents/16/Second Strike.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Second Strike(W)</span></font><br><font color="00ffff">使用Psionic Storm後可以無消耗的在3秒內再次施放一次，傷害無法疊加。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tassadar/Talents/16/Resonation.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resonation(W)</span></font><br><font color="00ffff">Psionic Storm能緩速敵人25%，持續一秒。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Tassadar/Talents/16/Dimensional Warp.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Dimensional Warp(E)Healing Ward</span></font><br><font color="00ffff">Dimensional Shift啟動時獲得50%的移動速度加乘並治癒20+(等級*4)點生命。 </font></span>				  	
                    </div>                                                                 
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tassadar/Talents/20/Resurgence of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resurgence of the Storm</span></font><br><font color="00ffff">死亡後於5秒後在祭壇復活，冷卻時間120秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tassadar/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tassadar/Talents/20/Twilight Archon.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Twilight Archon(R)</span></font><br><font color="00ffff">Archon的護盾值增加50%，普通攻擊獲得額外50%的傷害並加長3的射程。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Tassadar/Talents/20/Force Barrier.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Force Barrier(R)</span></font><br><font color="00ffff">Force Wall的施放距離提高50%並延長1秒。</font></span>				  	
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

