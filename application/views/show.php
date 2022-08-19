<form action="">
<input type="text" name="phamacy">
<input type="submit" value="ค้นหา">
</form><font color="red">คำอธิบาย ##ชื่อยา(P=รูปภาพ,A=เสียง,D=ข้อมูลตัวยา)จำนวนผู้คลิกเข้ามา </font>
<?php
 
for($i=0;$i<count($result);$i++){
 
   if($result[$i]->subm_title){   $row['subm_title'][$i] ="P";}else{ $row['subm_title'][$i] ="";}
   if($result[$i]->sub_inmedia){   $row['sub_inmedia'][$i] ="A";}else{ $row['sub_inmedia'][$i] ="";}
   if($result[$i]->subm_detail){   $row['subm_detail'][$i] ="D";}else{ $row['subm_detail'][$i] ="";}
echo '<p><a href="'.base_url('phamacy/read/'.$result[$i]->phamacy_id).'">'.$result[$i]->phamacy_title  .'('.$row['subm_title'][$i].$row['sub_inmedia'][$i].$row['subm_detail'][$i].')'.$result[$i]->countpha.'</a> </p>'   ;


}?>    