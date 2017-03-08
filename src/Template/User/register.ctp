
<body>
	<div class="wrapper full-page-wrapper page-auth page-register text-center">
		<div class="inner-page">
			<div class="logo">
				<a href="index.html"><img src="assets/img/kingadmin-logo.png" alt="" /></a>
			</div>
			<button type="button" class="btn btn-auth-facebook"><span>Connect using Facebook</span></button>
			<div class="separator"><span>OR</span></div>
			<div class="register-box center-block">
				
					<p class="title">Create Your Account</p>
					    
					    <?= $this->Form->create('Subscribe', array('type'=>'post')) ?>
					    <?= $this->Form->input('mail',array('type' => 'email','class'=>'form-control','placeholder'=>'Adresse mail'))?>
					    <?= $this->Form->input('password',array('type' => 'password','class'=>'form-control','placeholder'=>'Mot de passe')) ?>
					<label class="fancy-checkbox">
						<input type="checkbox">
						<span>I accept the <a href="#">Terms &amp; Agreements</a></span>
					</label>
					<button class="btn btn-custom-primary btn-lg btn-block btn-auth"><i class="fa fa-check-circle"></i> 
						Créer le compte
					</button>
					<?= $this->Form->end() ?>
			</div>
		</div>
	</div>

</body>

