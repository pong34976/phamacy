<form action="">
<input type="text" name="phamacy">
<input type="submit" value="ค้นหา">
</form><font color="red">คำอธิบาย ##ชื่อยา(P=รูปภาพ,A=เสียง,D=ข้อมูลตัวยา)จำนวนผู้คลิกเข้ามา </font>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />


 
 

<table name="listphamacy" id="listphamacy" class="list_phamacy">
<thead><tr><td>ชื่อยา</td></tr></thead>
<tbody>
<?php
 
for($i=0;$i<count($result);$i++){
 
   if($result[$i]->subm_title){   $row['subm_title'][$i] ="P";}else{ $row['subm_title'][$i] ="";}
   if($result[$i]->sub_inmedia){   $row['sub_inmedia'][$i] ="A";}else{ $row['sub_inmedia'][$i] ="";}
   if($result[$i]->subm_detail){   $row['subm_detail'][$i] ="D";}else{ $row['subm_detail'][$i] ="";}
echo '<tr><td><a href="'.base_url('phamacy/read/'.$result[$i]->phamacy_id).'">'.$result[$i]->phamacy_title  .'('.$row['subm_title'][$i].$row['sub_inmedia'][$i].$row['subm_detail'][$i].')'.$result[$i]->countpha.'</a> </td></tr>'   ;


}?>   </tbody> 
</table>
<script>
   $(document).ready( function () {
    $("#listphamacy").DataTable();
} );
</script>
 <style>
   table #listphamacy *{
      berder:0px !important;
      border-color:none !important;

   }
 </style>