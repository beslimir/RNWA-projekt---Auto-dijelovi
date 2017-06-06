<p>Here is a list of all Articles:</p>

<?php foreach($artikli as $artiklsingle) { ?>
  <p>
    <?php echo $artiklsingle->ID_ARTIKL ." ".$artiklsingle->ARTIKL_NAZIV  ?>
    <a href='?controller=artikli&action=deleteartikl&id=<?php echo $artiklsingle->ID_ARTIKL; ?>'>BRISI ARTIKL</a>
  </p>
<?php } ?>