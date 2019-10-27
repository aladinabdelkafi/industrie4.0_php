 <?php 
include "../class/speaker.class.php";
$n=new speaker();
include "../class/edition.class.php";
$e=new edition();
$res1=$e->consultation_date();
 foreach($res1 as $r)
 {
  $x=$r[0];
  }
if(!empty($_POST['check_list'])){
foreach($_POST['check_list'] as $r)
 {

 $n->insertion2($x,$r);
}

}

header("location:../admin/appointment.php");

    ?>