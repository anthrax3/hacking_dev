<?php $this->layout = 'blank'; ?>
<!-- Navbar -->
  <nav class="mg_sec_background_1">
    <div class="nav-wrapper">
         <a href="#" class="brand-logo mg-size-20 mg-padding-left-10">Ethical Hackers Member</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
		<li>
           <a href="#!"> 
            <div class="chip mg_prim_background mg_sec_color_1 bold">
               <img ng-src="/img/favicon.png" alt="Contact Person">
                Bienvenue {{accountctrl.pseudo}}
            </div>
          </a> 
        </li>

        <li><a href="/home/logout" target="_self">Deconnexion</a></li>
      </ul>
    </div>
  </nav>

<!-- Content of Account -->
<div class="row center mg-margin-bottom-0">
	<div class="col s3 mg-padding-0 mg_sec_background_2" style="position:relative;height: 700px;">
		  <ul class="mg_sec_background_2">
		      <li class="mg-padding-10 left-align pointer" style="border-bottom:2px solid grey;"><?= $this->Html->image('assets/logo.png',['class'=>'mg-width-150']) ?></li>
		      <li class="left-align mg-padding-18 black pointer"><a href="#!" class="white-text bold" style="text-decoration: none;">Dashboard</a></li>
		      <li class="left-align mg-padding-18 pointer"><a href="#!" class="mg_sec_color_1 bold" style="text-decoration: none;">Chat Room</a></li>
		      <li class="left-align mg-padding-18 pointer"><a href="#!" class="mg_sec_color_1 bold" style="text-decoration: none;">Mon Compte</a></li>
		      <li class="left-align mg-padding-18 pointer"><a href="#!" class="mg_sec_color_1 bold" style="text-decoration: none;">Parametres</a></li>
		      <li class="left-align mg-padding-18 pointer"><a href="#!" class="mg_sec_color_1 bold" style="text-decoration: none;">A Propos</a></li>
		  </ul>

		  <ul style="position: absolute; bottom: 1px;" class="mg-width-100-perc">
		      <li class="center menu social_area mg-margin-top-10 mg-margin-left-15 ">		
			          		<span class="hvr-bob pointer tooltipped mg-margin-right-10" data-tooltip="Facebook" data-position="top" ><i class="ion-social-facebook small mg_sec_color_1"></i></span>
							<span class="hvr-bob pointer tooltipped mg-margin-right-10" data-tooltip="Twitter" data-position="top"><i class="ion-social-twitter small mg_sec_color_1"></i></span>
							<span class="hvr-bob pointer tooltipped mg-margin-right-10" data-tooltip="LinkedIn" data-position="top"><i class="ion-social-linkedin small mg_sec_color_1"></i></span>
					  </li>
		  </ul>
	</div>
	<div class="col s9"></div>
</div>