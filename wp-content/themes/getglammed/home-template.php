<?php	 		 	
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
  <div id="container">
   <div id="content">
    <div id="home-top">
     <?php if ( function_exists( 'get_smooth_slider' )) { get_smooth_slider(); } ?>
    </div>
    <div id="home-posts">
     <div id="home-posts-title">
      <h1 class="home-title">latest posts</h1>
     </div>
        <div id="post->
        <?php	 	 	 	
         if ( has_post_thumbnail() ) {?>
		<div id="post-image"><a href="" rel="bookmark"><?php the_post_thumbnail('Full'); 
		}?>
          </a>
         </div>
          
    
        <div id="postbox" class="clearfix">
        <div class="home-post-marker">
        </div>
        <div class="entry-meta"><h2 class="entry-meta">
        <span class="meta-prep meta-prep-entry-date"></span>
        <span class="entry-date"></span>
        <span class="meta-sep">|</span>
        <span class="entry-title"><a href=""></a></span>
       <span class="meta-sep">|</span>
        <span class="comments-link"></span>
        </h2></div><!– .entry-meta –>
        <div class="entry-content">
        </div><!– .entry-content –>
    <?php	 		 	 /* Microformatted category and tag links along with a comments link     
        <div class="entry-utility">
        <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"></span>
        <span class="meta-sep"> | </span>
        </div><!– #entry-utility –>  */ ?>
    </div><!– #post- –>
    </div>
    </div><!– #content –>
</div><!– #container –>
<?php get_sidebar(); ?>
<?php get_footer(); ?>