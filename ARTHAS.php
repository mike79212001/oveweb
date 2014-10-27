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
			<div class="ARTHAS"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Arthas/300_300/ARTHAS.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:ARTHAS</font></h3></span>
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
      									 直接攻擊他的敵人，凍結並緩速他們。用霜之哀傷的力量增強自己的攻擊。
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
      								     阿爾薩斯曾是洛丹倫的王儲，光明使者烏瑟爾的得意門生，卻在尋找人民救贖之路的過程中，孤注一擲而被魔劍霜之哀傷腐化。如今他是巫妖王的死亡騎士，永遠受他可悲可怖的命運束縛。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Arthas/Abilities/Arthas.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Death Coil(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">55mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">9秒</font>
    						<br class="fon2"><font color="fffff"><br>向目標敵人扔出死亡纏繞，造成80+(等級*14)傷害。死亡纏繞可以向自己施放，治療82+(等級*22)生命值。</font>
    				</span>

					<br>
    				<img src="picture/Arthas/Abilities/Howling Blast.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Howling Blast(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>使目標區域內敵人無法移動持續1.5秒，並造成30+(等級*6)傷害。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Arthas/Abilities/Frozen Tempest.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Frozen Tempest(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">10mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">X</font>
    						<br class="fon2"><font color="fffff"><br>每秒對附近的敵人造成20+(等級*3)傷害，減緩敵人移動速度6%，該效果最高疊加至30%。每秒消耗10點法力值，直至主動關閉或法力不足。</font>
    				</span>
    				
					<br>
    				<img src="picture/Arthas/Abilities/Army Of The Dead.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Army of the dead(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">90秒</font>
    						<br class="fon2"><font color="fffff"><br>召喚食屍鬼軍團，持續15秒。你可以通過獻祭食屍鬼恢復150(+等級*30)生命。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Arthas/Abilities/Summon Sindragosa.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Summon Sindragosa(R) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">90秒</font>
    						<br class="fon2"><font color="fffff"><br>英雄技能，造成150+(等級*15)傷害，並對英雄/小兵造成減速/凍結效果，持續10秒。對建築物也會造成凍結效果，持續20秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Arthas/Abilities/Frostmourne HungersTrait.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Frostmourne Hungers(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">X</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>使用之後下一個基礎攻擊獲得100%傷害提升並且恢復30點魔法值。</font>
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
				  	<img src="picture/Arthas/Talents/1/Path of the Warrior.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Warrior</span></font><br><font color="00ffff">英雄每級額外增加35最大血量 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Arthas/Talents/1/Regeneration Master.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Regeneration Master</span></font><br><font color="00ffff">收集3個生命恢復球就能永久增加每秒4點生命回復。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Arthas/Talents/1/Death Touch (Q).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Death Touch(Q)</span></font><br><font color="00ffff">Death Coil能立即殺死小兵。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Arthas/Talents/1/Frost Presence (W).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Frost Presence(W)</span></font><br><font color="00ffff">降低Howling Blast2秒的冷卻時間。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Arthas/Talents/1/Frost Presence (W).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Frozen Wastes(E)</span></font><br><font color="00ffff">Frozen Tempest的作用半徑增加33%。 </font></span>				  	
                    </div>                                                                                      
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Arthas/Talents/4/Superiority.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Superiority</span></font><br><font color="00ffff">來自非英雄的傷害減少50%。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Arthas/Talents/4/Eternal Hunger (Trait).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Eternal Hunger</span></font><br><font color="00ffff">增加Frostmourne Hungers效果帶來的魔法值，增加至60。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Arthas/Talents/4/Destruction (Trait).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Destruction</span></font><br><font color="00ffff">增加Frostmourne Hungers效果帶來的基礎攻擊加成，提升至150%。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Arthas/Talents/4/Envenom.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Envenom</span></font><br><font color="00ffff">給敵方英雄下毒，6秒內造成180+(等級*30)點傷害。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Arthas/Talents/7/Rune Tap.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rune Top</span></font><br><font color="00ffff">每3次普通攻擊為恢復6%的生命值。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Arthas/Talents/7/Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Block</span></font><br><font color="00ffff">週期性的減少50%來自英雄的基礎攻擊，最多可以疊加兩層。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Arthas/Talents/7/Obliterate (Trait).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Obliterate</span></font><br><font color="00ffff">霜之哀傷會造成周圍敵軍50%的傷害。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Arthas/Talents/7/Frost Strike (Trait).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Frost Strike</span></font><br><font color="00ffff">霜之哀傷會減少目標40%移動速度，持續1.5秒。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Arthas/Talents/10/Army of the Dead (R).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Army of the dead(R)</span></font><br><font color="00ffff">召喚食屍鬼軍團，持續15秒。你可以通過獻祭食屍鬼恢復150(+等級*30)生命。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Arthas/Talents/10/Summon Sindragosa (R).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Summon Sindragosa(R)</span></font><br><font color="00ffff">英雄技能，造成150+(等級*15)傷害，並對英雄/小兵造成減速/凍結效果，持續10秒。對建築物也會造成凍結效果，持續20秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Arthas/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spell Shield </span></font><br><font color="00ffff">週期性的減少50%來自英雄技能的傷害，最多可以充能兩次。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Arthas/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Relentless</span></font><br><font color="00ffff">減少50%被沉默、擊暈、減速、定身的持續時間。 </font></span>				  	
                    </div>                 
				  	<div>
				  	<img src="picture/Arthas/Talents/1/Frost Presence (W).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Trail of Frost(W) </span></font><br><font color="00ffff">Howling Blast(W)路徑上的敵人同樣被定身及受到傷害。 </font></span>				  	
                    </div>                 
				  	<div>
				  	<img src="picture/Arthas/Talents/13/Biting Cold (E).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bitching Cold(E) </span></font><br><font color="00ffff">增加50%冰風暴的傷害及消耗。 </font></span>				  	
                    </div>                                                                                                        
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Arthas/Talents/16/Immortal Coil (Q).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Immortal Coil(Q) </span></font><br><font color="00ffff">Death Coil會治療，如果目標是自己，那麼原本的治療效果提升50%。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Arthas/Talents/16/Embrace Death (Q).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Embrace Death(Q)</span></font><br><font color="00ffff">每消耗10%的生命值，死亡纏繞就造成額外20%的傷害。 </font></span>				  	
                    </div>                 
				  	<div>
				  	<img src="picture/Arthas/Talents/16/Frostmourne Feeds (Trait).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Frostmourne Feeds</span></font><br><font color="00ffff">下兩次基礎攻擊附加霜之哀傷飢餓效果。 </font></span>				  	
                    </div>                 
				  	<div>
				  	<img src="picture/Arthas/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin</span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。 </font></span>				  	
                    </div>                                                                                                        
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>

				  	<div>
				  	<img src="picture/Arthas/Talents/20/Resurgence of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Resurgence of the Storm</span></font><br><font color="00ffff">死亡後於5秒後在祭壇復活，冷卻時間120秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Arthas/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。 </font></span>				  	
                    </div>                 
				  	<div>
				  	<img src="picture/Arthas/Talents/20/Legion of Northrend (R).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Legion of Northend</span></font><br><font color="00ffff">食屍鬼軍團增加3個食屍鬼，持續時間增加50%。 </font></span>				  	
                    </div>                 
				  	<div>
				  	<img src="picture/Arthas/Talents/20/Absolute Zero (R).png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Absolute Zero</span></font><br><font color="00ffff">Sindragosa(R)飛行兩倍於原來的距離，敵軍英雄先被定身1.5秒，接著減少移動速度60%持續1.5秒 </font></span>				  	
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

