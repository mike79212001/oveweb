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
			<div class="TYRANDE"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Tyrande/300_300/TYRANDE.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:TYRANDE</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:635(每等+150)<br><br>生命回復:1.324(每等+0.313)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:30(每等+9)<br><br>攻擊速度:0.8</h3></font></span>						
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
      									 那些妄圖危害卡多雷的人都在對泰蘭德聞風而逃，作為哨兵部隊的指揮官和艾露恩的高階女祭司，她是最足智多謀的指揮官，更是強悍的戰士。
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
      								     泰蘭德能標記她的敵人，令該敵人受到更大的傷害。除了能治癒友軍外還能召喚貓頭鷹作為斥候，調查目標區域。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Tyrande/Abilities/Light of Elune.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Light of Elune(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">6秒</font>
    						<br class="fon2"><font color="fffff"><br>治癒自己45+(等級*10)的生命值，對友軍單位則治癒90+(等級*20)的生命值。</font>
    				</span>

					<br>
    				<img src="picture/Tyrande/Abilities/Sentinel.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Sentinel(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">65mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">18秒</font>
    						<br class="fon2"><font color="fffff"><br>送出一隻貓頭鷹橫跨戰場並擁有其視野，擊中第一個碰觸到的敵方英雄並造成60+(等級*16)的傷害並顯形，持續5秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Tyrande/Abilities/Lunar Flare.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Lunar Flare(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>在短暫延遲後，對目標區域造成90+(等級*18)的傷害並暈眩1秒。</font>
    				</span>
    				
					<br>
    				<img src="picture/Tyrande/Abilities/Shadowstalk.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Shadowstalk(R) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">60秒</font>
    						<br class="fon2"><font color="fffff"><br>使自己與我方英雄進入潛行持續8秒，並增加移動速度30%於3秒內。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Tyrande/Abilities/Starfal.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Starfall(R) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>對目標區域造成敵方單位每秒20+(等級*6)的傷害並緩速20%，持續8秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Tyrande/Abilities/Hunter's Mark.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Hunter's Mark(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">20秒</font>
    						<br class="fon2"><font color="fffff"><br>標記一個敵方單位，此單位會承受額外25%的傷害並顯形，持續4秒。</font>
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
				  	<img src="picture/Tyrande/Talents/1/Path of the Wizard.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Wizard</span></font><br><font color="00ffff">每等額外增加5魔量和0.1魔力回復。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrande/Talents/1/Pierce.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Pierce(W)</span></font><br><font color="00ffff">Sentinel不再止於第一個敵方英雄，而會對整個直線上的所有敵方英雄生效。 </font></span>				  	
                    </div>    
				  	<div>
				  	<img src="picture/Tyrande/Talents/1/Healing Ward.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Healing Ward</span></font><br><font color="00ffff">放置一根治癒圖騰再地板上對附近友軍每秒造成2%最大生命回復持續10秒。</font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tyrande/Talents/4/Quickening Blessing.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Quickening Blessing(Q)</span></font><br><font color="00ffff">Light of Elune同時會提升目標25%的移動速度，持續3秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrande/Talents/4/Shroud.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shroud(Q)</span></font><br><font color="00ffff">Light of Elune同時會使目標隱形5秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tyrande/Talents/4/Protective Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Protective Shield</span></font><br><font color="00ffff">為一個友方英雄放置一個300+(等級*30)的護盾持續5秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tyrande/Talents/4/Searing Arrows.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Searing Arrows</span></font><br><font color="00ffff">啟動後增加普通攻擊40%的傷害於5秒內，每下攻擊需要消耗10的魔力。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tyrande/Talents/7/Trueshot Aura.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Trueshot Aura</span></font><br><font color="00ffff">被動增加自己與附近友軍10%的普通攻擊傷害與攻擊速度。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrande/Talents/7/Battle Momentum.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battle Momentum</span></font><br><font color="00ffff">普通攻擊將減少技能冷卻0.5秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tyrande/Talents/7/Overflowing Light.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Overflowing Light(Q)</span></font><br><font color="00ffff">當自己血量高於90%，使用Light of Elune治療友軍會有額外40%的治療效果。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tyrande/Talents/7/CalldownMULE.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Calldown: MULE</span></font><br><font color="00ffff">召喚1個工兵修復目標位置附近的建築持續60秒，每秒修復100的生命值並每5秒補充一個彈藥。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tyrande/Talents/10/Shadowstalk.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shadowstalk(R)</span></font><br><font color="00ffff">使自己與我方英雄進入潛行持續8秒，並增加移動速度30%於3秒內。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrande/Talents/10/Starfall.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Starfall(R)</span></font><br><font color="00ffff">對目標區域造成敵方單位每秒20+(等級*6)的傷害並緩速20%，持續8秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tyrande/Talents/13/Lunar Blaze.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Lunar Blaze(E)</span></font><br><font color="00ffff">增加Lunar Flare的50%射程與33%技能範圍。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrande/Talents/13/Empower.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Empower(W)</span></font><br><font color="00ffff">使用Sentinel擊中敵人時，在2秒內會減少所有技能4秒的冷卻時間。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tyrande/Talents/13/Sprint.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sprint</span></font><br><font color="00ffff">主動技，增加75%移動速度，持續3秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tyrande/Talents/13/Shrink Ray.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shrink Ray</span></font><br><font color="00ffff">在四秒內使一個敵方英雄減少50%傷害和50%的移動速度。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tyrande/Talents/16/Shooting Star.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shooting Star(E)</span></font><br><font color="00ffff">Lunar Flarey造成額外50%的傷害，每擊中一個敵人則返還30魔力，最高返還60。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrande/Talents/16/Ranger.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ranger(W)</span></font><br><font color="00ffff">增加Sentinel的技能寬度，且飛行距離越遠造成越高的傷害，最高額外增加200%的傷害。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tyrande/Talents/16/Rewind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rewind</span></font><br><font color="00ffff">基礎技能冷卻時間減少10秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tyrande/Talents/16/BerserkActivate.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Berserk</span></font><br><font color="00ffff">使用後在4秒內增加攻擊速度40%並增加移動速度10%。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tyrande/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrande/Talents/20/Storm Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Storm Shield</span></font><br><font color="00ffff">自身和周圍隊友產生最大生命值20％的護盾，持續時間3秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tyrande/Talents/20/Hunter's Prey.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hunter's Prey(R)</span></font><br><font color="00ffff">增加Shadowstalk的潛行時間8秒，移動加速時間3秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tyrande/Talents/20/Celestial Wrath.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Celestial Wrath(R)</span></font><br><font color="00ffff">Starfall可以在有視野的條件下對全地圖使用並增加30%的傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tyrande/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。</font></span>				  	
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

