<?php $this->layout = 'blank'; ?>
<!-- Modal Structure -->
<div class="row center">
	<div class="container" >
		<div class="container" >
		  <div class="container" >
			        <div class="row" style="margin-top:10%;">
			          <div class="card z-depth-5">
				            <div class="card-image mg-padding-5">
				              <?= $this->Html->image('assets/logo.png',['style'=>'width:200px']) ?>
				            </div>
				            <div class="hoverable card-content mg-padding-0" style="border-top:3.5px solid #292929;">
				                <h6 class="mg-size-30 mg-padding-10 mg_sec_background_1 white-text mg-margin-0">Authentification</h6>
				                <div class="row center mg-padding-top-20 mg-padding-bottom-20 mg-margin-0" >
				                   <div class="container" >
						                <form name="loginForm" ng-submit="homectrl.login(user)" ng-hide="homectrl.loader">
						                	<div class="col s12 input-field">
						                		<i class="mg_sec_background_1 white-text prefix ion-card"></i>
						                		<input type="text" ng-pattern="/^[a-zA-Z0-9_]{8,30}$/" ng-model="user.username" required class="white-text mg_sec_background_2  login-input" ng-minlength="8"  name="username" id="username">
						                		<label for="username" class="mg-padding-left-5 white-text">Nom Utilisateur</label>
						                	</div>

						                	<div class="col s12 input-field">
						                		<i class="mg_sec_background_1 white-text prefix ion-lock-combination"></i>
						                		<input ng-model="user.password" ng-minlength="8" required ng-pattern="/^[a-zA-Z0-9_@\#\$\.]{8,30}$/" class="white-text mg_sec_background_2 login-input" name="password" id="password" type="password">
						                		<label for="password" class="mg-padding-left-5 white-text">Password</label>
						                	</div>

											<div class="col s12 mg-padding-top-10 mg-padding-bottom-10">
											    	<button ng-disabled="loginForm.$invalid" class="btn btn-default mg-button-2" style="width: 100%;">Connexion</button>
											</div>

						                </form>
					                  <div class="progress mg_sec_background_1" ng-show="homectrl.loader">
					                      <div class="indeterminate mg_sec_background_2"></div>
					                  </div>
				                   </div>

				                </div>

				            </div>
				            <div class="card-action transparent mg-padding-0 none-border">
				              <a href="#" class="mg-height-38 white-text mg-size-14 btn mg-width-100-perc mg_sec_background_2" ui-sref="app.signin">Inscription</a>
				            </div>
			          </div>
			        </div>
		  </div>


		</div>
	</div>
</div>