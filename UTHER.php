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
			<div class="UTHER"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Uther/300_300/Uther.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:Uther</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:890(每等+190)<br><br>生命回復:1.855(每等+0.0.395)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:38(每等+7)<br><br>攻擊速度:1</h3></font></span>						
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
      									 一名人類聖騎士，也是白銀之手騎士團的創辦人之一，作為對聖光懷有無限虔誠的僕人，光明使者烏瑟爾用他手中的戰鎚伸張正義，他本人即是真理的壁壘，也是聯盟英勇無畏的象徵。
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
      								     烏瑟爾既能治療友軍，又能暈眩敵人，在死亡後也能化為聖靈提供治癒並繼續奮戰。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Uther/Abilities/Holy Light.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Holy Light(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">90mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>治療目標單位150+(等級*44)的生命值。</font>
    				</span>

					<br>
    				<img src="picture/Uther/Abilities/Holy Radiance.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Holy Radiance(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">65mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>在直線上治癒我方80+(等級*20)的生命值和對敵方造成50+(等級*15)傷害</font>
    				</span> 
    				
					<br>
    				<img src="picture/Uther/Abilities/Hammer of Justice.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Hammer of Justice(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">40mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">8秒</font>
    						<br class="fon2"><font color="fffff"><br>造成對目標40+(等級*8)的傷害並暈眩單位目標一秒。</font>
    				</span>
    				
					<br>
    				<img src="picture/Uther/Abilities/Divine Shield.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Divine Shield(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">90秒</font>
    						<br class="fon2"><font color="fffff"><br>令一個友方英雄進入無敵狀態，並增加其20%移動速度，持續3秒。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Uther/Abilities/Divine Storm.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Divine Storm(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">70秒</font>
    						<br class="fon2"><font color="fffff"><br>對周圍的敵人造成75+(等級*25)傷害並擊暈他們1.5秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Uther/Abilities/Eternal Devotion.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Eternal Devotion(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>死亡後會變成無敵的聖靈持續10秒此，期間內提高所以技能與攻擊的50%治癒量和傷害量。</font>
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
				  	<img src="picture/Uther/Talents/1/Path of the Wizard.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Wizard</span></font><br><font color="00ffff">每等額外增加5魔量和0.1魔力回復。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Uther/Talents/1/Reach.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Reach(Q)</span></font><br><font color="00ffff">Holy Light增加2治癒施放範圍。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Uther/Talents/1/Dense Weightstone.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Dense Weighstone(E)</span></font><br><font color="00ffff">增加Hammer of Justice的40%傷害。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Uther/Talents/1/Blessed Champion.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blessed Champions</span></font><br><font color="00ffff">基本攻擊的25%傷害轉為對周圍友軍的治療量。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Uther/Talents/4/Hammer of the Lightbringer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hammer of the Lightbringer </span></font><br><font color="00ffff">基本攻擊或的5點魔力</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Uther/Talents/4/Protect the Weak.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Protect the Weak(Q)</span></font><br><font color="00ffff">將Holy Light使用在小兵或僱傭兵身上時會返還75%的魔力消耗跟冷卻時間。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Uther/Talents/4/Fist of Justice.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fist of Justice(E)</span></font><br><font color="00ffff">每次基本攻擊將減少Hammer of Justice的冷卻時間1秒。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Uther/Talents/4/Protective Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Protective Shield</span></font><br><font color="00ffff">為一個友方英雄放置一個300+(等級*30)的護盾持續5秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Uther/Talents/7/Wave of Light.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Wave of Light(W)</span></font><br><font color="00ffff">Holy Radiance每治癒一個友方單位返還10魔力並減少冷卻時間1秒最高到達50魔力跟5秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Uther/Talents/7/Rebuke.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rebuke(E)</span></font><br><font color="00ffff">Hammer of Justice此技能施放後並擊退周遭敵方目標。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Uther/Talents/7/Holy Devotion.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Holy Devotion</span></font><br><font color="00ffff">Eternal Devotion效果由50%增至100%。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Uther/Talents/7/Clairvoyance.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Clairvoyance</span></font><br><font color="00ffff">施放後始目標區域的所有單位顯形，持續4秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Uther/Talents/7/Cleanse.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Cleanse</span></font><br><font color="00ffff">解除目標所有暈眩、沉默、緩速、定身效果並保護此目標在一秒內不再受到影響。</font></span>				  	
                    </div>                                                                               
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Uther/Talents/10/Divine Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Divine Shield(R)</span></font><br><font color="00ffff">令一個友方英雄進入無敵狀態，並增加其20%移動速度，持續3秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Uther/Talents/10/Divine Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Divine Storm(R)</span></font><br><font color="00ffff">對周圍的敵人造成75+(等級*25)傷害並擊暈他們1.5秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Uther/Talents/7/Wave of Light.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spell Shield</span></font><br><font color="00ffff">週期性的減少50%來自英雄技能的傷害，最多可以充能兩次。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Uther/Talents/7/Rebuke.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Burning Rage</span></font><br><font color="00ffff">對周圍敵人每秒造成10+(等級*2)傷害。Hammer of Justice此技能施放後並擊退周遭敵方目標。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Uther/Talents/7/Holy Devotion.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hardened Focus</span></font><br><font color="00ffff">當血量再80%以上基本技能冷卻時間減少50%。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Uther/Talents/7/Clairvoyance.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sprint</span></font><br><font color="00ffff">主動技，增加75%移動速度，持續3秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Uther/Talents/7/Cleanse.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shrink Ray</span></font><br><font color="00ffff">在四秒內使一個敵方英雄減少50%傷害和50%的移動速度。</font></span>				  	
                    </div>                                                                               
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Uther/Talents/16/Imposing Presence.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Imposing Presence</span></font><br><font color="00ffff">受到攻擊時，攻擊者降低30%攻擊速度。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Uther/Talents/16/Holy Shock.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Holy Shock(Q)</span></font><br><font color="00ffff">Holy Light可以作用於敵方並造成治癒量50%的傷害 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Uther/Talents/16/Gathering Radiance.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Gathering Radiance(W)</span></font><br><font color="00ffff">每增加一個目標就增加10%傷害與治療量最高增加至50%傷害與治療量。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Uther/Talents/16/Rewind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rewind</span></font><br><font color="00ffff">基礎技能冷卻時間減少10秒。</font></span>				  	
                    </div>                                                                              
                  </div>					  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Uther/Talents/20/Resurgence of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resurgence of the Storm</span></font><br><font color="00ffff">死亡後於5秒後在祭壇復活，冷卻時間120秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Uther/Talents/20/Storm Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Storm Shield</span></font><br><font color="00ffff">自身和周圍隊友產生最大生命值30％的護盾，持續時間3秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Uther/Talents/20/Bulwark of Light.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bulwark of Light(R)</span></font><br><font color="00ffff">使用Divine Shield時延長1秒技能作用時間並治癒目標單位40%最大生命值。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Uther/Talents/20/Divine Hurricane.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Divine Hurricane(R)</span></font><br><font color="00ffff">Divine Storm技能範圍增加100%並減少20秒的冷卻時間。</font></span>				  	
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

