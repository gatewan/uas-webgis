<?php $this->load->view('admin/header');?>
<style>
tbody {
    display:block;
    height:330px;
    overflow:auto;
}
thead, tbody tr {
    display:table;
    width:100%;
    table-layout:fixed;/* even columns width , fix width of table too*/
}
thead {
    width: calc( 100% - 1em )/* scrollbar is average 1em/16px width, remove it from thead width */
}

* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('https://www.w3schools.com/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 2px solid #ddd;
  margin-bottom: 12px;
}
h1{margin-top: 0px;}
.well {
    padding: 10px;
}
.footer-bottom {
    background: #E3E3E3;
    border-top: 1px solid #DDDDDD;
    padding-top: 10px;
    padding-bottom: 20px;
    position: absolute;
    width: 100%;
}
table-fushion{
	margin-bottom: 60px;
}
</style>
<div class="well" style="text-align:center">
<?php echo heading($title);?>
<a class="btn btn-default" href="<?=base_url()?>/auth/logout">Logout</a>
<a class="btn btn-success" href="<?=base_url()?>" target="blank">Cek Public</a>
</div>
<div class="container">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for population.." title="Type in a name">
<?php $this->load->view('admin/listpopulasi');?>
</div>
<script>
// Fungsi SEARCH BOX
var $rows = $('#myTable tr');
$('#myInput').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
</script>
<div class="table-fushion">
<div class="container">
<h2>Dynamic Google Fusion Tabel (Sinkronisasi Dengan <span class="glyphicon glyphicon-transfer"></span> Database)</h2>
<iframe width="1140" height="300" scrolling="yes" frameborder="no" src="https://fusiontables.google.com/embedviz?viz=GVIZ&amp;t=TABLE&amp;q=select+col2%2C+col1%2C+col3%2C+col5%2C+col6%2C+col7%2C+col8%2C+col9%2C+col10%2C+col0+from+1SQFWkxf1bT3vFqRt-nDNusM31Oq2QceXsX2AQDE2&amp;containerId=googft-gviz-canvas"></iframe>
</div>
</div>
<hr>
<?php $this->load->view('admin/footer');?>