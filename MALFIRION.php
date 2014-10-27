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
			<div class="MALFIRION"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Malfurion/300_300/MALFURION.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:MALFURION</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:835(每等+150)<br><br>生命回復:1.738(每等+0.313)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:33(每等+6)<br><br>攻擊速度:0.8</h3></font></span>						
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
      									半神塞納留斯的弟子，艾澤拉斯大陸上最強大的德魯伊。他與大自然及塞納留斯透過翡翠夢境進行了無數的溝通交流。他護佑大自然不被惡魔與部落染指。
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
      								     能夠治愈友軍並恢復他們的法力值，且還能夠從遠處發現敵?，並在範圍內進行纏繞。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Malfurion/Abilities/Regrowth.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Regrowth(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">7秒</font>
    						<br class="fon2"><font color="fffff"><br>治療友方目標40+(等級*14)生命值並再10秒內額外治癒100+(等級*35)的生命值。</font>
    				</span>

					<br>
    				<img src="picture/Malfurion/Abilities/Moonfire.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Moonfire(W&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">20mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">3秒</font>
    						<br class="fon2"><font color="fffff"><br>對目標區域造成30+(等級*10)傷害並顯形2秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Malfurion/Abilities/Entangling Roots.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Entangling Roots(E)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">75mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>將目標區域內的所有敵人纏繞定身1.5秒，同時每秒造成15+(等級*12)傷害。區域將在3秒內持續擴大。</font>
    				</span>
    				
					<br>
    				<img src="picture/Malfurion/Abilities/Tranquility.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Tranquility(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>治癒範圍內友方單位每秒40+(等級*9)持續10秒。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Malfurion/Abilities/Twilight Dream.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Twilight Dream(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">90秒</font>
    						<br class="fon2"><font color="fffff"><br>短暫延遲後在大範圍內造成100+(等級*36)的傷害並沉默敵軍3秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Malfurion/Abilities/Innervate.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Innervate(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">30秒</font>
    						<br class="fon2"><font color="fffff"><br>使目標友方英雄在10秒內回復100魔力。</font>
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
				  	<img src="picture/Malfurion/Talents/1/Path of the Wizard.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Wizard</span></font><br><font color="00ffff">每等額外增加5魔量和0.1魔力回復。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Malfurion/Talents/1/Moonburn.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Moonburn(W)</span></font><br><font color="00ffff">Moonfire對非英雄目標造成額外30%的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Malfurion/Talents/1/Harmony.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hormony(Q)</span></font><br><font color="00ffff">Regrowth用在小兵與僱傭兵身上會返還100%的魔力消耗 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Malfurion/Talents/1/Healing Ward.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Healing Ward</span></font><br><font color="00ffff">放置一根治癒圖騰再地板上對附近友軍每秒造成2%最大生命回復持續10秒。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Malfurion/Talents/4/Vengeful Roots.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Vengeful Roots(E)</span></font><br><font color="00ffff">使用Entangling Roots時召喚一個擁有生命300+(等級*30)和攻擊20+(等級*8)的樹人持續12秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Malfurion/Talents/4/Shan'do's Clarity.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shon'do's Claritty</span></font><br><font color="00ffff">使用Innervate時的減少10秒冷的卻時間並擁有兩倍的魔力回復速度</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Malfurion/Talents/4/Versatile.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Versatile </span></font><br><font color="00ffff">Innervate可以同時增加目標單位的攻擊速度10%可以放置在非魔力消耗的英雄上。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Malfurion/Talents/4/Protective Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Protective Shield</span></font><br><font color="00ffff">為一個友方英雄放置一個300+(等級*30)的護盾持續5秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Malfurion/Talents/7/Battle Momentum.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battle Momentum</span></font><br><font color="00ffff">普通攻擊將減少技能冷卻0.5秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Malfurion/Talents/7/Enduring Growth.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Enduring Growth(Q)</span></font><br><font color="00ffff">Regrowth的持續時間增加6秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Malfurion/Talents/7/Elune's Grace.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Elune's Grace</span></font><br><font color="00ffff">增加所有一般技能的距離2。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Malfurion/Talents/7/Strangling Vines.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Strangling Vines(E)</span></font><br><font color="00ffff">Entangling Roots傷害增加100%。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Malfurion/Talents/7/CalldownMULE.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Calldown: MULE</span></font><br><font color="00ffff">召喚1個工兵修復目標位置附近的建築持續60秒，每秒修復100的生命值並每5秒補充一個彈藥。</font></span>				  	
                    </div>                                                                               
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Malfurion/Talents/10/Tranquility.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Tranquility(R)</span></font><br><font color="00ffff">治癒範圍內友方單位每秒40+(等級*9)持續10秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Malfurion/Talents/10/Twilight Dream.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Twilight Dream(R)</span></font><br><font color="00ffff">短暫延遲後在大範圍內造成100+(等級*36)的傷害並沉默敵軍3秒。</font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Malfurion/Talents/13/Full Moonfire.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Full Moonfire(W)</span></font><br><font color="00ffff">Moonfire 增加作用範圍50%和減少10魔力消耗。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Malfurion/Talents/13/Life Seed.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Life Seed(Q)</span></font><br><font color="00ffff">Regrowth持續效果會擴及周圍的友方英雄。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Malfurion/Talents/13/Shrink Ray.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Shrink Ray  </span></font><br><font color="00ffff">在四秒內使一個敵方英雄減少50%傷害和50%的移動速度。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Malfurion/Talents/13/Ice Block.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ice Block</span></font><br><font color="00ffff">使自身無敵無法動作持續3秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Malfurion/Talents/16/Lunar Shower.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Lunar Shower(W)</span></font><br><font color="00ffff">使用Moonfire可以得到一層增益效果減少下一個Moonfire的冷卻時間0.5秒同時可以增加Moonfire的傷害10%，最多可疊加至3層。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Malfurion/Talents/16/Hindering Moonfire.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hindering Moonfire</span></font><br><font color="00ffff">Moonfire可以緩速20%移動速度持續2秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Malfurion/Talents/16/Tenacious Roots.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Tenacious Roots(E)</span></font><br><font color="00ffff">Entangling Roots此招術範圍增加25%持續時間增加25%，纏繞時間增加0.5秒。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Malfurion/Talents/16/Rewind.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Rewind</span></font><br><font color="00ffff">基礎技能冷卻時間減少10秒。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Malfurion/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Malfurion/Talents/20/Storm Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Storm Shield</span></font><br><font color="00ffff">自身和周圍隊友產生最大生命值20％的護盾，持續時間3秒。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Malfurion/Talents/20/Serenity.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Serenity(R)</span></font><br><font color="00ffff">可以增加Tranquility的治癒量25%並恢復範圍內友軍每秒5魔力。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Malfurion/Talents/20/Nightmare.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Nightmare(R)</span></font><br><font color="00ffff">Twilight Dream沉默時間增加至4秒並緩速敵人50%。 </font></span>				  	
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

