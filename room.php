<?php
include('header.php');
include('dbcon.php');
 require('inc/links.php'); 


?>
<style>
   
    .room-status{
        display: none;
    }
</style>


<div id="room-home">
     <figure>
         <img src="assets/places/hotel7.jpg" alt="delux">
         <img src="assets/places/hotel2.jpg" alt="delux">
         <img src="assets/places/hotel6.jpg" alt="delux">
         <img src="assets/places/hotel2.jpg" alt="delux">
         <img src="assets/places/hotel6.jpg" alt="delux">
         
     </figure>
        

</div>

<div id="f1">
    
            
         <?php
              $r = isset($_GET['room']) ? $_GET['room'] : 1;
              $ci = isset($_GET['ci']) ? $_GET['ci'] : date('Y-m-d');
              $co = isset($_GET['co']) ? $_GET['co'] : date('Y-m-d', strtotime('+1 day'));
         ?>
         <!---------------------------------  delux ac--------------------- -->
        
         <?php
               $qryy="SELECT * FROM `deluxacroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['roomno'];

               $qry="SELECT * FROM `deluxacroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                    
                     <p class="sectionTag">Delux A.C. Room</p>
                     <p class="sectionsubTag g">Status :Available </p>
                     <p class="sectionsubTag ">Price per room : 1100 Rs</p>
                     <form action="r1.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="Delux AC" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     <!-- <a href="r1.php">Book A Room</a> -->
                     </div>
                     <div class="thumbnail">
                         <img src="assets/deluxroom.jpg" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag">Delux Ac Room</p>
               <p class="sectionsubTag r">Status :not Available </p>
               <p class="sectionsubTag r">Sorry :( Please come another day</p>
            </div>
            <!-- <div class="thumbnail">
                <img src="assets/deluxroom.jpg" alt="delux" class="imgFluid">
            </div> -->
        </section>
         <?php
               }
            ?>
            
             <!---------------------------------   ac--------------------- -->

             <?php
               $qryy="SELECT * FROM `acroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['roomno'];

               $qry="SELECT * FROM `acroom` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag"> A.C. Room</p>
                     <p class="sectionsubTag g">Status :Available </p>
                     <p class="sectionsubTag ">Price per room : 900 Rs</p>
                     <form action="r2.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="A.C. Room" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     <!-- <a href="r1.php">Book A Room</a> -->
                     </div>
                     <div class="thumbnail">
                         <img src="assets/places/hotel1.jpg" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag"> Ac Room</p>
               <p class="sectionsubTag r">Status :not Available </p>
               <p class="sectionsubTag r">Sorry :( Please come another day</p>
            </div>
            <!-- <div class="thumbnail">
                <img src="assets/deluxroom.jpg" alt="delux" class="imgFluid">
            </div> -->
        </section>
         <?php
               }
            ?>
            
             <!---------------------------------  non ac--------------------- -->
             <?php
               $qryy="SELECT * FROM `nonac` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qryy);
               $row=mysqli_fetch_assoc($run);
               $rno=$row['roomno'];

               $qry="SELECT * FROM `nonac` WHERE `status`='un book'";
               $run=mysqli_query($sql,$qry);
               $row=mysqli_num_rows($run);
               if($r <= $row)
               {
                   ?>
                   <section id="rooms-right">
                   <div class="paras">
                     <p class="sectionTag">Non A.C. Room</p>
                     <p class="sectionsubTag g">Status :Available </p>
                     <p class="sectionsubTag ">Price per room : 700 Rs</p>
                     <form action="r3.php" method="get">
                     <input type="date" name="ci"  value="<?php echo $ci; ?>" required>
                     <input type="date" name="co"  value="<?php echo $co; ?>" required>
                     <input type="text" name="rt" value="Non AC" required>
                     <input type="text" name="nr" value="<?php echo $r; ?>" required>
                     <input type="submit" id="room-btn">
                     </form>
                     <br>
                     <!-- <a href="r1.php">Book A Room</a> -->
                     </div>
                     <div class="thumbnail">
                         <img src="assets/places/hotel4.jpg" alt="delux" class="imgFluid">
                     </div>
               </section>
                   <?php

               }
               else{
                ?>
                <section id="rooms-right">
            <div class="paras">
               <p class="sectionTag">Non Ac Room</p>
               <p class="sectionsubTag r">Status :not Available </p>
               <p class="sectionsubTag r">Sorry :( Please come another day</p>
            </div>
            <!-- <div class="thumbnail">
                <img src="assets/deluxroom.jpg" alt="delux" class="imgFluid">
            </div> -->
        </section>
         <?php
               }
            ?>
            


     </div>

    <div class="room-status">

     <section id="rooms-right">
        
    </section>
    <section id="rooms-right">
       
    </section>
    <section id="rooms-right">
        
    </section>
    </div>
    
   
<?php
include('footer.php');
?>

</body>
</html>