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
			<div class="ZAGARA"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Zagara/300_300/ZAGARA.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:ZAGARA</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:750(每等+150)<br><br>生命回復:1.512(每等+0.313)</h3></font></span>	
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
      									她是蟲巢的母親，狡詐而兇殘的指揮著殘暴的部隊四處征戰，如果你碰上了她的蟲巢部隊你最好小心了，傷害了孩子，他可不會放過你的！
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
      								     污染區域並招換蟲族士兵攻擊敵人，會派出刺蛇援助友軍且要小心它無所不在的能力。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Zagara/Abilities/Baneling Barrage.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Baneling Barrage(Q) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">10秒</font>
    						<br class="fon2"><font color="fffff"><br>於直線上發射4隻爆蟲，每隻爆蟲碰撞敵人會產生小範圍爆炸造成35+(等級*5)的傷害。</font>
    				</span>

					<br>
    				<img src="picture/Zagara/Abilities/Hunter Killer.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Hunter Killer(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">14秒</font>
    						<br class="fon2"><font color="fffff"><br>召喚一隻刺蛇對單一敵人造成每秒40+(等級*6)的傷害，持續8秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Zagara/Abilities/Infested Drop.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Infested Drop(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>對目標區域召喚蟲囊造成60+(等級*12)的傷害。蟲囊破裂後會生出兩隻225+(等級*20)生命且擁有13+(等級*2)傷害的小蟲，持續8秒。</font>
    				</span>
    				
					<br>
    				<img src="picture/Zagara/Abilities/Devouring Maw.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Devouring Maw(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>在目標區域召換地龍造成75+(等級*24)的傷害並吞噬目標4秒；被吞噬的目標將無法攻擊，並承受每秒40+(等級*2)的傷害。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Zagara/Abilities/Nydus Network.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Nydus Network(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">2秒</font>
    						<br class="fon2"><font color="fffff"><br>在目標區域放置巢穴，最多可放置4個；每個巢穴之間可互通，使用R或滑鼠右鍵進出。</font>
    				</span>   
  
					<br>
    				<img src="picture/Zagara/Abilities/Exit Nydus Worm.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Creep Tumor(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">20mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">15秒</font>
    						<br class="fon2"><font color="fffff"><br>放置一個小型巢穴對周圍產生感染，在感染地面上你和你的召換物將獲得20%的移動加速，並額外獲得100%的生命回復，最多可充能3次持續240秒。</font>
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
				  	<img src="picture/Zagara/Talents/1/Demolitionist.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Demolitionist</span></font><br><font color="00ffff">基礎攻擊建築時減少一發彈藥並額外造成10%傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zagara/Talents/1/Centrifugal Hooks.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Centrifugal Hooks(Q)</span></font><br><font color="00ffff">爆蟲的行徑距離變為2倍。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zagara/Talents/1/Ventral Sacs.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ventral Sacs(E)</span></font><br><font color="00ffff">Infested Drop可產生3隻小蟲。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Zagara/Talents/1/Reconstitution.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Reconstitution(Trait)</span></font><br><font color="00ffff">Creep Tumor的生命回復效果增加至300%。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Zagara/Talents/4/Envenomed Spines.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Envenomed Spines</span></font><br><font color="00ffff">普通攻擊範圍增加20%且在3秒內造成額外16+(等級*4)的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zagara/Talents/4/Medusa Blades.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Medusa Blades</span></font><br><font color="00ffff">普通攻擊會對周圍3個敵人造成25%的傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Zagara/Talents/4/Tumor Clutch.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Tumor Clutch(Trait)</span></font><br><font color="00ffff">Creep Tumor的充能上限增至4次並減少10點魔力消耗。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Zagara/Talents/4/Envenom.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Envenom</span></font><br><font color="00ffff">主動技，使一個敵人中毒，在6秒內造成180+(等級*30)傷害。 </font></span>				  	
                    </div>  
				  	<div>
				  	<img src="picture/Zagara/Talents/4/Infest.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Infest</span></font><br><font color="00ffff">增加一個友軍小兵400%的傷害量，可充能兩次。 </font></span>				  	
                    </div>                                                             
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Zagara/Talents/7/Battle Momentum.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battle Momentum</span></font><br><font color="00ffff">B普通攻擊將減少技能冷卻0.5秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zagara/Talents/7/Volatile Acid.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Volatile Acid(Q)</span></font><br><font color="00ffff">爆蟲傷害對非英雄目標增加50%。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Zagara/Talents/7/Corpse Feeders.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Corpse Feeders(E)</span></font><br><font color="00ffff">Infested Drop每殺死一個敵人會增加小蟲的持續時間10秒。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Zagara/Talents/7/Endless Creep.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Endless Creep(Trait)</span></font><br><font color="00ffff">Creep Tumor的蔓延速度提升至2倍，且範圍擴大25%。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Zagara/Talents/7/Nydus Network (R)Charge Cooldown60 seconds.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rapid Incubation</span></font><br><font color="00ffff">在3秒內回復自身25%最大生命值與魔力，需引導。</font></span>				  	
                    </div>                                                            
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Zagara/Talents/10/Devouring Maw.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Devouring Maw(R)</span></font><br><font color="00ffff">在目標區域召換地龍造成75+(等級*24)的傷害並吞噬目標4秒；被吞噬的目標將無法攻擊，並承受每秒40+(等級*2)的傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zagara/Talents/10/Nydus Network.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Nydus Network(R)</span></font><br><font color="00ffff">在目標區域放置巢穴，最多可放置4個；每個巢穴之間可互通，使用R或滑鼠右鍵進出。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Zagara/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spell Shield</span></font><br><font color="00ffff">週期性的減少50%來自英雄技能的傷害，最多可以充能兩次。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zagara/Talents/13/Giant Killer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Giant Killer</span></font><br><font color="00ffff">基礎攻擊對敵方英雄造成額外最大生命1.5%的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zagara/Talents/13/Mutalisk.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Mutalisk(W))</span></font><br><font color="00ffff">Hunter Killer所召換的刺蛇獲得額外50%的傷害與持續時間。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Zagara/Talents/13/Grooved Spines.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Grooved Spines(W)</span></font><br><font color="00ffff">增加Hunter Killer的射程35%，並強化20%的傷害。 </font></span>				  	
                    </div>    
				  	<div>
				  	<img src="picture/Zagara/Talents/13/Bile Drop.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bile Drop(E)</span></font><br><font color="00ffff">被Infested Drop擊中的敵人在接下來的4秒內承受額外100%的傷害。 </font></span>				  	
                    </div>                                                                                  
                  </div>			  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Zagara/Talents/16/Baneling Massacre.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Baneling Massacre(Q)</span></font><br><font color="00ffff">Baneling Barrage可召喚8隻爆蟲。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zagara/Talents/16/Brood Expansion.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Brood Expansion(W)</span></font><br><font color="00ffff">Hunter Killer可以充能兩次。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zagara/Talents/16/Metabolic Boost.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Metabolic Boost(Trait)</span></font><br><font color="00ffff">Creep Tumor的移動加速效果提升至30%。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Zagara/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin</span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。 </font></span>				  	
                    </div>                                                                 
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Zagara/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zagara/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Zagara/Talents/20/Tyrant Maw.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Tyrant Maw(R)</span></font><br><font color="00ffff">Devouring Maw額外獲得50%傷害；當英雄被Devouring Maw殺死時會減少50秒Devouring Maw的冷卻時間。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Zagara/Talents/20/Broodling Nest.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Broodling Nest(R)</span></font><br><font color="00ffff">走出通道時會生出6隻寄生蟲攻擊附近的敵人，此效果每20秒只能觸發1次。 </font></span>				  	
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

