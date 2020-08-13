<?php
$connection = mysqli_connect("localhost","shopatke_user","7umTNTl3Ifh]") or die("no connection1");
mysqli_select_db($connection,"shopatke_driving_school") or die("no db");
$qry = mysqli_query($connection,"select * from tbl_registration");
	while( $row = mysqli_fetch_array($qry)){
        $mobile=$row['mr_mobile'];
         $name=$row['mr_name'];
          $id=$row['login_id'];
    $dtest=$row['d_test_date'];
      $place=$row['d_test_place'];   
       $time=$row['d_test_time'];
       $query = mysqli_query($connection,"select * from login_tb where id='$id'");
       	while( $row1 = mysqli_fetch_array($query)){
        $bname=$row1['cname'];
         $mobile_owner=$row1['mobile'];
       	}
          //$renew_date= date('d-m-y',strtotime("$dtest"));
          $rn=strtotime($dtest);
 $date=date('Y-m-d',strtotime("-2 days",$rn));
 $curent_date=date('Y-m-d');
 if($curent_date==$date && $dteat!="")
 {
       echo $mobile;
           
             
                     if (!empty($mobile)) {
              $message = 'Hello ' . $name . ', your driving test details are  given  below: <br/>
              Test Date:' . $dtest .' <br/>
              Venue:' . $place .' <br/>
              Time:' . $time .'<br/>
              ' . $bname ;
              
               file_get_contents("http://saksms.shopatkerala.com/api/user?id=OTQ0NjMzMDk4NQ&senderid=KVVESM&to=$mobile&msg=".urlencode($message)."&port=TA", TRUE);
              }
              
                            }
   }
   $query2 = mysqli_query($connection,"select * from tbl_vehicle_detail");
	while( $row2 = mysqli_fetch_array($query2)){
        $tax=$row2['tax_date'];
         $reg=$row2['reg_date'];
          $regno=$row2['reg_no'];
          $ins=$row2['ins_date'];
    $pol=$row2['pol_date'];
     $id=$row2['login_id'];
       $query3 = mysqli_query($connection,"select * from login_tb where id='$id'");
       	while( $row3 = mysqli_fetch_array($query3)){
        $bname=$row3['cname'];
         $mobile_owner=$row3['mobile'];
           $email_owner=$row3['email'];
       	}
          $tax1=strtotime($tax);
  $tax_date=date('Y-m-d',strtotime("-30 days",$rn));
 $curent=date('Y-m-d');
 if($curent==$tax_date)
 {
       echo $mobile_owner;
           
                     if (!empty($mobile_owner)) {
              $message = 'Hello ' . $bname . ',  vehicle no:' . $regno . ' tax validity will expire on ' . $tax  ;
               file_get_contents("http://saksms.shopatkerala.com/api/user?id=OTQ0NjMzMDk4NQ&senderid=KVVESM&to=$mobile_owner&msg=".urlencode($message)."&port=TA", TRUE);
              }
              
                            }
             $reg1=strtotime($reg);
              $reg_date=date('Y-m-d',strtotime("-30 days",$reg1));
              if($curent==$reg_date)
 {
       echo $mobile_owner;
           
                     if (!empty($mobile_owner)) {
              $message = 'Hello ' . $bname . ',  vehicle no:' . $regno . ' registration validity will expire on ' . $reg  ;
               file_get_contents("http://saksms.shopatkerala.com/api/user?id=OTQ0NjMzMDk4NQ&senderid=KVVESM&to=$mobile_owner&msg=".urlencode($message)."&port=TA", TRUE);
              }
              
                            }
                $ins1=strtotime($ins);
              $ins_date=date('Y-m-d',strtotime("-30 days",$ins1));
              if($curent==$ins_date)
 {
       echo $mobile_owner;
           
                     if (!empty($mobile_owner)) {
              $message = 'Hello ' . $bname . ',  vehicle no:' . $regno . ' insurance validity will expire on ' . $ins ;
               file_get_contents("http://saksms.shopatkerala.com/api/user?id=OTQ0NjMzMDk4NQ&senderid=KVVESM&to=$mobile_owner&msg=".urlencode($message)."&port=TA", TRUE);
              }
              
                            }
              $pol1=strtotime($pol);
              $pol_date=date('Y-m-d',strtotime("-30 days",$pol1));
              if($curent==$pol_date)
 {
       echo $mobile_owner;
           
                     if (!empty($mobile_owner)) {
              $message = 'Hello ' . $bname . ',  vehicle no:' . $regno . ' insurance validity will expire on ' . $ins ;
               file_get_contents("http://saksms.shopatkerala.com/api/user?id=OTQ0NjMzMDk4NQ&senderid=KVVESM&to=$mobile_owner&msg=".urlencode($message)."&port=TA", TRUE);
              }
              
                            }
   }
?>