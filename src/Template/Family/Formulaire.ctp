


<?= $this->Form->create ('Famille', array('type' => 'post'))?>
<?= $this->Form->input ('nom') ?>
<?= $this->Form->input ('prenom')?>
<?= $this->Form->input ('adress')?>
<?= $this->Form->input ('phone')?>


<?= $this->Form->input ('datebirth');?>

<?= $this->Form->textarea('about')?>
<?= $this->Form->select(
    'Sexe',
    [0 => 'Homme',1=>  'Femme'],
    ['empty' => '(choisissez)'])?>
	
<?= $this->Form->select(
    'Statut',
    ['Pere/Mere', 'Oncle/tente', 'Grand-pere/Grand-mere', 'Grand-oncle/Grand-tente', 'Frere/Soeur', 'Cousin/Cousine', 'Tuteur/Tutrice'],
    ['empty' => '(choisissez)'] )?>
	
<?= $this->Form->submit('Ajouter');?>
<?= $this->Form->end ?>

