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
			<div class="STITCHES"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Stitches/300_300/STITCHES.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:STITCHES</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:1060(每等+260)<br><br>生命回復:2.207(每等+0.534)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:48(每等+6)<br><br>攻擊速度:1.1</h3></font></span>						
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
      									 在通過暮色森林昏暗的小道時可得提高警覺：自從藏尸者把他製造的憎惡從夜色鎮放了出來，縫合怪便開始在路上漫無目的地遊蕩，   渴求著低等聯盟軍的血肉。
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
      								     活躍於前線的重型戰士，使用鉤子將敵人拖向自己，並在受到傷害時釋放毒霧。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Stitches/Abilities/Hook.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Hook(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">14秒</font>
    						<br class="fon2"><font color="fffff"><br>將勾到的第一個敵人拉向自己，造成40+(等級*8)傷害。</font>
    				</span>

					<br>
    				<img src="picture/Stitches/Abilities/Slam.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Slam(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">8秒</font>
    						<br class="fon2"><font color="fffff"><br>對錐形範圍內的敵人造成55+(等級*6)傷害。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Stitches/Abilities/Devour.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Devour(E) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">30秒</font>
    						<br class="fon2"><font color="fffff"><br>對小兵造成300+(等級*20)傷害或對英雄造成50+(等級*10)傷害，並回復最大生命值20%。</font>
    				</span>
    				
					<br>
    				<img src="picture/Stitches/Abilities/Vile Gas.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Vile Gas&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>受到傷害時，會釋放持續4秒的毒霧，對進入毒霧的敵人在3秒內造成56+(等級*8)傷害。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Stitches/Abilities/Putrid Bile.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Putrid Bile(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">秒</font>
    						<br class="fon2"><font color="fffff"><br>在身後留下膽汁，對經過的敵人每秒造成23+(等級*3)傷害，並將他們減速35%，持續8秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Stitches/Abilities/Gorge.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Gorge(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">80</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">80</font>
    						<br class="fon2"><font color="fffff"><br>吞噬一個敵方英雄3.5秒，造成200+(等級*50)傷害。在此期間，被吞噬的英雄無法行動，但也不會受到其他傷害。</font>
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
				  	<img src="picture/Stitches/Talents/1/Path of the Warrior.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Warrior</span></font><br><font color="00ffff">英雄每級額外增加35最大血量 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Stitches/Talents/1/Regeneration Master.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Regeneration Master</span></font><br><font color="00ffff">收集3個生命恢復球就能永久增加每秒4點生命回复。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Stitches/Talents/1/Heavy Slam.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Heavy Slam(W)</span></font><br><font color="00ffff">增加Slam(W)50%的傷害。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Stitches/Talents/1/Chew Your Food.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Chew Your Food(E)</span></font><br><font color="00ffff">Devour(E)額外在3秒內回復10%最大生命值。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Stitches/Talents/4/Amplified Healing.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Amplified Healing</span></font><br><font color="00ffff">提升30%治療與回復效果。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Stitches/Talents/4/Superiority.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Superiority</span></font><br><font color="00ffff">來自非英雄的傷害減少50%。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Stitches/Talents/4/Vile Cleaver.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Vile Cleaver</span></font><br><font color="00ffff">基礎攻擊會在目標身上製造毒霧。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Stitches/Talents/4/Putrid Ground.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Putrid Ground(W)</span></font><br><font color="00ffff">被Slam(W)擊中的敵人會被毒氣感染。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Stitches/Talents/7/Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Block</span></font><br><font color="00ffff">週期性的減少50%來自英雄的基礎攻擊，最多可以疊加兩層。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Stitches/Talents/7/Tenderizer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Tenderizer</span></font><br><font color="00ffff">基礎攻擊會減少敵人移動速度25%，持續1.5秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Stitches/Talents/7/Last Bite.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Last Bite(E)</span></font><br><font color="00ffff">若Devour(E)擊殺敵人，冷卻時間減少15秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Stitches/Talents/7/Savor the Flavor.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Savor the Flavor(E)</span></font><br><font color="00ffff">對敵方英雄使用Devour(E)，會獲得永久2點生命回復。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Stitches/Talents/7/Toxic Gas.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Toxic Gas</span></font><br><font color="00ffff">毒霧範圍增加25%，持續時間增加2秒。</font></span>				  	
                    </div>                                                                               
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Stitches/Talents/10/Putrid Bile.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Putrid Bile(R) </span></font><br><font color="00ffff">在身後留下膽汁，對經過的敵人每秒造成23+(等級*3)傷害，並將他們減速35%，持續8秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Stitches/Talents/10/Gorge.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Gorge(R)</span></font><br><font color="00ffff">吞噬一個敵方英雄3.5秒，造成200+(等級*50)傷害。在此期間，被吞噬的英雄無法行動，但也不會受到其他傷害。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Stitches/Talents/7/Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Relentless</span></font><br><font color="00ffff">減少50%被沉默、擊暈、減速、定身的持續時間。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Stitches/Talents/7/Tenderizer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Mega Smash(W)/span></font><br><font color="00ffff">Slam(W)範圍增加25%。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Stitches/Talents/7/Last Bite.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Indigestion(E)</span></font><br><font color="00ffff">使用Devour(E)會創造一隻Retchling。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Stitches/Talents/7/Savor the Flavor.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Helping Hand(Q)</span></font><br><font color="00ffff">Hook(Q)可以拉回友方英雄。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Stitches/Talents/7/Toxic Gas.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sprint </span></font><br><font color="00ffff">主動技，增加75%移動速度，持續3秒。</font></span>				  	
                    </div>                                                                               
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Stitches/Talents/16/Imposing Presence.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Imposing Presence</span></font><br><font color="00ffff">受到攻擊時，攻擊者降低30%攻擊速度。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Stitches/Talents/16/Fishing Hook.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fishing Hook(Q)</span></font><br><font color="00ffff">Hook(Q)距離增加50%。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Stitches/Talents/16/Shish Kabob.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shish Kabob(Q)</span></font><br><font color="00ffff">可以抓兩個目標。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Stitches/Talents//16/Pulverize.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Pulverize(W))</span></font><br><font color="00ffff">Slam(W)傷害增加50%，並暈眩0.5秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Stitches/Talents/16/Rewind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rewind</span></font><br><font color="00ffff">基礎技能冷卻時間減少10秒。</font></span>				  	
                    </div>                                                                               
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Stitches/Talents/20/Resurgence of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resurgence of the Storm</span></font><br><font color="00ffff">死亡後於5秒後在祭壇復活，冷卻時間120秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Stitches/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Stitches/Talents/20/Regenerative Bile.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Regenerative Bile(R)</span></font><br><font color="00ffff">Putrid Bile(R)持續時間增加2秒，造成傷害的50%轉為治療。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Stitches/Talents/20/Hungry Hungry Stitches.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hungry Hungry Stiches(R)</span></font><br><font color="00ffff">在吐出第一個目標之前能在次使用Gorge(R)，持續時間延長1秒。</font></span>				  	
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

