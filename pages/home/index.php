<div class="header">

<div class="left">
  <href href="#" data-href="/"><h1><span>DUO</span>SCAN</h1></href>
  <input type="text" placeholder="Procurar mangás">
</div>

</div>

<div class="recomendado">

<?php
for($i = 1; $i <= 10; $i++){
?>

<href data-href="/?ler&idmanga=<?php echo $i;?>"><div class="manga_a"></div></href>

<?php } ?>

</div>