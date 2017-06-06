<p>Here is a list of all Articles:</p>

<?php foreach($artikli as $artiklsingle) { ?>
    <p>
		<table style="border: 1px solid black; width:25%;">
			<th><?php echo $artiklsingle->ID_ARTIKL ." ".$artiklsingle->ARTIKL_NAZIV  ?></th>
			<td><a href='?controller=artikli&action=deleteartikl&id=<?php echo $artiklsingle->ID_ARTIKL; ?>'>BRIŠI ARTIKL</a></td>
		</table>
	</p>
    
<?php } ?>