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
			<div class="TYCHUS"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Tychus/300_300/Tychus.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:Tychus</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:725(每等+140)<br><br>生命回復:1.512(每等+0.289)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:24(每等+6)<br><br>攻擊速度:1.5</h3></font></span>						
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
      									 是個有大抱負還拿著巨型機槍的壯漢。不過還好他的忠誠很容易獲得，只要給他買個幾杯威士忌並給他足夠的誠意，宇宙裡就沒有可以讓他恐懼的事了。
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
      								     能在短時間內爆發恐怖的破壞力，不過先需要一點點上膛的時間。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Tychus/Abilities/Overkill.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Overkill(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">15秒</font>
    						<br class="fon2"><font color="fffff"><br>在5秒內對目標造成300+(等級*60)的傷害並以椎形範圍對周圍敵人造成150+(等級*30)的傷害，可更換目標也可行走而不會失去鎖定。</font>
    				</span>

					<br>
    				<img src="picture/Tychus/Abilities/Frag Grenade.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Frag Grenade(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">10秒</font>
    						<br class="fon2"><font color="fffff"><br>對目標區域造成60+(等級*25)的傷害並擊退敵軍。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Tychus/Abilities/Run and Gun.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Run and Gun(E) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">120秒</font>
    						<br class="fon2"><font color="fffff"><br>After a short delay, channel to stun nearby enemies for 4 seconds.</font>
    				</span>
    				
					<br>
    				<img src="picture/Tychus/Abilities/Commandeer Odin.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Commandeer Odin(R) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>呼叫Odin而獲得第二條生命並強化生命與傷害並擁有2個新技能，持續23秒。<br>Annihilate:對直線所有敵人造成造成70+(等級*13)的傷害   冷卻時間:7<br>Ragnarok Missiles:對周圍所有敵軍發射導彈造成各別70+(等級*13)的傷害。   冷卻時間:7</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Tychus/Abilities/Drakken Laser Drill.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Drakken Laser Drill(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>呼叫Laser Drill攻擊附近敵軍造成每秒15+(等級*7)的傷害，可更換目標並持續22秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Tychus/Abilities/Minigun.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Minigun(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>在普通攻擊前需要先上膛，但上膛後卻有極快的攻擊速度。</font>
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
				  	<img src="picture/Tychus/Talents/1/Path of the Warrior.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Warrior</span></font><br><font color="00ffff">英雄每級額外增加35最大血量 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tychus/Talents/1/Regeneration Master.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Regeneration Master</span></font><br><font color="00ffff">收集3個生命恢復球就能永久增加每秒4點生命回复。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tychus/Talents/1/Armor Piercing Rounds.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Armor Piercing Rounds(Q)</span></font><br><font color="00ffff">Overkill對主要目標傷害提高20%。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Tychus/Talents/1/Dash.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Dash(E)</span></font><br><font color="00ffff">Run and Gun衝刺距離提高25%。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tychus/Talents/4/Focused Attack.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Focused Attack</span></font><br><font color="00ffff">每10秒，下次基礎攻擊增加額外50%傷害，每次基礎功及減少冷卻時間1秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tychus/Talents/4/Vampiric Assault.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Vampiric Assault</span></font><br><font color="00ffff">基礎攻擊15%的傷害回復自身生命。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tychus/Talents/4/Melting Point (W).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Melting Point(W)</span></font><br><font color="00ffff">Frag Grenade對小兵與建築在10秒內造成額外120+(等級*50)的傷害。</font></span>				  	
                    </div>                                                             
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tychus/Talents/7/Rapid Fire.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rapid Fire(Trait)</span></font><br><font color="00ffff">開始攻擊3秒後提高50%的攻擊速度。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tychus/Talents/7/Quarterback.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Quarterback(W)</span></font><br><font color="00ffff">增加Frag Grenade的拋投距離50%。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Tychus/Talents/7/First Aid.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">First Aid</span></font><br><font color="00ffff">主動技，在6秒內回復35%最大生命值的生命。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Tychus/Talents/7/Searing Attacks.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Searing Attacks</span></font><br><font color="00ffff">主動技，基礎攻擊提升50%持續5秒。每次攻擊消耗15點法力值。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tychus/Talents/10/Commandeer Odin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Commandeer Odin(R)</span></font><br><font color="00ffff">呼叫Odin而獲得第二條生命並強化生命與傷害並擁有2個新技能，持續23秒。<br>Annihilate:對直線所有敵人造成造成70+(等級*13)的傷害<br>Ragnarok Missiles對周圍所有敵軍發射導彈造成各別70+(等級*13)的傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tychus/Talents/10/Drakken Laser Drill.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Drakken Laser Drill(R)</span></font><br><font color="00ffff">呼叫Laser Drill攻擊附近敵軍造成每秒15+(等級*7)的傷害，可更換目標並持續22秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tychus/Talents/13/Giant Killer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Giant Killer</span></font><br><font color="00ffff">基礎攻擊對敵方英雄造成額外最大生命1.5%的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tychus/Talents/13/Relentless.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Relentless</span></font><br><font color="00ffff">減少50%被沉默、擊暈、減速、定身的持續時間。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tychus/Talents/13/Lead Rain.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Lead Rain(Q)</span></font><br><font color="00ffff">Overkill會跌加緩速效果，最高跌至40%。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Tychus/Talents/13/Stim Pack.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stim Pack(E)</span></font><br><font color="00ffff">使用Run and Gun後，在3秒內會增加20%的攻擊速度與移動速度。 </font></span>				  	
                    </div>                                                                 
                  </div>			  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tychus/Talents/16/Executioner.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Executioner</span></font><br><font color="00ffff">基礎攻擊對被減速、被定身、被擊暈的目標造成40%額外傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tychus/Talents/16/Lock and Load.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Lock and Load</span></font><br><font color="00ffff">上膛後會增加15%的移動速度。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tychus/Talents/16/Concussion Grenade.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Concussion Grenade(W)</span></font><br><font color="00ffff">兩倍Frag Grenade的震退距離。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Tychus/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin</span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。 </font></span>				  	
                    </div>                                                                 
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Tychus/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tychus/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Tychus/Talents/20/Big Red Button.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Big Red Button(R)</span></font><br><font color="00ffff">Odin延長持續時間50%並獲得新能力。<br>Nuclear Blast:呼叫核彈，在短暫延遲後對目標區域造成200+(等級*25)的傷害。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Tychus/Talents/20/Focusing Diodes.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Focusing Diodes(R)</span></font><br><font color="00ffff">增加Laser Drill的50%攻擊距離，對相同單位傷害會因時間越長而越高，最高造成額外100%傷害。 </font></span>				  	
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

