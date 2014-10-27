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
			<div class="BRITHTWING"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Brightwing/300_300/Brightwing.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:BRITHTWING</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:775(每等+140)<br><br>生命回復:1.163(每等+0.289)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:34(每等+8)<br><br>攻擊速度:0.9</h3></font></span>						
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
      									 精靈龍一族，調皮的性格且喜歡突發奇想而為人們所知。她經常突然出現幫助盟友，或者喜愛放肆的嘲弄敵人。
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
      								     是一名高機動性輔助型治療，除了能強化友軍也能使敵軍失去攻擊的能力。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Brightwing/Abilities/Arcane Flare.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Arcane Flore(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">8秒</font>
    						<br class="fon2"><font color="fffff"><br>對中心區域造成70+(等級*20)傷害對外圍區域造成35+(等級*10)傷害。</font>
    				</span>

					<br>
    				<img src="picture/Brightwing/Abilities/Polymorph.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Polymorph(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">15秒</font>
    						<br class="fon2"><font color="fffff"><br>把目標便成動物並造成25+(等級*5)的傷害，變成動物時不能攻擊與使用技能持續2秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Brightwing/Abilities/Pixie Dust.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Pixie Dust(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>增加目標的移動速度25%並在4秒內擁有2次格檔機會，每次格擋可以抵消50%的普通攻擊傷害。
</font>
    				</span>
    				
					<br>
    				<img src="picture/Brightwing/Abilities/Emerald Wind.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Emerald Wind (R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">90mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">60秒</font>
    						<br class="fon2"><font color="fffff"><br>在範圍內從自身釋放強風推開敵方單位並造成100+(等級*30)傷害。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Brightwing/Abilities/Blink Heal.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Blink Heal(R) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">40mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">1秒</font>
    						<br class="fon2"><font color="fffff"><br>傳送至目標友軍並對的附近友軍治癒100+(等級*15)的生命值。可充能2次每次需要8秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Brightwing/Abilities/Soothing Mist.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Soothing Mist(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>4秒治癒附近的友方英雄32+(等級*8)點生命值。</font>
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
				  	<img src="picture/Brightwing/Talents/1/Path of the Wizard.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Wizard</span></font><br><font color="00ffff">每等額外增加5魔量和0.1魔力回復。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Brightwing/Talents/1/Arcane Precision.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Arcane Precision(Q)r</span></font><br><font color="00ffff">Arcane Flore中心區域的傷害提升33%。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Brightwing/Talents/1/Shield Dust.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shield Dust(E)</span></font><br><font color="00ffff">Pixie Dust格擋機會提升至3次。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Brightwing/Talents/1/Bribe.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bribe</span></font><br><font color="00ffff">擊殺敵方小兵，可以獲得賄賂層數，疊加到20層時，可直接擊敗一個傭兵營地，但對骷髏無效。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Brightwing/Talents/4/Anti-magic Powder.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ani-magic Powder(E)/span></font><br><font color="00ffff">Reduce damage taken from nonPixie Dust使用這招時可以抵擋一次技能，降低50%的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Brightwing/Talents/4/Protective Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Protective Shield</span></font><br><font color="00ffff">A為一個友方英雄放置一個300+(等級*30)的護盾持續5秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Brightwing/Talents/4/Envenom.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Envenom</span></font><br><font color="00ffff">給敵方英雄下毒，6秒內造成180+(等級*30)點傷害。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Brightwing/Talents/4/Promote.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Promote </span></font><br><font color="00ffff">使用後增加小兵200%的血量與100%的傷害，能充能2次。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Brightwing/Talents/7/Gust of Healing.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Gust of Healing(Trait)</span></font><br><font color="00ffff">啟動後，Soothing Mist的治癒效果每秒發生1次，持續4秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Brightwing/Talents/7/Regenerative Rains.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Regenerative Rains(Trait)</span></font><br><font color="00ffff">每次使用技能後都會激發Soothing Mist的效果。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Brightwing/Talents/7/CalldownMULE.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Calldown: MULE</span></font><br><font color="00ffff">召喚1個工兵修復目標位置附近的建築持續60秒，每秒修復100的生命值並每5秒補充一個彈藥。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Brightwing/Talents/7/Cleanse.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Cleanse</span></font><br><font color="00ffff">解除目標所有暈眩、沉默、緩速、定身效果並保護此目標在一秒內不再受到影響。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Brightwing/Talents/10/Emerald Wind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Emerald Wind (R)</span></font><br><font color="00ffff">在範圍內從自身釋放強風推開敵方單位並造成100+(等級*30)傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Brightwing/Talents/10/Blink HealCharge Cooldown 8 seconds.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Blink Heal(R)</span></font><br><font color="00ffff">傳送至目標友軍並對的附近友軍治癒100+(等級*15)的生命值。可充能2次每次需要8秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Brightwing/Talents/13/Sticky Flare.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sticky Flare(Q)</span></font><br><font color="00ffff">減少Arcane Flore區域內的敵方目標30%的移動速度持續3秒 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Brightwing/Talents/13/Phase Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Phase Shield(Z)</span></font><br><font color="00ffff">傳送後對方目標會在3秒內獲得200+(等級*25)的護盾。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Brightwing/Talents/13/Sprint.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sprint</span></font><br><font color="00ffff">主動技，增加75%移動速度，持續3秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Brightwing/Talents/13/Ice Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ice Block </span></font><br><font color="00ffff">使自身無敵無法動作持續3秒。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Brightwing/Talents/16/Sticky Powder.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Sticky Powder(W)</span></font><br><font color="00ffff">變成小動物後減少50%移動速度。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Brightwing/Talents/16/Critterize.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Critterize(W)</span></font><br><font color="00ffff">提升25%的技能傷害。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Brightwing/Talents/16/Rewind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rewind</span></font><br><font color="00ffff">基礎技能冷卻時間減少10秒。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Brightwing/Talents/16/Stoneskin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Stoneskin</span></font><br><font color="00ffff">主動技，使用後獲得最大生命值30%的護甲值，持續5秒。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Brightwing/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Brightwing/Talents/20/Storm Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Storm Shield</span></font><br><font color="00ffff">自身和周圍隊友產生最大生命值20％的護盾，持續時間3秒。 </font></span>			  	
                    </div> 
				  	<div>
				  	<img src="picture/Brightwing/Talents/20/Continuous Winds.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Continuous Winds(R)</span></font><br><font color="00ffff">Emerald Wind額外釋出2陣風，每陣風造成25%的傷害。</font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Brightwing/Talents/20/Ysera's Blessing.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ysera's Blessing(R)</span></font><br><font color="00ffff">Blink Heal能充能三次</font></span>				  	
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

