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
			<div class="VALLA"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Valla/300_300/VALLA.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:E.T.C.</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:700(每等+110)<br><br>生命回復:1.461(每等+0.227)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:28(每等+9)<br><br>攻擊速度:0.6</h3></font></span>						
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
      									 親眼目睹了惡魔的暴虐後虐，整個村莊被屠戮一空，只剩她被留下等死。如今，她不顧一切，為了自己的宿業四處遊走，只為了將庇護世界從惡魔的腐化中拯救出來。
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
      								     擅長從遠處攻擊敵人，並在不斷的攻擊中獲得可觀的攻擊速度與移動速度。當敵人逼近時，她也能迅速的躲避危險。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Valla/Abilities/Hungering Arrow.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Hungering Arrow(Q) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">14秒</font>
    						<br class="fon2"><font color="fffff"><br>對第一個接觸到的目標造成66+(等級*15)傷害，然後尋找額外最多2個目標，造成32+(等級*8)傷害。可以攻擊一個敵人多次。</font>
    				</span>

					<br>
    				<img src="picture/Valla/Abilities/Multishot.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Multishot(W)  &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">8秒</font>
    						<br class="fon2"><font color="fffff"><br>對前方錐形造成60+(等級*15)的傷害</font>
    				</span> 
    				
					<br>
    				<img src="picture/Valla/Abilities/Vault.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Vault(E) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">10秒</font>
    						<br class="fon2"><font color="fffff"><br>翻轉至目標區域</font>
    				</span>
    				
					<br>
    				<img src="picture/Valla/Abilities/Strafe.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Strafe(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">80mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">50秒</font>
    						<br class="fon2"><font color="fffff"><br>快速攻擊附近敵人，每擊中一次造成10+(等級*5)傷害。在掃射過程中可以移動並使用Vault，持續3秒。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Valla/Abilities/Rain of Vengeance.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Rain of Vengeance(R) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">90秒</font>
    						<br class="fon2"><font color="fffff"><br>發射2波箭雨，對范圍內的敵人造成100+(等級*23)傷害，每波擊暈他們0.5秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Valla/Abilities/Hatred.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Hatred(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>處於攻擊狀態下每次攻擊增加2%攻擊傷害和1%移動速度，最多可疊至10層，離開戰鬥狀態後逐層下降。</font>
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
				  	<img src="picture/Valla/Talents/1/Cost-Effective Materials.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Cost-Effective Materials(Q)</span></font><br><font color="00ffff">減少Hungering Arrow的30耗魔量。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Valla/Talents/1/Siphoning Arrow.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Siphoning Arrow(Q)</span></font><br><font color="00ffff">會恢復此技能Hungering Arrow所造的50%傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Valla/Talents/1/Composite Arrows.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Composite Arrow(W)</span></font><br><font color="00ffff">提升Multishot的攻擊範圍20%。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Valla/Talents/1/Rancor.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rancor </span></font><br><font color="00ffff">Hatred同時也會增加每層2%攻擊速度。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Valla/Talents/1/Punishment.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Punishment </span></font><br><font color="00ffff">使用技能時獲得2層Hatred。</font></span>				  	
                    </div>                                                                  
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Valla/Talents/4/Vampiric Assault.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Vampiric Assault</span></font><br><font color="00ffff">基礎攻擊15%的傷害回覆自身生命。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Valla/Talents/4/Manticore.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Manticore</span></font><br><font color="00ffff">每3下基礎攻擊對相同目標造成額外50%傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Valla/Talents/4/Puncturing Arrow.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Puncturing Arrow(Q)</span></font><br><font color="00ffff">Hungering Arrow射程增加25%尋找目標增加至3個。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Valla/Talents/4/Arsenal.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Arsenal(W)</span></font><br><font color="00ffff">Multishot增加三個手榴彈造成34+(等級*8)的傷害。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Valla/Talents/7/Battle Momentum.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battle Momentum</span></font><br><font color="00ffff">普通攻擊將減少技能冷卻0.5秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Valla/Talents/7/Repeating Arrow.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Repeating Arrow(E)</span></font><br><font color="00ffff">使用Vault會重置Hungering Arrow的冷卻時間。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Valla/Talents/7/Caltrops.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Caltrops(E)</span></font><br><font color="00ffff">使用Vault後路徑上會留下三個地雷造成25+(等級*2)傷害並減少敵方20%移動速度持續2秒</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Valla/Talents/7/Searing Attacks.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Searing Attacks </span></font><br><font color="00ffff">主動技，基礎攻擊提升50%持續5秒。每次攻擊消耗15點法力值。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Valla/Talents/10/Strafe.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Strafe(R)</span></font><br><font color="00ffff">快速攻擊附近敵人，每擊中一次造成10+(等級*5)傷害。在掃射過程中可以移動並使用Vault，持續3秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Valla/Talents/10/Rain of Vengeance.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rain of Vengeance(R) </span></font><br><font color="00ffff">發射2波箭雨，對范圍內的敵人造成100+(等級*23)傷害，每波擊暈他們0.5秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Valla/Talents/13/Giant Killer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Giant Killer</span></font><br><font color="00ffff">基礎攻擊對敵方英雄造成額外最大生命1.5%的傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Valla/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spell Shield </span></font><br><font color="00ffff">週期性的減少50%來自英雄技能的傷害，最多可以充能兩次。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Valla/Talents/13/Frost Shot.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Frost Shot(W)</span></font><br><font color="00ffff">Multishot可造成20%緩速效果持續2秒。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Valla/Talents/13/Hot Pursuit.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hot Pursuit</span></font><br><font color="00ffff">當Hatred疊至10層時移動速度增至20%。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Valla/Talents/13/Tempered by Discipline.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Tempered by Discipline </span></font><br><font color="00ffff">Hatred層數上限可疊至20層，10層後每層可獲得3%的普攻吸血。</font></span>				  	
                    </div>                                                                  
                  </div>			  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Valla/Talents/16/Executioner.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Executioner</span></font><br><font color="00ffff">基礎攻擊對被減速、被定身、被擊暈的目標造成40%額外傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Valla/Talents/16/Tumble.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Tumble(E)<span></font><br><font color="00ffff">使Vault多一個充能機會，可在短時間內施放兩次。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Valla/Talents/16/Blood for Blood.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blood for Blood</span></font><br><font color="00ffff">主動技，吸取目標敵人15%最大生命值，並使其移動速度降低30%，持續3秒。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Valla/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin </span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。</font></span>				  	
                    </div>                                                                 
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Valla/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Valla/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm<span></font><br><font color="00ffff">傳送至附近目標位置。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Valla/Talents/20/Trigger Happy.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Trigger Happy(R)</span></font><br><font color="00ffff">Strafe會增加25%傷害並增加20%的攻擊範圍。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Valla/Talents/20/Storm of Vengeance.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Storm of Vengeance(R) </span></font><br><font color="00ffff">Rain of Vengeance增加至4波箭雨。</font></span>				  	
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

