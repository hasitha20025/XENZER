<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

  <?php require('./Inc/links.php') ?>
  <?php require('./Inc/header.php') ?>


<style>

 .respones{
  columns: 4;
  column-gap: 16px;;
}

.respones .grid-images{
  display: inline-block;
  margin-bottom: 16px;
  position : relative;

}

@media (max-width: 1200px){
  .masonry{
    columns: 3;
  }
}

 @media (max-width: 992px){
   .masonry{
     columns: 2;
   }
 }

.respones .grid-images img{
  width: 100%;
  border-radius: 5px;

}
 </style>


</head>
<body>


<br><br><br><br><br>

<h2 class="fw-bold h-font text-center">Gallery Page</h2>

  <br><br><br>

  <div class="respones">

    <div class="grid-images">
      <img src="./Images/g-images/1.png" alt=""> 
    </div>

    <div class="grid-images">
      <img src="./Images/g-images/2.png" alt=""> 
    </div>
    
    <div class="grid-images">
      <img src="./Images/g-images/3.png" alt=""> 
    </div>
    
    <div class="grid-images">
      <img src="./Images/g-images/4.png" alt=""> 
    </div>
    
    
    <div class="grid-images">
      <img src="./Images/g-images/7.png" alt=""> 
    </div>
    
    <div class="grid-images">
      <img src="./Images/g-images/8.png" alt=""> 
    </div>

    <div class="grid-images">
      <img src="./Images/g-images/9.png" alt=""> 
    </div>
    
    <div class="grid-images">
      <img src="./Images/g-images/10.png" alt=""> 
    </div>
    
    <div class="grid-images">
      <img src="./Images/g-images/11.png" alt=""> 
    </div>

    <div class="grid-images">
      <img src="./Images/g-images/12.png" alt=""> 
    </div>

    <div class="grid-images">
      <img src="./Images/g-images/13.png" alt=""> 
    </div>
    
    <div class="grid-images">
      <img src="./Images/g-images/14.png" alt=""> 
    </div>
    
    <div class="grid-images">
      <img src="./Images/g-images/15.png" alt=""> 
    </div>
    
    <div class="grid-images">
      <img src="./Images/g-images/16.png" alt=""> 
    </div>

    <div class="grid-images">
      <img src="./Images/g-images/17.png" alt=""> 
    </div>
    
    <div class="grid-images">
      <img src="./Images/g-images/18.png" alt=""> 
    </div>
    
    <div class="grid-images">
      <img src="./Images/g-images/19.png" alt=""> 
    </div>

    <div class="grid-images">
      <img src="./Images/g-images/20.png" alt=""> 
    </div>
    
    <div class="grid-images">
      <img src="./Images/g-images/21.png" alt=""> 
    </div>
    
    <div class="grid-images">
      <img src="./Images/g-images/22.png" alt=""> 
    </div>

    <div class="grid-images">
      <img src="./Images/g-images/23.png" alt=""> 
    </div>
    

  </div>

  <?php require('./Inc/footer.php') ?>
  
</body>
</html>