  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">
        	<!-- aside -->
          <aside>
           
            <h2>About <span>Your Website</span></h2>
            <div class="img-box">
               
            	<figure><img src="/img/img1.jpg" alt=""></figure>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.
            </div>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p> 
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
          </aside>
          <!-- content -->
          <section id="content">
            <article>
            	<h2>About <span>Your Team</span></h2>
              <!-- .team-list -->
              
              <ul class="team-list">
                     
              	    <?php 
                    // print_r($data);
                  foreach($about as $elem){ ?>
                           <li>
                	            <figure><img src="<?php echo($elem['img_src']);?>" alt=""></figure>
                                  <h3><a href=""><?php echo($elem['title']);?></a></h3>
                                  <?php echo($elem['text']);?>
                                  <a href="#">...</a>
                            </li>
                    <?php } ?>
                
              </ul>
              <!-- /.team-list -->
            </article> 
          </section>
        </div>
      </div>
    </div>
  </div>