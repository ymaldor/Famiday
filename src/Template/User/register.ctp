<body>
	<div class="wrapper full-page-wrapper page-auth page-login text-center">
		<div class="inner-page">
			<div class="logo">
				<a href="index.html"><?= $this->Html->image('kingadmin-logo.png'); ?></a>
			</div>
			
			<div class="login-box center-block">
				<form class="form-horizontal" method="post">
					<p class="title">Crée ton compte</p>
					
					<div class="form-group">
						<label for="username" class="control-label sr-only">Username</label>
						<div class="col-sm-12">
							<div class="input-group">
								<?= $this->Form->create('Subscribe', array('type'=>'post')) ?>
								<?= $this->Form->input('mail',array('type' => 'email','class'=>'form-control','placeholder'=>'Adresse mail','label'=>false))?>
								<span class="input-group-addon"><i class="fa fa-user"> </i></span>
							</div>
						</div>
					</div>
					
					<label for="password" class="control-label sr-only">Password</label>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="input-group">
								 <?= $this->Form->input('password',array('type' => 'password','class'=>'form-control','placeholder'=>'Mot de passe','label'=>false)) ?>
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							</div>
						</div>
					</div>
					
					<button class="btn btn-custom-primary btn-lg btn-block btn-auth"><i class="fa fa-arrow-circle-o-right"></i> Login</button>
					<?= $this->Form->end() ?>
				</form>
				<div class="links">
					<p><?= $this->Html->link('Déjà incrit ? Clique ici pour te connecter !', array('controller'=>'User', 'action'=>'index')) ?></p>
				</div>
			</div>
		</div>
	</div>
</body>


