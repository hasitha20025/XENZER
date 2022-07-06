<!-- <?php //require('./Inc/header.php') ;?>
<br><br><br><br><br> -->

<div class="slide-container swiper" style="margin:0px;">
<div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
        <?php $persons=array(
                ["name"=>"Dilani", "message"=>"A really nice hotel.Staff the Hotel and restaurant nice.","image"=>"./Images/Team/87.png"],
                ["name"=>"Maheshi", "message"=>"Good hotel. The staff are friendly. " ,"image"=>"./Images/Team/95.png"],
                ["name"=>"Pubuduni", "message"=>"Location is easy and other facilities are perfect" ,"image"=>"./Images/Team/75.png"],
                ["name"=>"Hasitha ", "message"=>"Very nice hotel and very nice stuff.. Like it" ,"image"=>"./Images/Team/25.png"],
            );
                
                ?>
            <?php foreach($persons as $person){?>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="<?php echo $person['image']?>" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name"> <?php echo $person['name']?></h2>
                    <p class="description"> <?php echo $person['message']?></p>
                </div>
            </div>
            <?php }?>


        </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <!-- <div class="swiper-pagination">kavinu</div> -->
</div>


<!-- <?php// require('./Inc/footer.php') ;?>
</body>

</html> -->