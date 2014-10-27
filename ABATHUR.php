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
			<div class="ABATHUR"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Abathur/300_300/ABATHUR.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:ABATHUR</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:550(每等+50)<br><br>生命回復:1.145(每等+0.105)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:xx(每等+xx)<br><br>魔力回復:xx(每等+xx)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:18(每等+2)<br><br>攻擊速度:0.7</h3></font></span>						
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
      									 蟲族的進化大師不斷的在基因進化上提升蟲族的水平，他對混亂和不完美的厭惡媲美他對敵軍的憎恨。
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
      								     戰鬥中不直接面對敵人，而是採用協助友方英雄和小兵來作戰的方式，並放置毒巢來保護重要的戰略位置。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Abathur/Abilities/Symbiote.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Symboite(Q) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">4秒</font>
    						<br class="fon2"><font color="fffff"><br>支援1個目標友方單位或建築並可使用3個專屬技能，不能用再自己骷髏跟僱用兵身上，持續45秒。</font>
    				</span>

					<br>
    				<img src="picture/Abathur/Abilities/Secondary Abilities/Stab.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Stab &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">3秒</font>
    						<br class="fon2"><font color="fffff"><br>直線射出1個會爆炸並造成44+(等級*13)傷害的黏液。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Abathur/Abilities/Secondary Abilities/Spike Burst.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Spike Burst&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">6秒</font>
    						<br class="fon2"><font color="fffff"><br>可對周圍造成32+(等級*10)的傷害。</font>
    				</span>
    				
					<br>
    				<img src="picture/Abathur/Abilities/Secondary Abilities/Carapace.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Carapace&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>可獲得一個140+(等級*16)的護盾，持續8秒。
</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Abathur/Abilities/Toxic Nest.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Toxic Nest(W) &nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>英雄技能，造成150+(等級*15)傷害，並對英雄/小兵造成減速/凍結效果，持續10秒。對建築物也會造成凍結效果，持續20秒。</font>
    				</span>   
  
					<br>
    				<img src="picture/Abathur/Abilities/Ultimate Evolution.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Ultimate Evolution(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">120秒</font>
    						<br class="fon2"><font color="fffff"><br>複製1個友軍英雄繼承他所有能力45秒，結束後返回原所在區域。</font>
    				</span>       				
  				    				
					<br>
    				<img src="picture/Abathur/Abilities/Locust StrainTrait.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Locvst(D)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>每20秒召喚一個甲蟲攻擊附近的區域。</font>
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
				  	<img src="picture/Abathur/Talents/1/Combat Adaptation.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Combo Adoptation(Trait)</span></font><br><font color="00ffff">增加甲蟲20%的攻擊速度。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Abathur/Talents/1/Survival Instincts.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Survival Instincts(Trait)</span></font><br><font color="00ffff">增加甲蟲20%的生命值。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Abathur/Talents/1/Envenomed Nest.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Envenomed Nest(W)</span></font><br><font color="00ffff">G巢穴會在3秒內額外造成30%的傷害。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Abathur/Talents/1/Bribe.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bribe</span></font><br><font color="00ffff">擊殺敵方小兵，可以獲得賄賂層數，疊加到20層時，可直接擊敗一個傭兵營地，但對骷髏無效。 </font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Abathur/Talents/4/Pressurized Glands.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Pressurized Glands(Q)Superiority</span></font><br><font color="00ffff">增加Spike Burst 100%的攻擊範圍。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Abathur/Talents/4/Ballistospores.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ballistospores(W)</span></font><br><font color="00ffff">Toxic Nest會獲得無限的施法範圍。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Abathur/Talents/4/Promote.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Promote</span></font><br><font color="00ffff">使用後增加小兵200%的血量與100%的傷害，能充能2次。 </font></span>				  	
                    </div>   
                                                         
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Abathur/Talents/7/Grooved Spines.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Groved Spines(Q)</span></font><br><font color="00ffff">Toxic Nest會在2秒內減少敵方50%的移動速度。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Abathur/Talents/7/Vile Nest.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Vile Nest(W)</span></font><br><font color="00ffff">Toxic Nest會在2秒內減少敵方50%的移動速度。</font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Abathur/Talents/7/Regenerative Microbes.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Regenerative Microbes(Q)</span></font><br><font color="00ffff">Carapace每秒回復7+(等級*2)的生命值。
 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Abathur/Talents/7/CalldownMULE.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Calldown: MULE</span></font><br><font color="00ffff">召喚1個工兵修復目標位置附近的建築持續60秒，每秒修復100的生命值並每5秒補充一個彈藥。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Abathur/Talents/10/Ultimate Evolution.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Ultimate Evolution(R)</span></font><br><font color="00ffff">複製1個友軍英雄繼承他所有能力，結束後返回原所在區域。</font></span>				  	
                    </div>                                                         
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Abathur/Talents/13/Assault Strain.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Assault Strain(Trait)</span></font><br><font color="00ffff">甲蟲的普通攻擊會擴散並在死亡時爆炸並造成60+(等級*12)的傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Abathur/Talents/13/Bombard Strain.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bombard Strain(Trait)</span></font><br><font color="00ffff">甲蟲的普通攻擊變成遠程。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Abathur/Talents/13/Spatial Efficiency.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spatial Efficiency(Q)</span></font><br><font color="00ffff">Stab 會獲得1次額外的充能次數。</font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Abathur/Talents/13/Prolific Dispersal.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Prolific Dispersal(W)</span></font><br><font color="00ffff">Toxic Nest獲得兩次充能次數。 </font></span>				  	
                    </div>                                                                 
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Abathur/Talents/16/Envenomed Spikes.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Envenomed Spikes(Q)</span></font><br><font color="00ffff">Spike Burst 會在2秒內減緩敵方40%的移動速度。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Abathur/Talents/16/Adrenaline Boost.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Adrenaline Boost(Q)</span></font><br><font color="00ffff">Carapace 在3秒內增加目標40%的移動速度。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Abathur/Talents/16/Locust Swarm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Locust Swarm</span></font><br><font color="00ffff">直接在身邊孵化3隻甲蟲自動去攻擊敵方單位和建築。</font></span>				  	
                    </div>     
                                                                
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Abathur/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Abathur/Talents/20/Evolution Master.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Evolution Master(R)</span></font><br><font color="00ffff">Ultimate Evolution的冷卻時間降低至90秒，控制英雄時間提升為60秒。  </font></span>				  	
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

