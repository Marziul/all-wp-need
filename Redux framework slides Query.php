                        <?php foreach( $emon_theme['about-post-item'] as $postsvalue){ ?>
                        
                            <div class="col-md-6 col-sm-6">
                                <div class="about-box wow animated fadeInDown" data-wow-duration="0.3s">
                                    <div class="about-box-icon">
                                        <i class="fa fa-<?php echo $postsvalue['url']; ?>"></i>
                                    </div>
                                    <div class="about-box-text">
                                     <h4><?php echo $postsvalue['title']; ?></h4>
                                        <p>
                                            <?php echo $postsvalue['description']; ?>
                                        </p>
                                    </div>
                                </div><!--about us box end-->
                            </div>
                            
                        <?php } ?>