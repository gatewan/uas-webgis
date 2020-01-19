<?php
$template = array(
        'table_open'            => '<table border="1" cellpadding="4" cellspacing="0" class="table table-bordered table table-hover" id="myTable">',
        'table_close'           => '</table>'
);
$this->table->set_template($template);

$this->table->set_heading(
'ID.',
'Kecamatan',
'Penduduk',
'Kuda',
'Sapi',
'Sapi Perah',
'Kerbau',
'Kambing',
'Domba',
'Description',
'Action'
);

  foreach($array_emp->result() as $row):
  $this->table->add_row(
   $row->id,
   $row->name,
   $row->penduduk,
   $row->kuda,
   $row->sapi,
   $row->sapi_perah,
   $row->kerbau,
   $row->kambing,
   $row->domba,
   $row->description,
   '<a href="Admin/form/edit/'. $row->id .'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>'
//   '<a href="C_Article/detail/'. $row->id .'" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a>'
//   '<a href="Admin/hapus/'. $row->id .'" class="btn btn-danger btn-sm" onclick="return confirm("Anda Yakin menghapus data ini?")"><i class="glyphicon glyphicon-trash"></i></a>'
   );
 
  endforeach;
  echo $this->table->generate();
?>