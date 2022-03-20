<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <ul class="animation__lots">
        <li class="animation__checks">
            <input type="checkbox" class="animation__inputs"/>
            <div class="animation__letters">S</div>
        </li>
        <li class="animation__checks">
            <input type="checkbox" class="animation__inputs"/>
            <div class="animation__letters">U</div>
        </li>
        <li class="animation__checks">
            <input type="checkbox" class="animation__inputs"/>
            <div class="animation__letters">K</div>
        </li>
        <li class="animation__checks">
            <input type="checkbox" class="animation__inputs"/>
            <div class="animation__letters">U</div>
        </li>
        <li class="animation__checks">
            <input type="checkbox" class="animation__inputs"/>
            <div class="animation__letters">N</div>
        </li>
        <li class="animation__checks">
            <input type="checkbox" class="animation__inputs"/>
            <div class="animation__letters">A</div>
        </li>
    </ul>
     <!-- <div class="animation__bloc">S</div>
    <div class="animation__bloc">u</div>
    <div class="animation__bloc">k</div>
    <div class="animation__bloc">u</div>
    <div class="animation__bloc">n</div>
    <div class="animation__bloc">a</div> -->
</section>

    <h1>---- Front-page.php ------</h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>