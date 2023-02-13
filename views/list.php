<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 align-self-center">
                     <center>   <h2 class="page-title text-truncate text-dark font-weight-medium mb-1">False Position Method</h2> </center>
                    </div>
					 <div class="col-5 align-self-center">
					
                        <div class="customize-input float-right">
                   
				</div>
				</div>
                </div>
            </div>
			
			<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
					<h3 class="card-title">Literasi dari fungsi <b> 2x<sup>2</sup> - e<sup>2x</sup> </b></h3>
				 <form method="post">
				
				<div class="row">
				
				 <div class="col-6">
					<div class="form-group">
                        <label class="control-label col-xs-3" >Xi</label>
                        <div class="col-xs-9">
                           <input type="text" name="xlower" class="form-control">
                        </div>
                    </div>
				</div>
				<div class="col-6">
					<div class="form-group">
                        <label class="control-label col-xs-3" >Xu</label>
                        <div class="col-xs-9">
                           <input type="text" name="xuper" class="form-control">
                        </div>
                    </div>
				</div>
				<div class="col-6">
					<div class="form-group">
                        <label class="control-label col-xs-3" >Toleransi</label>
                        <div class="col-xs-9">
                           <input type="text" name="tol" class="form-control">
                        </div>
                    </div>
				</div>
				
				<div class="col-12">
					<div class="form-group">
						</br>
                        <button type="submit" name="submit" value="submit" class="btn btn-danger text-center" style="margin-top:7px; width:100%;">Submit</button>
                    </div>
				</div>
				</div>
			</form>
		</div>
		</div>
		</div>
</div>
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
<?php
if(isset($_POST['submit'])) {
$b=$this->input->post('xuper');
$a=$this->input->post('xlower');
$tol=$this->input->post('tol');
$max=1000000;

$x1=$b;
$x2=$a;
//fungsi yang akan dicari akarnya
function f($x){
$e = 2.71828182846;

$y= pow (2*$x,2);
$z= pow ($e,2*$x);
    $f1= $y - $z ;
    //$f1= sin($x)/cos($x)-$x-0.5 ;
 return $f1;
}
echo"<h4 class='card-title'>Pencarian akar dengan Metode Regula False</h4>";
echo"<p>Nilai penaksiran (Xi) : $a <br>";
echo"Nilai penaksiran (Xu) : $b <br>";
echo"Toleransi : $tol <br>";
echo"Maksimum Iterasi : $max <br></p>";

$Fa=f($a);
$Fb=f($b);
{
 echo"
 <table class='table' id='table1'>
 <thead>
 <tr>
  <td width=46 align=center ><b>
  Iterasi</b></td>
  <td width=123 align=center ><b>
  Xi</b></td>
  <td align=center ><b>Xu</b></td>
  <td align=center ><b>Xr</b></td>
  <td width=160 align=center ><b>
  f(Xi)</b></td>
  <td width=130 align=center ><b>
  f(Xu)</b></td>
  <td width=130 align=center ><b>
  f(Xr)</b></td>
 </tr>
 </thead>
 
";
$i=0;
$epsilon=$tol+1;
//while ((it<=max_iter) and (epsilon>tol))
	echo "<tbody>";
while(($i<=$max) and ($epsilon>$tol)){
$i=$i+1;
$m=$b-$Fb*($a-$b)/($Fa-$Fb);
//$m=$a-$Fa*($b-$a)/($Fb-$Fa);
$Fm=f($m);
$epsilon=abs($Fm);
echo"<tr>
  <td width=46>$i</td>
  <td width=123>$a</td>
  <td>$b</td> 
  <td>$m</td>
  <td width=160>$Fa</td>
  <td width=130>$Fb</td>
  <td width=130>$Fm</td> 
 </tr>
";

  if($Fa*$Fm<=0){
   $b=$m;
   $Fb=$Fm;
  }
  else{
      $a=$m;
   $Fa=$Fm;
  }  

}
echo"</tbody></table>";
if($i<$max){
 echo"<h2>Literasi Terpenuhi</h2><p>Hasil Akhir : $m </p>";
}
else{
 echo"<h2>Toleransi tidak terpenuhi</h2>";
}
}
}
							?>
							
							</div>
							</div>
							</div>
							</div>

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
</div>             
           