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
			<div class="ILLIDAN"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Illidan/300_300/Illidan.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:ILLIDAN</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:750(每等+125)<br><br>生命回復:1.73(每等+0.262)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:xx(每等+xx)<br><br>魔力回復:xx(每等+xx)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:30(每等+7)<br><br>攻擊速度:0.6</h3></font></span>						
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
      									世間首位惡魔獵手伊利丹·怒風，在擊退入侵的惡魔之後，因為製造了新的永恆之井而成為背叛者。如今統治著外域，肆意屠殺那些膽敢踏入其領地的英雄們。
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
      								     穿梭於戰場，能輕易的逃避攻擊也能無情的追殺敵人。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Illidan/Abilities/Dive.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Dive (Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">6秒</font>
    						<br class="fon2"><font color="fffff"><br>撲向目標,造成45+(等級*5)點傷害伊利丹將翻至目標的另一側.。</font>
    				</span>

					<br>
    				<img src="picture/Illidan/Abilities/Sweeping Strike.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Sweeping strike (W) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">8秒</font>
    						<br class="fon2"><font color="fffff"><br>沖向目標地點，對路徑上的敵人造成60+(等級*10)點傷害，如果擊中敵人，4秒內他的基礎攻擊傷害提升25%。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Illidan/Abilities/Evasion.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Evasion (E) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">15秒</font>
    						<br class="fon2"><font color="fffff"><br>1.5秒內閃避所有普通攻擊。</font>
    				</span>
    				
					<br>
    				<img src="picture/Illidan/Abilities/Metamorphosis.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Metamorphosis (R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">120秒</font>
    						<br class="fon2"><font color="fffff"><br>在目標位置變為惡魔形態，並在變身時在範圍內造成200(等級*10)傷害。每次擊中敵方英雄都能暫時獲得100(等級*15)最大生命值，同時獲得20%的攻擊速度加成。持續18秒。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Illidan/Abilities/The Hunt.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">The Hunt (R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">60秒</font>
    						<br class="fon2"><font color="fffff"><br>向目標敵人衝鋒，造成150點(等級*20)傷害，並將其擊暈1秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Illidan/Abilities/Betrayer's Thirst.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Betrayer's Thirst (D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>基礎攻擊傷害的20%將轉化為治療，同時降低技能冷卻時間1秒。</font>
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
				  	<img src="picture/Illidan/Talents/1/Regeneration Master.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Regeneration Master</span></font><br><font color="00ffff">收集3個生命恢復球就能永久增加每秒4點生命回复。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Illidan/Talents/1/Battered Assault.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battered Assault(W)</span></font><br><font color="00ffff">普通攻擊獲得額外40%傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Illidan/Talents/1/Shadow Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shadow Shield(E)</span></font><br><font color="00ffff">使用Evasion時獲得75的護盾持續5秒。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Illidan/Talents/1/Thirsting Blade (Trait).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Thirsting Blade</span></font><br><font color="00ffff">基礎攻擊的治療量提升至30%。</font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Illidan/Talents/4/Focused Attack.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Focused Attack/span></font><br><font color="00ffff">每10秒，下次基礎攻擊增加額外50%傷害，每次基礎功及減少冷卻時間1秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Illidan/Talents/4/Marked for Death.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Morked for Death(Q)</span></font><br><font color="00ffff">使用Dive後下一個普通攻擊會對此目標造成額外100%傷害。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Illidan/Talents/4/Fel Reach.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fel Reach(W)</span></font><br><font color="00ffff">增加技能衝擊距離20%。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Illidan/Talents/4/Immolation.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Immolation(W)</span></font><br><font color="00ffff">使用Sweeping strike燃燒附近敵人造成每秒17+(等級*3)的傷害持續3秒。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Illidan/Talents/7/Rapid Chase.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rapid Chase(Q)</span></font><br><font color="00ffff">使用Dive後增加20%移動速度持續兩秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Illidan/Talents/7/Reflexive Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Reflexive Block(E)</span></font><br><font color="00ffff">Evasion結束後獲得兩層格擋效果(減少基礎攻擊傷害50%)，持續5秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Illidan/Talents/7/Thrill of Battle (Trait).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Thrill of BattleMonster Slide</span></font><br><font color="00ffff">啟動後基礎攻擊減少技能冷卻的效果翻倍，持續5秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Illidan/Talents/7/First Aid.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">First Aid</span></font><br><font color="00ffff">主動技，在6秒內回復35%最大生命值的生命。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Illidan/Talents/10/Metamorphosis.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Metamorphosis (R)</span></font><br><font color="00ffff">在目標位置變為惡魔形態，並在變身時在範圍內造成200(等級*10)傷害。每次擊中敵方英雄都能暫時獲得100(等級*15)最大生命值，同時獲得20%的攻擊速度加成。持續18秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Illidan/Talents/10/The Hunt.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">The Hunt (R)</span></font><br><font color="00ffff">向目標敵人衝鋒，造成150點(等級*20)傷害，並將其擊暈1秒。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Illidan/Talents/13/Giant Killer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Giant Killer</span></font><br><font color="00ffff">基礎攻擊對敵方英雄造成額外最大生命1.5%的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Illidan/Talents/13/Lunge.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Lunge(Q)</span></font><br><font color="00ffff">增加Dive的施放距離30%。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Illidan/Talents/13/Friend or Foe.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Friend Foe(Q)</span></font><br><font color="00ffff">Dive可對友方單位使用但不會翻過目標。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Illidan/Talents/13/Unbound.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Unbound(W)</span></font><br><font color="00ffff">Sweeping strike可以穿透地形。</font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Illidan/Talents/13/Sixth Sense.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sixth Sense(E)</span></font><br><font color="00ffff">使用Evasion時同時豁免50%的技能傷害。</font></span>				  	
                    </div>                                                                              
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Illidan/Talents/16/Executioner.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Executioner</span></font><br><font color="00ffff">基礎攻擊對被減速、被定身、被擊暈的目標造成40%額外傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Illidan/Talents/16/Second Sweep.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Second Sweep(W)</span></font><br><font color="00ffff">讓Sweeping strike可充能兩次 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Illidan/Talents/16/Hunter's Onslaught.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hunter's Onslaught</span></font><br><font color="00ffff">使全部技能獲得15%吸血效果 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Illidan/Talents/16/Blood for Blood.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blood for Blood </span></font><br><font color="00ffff">主動技，吸取目標敵人15%最大生命值，並使其移動速度降低30%，持續3秒。</font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Illidan/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin </span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。</font></span>				  	
                    </div>                                                                             
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Illidan/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Illidan/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Illidan/Talents/20/Demonic Form.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Demonic Form(R)</span></font><br><font color="00ffff">將保持惡魔形態直到被擊殺，惡魔形態下攻擊速度加成提升至30%。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Illidan/Talents/20/Nowhere to Hide.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Nowhere to Hide(R)</span></font><br><font color="00ffff">使The Hunt施放距離變成全地圖並增加衝擊速度。</font></span>				  	
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

