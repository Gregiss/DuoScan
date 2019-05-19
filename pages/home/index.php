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

<href data-href="/?ler&idmanga=<?php echo $i;?>"><div class="manga_a" style="background-image: url('/pdf/486f88e5889422c72ab7b12a58f794721554828665_full.jpg');"></div></href>

<?php } ?>

</div>