<?php
    include '../include/header.php';
?>

<!-- autor detailss -->

   <section>
      <div class="bg-author">
         <div class="container">
            <div class="row">
            
           
               <div class="col-md-12 text-canter pt-5">
               <div class="autor-img">
                  <p align="center">
                     <img src="../img/author.jpeg" alt="featured image" class="img-fluid mb-1">
                     </p>
                  <div class="card-body border-0 p-0 text-center">
                     <h6 class="card-title text-color">KAtherine Olson</h6>
                     <span>
                        <h5>20 Books</h5>
                     </span>
                     <p style="padding: 0 30%;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error nostrum ducimus nulla! Voluptate est iusto veritatis at totam facilis, rem sint</p>
                     <div class="d-flex justify-content-center font-icn p-2">
                        <a href=""><i class="fab fa-facebook mr-3 text-dark"></i></a>
                        <a href=""><i class="fab fa-google-plus mr-3 text-dark"></i></a>
                        <a href=""><i class="fab fa-twitter mr-3 text-dark"></i></a>


                     </div>
                  </div>
                  </div>

               </div>
            
         </div>
      </div>
   </section>

<div class="container">
<section class="mt-5">
   <div class="row">
      <div class="col-md-12">
         <h2 class="text-title text-center mb-5">All Katherine Books</h2>
        <div class="row">
            <?php
               for ($i = 0; $i < 10; $i++):
               ?>
            <div class=" col-md-2 col-12 mb-3">
              
                  
                     <img src="../img/book.jpg" alt="featured image" class="w-100 mb-1">
                  
                  <div class="card-body border-0 p-0 text-left">
                     <h6 class="card-title text-color mb-0">The Misadventure of.</h6>
                     <p class="text-blue m-0"  style="font-size:13px;">Adventural</p>
                     <span class="text-dark">$20</span>
                  </div>
               
            </div>
            <?php endfor;?>
            </div>
            
            <div class="mt-5">
               <button class="btn btn-block btn-blue p-3">Load More Books</button>
            </div>
      </div>
   </div>
</section>


</div>
<section class="bg-grey mt-5 pt-5">
      <div class="container">
         <div class="col-md-12">
               <h4 class="text-center">
                  View Another Authors
               </h4>
               <div class="row">
            <?php
               for ($i = 0; $i < 6; $i++):
               ?>
            <div class=" col-md-2 col-12 mb-3">
              
                  <div class="card8 mt-5">
                     <img src="../img/author.jpeg" alt="featured image" class="w-100 mb-1">
                  
                  <div class="card-body border-0 p-0 text-center">
                     <h6 class="card-title text-color">The Misadventure of.</h6>
                     <p class="text-blue"  style="font-size:13px;">20 Books</p>
                     <a href="#"><span class="">View Profile</span></a>
                  </div>
                  </div>
               
            </div>
            <?php endfor;?>
            </div>
         </div>
      </div>
</section>
<!-- newsletter section -->
<div class="container">
<section class="mt-5 bg-purple">
   
   <div class="">
   
   <div class="text-center">
      <div class="pt-70">
         <h5 class="f-27 mb-4">
            Subscribe To Our Newsletter For Newest Books Updates
         </h5>
         <div class="input-group input-control justify-content-center subcribeLater">
            <input type="search" class="" placeholder="Type Your Mail Here">
            <div class="input-group-append">
               <button class="btn btn-white" type="button">Subscribe</button>
            </div>
         </div>
      </div>
   </div>
   
</section>
</div>
<?php
    include '../include/footer.php';
?>