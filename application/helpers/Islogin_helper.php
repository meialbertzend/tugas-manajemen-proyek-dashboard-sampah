<?php
//-->session
function IsPegawai(){
 $ci =& get_instance();
 //session akan aktif jika session bernilai 1
 if($ci->session->userdata('IsPegawai')<>1){
redirect('auth','refresh');
 }
}
//-->Endsession
 ?>
