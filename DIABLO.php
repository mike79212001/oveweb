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
			<div class="DIABLO"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Diablo/300_300/DIABLO.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:DIABLO</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:1060(每等+280)<br><br>生命回復:2.207(每等+0.543)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:49(每等+7)<br><br>攻擊速度:1.1</h3></font></span>						
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
      									 遠古人類口中流傳的恐懼之王，惡魔領主的目的只為燃燒煉獄占領庇護世界。遭到他毒手的受害者不計其數，他的計畫和他的性別一樣詭譎，難以名狀。
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
      								     擁有快速隊敵人發起衝鋒的利，還能用烈火和電光將他們灼燒殆盡；肆意的捕捉手下敵人靈魂以追尋不朽。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Diablo/Abilities/Shadow Charge.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Shadow Charge(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">10秒</font>
    						<br class="fon2"><font color="fffff"><br>向一個敵人衝去，對其造成46+(等級*8)傷害並擊暈之0.5秒。若目標被撞向不可通過的地形，造成暈眩1秒。</font>
    				</span>

					<br>
    				<img src="picture/Diablo/Abilities/Fire Stomp.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Fire Stomp(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">6秒</font>
    						<br class="fon2"><font color="fffff"><br>向四周投出火球，每個火球造成30+(等級*9)點傷害。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Diablo/Abilities/Overpower.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Overpower(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>將目標抓起並摔向身後，對其造成40+(等級*6)傷害並擊暈0.25秒。</font>
    				</span>
    				
					<br>
    				<img src="picture/Diablo/Abilities/Apocalypse.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Apocalypse(R) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">X</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">120秒</font>
    						<br class="fon2"><font color="fffff"><br>在全地圖的所有敵方英雄腳下召喚惡魔符印，在短暫延遲後爆炸，造成100+(等級*10)傷害和2秒擊暈效果。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Diablo/Abilities/Lightning Breath.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Lighting Breath(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">X</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">60秒</font>
    						<br class="fon2"><font color="fffff"><br>在前方噴吐雷電持續5秒，可以由滑鼠控制方向，造成共計400+(等級*80)點傷害。</font>
    				</span>   
  
					<br>
    				<img src="picture/Diablo/Abilities/Black Soulstone.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Black Soulstone(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">X</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">5</font>
    						<br class="fon2"><font color="fffff"><br>每擊殺1個英雄將獲得10塊靈魂石，每擊殺1個小兵將獲得1塊靈魂石，每塊靈魂石將提升5點最大生命值。當收集到100塊時，復活時間將縮短為5秒，<br>同時會消耗100塊靈魂石，靈魂石最大持有數量為100。</font>
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
				  	<img src="picture/Diablo/Talents/1/Regeneration Master.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Regeneration Master</span></font><br><font color="00ffff">收集3個生命恢復球就能永久增加每秒4點生命回復。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Diablo/Talents/1/Devil's Due.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Devil's Due</span></font><br><font color="00ffff">復活只會消耗75塊靈魂石。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Diablo/Talents/1/Soul Feast.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Soul Feast</span></font><br><font color="00ffff">每收集1塊靈魂石會提升5點生命值並增加0.1生命回復速度。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Diablo/Talents/1/Soul Steal.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Soul Steal(E)</span></font><br><font color="00ffff">使用Overpower將獲得3塊靈魂石。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Diablo/Talents/4/Amplified Healing.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Amplified Healing</span></font><br><font color="00ffff">提升30%治療與回復效果。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Diablo/Talents/4/Firestorm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Firestorm(W)</span></font><br><font color="00ffff">Fire Stomp(W)發出的火球會返回自身位置，對擊中的敵人造成50%的傷害。 </font></span>				  	
                    </div> 
                                                          
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Diablo/Talents/7/Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Block</span></font><br><font color="00ffff">週期性的減少50%來自英雄的基礎攻擊，最多可以疊加兩層。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Diablo/Talents/7/Battle Momentum.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battle Momentum</span></font><br><font color="00ffff">普通攻擊將減少技能冷卻0.5秒</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Diablo/Talents/7/Endless Death.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Endless Death</span></font><br><font color="00ffff">可擁有靈魂石數量上限提升至200 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Diablo/Talents/7/Siphon the Dead.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Siphon the Dead</span></font><br><font color="00ffff">消耗1塊靈魂石回復3%最大生命值</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Diablo/Talents/10/Apocalypse.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Apocalypse(R)</span></font><br><font color="00ffff">在全地圖的所有敵方英雄腳下召喚惡魔符印，在短暫延遲後爆炸，造成100+(等級*10)傷害和2秒擊暈效果。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Diablo/Talents/10/Lightning Breath.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Lighting Breath(R) </span></font><br><font color="00ffff">在前方噴吐雷電持續5秒，可以由滑鼠控制方向，造成共計400+(等級*80)點傷害。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Diablo/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spell Shield</span></font><br><font color="00ffff">週期性的減少50%來自英雄技能的傷害，最多可以充能兩次。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Diablo/Talents/13/Relentless.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Relentless</span></font><br><font color="00ffff">減少50%被沉默、擊暈、減速、定身的持續時間。 </font></span>				  	
                    </div>                     
				  	<div>
				  	<img src="picture/Diablo/Talents/13/From the Shadows.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">From the Shadows(Q)</span></font><br><font color="00ffff">Shadow Charge(Q)技能範圍提升33%。 </font></span>				  	
                    </div>                     
				  	<div>
				  	<img src="picture/Diablo/Talents/13/Crippling Shadows.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Crippling Shadows(Q)</span></font><br><font color="00ffff">Shadow Charge(Q)使目標減少25%移動速度，持續3秒。</font></span>				  	
                    </div>                     
                                                                               
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Diablo/Talents/16/Imposing Presence.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Imposing Presence</span></font><br><font color="00ffff">受到攻擊時，攻擊者降低30%攻擊速度。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Diablo/Talents/16/Swallowing Flames.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Swollowing Flame(W)</span></font><br><font color="00ffff">Fire Stomp(W)攻擊範圍提升50%。 </font></span>				  	
                    </div>                     
				  	<div>
				  	<img src="picture/Diablo/Talents/16/Fire Devil.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fire Devil(W))</span></font><br><font color="00ffff">Fire Stomp(W)施放後會被火焰圍繞10秒，每秒內對周圍敵人造成15+(等級*3)傷害。</font></span>				  	
                    </div>                     
				  	<div>
				  	<img src="picture/Diablo/Talents/16/Continuous Overpower.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Continuous Overpower(E)</span></font><br><font color="00ffff">連續使用2次Overpower(E)  </font></span>				  	
                    </div>                     
                                                                               
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Diablo/Talents/20/Storm Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Storm Shield</span></font><br><font color="00ffff">自身和周圍隊友產生最大生命值30％的護盾，持續時間3秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Diablo/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。 </font></span>				  	
                    </div>                     
				  	<div>
				  	<img src="picture/Diablo/Talents/20/Dying Breath.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Dying Breath(R)</span></font><br><font color="00ffff">死亡時會觸發Apocalypse(R)。  </font></span>				  	
                    </div>                     
				  	<div>
				  	<img src="picture/Diablo/Talents/20/Endless Lightning.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Endless Lighting(R)</span></font><br><font color="00ffff">Lighting Breath(R)持續時間與範圍提升50%。 </font></span>				  	
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

