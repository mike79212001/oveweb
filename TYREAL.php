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
			<div class="TYREAL"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Tyrael/300_300/TYREAL.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:TYREAL</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:1020(每等+220)<br><br>生命回復:2.125(每等+0.457)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:37(每等+7)<br><br>攻擊速度:0.8</h3></font></span>						
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
      									 天使中至高的人類保衛者，揮舞著聖劍艾德魯因的他堅毅的對抗著燃燒煉獄；若不是泰瑞爾的介入，避難所世界早在無數年前就成為惡魔之王們的囊中之物了。
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
      								     戰場上強大的輔助英雄，能在友軍身上附加護盾並增加他們的移動速度，死亡時會爆炸對附近的敵人造成嚴重的傷害。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Tyrael/Abilities/Angelic Flash.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">El'Druin's Might/Angelic Flash(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">55mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>El'Druin's Might:範圍傷害。對目標範圍內的敵人造成35+(等級*7)傷害，並造成25%的減速效果。<br>Angelic Flash:再次按下可以讓泰瑞爾傳送到El'Druin的位置，造成35+(等級*7)傷害，並造成25%的減速效果。</font>
    				</span>

					<br>
    				<img src="picture/Tyrael/Abilities/Righteousness.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Rightrousness(W) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">65mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>自己和盟軍同時獲得護盾，自身護盾可以吸收200+(等級*25)點傷害，友方則可以吸收80+(等級*10)點傷害，持續4秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Tyrael/Abilities/Smite.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Smite(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">7秒</font>
    						<br class="fon2"><font color="fffff"><br>泰瑞爾指定目標區域造成50+(等級*10)傷害，穿過此區域的盟軍增加25%的移動速度，持續2秒。</font>
    				</span>
    				
					<br>
    				<img src="picture/Tyrael/Abilities/Judgment.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Judgement(R)  &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">80秒</font>
    						<br class="fon2"><font color="fffff"><br>撞向目標，造成125+(等級*10)傷害，並擊暈2秒。周圍的敵人會被擊飛並受到50(+等級*5)傷害。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Tyrael/Abilities/Sanctification.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Sanctification(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">50秒</font>
    						<br class="fon2"><font color="fffff"><br>使用後Tyrael身邊的友方英雄進入無敵狀態，持續3秒，對自身無效。</font>
    				</span>   
  
					<br>
    				<img src="picture/Tyrael/Abilities/Archangel's Wrath.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Arcangel's Wrath&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>泰瑞爾死亡後進入無敵狀態，其移動速度不會降低，經過3.5秒後爆炸，對附近的敵人造成200+(等級*40)點傷害。</font>
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
				  	<img src="picture/Tyrael/Talents/1/Regeneration Master.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Regeneration Master</span></font><br><font color="00ffff">收集3個生命恢復球就能永久增加每秒3點生命回复。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrael/Talents/1/Path of the Warrior.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Warrior</span></font><br><font color="00ffff">英雄每級額外增加35最大血量 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrael/Talents/1/Horadric Reforging.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Horadric reforging(Q)</span></font><br><font color="00ffff">提升25％El'Druin's Might的傷害。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Tyrael/Talents/1/Purge Evil.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Purge Evil(E)</span></font><br><font color="00ffff">Smite(E)對英雄目標造成50％額外傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tyrael/Talents/1/Protection in Death.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Protection in Death</span></font><br><font color="00ffff">當Arcangel's Wrath爆炸之後，Tyrael給予周圍友方英雄護盾，吸收相當於各自最大生命值50%的傷害，持續5秒。 </font></span>				  	
                    </div>                                                                                     
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tyrael/Talents/4/Amplified Healing.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Amplified Healing</span></font><br><font color="00ffff">提升30%治療與回復效果。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrael/Talents/4/Angelic Absorption.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Angelic Absorption(W)</span></font><br><font color="00ffff">護盾存在時，在3秒內治癒30+(等級*6)點生命。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tyrael/Talents/4/Vampiric Assault.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Vampiric Assaul</span></font><br><font color="00ffff">基礎攻擊15%的傷害回覆自身生命。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tyrael/Talents/4/Even In Death.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Even in Death</span></font><br><font color="00ffff">進入Arcangel's Wrath狀態時，可以使用R以外所有技能，但是不造成傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tyrael/Talents/4/Retribution.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Retribution(E)</span></font><br><font color="00ffff">Smite(E)每擊中一個敵人減少技能冷卻時間0.5秒。</font></span>				  	
                    </div>                                                                              
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tyrael/Talents/7/Battle Momentum.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battle Momentum</span></font><br><font color="00ffff">普通攻擊將減少技能冷卻0.5秒 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrael/Talents/7/Angel's Grace.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Angel's Grace(Q)</span></font><br><font color="00ffff">傳送至El'Druin之後，移動速度提高25%，持續3秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tyrael/Talents/7/Reciprocate.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Reciprocate(W)</span></font><br><font color="00ffff">當護盾消失時，產生爆炸對周圍敵人造成90+(等級*12)點傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tyrael/Talents/7/Zealotry.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Zealotry(W)</span></font><br><font color="00ffff">技能持續時間增加100%。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrael/Talents/7/Searing Attacks.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Searing Attacks</span></font><br><font color="00ffff">主動技，基礎攻擊提升50%持續5秒。每次攻擊消耗15點法力值。</font></span>				  	
                    </div>                                                                                
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tyrael/Talents/10/Judgment.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Judgement(R) </span></font><br><font color="00ffff">撞向目標，造成125+(等級*10)傷害，並擊暈2秒。周圍的敵人會被擊飛並受到50(+等級*5)傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrael/Talents/10/Sanctification.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sanctification(R)</span></font><br><font color="00ffff">使用後Tyrael身邊的友方英雄進入無敵狀態，持續3秒，對自身無效。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Tyrael/Talents/13/Burning Rage.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Burning Rage</span></font><br><font color="00ffff">對周圍敵人每秒造成10+(等級*2)傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrael/Talents/13/Imposing Will.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Imposing Will(W)</span></font><br><font color="00ffff">護盾存在時攻擊自己的敵方，其移動速度和攻擊速度都減少50%，持續2秒。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tyrael/Talents/13/Cast Aside.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Cast Aside(E)</span></font><br><font color="00ffff">受到傷害的目標會被推出目標區域。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrael/Talents/13/Angelic Might.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Angelic Might(E)</span></font><br><font color="00ffff">被Smite(E)擊中的目標將使泰瑞爾下一次基礎攻擊提高25%。</font></span>				  	
                    </div>                                                                               
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Tyrael/Talents/16/Blade of Justice.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blade of Justice(Q)</span></font><br><font color="00ffff">在傳送之後的3次基礎攻擊造成額外100%傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrael/Talents/16/Holy Ground.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Holy Ground(Q)</span></font><br><font color="00ffff">傳送到El'Druin旁邊之後創造一個區域阻擋敵人進入。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tyrael/Talents/16/Salvation.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Salvation(W)</span></font><br><font color="00ffff">自身和盟友的護盾效果提高25%。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrael/Talents/16/Blood for Blood.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blood for Blood </span></font><br><font color="00ffff">主動技，吸取目標敵人15%最大生命值，並使其移動速度降低30%，持續3秒。</font></span>				  	
                    </div>                                                                               
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Tyrael/Talents/20/Resurgence of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resurgence of the Storm</span></font><br><font color="00ffff">死亡後於5秒後在祭壇復活，冷卻時間120秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrael/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tyrael/Talents/20/Angel of Justice.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Angel of Justice(R)</span></font><br><font color="00ffff">增加50%Judgement(R) 的施放範圍，減少技能冷卻30秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tyrael/Talents/20/Holy Arena.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Holy Arena(R) </span></font><br><font color="00ffff">增加Sanctification(R)的持續時間1秒，並且增加被保護的盟友及其召喚單位額外25%傷害。</font></span>				  	
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

