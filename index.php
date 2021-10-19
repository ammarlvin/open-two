
<?php get_header();?>
    <!-- banner -->

<?php if ( have_rows( 'banner' ) ) : ?>
	<?php while ( have_rows( 'banner' ) ) : the_row(); ?>
    <section class="banner">
        <div class="row">
            <div class="text">
                <h1><?php the_sub_field( 'h1' ); ?><br>
                    <?php the_sub_field( 'h2' ); ?><br>
                    <?php the_sub_field( 'h4' ); ?><br>
                    <?php the_sub_field( 'h5' ); ?></h1>
                    <button class="btn1"><?php the_sub_field( 'btn1' ); ?><img src="imgs/Icon.png" alt=""></button>
                    <button class="btn2"><?php the_sub_field( 'btn2' ); ?></button>
               </div> 
                <div class="picture">
                   <img class="img-fluid bnnr" src="<?php $img0 = get_sub_field( 'img1' );echo $img0['url']; ?>" alt="">
                </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end banner -->

    <!-- built -->
 <?php if ( have_rows( 'build' ) ) : ?>
	<?php while ( have_rows( 'build' ) ) : the_row(); ?>
    <section class="built">
        <h3><?php the_sub_field( 'h3' ); ?></h3>
        <img class="img-fluid pix1" src="<?php $img0 = get_sub_field( 'img1' );echo $img0['url']; ?>" alt="">
        <img class="img-fluid pix2" src="<?php $img0 = get_sub_field( 'img2' );echo $img0['url']; ?>" alt="">
    </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end built -->

    <!-- founders -->
<?php if ( have_rows( 'slider' ) ) : ?>
	<?php while ( have_rows( 'slider' ) ) : the_row(); ?>
    <section class="founder">
        <h3><?php the_sub_field( 'h3' ); ?></h3>
        
            <div class="slide">
<?php if ( have_rows( 'slide' ) ) : ?>
	<?php while ( have_rows( 'slide' ) ) : the_row(); ?>
                <div class="item">
                    <img class="img-fluid pex2" src="<?php $img0 = get_sub_field( 'img1' );echo $img0['url']; ?>" alt="">
                    <button class="dis"><?php the_sub_field( 'bttn' ); ?><img class="arow img-fluid " src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Icon1.png" alt=""></button>
                    <p class="pt"><?php the_sub_field( 'p1' ); ?><br>
                                  <?php the_sub_field( 'p1-copy' ); ?></p>
                </div>
                <?php endwhile; ?>
<?php endif; ?>


            </div>

    </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end founders -->


    <!-- join -->
<?php if ( have_rows( 'join' ) ) : ?>
	<?php while ( have_rows( 'join' ) ) : the_row(); ?>
    <section class="join">
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid pic" src="<?php $img0 = get_sub_field( 'imgq' );echo $img0['url']; ?>" alt="">
            </div>
            <div class="col-md-6">
                <h4><?php the_sub_field( 'h4' ); ?></h4>
                <p><?php the_sub_field( 'p1' ); ?> <br>
                    <?php the_sub_field( 'p2' ); ?></p>
                <button class="btn"><?php the_sub_field( 'bttn' ); ?><img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Icon.png" alt=""></button>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end join -->

    <!-- investor -->
<?php if ( have_rows( 'investor' ) ) : ?>
	<?php while ( have_rows( 'investor' ) ) : the_row(); ?>
    <section class="investor">
        <div class="row">
            <div class="col-md-6">
                <h4><?php the_sub_field( 'h4' ); ?></h4>
                <P><?php the_sub_field( 'p1' ); ?><br>
                    <?php the_sub_field( 'p2' ); ?></P>
                <button class="btn"><?php the_sub_field( 'bttn' ); ?><img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Icon awesome-chevron-right.png" alt=""></button>
            </div>
            
            <div class="col-md-6">
                <img class="img-fluid pixs" src="<?php $img0 = get_sub_field( 'imgh' );echo $img0['url']; ?>" alt="">
            </div>
        </div>

    </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end investor -->

    <!-- Questions -->
<?php if ( have_rows( 'questions' ) ) : ?>
	<?php while ( have_rows( 'questions' ) ) : the_row(); ?>
    <section class="Questions">
        <h4><?php the_sub_field( 'h4' ); ?></h4>

        <div class="container">
            <div class="row">
                <div class="nnn col-md-6">
                    <p><?php the_sub_field( 'a1' ); ?><a href=""> <img class="img-fluid pix7" src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/icon-negative.png" alt=""></a></p>
                    <img class="img-fluid line" src="<?php $img0 = get_sub_field( 'line1' );echo $img0['url']; ?>" alt="">
                    <p class="para" ><?php the_sub_field( 'p1' ); ?><br>
                                     <?php the_sub_field( 'p1_copy' ); ?><br> 
                                     <?php the_sub_field( 'p1_copy2' ); ?><br>
                                     <?php the_sub_field( 'p1_copy3' ); ?></p>
                    <p><?php the_sub_field( 'a2' ); ?><a href=""> <img class="img-fluid pix7" src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Icon feather-plus.png" alt=""></a></p>
                    <img class="img-fluid line" src="<?php $img0 = get_sub_field( 'line2' );echo $img0['url']; ?>" alt="">
                    <p><?php the_sub_field( 'a3' ); ?><a href=""> <img class="img-fluid pix7" src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Icon feather-plus.png" alt=""></a></p>
                    <img class="img-fluid line" src="<?php $img0 = get_sub_field( 'line3' );echo $img0['url']; ?>" alt="">
                </div>
                <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'bbb' ) ) : ?>
	<?php while ( have_rows( 'bbb' ) ) : the_row(); ?>
                <div class="bbb col-md-6">
                    <p><?php the_sub_field( 'p1' ); ?> <a href=""> <img class="img-fluid pix7" src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Icon feather-plus.png" alt=""></a></p>
                    <img class="img-fluid line" src="<?php $img0 = get_sub_field( 'img1' );echo $img0['url']; ?>" alt="">
    
                    <p><?php the_sub_field( 'p2' ); ?> <a href=""> <img class="img-fluid pix7" src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Icon feather-plus.png" alt=""></a></p>
                    <img class="img-fluid line" src="<?php $img0 = get_sub_field( 'img2' );echo $img0['url']; ?>" alt="">
    
                    <p><?php the_sub_field( 'p3' ); ?> <a href=""> <img class="img-fluid pix7" src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Icon feather-plus.png" alt=""></a></p>
                    <img class="img-fluid line" src="<?php $img0 = get_sub_field( 'img3' );echo $img0['url']; ?>" alt="">
    
                    <p><?php the_sub_field( 'p4' ); ?> <a href=""> <img class="img-fluid pix7" src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Icon feather-plus.png" alt=""></a></p>
                    <img class="img-fluid line" src="<?php $img0 = get_sub_field( 'img4' );echo $img0['url']; ?>" alt="">
    
                    <p><?php the_sub_field( 'p5' ); ?> <a href=""> <img class="img-fluid pix7" src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Icon feather-plus.png" alt=""></a></p>
                    <img class="img-fluid line" src="<?php $img0 = get_sub_field( 'img5' );echo $img0['url']; ?>" alt="">
                </div>
                <?php endwhile; ?>
<?php endif; ?>
            </div>
        </div>
    </section>

    <!-- end Questions -->

    <!-- startups -->
<?php if ( have_rows( 'startups' ) ) : ?>
	<?php while ( have_rows( 'startups' ) ) : the_row(); ?>
    <section class="startups">
        <img class="pic" src="<?php $img0 = get_sub_field( 'img1' );echo $img0['url']; ?>" alt="">
        <h3><?php the_sub_field( 'h3' ); ?></h3>
        <img class="line4" src="<?php $img0 = get_sub_field( 'img2' );echo $img0['url']; ?>" alt="">

        <div class="slider">
 <?php if ( have_rows( 'slidee' ) ) : ?>
	<?php while ( have_rows( 'slidee' ) ) : the_row(); ?>
            <div class="items">
                <img class="img-fluid diamond" src="<?php $img0 = get_sub_field( 'img1' );echo $img0['url']; ?>" alt="">
            </div>
            <?php endwhile; ?>
<?php endif; ?>
            
        </div>


<?php if ( have_rows( 'images' ) ) : ?>
	<?php while ( have_rows( 'images' ) ) : the_row(); ?>
        <img class="bb" src="<?php $img0 = get_sub_field( 'img1' );echo $img0['url']; ?>" alt="">
        <img class="vv" src="<?php $img0 = get_sub_field( 'img1_copy' );echo $img0['url']; ?>" alt="">

        <img class="img-fluid nv" src="<?php $img0 = get_sub_field( 'img1_copy2' );echo $img0['url']; ?>" alt="">
        <img class="rt img-fluid" src="<?php $img0 = get_sub_field( 'img1_copy3' );echo $img0['url']; ?>" alt="">
        <?php endwhile; ?>
<?php endif; ?>
        

    </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end startups -->

    <?php get_footer();?>