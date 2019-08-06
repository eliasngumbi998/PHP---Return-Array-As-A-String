<div class="col-md-6">
	<table class="table table-bordered">
		<?php
			if(ISSET($_POST['convert'])){
				foreach($hero as $section => $list){
 
				if($section=="Marvel"){
		?>
 
			<tr class="alert-info">
				<th><center><?php echo $section?></center></th>
			</tr>
		<?php
						foreach($list as $key => $value){
		?>
			<tr style="background-color:#fff;">
				<td><?php echo $value?></td>
			</tr>
		<?php
						}
					}
				}
			}
		?>
	</table>
</div>
<div class="col-md-6">
	<table class="table table-bordered">
		<?php
			if(ISSET($_POST['convert'])){
				foreach($hero as $section => $list){
 
				if($section=="DC"){
		?>
 
			<tr class="alert-info">
				<th><center><?php echo $section?></center></th>
			</tr>
		<?php
						foreach($list as $key => $value){
		?>
			<tr style="background-color:#fff;">
				<td><?php echo $value?></td>
			</tr>
		<?php
						}
					}
				}
			}
		?>
	</table>
</div>
<br />
<center><a class="btn btn-success" href="index.php"><span class="glyphicon glyphicon-refresh"></span> Reset</a></center>
