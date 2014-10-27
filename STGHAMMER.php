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
			<div class="STGHAMMER"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Sgt. Hammer/300_300/STGHAMMER.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:Sgt.Hammer</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:770(每等+170)<br><br>生命回復:1.605(每等+0.305)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:44(每等+13)<br><br>攻擊速度:1</h3></font></span>						
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
      									 外號“重錘”，曾在星區服役，經歷了許多艱辛困苦的戰役。她的嘉農砲發出的震天巨響，能使勇悍的敵人恐懼......有時候也包含一些友軍。
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
      								     能切換模式獲得額外的射程、濺射傷害，還能對遠方的敵人造成更大的傷害。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Sgt. Hammer/Abilities/Spider Mines.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Spider Mines(Q))&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">14秒</font>
    						<br class="fon2"><font color="fffff"><br>釋放三個持續35秒的地雷，踩到地雷會造成50+(等級*8)的傷害並在1.5秒內緩速25%。</font>
    				</span>

					<br>
    				<img src="picture/Sgt. Hammer/Abilities/Concussive Blast.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Concussive Blast(W) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>對前方錐形範圍造成50+(等級*13)的傷害並擊退敵軍。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Sgt. Hammer/Abilities/Siege Mode.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Siege Mode(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">45mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">5秒</font>
    						<br class="fon2"><font color="fffff"><br>轉換成Siege模式，普通攻擊會有25%濺射傷害且範圍增加5，視野增加3並對小兵與建築提高30%傷害，此模式不能移動。</font>
    				</span>
    				
					<br>
    				<img src="picture/Sgt. Hammer/Abilities/Blunt Force Gun.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Blunt Force Gun(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">80秒</font>
    						<br class="fon2"><font color="fffff"><br>發出一個飛彈對路徑上的敵人造成220+(等級*29)的傷害並獲得飛彈的視野。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Sgt. Hammer/Abilities/Napalm Strike.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Napalm strile(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">35mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">6秒</font>
    						<br class="fon2"><font color="fffff"><br>對目標區域造成50+(等級*16)的傷害，並在目標區域額外造成30+(等級*4)的持續傷害持續4秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Sgt. Hammer/Abilities/Artiller.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Artillery(D) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>對距離4.5以外的敵人提高20%的傷害。</font>
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
				  	<img src="picture/Sgt. Hammer/Talents/1/Regeneration Master.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Regeneration Master</span></font><br><font color="00ffff">收集3個生命恢復球就能永久增加每秒4點生命回复。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/1/Advanced Artillery.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Advanced Artillery(Trait)</span></font><br><font color="00ffff">Artillery的效果額外提升10%傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/1/Lethal Blast.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Lethal Blast(W)</span></font><br><font color="00ffff">提高Concussive Blast的傷害25%。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/1/Resistant.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resistant(E)</span></font><br><font color="00ffff">在Siege模式下，受到沉默、暈眩、緩速與纏繞的時間減少50%。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/1/Ambush.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ambush(E)</span></font><br><font color="00ffff">進入Siege時會進入隱形，下一發普通攻擊會增加額外100%的傷害。</font></span>				  	
                    </div>                                                                                   
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/4/Focused Attack.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Focused Attack</span></font><br><font color="00ffff">每10秒，下次基礎攻擊增加額外50%傷害，每次基礎功及減少冷卻時間1秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/4/Vampiric Assault.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Vampiric Assault</span></font><br><font color="00ffff">基礎攻擊15%的傷害回復自身生命。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/4/Maelstrom Shells.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Maelstrom Shells</span></font><br><font color="00ffff">普通攻擊範圍提高1單位。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/4/Excessive Force.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Excessive Force(W)</span></font><br><font color="00ffff">兩倍擊退的距離。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/7/Fortify Position.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fortify Position(E)</span></font><br><font color="00ffff">Siege模式下敵方無視敵方的位移效果且會獲的兩次格檔機會，每次吸收普通攻擊的50%。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/7/Hover Siege Mode.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hover Siege Mode(E)</span></font><br><font color="00ffff">BSiege模式下可以用50%的移動速度行動。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/7/Hyper-Cooling Engines.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hyper-Cooling Engines(Z)</span></font><br><font color="00ffff">減少Thrusters(Z)的冷卻時間10秒且在祭壇範圍內隨時可以啟動。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/7/First Aid.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">First Aid</span></font><br><font color="00ffff">主動技，在6秒內回復35%最大生命值的生命。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/10/Blunt Force Gun.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blunt Force Gun(R) Mosh Pit</span></font><br><font color="00ffff">發出一個飛彈對路徑上的敵人造成220+(等級*29)的傷害並獲得飛彈的視野。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/10/Napalm Strike.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Napalm strile(R)</span></font><br><font color="00ffff">對目標區域造成50+(等級*16)的傷害，並在目標區域額外造成30+(等級*4)的持續傷害持續4秒。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/13/Giant Killer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Giant Killer</span></font><br><font color="00ffff">基礎攻擊對敵方英雄造成額外最大生命1.5%的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/13/Crucio X-2 Cannon.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Crucio X-2 Cannon)</span></font><br><font color="00ffff">增加2單位的普通攻擊範圍。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/13/First Strike.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">First Strike(E)</span></font><br><font color="00ffff">在5秒內未受到傷害則普通攻擊增加25%的傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/13/Barricade.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Barricade(W)</span></font><br><font color="00ffff">Concussive Blast使用後產生一個路障，持續4秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/13/Bullhead Mines.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bullhead Mines(Q)</span></font><br><font color="00ffff">地雷爆炸時會有些微的擊退效果。</font></span>				  	
                    </div>                                                                                
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/16/Executioner.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Executioner)</span></font><br><font color="00ffff">基礎攻擊對被減速、被定身、被擊暈的目標造成40%額外傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/16/Mine Field.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Mine Field(Q)</span></font><br><font color="00ffff">額外增加2個地雷。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/16/Slowing Mines.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Slowing Mines(Q)</span></font><br><font color="00ffff">增加地雷的緩速效果為50%，且持續時間增至2.5秒。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/16/Graduating Range.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Graduating Range(E)</span></font><br><font color="00ffff">Siege模式下，普通攻擊距離每3秒增加1單位，最高增至5單位。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin</span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/20/Resurgence of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resurgence of the Storm</span></font><br><font color="00ffff">死亡後於5秒後在祭壇復活，冷卻時間120秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/20/Orbital BFG.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Orbital BFG(R)</span></font><br><font color="00ffff">Blunt Force Gun飛彈發射後，每5秒會依原軌道再次發射導彈，最後一次的飛彈才有導彈的效果。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Sgt. Hammer/Talents/20/Advanced Lava Strike.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Advanced Lava Strike(R)</span></font><br><font color="00ffff">Napalm strile的射程增加75%並提高50%的傷害。</font></span>				  	
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

