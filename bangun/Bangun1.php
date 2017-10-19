<?php 
include('BangunRuang.php');
$balok = new BangunRuang;

?>
  	<form method="POST" action="">
    <table border="1">
    	<tr>
    		<td width="200px">
    		<h3>Volume Balok</h3>
    			
            		Panjang :<br/> 
            		<input type="text" name="panjang" value="<?php echo @$panjang=$_POST['panjang']; ?>" /> m<br/>
            		Lebar :<br/> 
            		<input type="text" name="lebar" value="<?php echo @$lebar=$_POST['lebar']; ?>"/> m<br/>
            		Tinggi :<br/> 
            		<input type="text" name="tinggi" value="<?php echo @$tinggi=$_POST['tinggi']; ?>"/> m<br/>
    				<?php echo $balok->tampil($panjang,$lebar,$tinggi)." m<sup>3</sup>"; ?>
    				<br/>
					<input type="submit" name="submit" value="Hitung"/>
    		</td>
    	</tr>
    </table>
    </form>