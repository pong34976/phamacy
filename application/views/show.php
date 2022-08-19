<?php

for($i=0;$i<count($result);$i++){
echo '<p><a href="'.base_url('phamacy/read/'.$result[$i]->phamacy_title).'">'.$result[$i]->phamacy_title .'</a></p>';


}?>  