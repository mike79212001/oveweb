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
			<div class="ETC"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/ETC/300_300/ETC.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:E.T.C.</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:1040(每等+240)<br><br>生命回復:2.168(每等+0.5)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:47(每等+9)<br><br>攻擊速度:1</h3></font></span>						
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
      									艾澤拉斯精英的牛頭人酋長，在盡情搖擺中所展現的狂野樂章和吉他亂舞，彰顯著部落的力量。
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
      								     一位在前線戰場橫衝直撞且無所畏懼的英雄，不僅能擊暈他的敵人還能為友軍帶來增益。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/ETC/Abilities/Powerslide.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">powerslide&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>滑向目標位置，對路徑上的敵人造成60+(等級*7)點傷害並擊暈他們1秒。</font>
    				</span>

					<br>
    				<img src="picture/ETC/Abilities/Guitar Solo.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Guitar Solo&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">8秒</font>
    						<br class="fon2"><font color="fffff"><br>每秒生命回復25+(等級*6)，持續4秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/ETC/Abilities/Mosh Pit.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Mosh Pit&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">120秒</font>
    						<br class="fon2"><font color="fffff"><br>短暫延遲之後，在技能範圍內，暈眩敵人4秒，並強迫他們跳舞。 </font>
    				</span>
    				
					<br>
    				<img src="picture/ETC/Abilities/Face Melt.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Face Melt&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>對附近的敵人造成50+(等級*5）傷害，擊退他們並造成短暫暈眩。 </font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/ETC/Abilities/Rockstar.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Rockstar&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>當施放一個技能時，附近友方英雄將獲得20%攻速加成，己方小兵獲得一半效果，持續3秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/ETC/Abilities/Stage Dive.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Stage_Dive&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100</font>
    						<br class="fon2"><font color="fffff"><br>全球流，跳向目標區域，對其中的敵人造成100+(等級*12）傷害並緩速他們3秒。</font>
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
				  	<img src="picture/ETC/Talents/1/Damage Slide.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Damage Sude</span></font><br><font color="00ffff">提升30%Powerslide(Q)傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/ETC/Talents/1/Path of the Warrior.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Warrior</span></font><br><font color="00ffff">英雄每級額外增加35最大血量。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/ETC/Talents/1/Groupies.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Groupies</span></font><br><font color="00ffff">Guitar Solo(E)回復附近友方12+(等級*3)點。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/ETC/Talents/1/Pwn Shop Guitar.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Pwn Shop Guitar (E)</span></font><br><font color="00ffff">Guitar Solo(E)耗魔減少50%。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/ETC/Talents/4/Superiority.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Superiority</span></font><br><font color="00ffff">來自非英雄的傷害減少50%。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/ETC/Talents/4/Echo Pedal.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Echo Pedal</span></font><br><font color="00ffff">每次施放技能後都會發出兩次聲波，造成附近敵方10+(等級*3)點傷害。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/ETC/Talents/4/Dance Your Pants Off!.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Dance Your Pants Off</span></font><br><font color="00ffff">敵方小兵受到Face Melt(W) 攻擊暈眩並跳舞，持續5秒。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/ETC/Talents/4/Loud Speakers.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Loud Speakers</span></font><br><font color="00ffff">Face Melt(W)的攻擊範圍與擊退距離提升50%。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/ETC/Talents/7/Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Block</span></font><br><font color="00ffff">週期性的減少50%來自英雄的基礎攻擊，最多可以疊加兩層。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/ETC/Talents/7/Battle Momentum.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battle Momentum</span></font><br><font color="00ffff">普通攻擊將減少技能冷卻0.5秒</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/ETC/Talents/7/Monster Slide.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Monster Slide</span></font><br><font color="00ffff">增加Powerslide(Q)的寬度50% </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/ETC/Talents/7/Guitar Hero.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Guitar Hero</span></font><br><font color="00ffff">在Guitar Solo(E)施放後瞬間產生下一次雙倍傷害的普通攻擊，並回復50%所造成傷害。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/ETC/Talents/10/Mosh Pit.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Mosh Pit</span></font><br><font color="00ffff">短暫延遲之後，在既能範圍內，暈眩敵人4秒，並強迫他們跳舞。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/ETC/Talents/10/Stage Dive.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stage Dive</span></font><br><font color="00ffff">全球流，跳向目標區域，對其中的敵人造成100+(等級*12）傷害並緩速他們3秒。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>

				  	<div>
				  	<img src="picture/ETC/Talents/13/Relentless.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Relentless</span></font><br><font color="00ffff">減少50%被沉默、擊暈、減速、定身的持續時間。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/ETC/Talents/13/Uber Rockstar.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Uber Rockstar</span></font><br><font color="00ffff">Rockstar靈氣同時增加25%移動速度。</font></span>				  	
                    </div>                      
				  	<div>
				  	<img src="picture/ETC/Talents/13/Face Smelt.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Face Smelt(W)</span></font><br><font color="00ffff">被Face Melt擊中的敵人減少移動速度80%，持續2秒。</font></span>				  	
                    </div>                                                                                
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>

				  	<div>
				  	<img src="picture/ETC/Talents/16/Imposing Presence.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Imposing Presence</span></font><br><font color="00ffff">受到攻擊時，攻擊者降低30%攻擊速度。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/ETC/Talents/16/Head Crack.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Head Crack(Q)</span></font><br><font color="00ffff">增加50%Powerslide(Q)的眩暈時間。</font></span>				  	
                    </div>                      
				  	<div>
				  	<img src="picture/ETC/Talents/16/Guitar Instrumental.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Guitar Instrumental(E)</span></font><br><font color="00ffff">Guitar Solo(E)的持續時間增加100%。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/ETC/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin </span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。</font></span>				  	
                    </div>                                                                                                      
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>

				  	<div>
				  	<img src="picture/ETC/Talents/20/Resurgence of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resurgence of the Storm</span></font><br><font color="00ffff">死亡後於5秒後在祭壇復活，冷卻時間120秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/ETC/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。</font></span>				  	
                    </div>                      
				  	<div>
				  	<img src="picture/ETC/Talents/20/Death Metal.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Death Metal(R)</span></font><br><font color="00ffff">使跳舞的敵人受到額外25%傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/ETC/Talents/20/Rock God!.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rock God!(R) </span></font><br><font color="00ffff">減少Stage Dive(R)50%施法與延遲時間，並且提高50%傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/ETC/Talents/20/Bolt of the Storm.png" class="level_pic">
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
    <!-- <script src="js/jquery-1.11.1.js"></script> -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/bootstrap.js"></script> -->
    <!-- <script src="js/docs.min.js"></script> -->
  </body>
</html>

