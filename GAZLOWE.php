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
			<div class="GAZLOWE"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Gazlowe/300_300/Gazlowe.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:GAZLOWE</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:770(每等+170)<br><br>生命回復:1.605(每等+0.355)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:37(每等+9)<br><br>攻擊速度:0.8</h3></font></span>						
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
      									 很少會有人把地精工程師當成戰士，雖然個子小，但他們所建造的精密機械卻彌補了這個缺陷。當然，撇開他們糟糕的個性不談。
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
      								    善於使用砲台和高爆炸藥進行陣地戰，還能利用他的雷射蓄能造成大範圍的高傷害。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Gazlowe/Abilities/Gazlowe.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Rock-It!Turret(Q) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">70mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">15秒</font>
    						<br class="fon2"><font color="fffff"><br>創造一個有30+(等級*6)傷害的砲台，可充能兩次持續30秒。</font>
    				</span>

					<br>
    				<img src="picture/Gazlowe/Abilities/Deth Lazor.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Deth Lazor(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">15秒</font>
    						<br class="fon2"><font color="fffff"><br>可對直線造成60+(等級*14)到120+(等級*28)的傷害，蓄能時間越長則傷害、射程與範圍也越大。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Gazlowe/Abilities/Xplodium Charge.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Xplodium Charge(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>放置一個炸彈於目標位置，2.5秒後爆炸對附近造成65+(等級*20)的傷害並暈眩2秒。</font>
    				</span>
    				
					<br>
    				<img src="picture/Gazlowe/Abilities/Grav-O-Bomb 3000.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Grav-O-Bomb 3000(R)  &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">110秒</font>
    						<br class="fon2"><font color="fffff"><br>短暫延遲後，將附近敵軍拉往目標區域的中心並造成150+(等級*26)的傷害。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Gazlowe/Abilities/Robo-Goblin.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Robo-Goblin(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>變身成Robo-Goblin，普通攻擊對小兵、僱傭兵與建築造成額外250%的傷害，期間降低控場效果50%持續16秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Gazlowe/Abilities/Deth Lazor End.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Salvager(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100</font>
    						<br class="fon2"><font color="fffff"><br>被動效果:摧毀敵方建築或砲台解體都會掉落碎片，獲得碎片可以返還30魔力並在3秒內降低6秒全技能冷卻時間。<br>主動效果:拆解己方砲台並獲得碎片。</font>
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
				  	<img src="picture/Gazlowe/Talents/1/Regeneration Master.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Regeneration Master</span></font><br><font color="00ffff">收集3個生命恢復球就能永久增加每秒4點生命回复。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/1/Demolitionist.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Demolitionist</span></font><br><font color="00ffff">Y基礎攻擊建築時減少一發彈藥並額外造成10%傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/1/Scrap-o-Matic Smelter.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Scrap-o-Matic Smelter(Trait)</span></font><br><font color="00ffff">增加Salvager獲得碎片的魔力返還效果至60。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Gazlowe/Talents/1/Break it Down!.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Break it Down!(Trait)</span></font><br><font color="00ffff">強化Salvager獲得碎片的冷卻效果至3秒內減少冷卻9秒。 </font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Gazlowe/Talents/1/Extra TNT.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Extra TNT(E)</span></font><br><font color="00ffff">Grav-O-Bomb 3000爆炸時每多一個敵方單位則增加10%傷害，最高累積至100%。 </font></span>				  	
                    </div>                                                                                    
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/4/Superiority.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Superiority</span></font><br><font color="00ffff">Reduce damage taken from non-Heroic enemies by 50%. </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/4/Minion Killer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Minion Killer</span></font><br><font color="00ffff">After using any ability, pulse twice for 10 damage to nearby enemies. </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Gazlowe/Talents/4/Reduce, Reuse, Recycle.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Reduce,Reuse,Recycle(Trait)</span></font><br><font color="00ffff">Enemy minions hit by Face Melt also dance for 5 seconds. </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Gazlowe/Talents/4/Clockwerk Steam Fists.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Clockwerk Steam Fists(Q)</span></font><br><font color="00ffff">Increases the range and knockback of Face Melt by 50%. </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Gazlowe/Talents/4/Promote.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Promote  </span></font><br><font color="00ffff">使用後增加小兵200%的血量與100%的傷害，能充能2次。 </font></span>				  	
                    </div>                                                                               
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/7/Rock-It! Turret XL.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rock-It!Turret XL(Q)</span></font><br><font color="00ffff">砲台能額外對2個目標造成50%的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/7/Mercenary LordMercenary camps your Hero captures gain the following bonuses.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Mercenary Lord</span></font><br><font color="00ffff">佔領僱傭兵營地時能使雇傭兵得到額外的加乘。Siege Giants獲得額外50%傷害。Knights獲得額外50%生命。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Gazlowe/Talents/7/Engine Gunk.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Engine Gunk(Q)</span></font><br><font color="00ffff">砲台能夠緩速目標單位25%，持續2秒。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Gazlowe/Talents/7/First Aid.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">First Aid</span></font><br><font color="00ffff">主動技，在6秒內回復35%最大生命值的生命。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/7/CalldownMULE.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Calldown: MULE</span></font><br><font color="00ffff">召喚1個工兵修復目標位置附近的建築持續60秒，每秒修復100的生命值並每5秒補充一個彈藥。</font></span>				  	
                    </div>                                                                                
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/10/Grav-O-Bomb 3000.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Grav-O-Bomb 3000(R)</span></font><br><font color="00ffff">短暫延遲後，將附近敵軍拉往目標區域的中心並造成150+(等級*26)的傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/10/Robo-Goblin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Robo-Goblin(R) </span></font><br><font color="00ffff">變身成Robo-Goblin，普通攻擊對小兵、僱傭兵與建築造成額外250%的傷害，期間降低控場效果50%持續16秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/13/Burning Rage.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Burning Rage</span></font><br><font color="00ffff">砲台能額外對2個目標造成50%的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/13/Kwik Release Charge.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Kwik Release Charge(E)</span></font><br><font color="00ffff">Grav-O-Bomb 3000在短時間內能使用兩次。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Gazlowe/Talents/13/EZ-PZ Dimensional Ripper.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">EZ-PZ Dimensional Ripper(W)</span></font><br><font color="00ffff">Deth Lazor能在3秒內緩速英雄35%並凍結小兵與建築。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Gazlowe/Talents/13/Sprint.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sprint </span></font><br><font color="00ffff">主動技，增加75%移動速度，持續3秒。</font></span>				  	
                    </div>
                                                                                
                  </div>			  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/16/Long-Ranged Turrets.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Long-Range Turrets(Q)</span></font><br><font color="00ffff">砲台攻擊範圍增加25%。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/16/Turret Storage.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Turret Storage(Q)</span></font><br><font color="00ffff">砲台能充能至4次。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Gazlowe/Talents/16/Hyperfocus Coils.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hyperfocus Coils(W)</span></font><br><font color="00ffff">Deth Lazor蓄能速度增加為2倍。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Gazlowe/Talents/16/Goblin Fusion.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Goblin Fusion(W)</span></font><br><font color="00ffff">Deth Lazor蓄能達到最大時會額外獲得一次蓄能使傷害增加50%。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin </span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。</font></span>				  	
                    </div>                                                                                
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/20/Resurgence of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resurgence of the Storm)</span></font><br><font color="00ffff">死亡後於5秒後在祭壇復活，冷卻時間120秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Gazlowe/Talents/20/Swift StormYour Hero is no longer dismounted from taking damage..png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Swift Storm</span></font><br><font color="00ffff">承受傷害時不會解除坐騎並增加60%的騎馬移動速度。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Gazlowe/Talents/20/Miniature Black Hole.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Miniature Black Hole(R)</span></font><br><font color="00ffff">Grav-O-Bomb 3000作用範圍增加25%並提高50%的傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Gazlowe/Talents/20/Mecha-Lord.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Mecha-Lord(R)</span></font><br><font color="00ffff">Robo-Goblin對英雄造成額外130%的普通攻擊傷害，每次普通攻擊都能延長持續時間5秒。</font></span>				  	
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

