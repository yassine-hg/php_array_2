<h1>Welcome to the Repetitive Cafe</h1>
<?php
  $drinks = [
    "tea" => 3.99,
    "soda" => 10.25,
    "milkshack" => 4.17,
    "coffee" => 5.98,
  ];
  $patisries = ["croissant", "mufin", "cupcack","brownie"];

  $baguete = ["mini", "complet", "normal"];
?>
<h3>Drinks!</h3>
<ul>
<?php foreach($drinks as $drink => $price): ?>
  <li>
    <?php
      echo "We have $drink and it coast \$$price\n";
    ?>
  </li>
<?php endforeach; ?>
</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
  <?php for($i = 0; $i < count($patisries); $i ++): ?>
    <li>
      <?php echo $patisries[$i] ; ?>
    </li>
  <?php endfor; ?>
</ul>
<h3>Baguete</h3>
<ul>
  $count = 1
  <?php while($count < count($baguete)): ?>
    <li>
      
    </li>
  <?php endwhile; ?>
</ul>
