<?php 
                   
   while (($row = $pew -> fetch_assoc()) != false) :       
      $log = $row['login'];
      $txt = $row['text'];      
                      
?>
         
                  <div class="col-lg-1"></div><div class="col-lg-1"><br><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                    </svg></div><div class="col-lg-8">
                        <div class="d-flex position-relative">
                              <div class="card shadow-lg">
                                <div class="card-header bg-dark whit">
                                  <?php echo $log ?>
                                </div>
                                <div class="card-body">
                                  <blockquote class="blockquote mb-0">
                                    <p><?php echo $txt ?></p>
                                  </blockquote>
                                </div>
                              </div></div><br><br>
                    </div><div class="col-lg-2"></div>         
<?php endwhile ?>