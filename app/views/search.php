<section id="body-section">
         <div class="dark-overlay">
            <div class="serch-box container col-md-6">
               <form class="serch-box-form mx-auto" action="<?php echo BASE_URL;?>/Index/getforecasting" method="POST">
                  <div class="p-1 bg-dark rounded rounded-pill shadow-sm mb-4">
                     <div class="input-group">
                        <input type="search" name="city" placeholder="Enter City name..." class="form-control border-0 bg-dark text-light" required>
                        <div class="input-group-append">
                           <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <!-- search form end -->