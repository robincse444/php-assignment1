<?php include "pages/includes/header.php ";?>
<?php include 'pages/middleware/authMiddleware.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4">
                    <div class="card">
                       <img src="<?php echo file_exists($product['image'])? $product['image']:'assets/img/pori.jpg'; ?>" alt=""class="">
                          <div class="card-body">
                            <h2><?php echo $product['name']; ?></h2>
                             <p><?php echo $product['price']; ?></p>
                              <p><?php echo $product['description']; ?></p>
                               <a href="javascrip:void(0)" class="btn btn-outline-success">View</a>
                           </div>
                     </div>
                 </div>
            <?php } ?>
         </div>
    </div>
</section>
<?php include "pages/includes/footer.php"; ?>