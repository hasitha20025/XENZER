<?php
require('db_config.php');
$userLoggedIn=FALSE;
   session_start();
    if ((isset($_SESSION['userLogin']) && $_SESSION['userLogin'] == true)) {
      $userLoggedIn=TRUE;
}

function getData($data,$con,$limit,$orderBy){
    $reseve = select("SELECT * FROM `rooms` WHERE `adults`>=? AND `childers`>=?",[$data['adults'],$data['children']], "ii");
    $arr=[];
    if($reseve->num_rows!=0){
      while ($row = mysqli_fetch_assoc($reseve)) {
        $selected=TRUE;
        $res=select("SELECT singleRoom FROM `single_room` WHERE roomId=?",[$row['roomId']],"i");

        if($res->num_rows!=0 && $data['checkInDate']!="" && $data['checkOutDate']!=""){
             $newRow=mysqli_fetch_assoc($res);
             $vars=[$data['checkInDate'],$data['checkOutDate']];
         //  if($res->num_rows!=0){
            //     $selected=FALSE;
            //  }
            //  $res=select("SELECT `roomId` FROM ".$newRow['singleRoom']." WHERE checkIn<? AND checkOut>?",$vars,"ss");
            $newsql="SELECT * FROM ROOM_".$row['roomId']." WHERE NOT((checkIn>'".$data['checkInDate']."' AND checkIn>'".$data['checkOutDate']."') OR (checkOut<'".$data['checkOutDate']."' AND checkOut<'".$data['checkInDate']."'))";
            $Room=$con->query($newsql);
            if($Room!=FALSE && $roomvalied=mysqli_fetch_assoc($Room)){
                $selected=FALSE;
            }
           
        }
        if($selected){array_push($arr,$row['roomId']);}
    }
    $arr=join(",",$arr);
    $query="SELECT * FROM rooms WHERE roomId IN($arr) ".$orderBy." ".$limit;
     
    $filterRooms=$con->query($query);
   return $filterRooms;
  }
}



if(isset($_POST['selector'])){
    if($_POST['selector']=="roomFilterMainPage"){
    $data=$_POST['data'];
    $filterRooms=getData($data,$con,"LIMIT 6","ORDER BY adults ASC,childers ASC,rating DESC");
    if($filterRooms!=NULL){
    while($filterRoom=mysqli_fetch_assoc($filterRooms)){
        ?>
<div class="col-lg-4 col-md-4 d-flex justify-content-center fadeInAnimation" style="margin-top:30px;">
    <div class="card border-0" style="width: 18rem;">
        <img src="<?php echo $filterRoom['image']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <label>
                <h5><?php echo $filterRoom['name']?></h5>
            </label>
            <label>
                <div>
                    <span class="badge rounded-pill bg-light">
                        <?php for($i=0;$i<$filterRoom['rating'];$i++){
                            echo' <i class="bi bi-star-fill text-warning"></i>';
                    }?>
                    </span>
                </div>
            </label>
            <h6 class="mb-4 fw-normal">Rs.<?php echo $filterRoom['price']?>.00 per night</h6>
            <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <?php  foreach(explode(",",$filterRoom['fetures']) as $feture){
                    echo '<span class="badge rounded-pill bg-light text-dark text-wrap">'.$feture.'</span>';
                    }
                    ?>
            </div>
            <div class="guest mb-4">
                <h6 class="mb-1">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                    <?php echo $filterRoom['adults']?> Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                    <?php echo $filterRoom['childers']?> Children
                </span>

            </div>

            <div class="d-flex justify-content-evenly">
                <a href="<?php 
                $link="roomId=".$filterRoom['roomId']."&checkIn=".$data['checkInDate']."&checkOut=".$data['checkOutDate'];
                echo ($userLoggedIn)?"singleRoom.php?$link":"";
                ?>
                " class="btn btn-sm text-white custom-bg shadow-none"
                    <?php echo ($userLoggedIn)?"":'data-bs-toggle="modal" data-bs-target="#LoginModal"'?>>Book Now</a>
                <a href="<?php 
                $link="roomId=".$filterRoom['roomId']."&checkIn=".$data['checkInDate']."&checkOut=".$data['checkOutDate'];
                echo ($userLoggedIn)?"singleRoom.php?$link":"";
                ?>
                " class="btn btn-sm btn-outline-dark  shadow-none"
                    <?php echo ($userLoggedIn)?"":'data-bs-toggle="modal" data-bs-target="#LoginModal"'?>>Read More</a>
            </div>
        </div>
    </div>
</div>
<?php
    }
  }
     $link="checkIn=".$data['checkInDate']."&checkOut=".$data['checkOutDate']."&adults=".$data['adults']."&childern=".$data['children'];
    echo'<div class="col-lg-12 text-center mt-5">
            <a href="room.php?'.$link.'" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms..</a>
         </div>';



  }if($_POST['selector']=="roomFilterRoomPage"){
    $data=$_POST['data'];
    $limit="LIMIT 2"." OFFSET ".$data['offset'];
    $filterRooms=getData($data,$con,$limit,"ORDER BY adults ASC,childers ASC,rating DESC");
    if($filterRooms!=NULL){
    while($filterRoom=mysqli_fetch_assoc($filterRooms)){
    ?>
<div class="card mb-4 border-0 fadeInAnimation">
    <div class="row g-0 p-3 align-item-center">
        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="<?php echo $filterRoom['image']?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-5 px-lg-5 px-md-3 px-0 ">
            <label>
                <h4><?php echo $filterRoom['name']?></h4>
            </label>
            <label>
                <div>
                    <span class="badge rounded-pill bg-light">
                        <?php for($i=0;$i<$filterRoom['rating'];$i++){
                            echo' <i class="bi bi-star-fill text-warning"></i>';
                    }?>
                    </span>
                </div>
            </label>
            <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <?php  foreach(explode(",",$filterRoom['fetures']) as $feture){
                    echo '<span class="badge rounded-pill bg-light text-dark text-wrap">'.$feture.'</span>';
                    }
                ?>
            </div>
            <div class="facilities mb-4">
                <h6 class="mb-1">Facilites</h6>
                <?php  foreach(explode(",",$filterRoom['facilites']) as $feture){
                    echo '<span class="badge rounded-pill bg-light text-dark text-wrap">'.$feture.'</span>';
                    }
                ?>
            </div>
            <div class="guest mb-4">
                <h6 class="mb-1">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                    <?php echo $filterRoom['adults']?> Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                    <?php echo $filterRoom['childers']?> Children
                </span>

            </div>
        </div>
        <div class="col-md-2 text-center mt-4">
            <h6 class="mb-4 fw-normal">Rs.<?php echo $filterRoom['price']?>.00 per night</h6>
            <a href="<?php 
                $link="roomId=".$filterRoom['roomId']."&checkIn=".$data['checkInDate']."&checkOut=".$data['checkOutDate'];
                echo ($userLoggedIn)?"singleRoom.php?$link":"";
                ?>" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2"
                <?php echo ($userLoggedIn)?"":'data-bs-toggle="modal" data-bs-target="#LoginModal"'?>>Book Now </a>

            <a href="<?php 
                $link="roomId=".$filterRoom['roomId']."&checkIn=".$data['checkInDate']."&checkOut=".$data['checkOutDate'];
                echo ($userLoggedIn)?"singleRoom.php?$link":"";
                ?>" class="btn btn-sm w-100 btn-outline-dark  shadow-none"
                <?php echo ($userLoggedIn)?"":'data-bs-toggle="modal" data-bs-target="#LoginModal"'?>>Read More </a>
        </div>
    </div>
</div>

<?php
     }
    }
  }



  if($_POST['selector']=="roomFilterMainPageSecond"){
    $data=$_POST['data'];
    $filterRooms=getData($data,$con,"LIMIT 6","ORDER BY rating DESC");
    if($filterRooms!=NULL){
    while($filterRoom=mysqli_fetch_assoc($filterRooms)){
?>

<div class="col-lg-4 col-md-4 d-flex justify-content-center my-3">
    <div class="card border-0" style="width: 18rem;">
        <img src="<?php echo $filterRoom['image']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5><?php echo $filterRoom['name']?></h5>
            <h6 class="mb-4 fw-normal">Rs.<?php echo $filterRoom['price']?>.00 per night</h6>
            <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <?php  foreach(explode(",",$filterRoom['fetures']) as $feture){
                    echo '<span class="badge rounded-pill bg-light text-dark text-wrap">'.$feture.'</span>';
                    }?>
            </div>

            <div class="facilities mb-4">
                <h6 class="mb-1">Facilites</h6>
                <?php  foreach(explode(",",$filterRoom['facilites']) as $feture){
                    echo '<span class="badge rounded-pill bg-light text-dark text-wrap">'.$feture.'</span>';
                    }?>
            </div>

            <div class="guest mb-4">
                <h6 class="mb-1">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                    <?php echo $filterRoom['adults']?> Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                    <?php echo $filterRoom['childers']?> Children
                </span>

            </div>

            <div class="Rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                    <?php for($i=0;$i<$filterRoom['rating'];$i++){
                            echo' <i class="bi bi-star-fill text-warning"></i>';
                    }?>
                </span>

            </div>
            <div class="d-flex justify-content-evenly">
                <a href="<?php 
                $link="roomId=".$filterRoom['roomId']."&checkIn=".$data['checkInDate']."&checkOut=".$data['checkOutDate'];
                echo ($userLoggedIn)?"singleRoom.php?$link":"";
                ?>
                " class="btn btn-sm text-white custom-bg shadow-none"
                    <?php echo ($userLoggedIn)?"":'data-bs-toggle="modal" data-bs-target="#LoginModal"'?>>Book Now</a>

                <a href="<?php 
                $link="roomId=".$filterRoom['roomId']."&checkIn=".$data['checkInDate']."&checkOut=".$data['checkOutDate'];
                echo ($userLoggedIn)?"singleRoom.php?$link":"";
                ?>
                " class="btn btn-sm btn-outline-dark  shadow-none"
                    <?php echo ($userLoggedIn)?"":'data-bs-toggle="modal" data-bs-target="#LoginModal"'?>>Read More</a>
            </div>
        </div>
    </div>

</div>

<?php
    }
  }
  echo'<div class="col-lg-12 text-center mt-5">
            <a href="room.php?" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms..</a>
         </div>';
   }  
}  
?>





<!-- CREATE TABLE `xenzer`.`room_1` ( `roomId` INT NOT NULL , `checkIn` DATE NOT NULL , `checkOut` DATE NOT NULL ) ENGINE = InnoDB; -->