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
			<div class="NAZEEBO"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Nazeebo/300_300/NAZEEBO.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:ZAZEEBO</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:740(每等+150)<br><br>生命回復:1.539(每等+0.313)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:41(每等+8)<br><br>攻擊速度:0.9</h3></font></span>						
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
      									穿戴著羽毛與骨頭裝飾的神秘祭祀，巫醫從無形之地中召喚靈魂來幫助他們戰鬥。只有少數外來人遇到了巫醫，而未奉獻出他們的血肉。
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
      								     巫醫專精於應對成群的敵人，他能召喚蜘蛛、殭屍和蟾蜍，也能從瀕死的敵人身上吸取法力和生命。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Nazeebo/Abilities/Corpse Spiders.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Corpse Spiders(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">10秒</font>
    						<br class="fon2"><font color="fffff"><br>對目標範圍造成40+(等級*8)的傷害並招喚出3隻有10+(等級*1)傷害的蜘蛛，持續4秒。</font>
    				</span>

					<br>
    				<img src="picture/Nazeebo/Abilities/Zombie Wall.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Zombie Wall(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">70mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">14秒</font>
    						<br class="fon2"><font color="fffff"><br>短暫延遲後，對目標範圍招喚出9隻環繞範圍的僵屍，每隻僵屍擁有20+(等級*2)的攻擊力，持續3秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Nazeebo/Abilities/Plague of Toads.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Plague of Toads(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">10mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>對錐形範圍釋放出5隻蟾蜍，每隻爆炸會造成30+(等級*8)的傷害。</font>
    				</span>
    				
					<br>
    				<img src="picture/Nazeebo/Abilities/Ravenous Spirit.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Ravenous Spirit(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">90秒</font>
    						<br class="fon2"><font color="fffff"><br>在目標範圍內招喚出一隻惡靈對其周圍產生每秒50+(等級*18)的傷害，引導惡靈時自身無法移動。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Nazeebo/Abilities/Gargantuan.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Gargantuan(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">90mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">60秒</font>
    						<br class="fon2"><font color="fffff"><br>招喚出巨像對目標範圍造成30+(等級*15)的傷害，巨像能抓捕小兵並撞擊地面對周圍敵軍造成30+(等級*15)的傷害並緩速30%，持續20秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Nazeebo/Abilities/Voodoo Ritua.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Voodoo Ritual(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>普通攻擊與技能在4秒內對敵軍造成額外20+(等級*4)的毒藥傷害，如果中毒的敵軍死亡，自身能回復1%的最大生命與最大魔力。</font>
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
				  	<img src="picture/Nazeebo/Talents/1/Demolitionist.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Demolitionist</span></font><br><font color="00ffff">基礎攻擊建築時減少一發彈藥並額外造成10%傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/1/Blood Ritual.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blood Ritual(Trait)</span></font><br><font color="00ffff">Voodoo Ritual的回復效果提升100%</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/1/Death Ritual.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Death Ritual(Trait)</span></font><br><font color="00ffff">當敵軍在Voodoo Ritual效果下死亡，自身永久增加4點生命與2點魔力。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Nazeebo/Talents/1/Bribe.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bribe</span></font><br><font color="00ffff">擊殺敵方小兵，可以獲得賄賂層數，疊加到20層時，可直接擊敗一個傭兵營地，但對骷髏無效。</font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/4/Minion Killer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Minion Killer</span></font><br><font color="00ffff">對小兵、僱傭兵與招喚物增加25%的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/4/Spider Cluster.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spider Cluster(Q)</span></font><br><font color="00ffff">使用Corpse Spiders時額外招喚出3隻蜘蛛，持續3秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Nazeebo/Talents/4/Envenom.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Envenom</span></font><br><font color="00ffff">主動技，使一個敵人中毒，在6秒內造成180+(等級*30)傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Nazeebo/Talents/4/Promote.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Promote</span></font><br><font color="00ffff">使用後增加小兵200%的血量與100%的傷害，能充能2次。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/7/Gidbinn.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Gidbinn</span></font><br><font color="00ffff">增加Plague of Toads的蟾蜍爆炸範圍，並增加所有非英雄技能的25%持續時間。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/7/Fresh Corpses.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fresh Corpses(W)</span></font><br><font color="00ffff">Zombie Wall的僵屍增加50%的傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Nazeebo/Talents/7/Calldown MULE.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Calldown: MULE</span></font><br><font color="00ffff">召喚1個工兵修復目標位置附近的建築持續60秒，每秒修復100的生命值並每5秒補充一個彈藥。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Nazeebo/Talents/7/Clairvoyance.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Clairvoyance</span></font><br><font color="00ffff">施放後始目標區域的所有單位顯形，持續4秒。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/10/Ravenous Spirit.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ravenous Spirit(R)</span></font><br><font color="00ffff">在目標範圍內招喚出一隻惡靈對其周圍產生每秒50+(等級*18)的傷害，引導惡靈時自身無法移動。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/10/Gargantuan.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Gargantuan(R)  </span></font><br><font color="00ffff">招喚出巨像對目標範圍造成30+(等級*15)的傷害，巨像能抓捕小兵並撞擊地面對周圍敵軍造成30+(等級*15)的傷害並緩速30%，持續20秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/13/Dead Rush.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Dead Rush(W)</span></font><br><font color="00ffff">Zombie Wall持續時間結束後留下5隻僵屍攻擊周圍的敵人，持續3秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/13/Toads of Hugeness.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Toads of Hugeness(E)</span></font><br><font color="00ffff">Plague of Toads的蟾蜍每跳一下就提高10%的傷害。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Nazeebo/Talents/13/Sprint.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sprint </span></font><br><font color="00ffff">主動技，增加75%移動速度，持續3秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Nazeebo/Talents/13/Ice Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ice Block</span></font><br><font color="00ffff">使自身無敵無法動作持續3秒。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/16/Leaping Spiders.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Leaping Spiders(Q)</span></font><br><font color="00ffff">Corpse Spiders會跳向目標且增加25%的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/16/Infested Toads.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Infested Toads(E)</span></font><br><font color="00ffff">Plague of Toads的蟾蜍爆炸後會各自生出一隻蜘蛛。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Nazeebo/Talents/16/Rewind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rewind</span></font><br><font color="00ffff">基礎技能冷卻時間減少10秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Nazeebo/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin</span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/20/Swift StormYour Hero is no longer dismounted from taking damage.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Swift Storm</span></font><br><font color="00ffff">承受傷害時不會解除坐騎並增加60%的騎馬移動速度。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Nazeebo/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Nazeebo/Talents/20/Annihilating Spirit.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Annihilating Spirit(R)</span></font><br><font color="00ffff">增加Ravenous Spirit的50%攻擊範圍與移動速度30%。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Nazeebo/Talents/20/Humongoid (R).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Humongoid(R)</span></font><br><font color="00ffff">巨像會持續到死亡，並對非英雄單位增加100%的傷害。</font></span>				  	
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

