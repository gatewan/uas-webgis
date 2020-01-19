<?php $this->load->view('admin/header');
foreach($isi as $showdata):
   $ide=$showdata->id;
   $nm=$showdata->name;
   $geo=$showdata->geometry;
   $pddk=$showdata->penduduk;
   $kda=$showdata->kuda;
   $spi=$showdata->sapi;
   $spip=$showdata->sapi_perah;
   $krb=$showdata->kerbau;
   $kmb=$showdata->kambing;
   $dmb=$showdata->domba;
   $des=$showdata->description;
endforeach;
?>
<style>
form {
    padding-bottom: 30px;
}
.input-group-addon {
    width: 100px;
}
.banner {
    float: right;
    margin-top: -185px;
}
.footer-bottom {
    background: #E3E3E3;
    border-top: 1px solid #DDDDDD;
    padding-top: 10px;
    padding-bottom: 20px;
    position: absolute;
    width: 100%;
}
</style>
<div class="well" style="text-align:center">
<?php echo heading($title);?>
</div>
<div class="container">
 
 <form action="<?=base_url()?>admin/form/aksi_edit" method="POST">
 	<div class="well">
 <div class="form-group" style="max-width: 75%;">
<div class="input-group"><div class="input-group-addon">ID</div><input class="form-control" name="ide" readonly="readonly" type="text" value="<?=$ide?>"/></div>
<div class="input-group"><div class="input-group-addon">Kecamatan</div><input class="form-control" name="name" readonly="readonly" type="text" value="<?=$nm?>"/></div>
<div class="input-group"><div class="input-group-addon">Geometry</div><input class="form-control" name="geometry" readonly="readonly" type="text" value="<?=$geo?>"/></div>
<div class="input-group"><div class="input-group-addon">Penduduk</div><input class="form-control" name="penduduk" type="text" value="<?=$pddk?>"/></div>
<div class="input-group"><div class="input-group-addon">Kuda</div><input class="form-control" name="kuda" type="text" value="<?=$kda?>"/></div>
<div class="input-group"><div class="input-group-addon">Sapi</div><input class="form-control" name="sapi" type="text" value="<?=$spi?>"/></div>
<div class="input-group"><div class="input-group-addon">Sapi Perah</div><input class="form-control" name="sapi_perah" type="text" value="<?=$spip?>"/></div>
<div class="input-group"><div class="input-group-addon">Kerbau</div><input class="form-control" name="kerbau" type="text" value="<?=$krb?>"/></div>
<div class="input-group"><div class="input-group-addon">Kambing</div><input class="form-control" name="kambing" type="text" value="<?=$kmb?>"/></div>
<div class="input-group"><div class="input-group-addon">Domba</div><input class="form-control" name="domba" type="text" value="<?=$dmb?>"/></div>
<div class="input-group"><div class="input-group-addon">Deskripsi</div><input class="form-control" name="deskripsi" type="text" value="<?=$des?>"/></div>	
		<div class="banner">Space For Rent... :D #Just_Kidding</div>
		</div>
	  </div>
    <hr/>
    <button type="submit" class="btn">Submit</button>
  </form> 
</div>

<?php $this->load->view('admin/footer');?>