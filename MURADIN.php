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
			<div class="MURADIN"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Muradin/300_300/MURADIN.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:MURADIN</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:1040(每等+260)<br><br>生命回復:2.168(每等+0.5)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:42(每等+8)<br><br>攻擊速度:0.9</h3></font></span>						
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
      									曾是阿爾薩斯王子的良師益友，卻未能阻止他最終轉變為巫妖王。如今，在輕微的失憶恢復後，他接替其鑽石化兄長的王位，成為帶領銅須部族的領袖。
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
      								     在戰場上四處遊弋，時而敲暈敵方英雄，當接近死亡時能快速的回復生命。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Muradin/Abilities/Muradin.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Stormbolt(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">560ana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">10秒</font>
    						<br class="fon2"><font color="fffff"><br>對第一個擊中的敵人造成40+(等級*10）傷害，擊暈1.5秒。</font>
    				</span>

					<br>
    				<img src="picture/Muradin/Abilities/Thunderclap.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Thunderclap(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">8秒</font>
    						<br class="fon2"><font color="fffff"><br>造成50+(等級*8)傷害，並減速敵人25%，持續2.5秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Muradin/Abilities/Avatar.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Avatar(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>獲得額外500+(等級*75）生命上限，同時基礎攻擊能擊暈敵人。持續20秒。</font>
    				</span>
    				
					<br>
    				<img src="picture/Muradin/Abilities/Dwarf Toss.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Dwarf Toss(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">65mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>跳躍至目標地點，對目標範圍內的敵人造成30+(等級*5)傷害。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Muradin/Abilities/Haymaker.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Haymaker(R) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">50秒</font>
    						<br class="fon2"><font color="fffff"><br>造成200+(等級*12)傷害，擊退目標，對於路徑上的敵人造成50+(等級*3)傷害並擊退。 </font>
    				</span>   
  
					<br>
    				<img src="picture/Muradin/Abilities/Second Wind.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Second Wind&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100</font>
    						<br class="fon2"><font color="fffff"><br>6秒內未受到傷害，每秒可以恢復11+(等級*2)點生命值。當生命值低於30%時，每秒生命恢復增加到30+(等級*8)。</font>
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
				  	<img src="picture/Muradin/Talents/1/Path of the Warrior.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Warrior</span></font><br><font color="00ffff">英雄每級額外增加35最大血量</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Muradin/Talents/1/Perfect Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Perfect Storm(Q)</span></font><br><font color="00ffff">Stormbolt(Q)每次擊中敵人都永久提高5點該技能傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Muradin/Talents/1/Infused Hammer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Infused Hammer(Q)</span></font><br><font color="00ffff">Stormbolt(Q)每次擊中敵人獲得45點魔力回復。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Muradin/Talents/1/Reverberation.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Reverberation(W)</span></font><br><font color="00ffff">Thunderclap(W)每次擊中敵人將使對方攻擊速度減少33%，持續2秒。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Muradin/Talents/4/ledgehammer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sledgehammer(Q)</span></font><br><font color="00ffff">Stormbolt(Q)對小兵和建築造成400%傷害，並摧毀4格彈藥。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Muradin/Talents/4/Crowd Control.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Crowd Control(W)</span></font><br><font color="00ffff">每擊中一個敵人減少0.5秒冷卻時間。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Muradin/Talents/4/Thunderburn.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Thunderburn(W)</span></font><br><font color="00ffff">使用Thunderclap(W)會留下一個區域延遲1.5秒後爆炸，造成25+(等級*4)點傷害和25%的減速效果，持續2秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Muradin/Talents/4/Third Wind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Third Wind</span></font><br><font color="00ffff">Second Wind在生命值低於40%時會被啟動。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Muradin/Talents/4/Skullcracker.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Skullcracker/span></font><br><font color="00ffff">對同一個目標的第4次基礎攻擊將造成0.25秒擊暈效果。</font></span>				  	
                    </div>                                                                             
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Muradin/Talents/7/Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Block</span></font><br><font color="00ffff">週期性的減少50%來自英雄的基礎攻擊，最多可以疊加兩層。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Muradin/Talents/7/Battle Momentum.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battle Momentum</span></font><br><font color="00ffff">普通攻擊將減少技能冷卻0.5秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Muradin/Talents/7/Piercing Bolt.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Piercing Bolt(Q)</span></font><br><font color="00ffff">風暴之鎚穿過目標，額外擊中一個目標。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Muradin/Talents/7/Landing Momentum.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Landing Momentum(E</span></font><br><font color="00ffff">落地後，增加移動速度20%，持續2秒。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Muradin/Talents/7/Searing Attacks.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Searing Attacks</span></font><br><font color="00ffff">主動技，基礎攻擊提升50%持續5秒。每次攻擊消耗15點法力值。</font></span>				  	
                    </div>                                                                                 
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Muradin/Abilities/Avatar.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Avatar(R)</span></font><br><font color="00ffff">獲得額外500+(等級*75）生命上限，同時基礎攻擊能擊暈敵人。持續20秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture//Muradin/Talents/10/Haymaker.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Haymaker(R)</span></font><br><font color="00ffff">造成200+(等級*12)傷害，擊退目標，對於路徑上的敵人造成50+(等級*3)傷害並擊退。 </font></span>				  	
                    </div>
                                                                                
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Muradin/Talents/13/Burning Rage.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Burning Rage</span></font><br><font color="00ffff">對周圍敵人每秒造成10+(等級*2)傷害。</font></span>				  	
                    </div>    
				  	<div>
				  	<img src="picture/Muradin/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spell Shield </span></font><br><font color="00ffff">週期性的減少50%來自英雄技能的傷害，最多可以充能兩次。</font></span>				  	
                    </div>                      
 				  	<div>
				  	<img src="picture/Muradin/Talents/13/Dwarf Launch.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Dwarf Launch(E)</span></font><br><font color="00ffff">跳躍距離和傷害範圍增加50%。</font></span>				  	
                    </div>                     
				  	<div>
				  	<img src="picture/Muradin/Talents/13/Healing Static.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Healing Static(W)</span></font><br><font color="00ffff">Thunderclap(W) 每擊中一個敵人，回復1%最大生命值。</font></span>				  	
                    </div>                      
				  	<div>
				  	<img src="picture/Muradin/Talents/13/Thunderstrike.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Thunderstrike(W)</span></font><br><font color="00ffff">Thunderclap(W) 擊中單一目標時，造成300%的傷害。</font></span>				  	
                    </div>                                                                             
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Muradin/Talents/16/Imposing Presence.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Imposing Presence</span></font><br><font color="00ffff">受到攻擊時，攻擊者降低30%攻擊速度。</font></span>				  	
                    </div>    
				  	<div>
				  	<img src="picture/Muradin/Talents/16/Executioner.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Executioner </span></font><br><font color="00ffff">基礎攻擊對被減速、被定身、被擊暈的目標造成40%額外傷害。</font></span>				  	
                    </div>                      
 				  	<div>
				  	<img src="picture/Muradin/Talents/16/Heavy Impact.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Heavy Impact(E)</span></font><br><font color="00ffff">被Dwarf Toss(E)擊中的敵人會被擊暈0.75秒。</font></span>				  	
                    </div>                     
				  	<div>
				  	<img src="picture/Muradin/Talents/16/Stoneform.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneform </span></font><br><font color="00ffff">主動技，在8秒內治療最大生命值的40%，在此期間Second Wind不會被觸發。</font></span>				  	
                    </div>                      
				  	<div>
				  	<img src="picture/Muradin/Talents/16/Rewind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rewind</span></font><br><font color="00ffff">基礎技能冷卻時間減少10秒。</font></span>				  	
                    </div>                                                                             
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Muradin/Talents/20/Resurgence of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resurgence of the Storm</span></font><br><font color="00ffff">死亡後於5秒後在祭壇復活，冷卻時間120秒。</font></span>				  	
                    </div>    
				  	<div>
				  	<img src="picture/Muradin/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。</font></span>				  	
                    </div>                      
 				  	<div>
				  	<img src="picture/Muradin/Talents/20/Unstoppable Force.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Unstoppable Force(R)</span></font><br><font color="00ffff">增加Avatar(R)的持續時間30%，在這段期間減少75%的群體控制效果。</font></span>				  	
                    </div>                     
				  	<div>
				  	<img src="picture/Muradin/Talents/20/Grand Slam.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Grand Slam(R)</span></font><br><font color="00ffff">提升Haymaker(R) 25%傷害，最多充能2次。</font></span>				  	
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

