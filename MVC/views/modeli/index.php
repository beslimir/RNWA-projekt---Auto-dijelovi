<p>Lista svih modela:</p>

<?php foreach($modeli as $model) { ?>
  <p>
	<table align="center" style="border: 1px solid black; width:40%; padding-top:10px; padding-bottom:10px;">
		<tr>
			<th><?php echo "ID vozila:". $model->ID_MODEL_VOZILA?></th>
		</tr>
		<tr>
			<th><?php echo "Model vozila:" .$model->MODEL_VOZILA_NAZIV?></td>
		</tr>
		<tr>
		    <th><a href='?controller=modeli&action=show&id=<?php echo $model->ID_MODEL_VOZILA; ?>'>Vidi detalje</a></th>
		</tr>
	</table> 
  </p>
<?php } ?>