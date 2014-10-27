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
			<div class="ZERATUL"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Zeratul/300_300/Zeratul.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:Zeratu</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:820(每等+135)<br><br>生命回復:2.168(每等+0.5)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:47(每等+13)<br><br>攻擊速度:0.9</h3></font></span>						
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
      									神秘的黑暗聖堂武士忠誠地侍奉著薩爾納加。儘管他有著虛空力量的加持，然而贏得了區域領導者們尊敬的卻是他的智慧。除他對那些戲劇性登場的愛好。
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
      								    能在非戰斗狀態下隱形，除了憑藉著閃爍能力快速的出入戰場外，他還能不斷的騷擾敵人。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Zeratul/Abilities/Cleave.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Cleave(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">40mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">6秒</font>
    						<br class="fon2"><font color="fffff"><br>對附近敵人造成75+(等級*17)傷害</font>
    				</span>

					<br>
    				<img src="picture/Zeratul/Abilities/Singularity Spike.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Singularity Spike(W) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>使用技能鎖定在第一個接觸到的敵人身上，在1秒後對其造成100+(等級*20)傷害和40%的減速，持續3秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Zeratul/Abilities/Blink.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Blink(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">10秒</font>
    						<br class="fon2"><font color="fffff"><br>傳送至目標區域並且不會取消隱形。</font>
    				</span>
    				
					<br>
    				<img src="picture/Zeratul/Abilities/Shadow Assault.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Shodow Assault(R) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>獲得20%攻速，攻擊自動獲得15%的生命竊取效果，能立即衝鋒至目標身邊，持續6秒。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Zeratul/Abilities/Void Prison.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Void Prison(R) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>製造持續5秒的區域束縛敵人，其中無論英雄、小兵或是建築都會變為無敵狀態並無法動作。施法者本身免疫此效果。</font>
    				</span>   
  
					<br>
    				<img src="picture/Zeratul/Abilities/Permanent Cloak.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Permanent Cloak(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>脫離戰鬥2秒後進入隱身狀態，受到傷害或攻擊時會解除隱身。</font>
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
				  	<img src="picture/Zeratul/Talents/1/Regeneration Master.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Regeneration Master</span></font><br><font color="00ffff">收集3個生命恢復球就能永久增加每秒4點生命回复。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zeratul/Talents/1/Path of the Assassin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Assassin</span></font><br><font color="00ffff">每提升一級，增加額外2點傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zeratul/Talents/1/Greater Cleave.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Greater Cleave(Q)</span></font><br><font color="00ffff">增加Cleave的作用範圍33%。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Zeratul/Talents/1/Rapid Displacement.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rapid Displacement(E)</span></font><br><font color="00ffff">減少Blink的冷卻時間1.5秒。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Zeratul/Talents/4/Focused Attack.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Focused Attack</span></font><br><font color="00ffff">每10秒，下次基礎攻擊增加額外50%傷害，每次基礎功及減少冷卻時間1秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zeratul/Talents/4/Vampiric Assault.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Vampiric Assault</span></font><br><font color="00ffff">基礎攻擊15%的傷害回覆自身生命。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Zeratul/Talents/4/Shadow Spike.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shadow Spike(W)</span></font><br><font color="00ffff">使用Singularity Spike時不再解除隱形並增加20%的射程。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Zeratul/Talents/4/Sustained Anomaly.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sustained Anomaly(W)</span></font><br><font color="00ffff">使用Singularity Spike會爆炸並緩速附近敵方不管有無擊中目標。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Zeratul/Talents/7/Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Block</span></font><br><font color="00ffff">週期性的減少50%來自英雄的基礎攻擊，最多可以疊加兩層。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zeratul/Talents/7/Rending Cleave.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rending Cleave(Q)</span></font><br><font color="00ffff">使用Cleave時會在5秒內造成額外50%的技能持續傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Zeratul/Talents/7/Assassin's Blade.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Assassin's Blade</span></font><br><font color="00ffff">當你破除隱形時在5秒內獲得額外25%的攻擊傷害，在潛行時獲得10%的移動加速。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Zeratul/Talents/7/First Aid.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">First Aid </span></font><br><font color="00ffff">主動技，在6秒內回復35%最大生命值的生命。</font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Zeratul/Talents/7/Searing Attacks.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Searing Attacks </span></font><br><font color="00ffff">主動技，基礎攻擊提升50%持續5秒。每次攻擊消耗15點法力值。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Zeratul/Talents/10/Shadow Assault.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shodow Assault(R) </span></font><br><font color="00ffff">獲得20%攻速，攻擊自動獲得15%的生命竊取效果，能立即衝鋒至目標身邊，持續6秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zeratul/Talents/10/Void Prison.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Void Prison(R)</span></font><br><font color="00ffff">製造持續5秒的區域束縛敵人，其中無論英雄、小兵或是建築都會變為無敵狀態並無法動作。施法者本身免疫此效果。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Zeratul/Talents/13/Giant Killer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Giant Killer</span></font><br><font color="00ffff">基礎攻擊對敵方英雄造成額外最大生命1.5%的傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zeratul/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spell Shield </span></font><br><font color="00ffff">週期性的減少50%來自英雄技能的傷害，最多可以充能兩次。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zeratul/Talents/13/Burning Rage.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Burning Rage</span></font><br><font color="00ffff">對周圍敵人每秒造成10+(等級*2)傷害。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Zeratul/Talents/13/Vorpal Blade.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Vorpal Blade</span></font><br><font color="00ffff">變成主動技能傳送至3秒內的最後一個攻擊目標。 </font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Zeratul/Talents/13/Wormhole.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Wormhole(E)</span></font><br><font color="00ffff">使用Blink之後在3秒內可以再次使用回到原目標位置。 </font></span>				  	
                    </div>                                                                 
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Zeratul/Talents/16/Executioner.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Executioner</span></font><br><font color="00ffff">基礎攻擊對被減速、被定身、被擊暈的目標造成40%額外傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zeratul/Talents/16/Double Bombs.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Double Bombs(W)</span></font><br><font color="00ffff">使用Singularity Spike後在3秒內可以再無消耗的使用一次。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zeratul/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin</span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Zeratul/Talents/16/Berserk.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Berserk </span></font><br><font color="00ffff">使用後在4秒內增加攻擊速度40%並增加移動速度10%。 </font></span>				  	
                    </div>                                                                 
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Zeratul/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zeratul/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zeratul/Talents/20/Nerazim Fury.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Nerazim Fury(R)</span></font><br><font color="00ffff">再增加Shodow Assault的15%生命偷取持續時間延長50%。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Zeratul/Talents/20/Protective Prison.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Protective Prison(R)</span></font><br><font color="00ffff">友軍不再受到此技能影響。 </font></span>				  	
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

