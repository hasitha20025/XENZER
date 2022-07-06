<!-- <?php //require('./Inc/header.php') ;?>
<br><br><br><br><br> -->

<div class="slide-container swiper" style="margin:0px;">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            <?php $persons=[
                ["name"=>"kavindu", "message"=>"The lorem text the section that contains header with having open functionality","image"=>"./Images/Team/hasitha.png"],
                ["name"=>"damsith", "message"=>"The lorem text the section that contains header with having open functionality" ,"image"=>"./Images/Team/hasitha.png"],
                ["name"=>"bandara", "message"=>"The lorem text the section that contains header with having open functionality" ,"image"=>"./Images/Team/hasitha.png"],
                ["name"=>"thilakarathna", "message"=>"The lorem text the section that contains header with having open functionality" ,"image"=>"./Images/Team/hasitha.png"],
            ];
                
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