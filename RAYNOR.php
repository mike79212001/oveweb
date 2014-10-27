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
			<div class="RAYNOR"><!--到hero.css找.英雄名稱,左邊英雄之後改掉背景圖片即可換掉英雄背景,規格1200*900px-->

				<!--圖片左方能力區-->
				<div class="imf">
					<img src="picture/Raynor/300_300/RAYNOR.png"><!--路徑記得放到picture底下,圖片名稱記得要一樣,甚麼英雄就用什模圖片名稱,規格300*300-->
					<span><h3><font color="fffff" class="fon">英雄名稱:Raynor</font></h3></span>
					<br><br>
					<span><font color ="00ff00" class="hp_text"><h3>生命:725(每等+120)<br><br>生命回復:1.512(每等+0.125)</h3></font></span>	
					<span><font color ="00ffff" class="mana_text"><h3>魔法:500(每等+10)<br><br>魔力回復:3(每等+0.098)</h3></font></span>	
					<span><font color ="ff3333" class="attack_text"><h3>攻擊傷害:40(每等+12)<br><br>攻擊速度:0.8</h3></font></span>						
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
      									前同盟軍的元帥，帝國反抗軍的領導人。曾在宇宙中最大的危機下生還，如今的他，也是充滿未知與冰冷的宇宙中，唯一仍能指引人們的希望之光。
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
      								     是個極其靈活的英雄，可以擊退敵人或是鼓舞友軍，同時也能在瀕死的情況下快速回復生命。
     					 			</div>
    							</div>
 			 			</div>
 			 			


 		</div>	                   
				<!--文字說明結束-->	

			</div>	
				<!--能力說明-->
				<div class="ability">
				  <span ><font color="#fffff"><h1>英雄能力</h1></font></span>

  					
    				<img src="picture/Raynor/Abilities/Penetrating Round.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Penetrating Round(Q)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">60mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">12秒</font>
    						<br class="fon2"><font color="fffff"><br>指向技，對路徑上的敵人造成85+(等級*22)的傷害，並擊退他們。</font>
    				</span>

					<br>
    				<img src="picture/Raynor/Abilities/Inspire.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Inspire(W)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">50mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">15秒</font>
    						<br class="fon2"><font color="fffff"><br>增加額外15%的攻擊速度及傷害，附近友軍得到50%的效果，持續8秒。</font>
    				</span> 
    				
					<br>
    				<img src="picture/Raynor/Abilities/Adrenaline Rush.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Adrenaline Rush(E&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">45秒</font>
    						<br class="fon2"><font color="fffff"><br>當生命低於30%自動回復160+(等級*40)的生命。</font>
    				</span>
    				
					<br>
    				<img src="picture/Raynor/Abilities/Hyperion.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Hyperion(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">100mana</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">100秒</font>
    						<br class="fon2"><font color="fffff"><br>呼叫Hyperion緩慢的向前移動，對路徑上隨機最多4個敵人造成25+(等級*6)的傷害，持續12秒。</font>
    				</span> 
    				    				     				   				
					<br>
    				<img src="picture/Raynor/Abilities/Raynor's Raiders.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Raynor's Raiders(R)&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>呼叫2台女妖轟炸機跟隨自己，每架女妖的傷害為9+(等級*3)。</font>
    				</span>   
  
					<br>
    				<img src="picture/Raynor/Abilities/Lead from the Front.png" class="ability_pic"> 											
				    <span class="ability_text">
    						<font color ="fffff" class="fon">Lead from the Front&nbsp; &nbsp; </font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 耗費魔力:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<font color ="fffff" class="fon">&nbsp; &nbsp; 冷卻時間:</font>
    						<font color ="ffff" class="fon">xx</font>
    						<br class="fon2"><font color="fffff"><br>在短時間內受到Raynor傷害的敵人被殺死後使技能冷卻時間減少1秒。殺死敵方英雄使技能冷卻時間減少10秒。</font>
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
				  	<img src="picture/Raynor/Talents/1/Path of the Assassin.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Path of the Assassin</span></font><br><font color="00ffff">每提升一級，增加額外2點傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Raynor/Talents/1/Demolitionist.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Demolitionist</span></font><br><font color="00ffff">基礎攻擊建築時減少一發彈藥並額外造成10%傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Raynor/Talents/1/Give Me More!.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Give Me More!(E)</span></font><br><font color="00ffff">Adrenaline Rush(E)治癒量增加50%。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Raynor/Talents/1/Bribe.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bribe</span></font><br><font color="00ffff">擊殺敵方小兵，可以獲得賄賂層數，疊加到20層時，可直接擊敗一個傭兵營地，但對骷髏無效。</font></span>				  	
                    </div>                                                                 
                  </div>
				  <!--等級1結束-->
				  <!--等級4--> 
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級4可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Raynor/Talents/4/Advanced Optics.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Advanced Optics</span></font><br><font color="00ffff">基礎攻擊範圍增加20%，事也增加10%。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Raynor/Talents/4/Focused Attack.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Focused Attack</span></font><br><font color="00ffff">每10秒，下次基礎攻擊增加額外50%傷害，每次基礎功及減少冷卻時間1秒。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Raynor/Talents/4/Vampiric Assault.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Vampiric Assault</span></font><br><font color="00ffff">基礎攻擊15%的傷害回復自身生命。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Raynor/Talents/4/Quick Fingers.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Quick Fingers</span></font><br><font color="00ffff">Lead from the Front效果2倍。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級4結束-->	
				  <!--等級7-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級7可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Raynor/Talents/7/Heavy Ammo.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Heavy Ammo(Q)</span></font><br><font color="00ffff">Penetrating Round(Q)增加擊退距離，對建築造成額外100%傷害。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Raynor/Talents/7/Revolution Overdrive.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Revolution Overdrive(W)</span></font><br><font color="00ffff">使用Inspire(W)時，增加10%移動速度，附近每多一個友方英雄得到Inspire(W)效果，額外增加5%移動速度。 </font></span>				  	
                    </div> 
				  	<div>
				  	<img src="picture/Raynor/Talents/7/Fight or Flight.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fight or Flight(E)</span></font><br><font color="00ffff">Adrenaline Rush(E)可以移除所有移動負面效果，接下來2秒不會受到控場影響。 </font></span>				  	
                    </div>   
				  	<div>
				  	<img src="picture/Raynor/Talents/7/Searing Attacks.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Searing Attacks</span></font><br><font color="00ffff">主動技，基礎攻擊提升50%持續5秒。每次攻擊消耗15點法力值。</font></span>				  	
                    </div>                                                           
                  </div>			  
				  <!--等級7結束-->	
				  <!--等級10-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級10可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Raynor/Talents/10/Hyperion.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hyperion(R)</span></font><br><font color="00ffff">呼叫Hyperion緩慢的向前移動，對路徑上隨機最多4個敵人造成25+(等級*6)的傷害，持續12秒。 </font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Raynor/Talents/10/Raynor's Raiders.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Raynor's Raiders(R)</span></font><br><font color="00ffff">呼叫2台隱形女妖轟炸機跟隨自己，每架女妖的傷害為9+(等級*3)。 </font></span>				  	
                    </div>                                                           
                  </div>				  
				  <!--等級10結束-->	
				  <!--等級13-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級13可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Raynor/Talents/13/Spell Shield.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Spell Shield</span></font><br><font color="00ffff">週期性的減少50%來自英雄技能的傷害，最多可以充能兩次。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Raynor/Talents/13/Giant Killer.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Giant Killer</span></font><br><font color="00ffff">基礎攻擊對敵方英雄造成額外最大生命1.5%的傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Raynor/Talents/13/The Art of War.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">The Art of War(W)</span></font><br><font color="00ffff">使用Inspire(W)時，附近敵人的攻擊速度和移動速度減少10%。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Raynor/Talents/13/Activated Rush.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Activated Rush(E)</span></font><br><font color="00ffff">Adrenaline Rush(E)變為主動技不受血量限制，並減少15秒冷卻時間。</font></span>				  	
                    </div>                                                                 
                  </div>				  
				  <!--等級13結束-->	
				  <!--等級16-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級16可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Raynor/Talents/16/Executioner.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Executioner</span></font><br><font color="00ffff">基礎攻擊對被減速、被定身、被擊暈的目標造成40%額外傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Raynor/Talents/16/Cluster Round.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Cluster Round(Q)</span></font><br><font color="00ffff">Penetrating Round(Q)每擊中一個敵人增加10%額外傷害，技能寬度增加50%。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Raynor/Talents/16/Bullseye.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bullseye(Q)</span></font><br><font color="00ffff">Penetrating Round(Q)第一個擊中的目標會被暈眩1秒，並承受50%額外傷害。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Raynor/Talents/16/Berserk.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Berserk </span></font><br><font color="00ffff">主動技，增加攻擊速度40%和移動速度10%，持續4秒。</font></span>				  	
                    </div>                                                                 
                  </div>				  
				  <!--等級16結束-->	
				  <!--等級20-->
				  <div class="level">
				  	<span><font color ="fffff" class="fon">&nbsp;  等級20可點天賦 </font></span>
				  	<div>
				  	<img src="picture/Raynor/Talents/20/Fury of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Fury of the Storm</span></font><br><font color="00ffff">基礎攻擊彈跳兩次到目標附近敵人身上造成50%傷害。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Raynor/Talents/20/Bolt of the Storm.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Bolt of the Storm</span></font><br><font color="00ffff">傳送至附近目標位置。</font></span>				  	
                    </div>
				  	<div>
				  	<img src="picture/Raynor/Talents/20/Battle Hyperion.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Battle Hyperion(R)</span></font><br><font color="00ffff">Hyperion(R)對每個攻擊目標造成兩次傷害，每4秒發射對敵方建築Yamato cannon。 </font></span>				  	
                    </div>     
				  	<div>
				  	<img src="picture/Raynor/Talents/20/Hel's Angels.png" class="level_pic">
					<span class="level_text"><font color ="fffff" ><span class="fon">Hel's Angels(R)</span></font><br><font color="00ffff">女妖轟炸機在攻擊時會保持隱形，每次攻擊時額外發射一枚飛彈。</font></span>				  	
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

