                      
                        <div id="comments">
    
<?php	 		 	
        $req = get_option('require_name_email'); // Checks if fields are required.
        if ( 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) )
                die ( 'Please do not load this page directly. Thanks!' );
        if ( ! empty($post->post_password) ) :
                if ( $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password ) :
?>
                                <div class="nopassword"></div>
                        </div><!-- .comments -->
<?php	 		 	
                return;
        endif;
endif;
?>

                                             


<?php	 		 	 /* Count the number of comments and trackbacks (or pings) */
$ping_count = $comment_count = 0;
foreach ( $comments as $comment )
        get_comment_type() == "comment" ? ++$comment_count : ++$ping_count;
?>




                                <div id="comments-list" class="comments">
                                        <h3></h3>

                                      

                                        <div id="comments-nav-above" class="comments-navigation">
                                                                <div class="paginated-comments-links"></div>
                                        </div><!-- #comments-nav-above -->                                      
                                 
                                
                           
                                        <ol>

                                        </ol>


                                    
                                <div id="comments-nav-below" class="comments-navigation">
                                                <div class="paginated-comments-links"></div>
                </div><!-- #comments-nav-below -->
                                 
                                        
                                </div><!-- #comments-list .comments -->






                                <div id="trackbacks-list" class="comments">
                                        <h3></h3>

                                    
                                        <ol>

                                        </ol>                           
                                        
                                </div><!-- #trackbacks-list .comments -->                       







                                <div id="respond">
                                <h3></h3>
                                
                                <div id="cancel-comment-reply"></div>


                                        <p id="login-req"><?php	 		 	 printf(__('You must be <a href="%s" title="Log in">logged in</a> to post a comment.', 'your-theme'),
                                        get_option('siteurl') . '/wp-login.php?redirect_to=' . get_permalink() ) ?></p>


                                        <div class="formcontainer">     
                                        

                                                <form id="commentform" action="/wp-comments-post.php" method="post">


                                                        <p id="login"><?php	 		 	 printf(__('<span class="loggedin">Logged in as <a href="%1$s" title="Logged in as %2$s">%2$s</a>.</span> <span class="logout"><a href="%3$s" title="Log out of this account">Log out?</a></span>', 'your-theme'),
                                                                get_option('siteurl') . '/wp-admin/profile.php',
                                                                wp_specialchars($user_identity, true),
                                                                wp_logout_url(get_permalink()) ) ?></p>



                                                        <p id="comment-notes"></p>

              <div id="form-section-author" class="form-section">
                                                                <div class="form-label"><label for="author"></div>
                                                                <div class="form-input"><input id="author" name="author" type="text" value="" size="30" maxlength="20" tabindex="3" /></div>
              </div><!-- #form-section-author .form-section -->

              <div id="form-section-email" class="form-section">
                                                                <div class="form-label"><label for="email"></div>
                                                                <div class="form-input"><input id="email" name="email" type="text" value="" size="30" maxlength="50" tabindex="4" /></div>
              </div><!-- #form-section-email .form-section -->

              <div id="form-section-url" class="form-section">
                                                                <div class="form-label"><label for="url"></label></div>
                                                                <div class="form-input"><input id="url" name="url" type="text" value="" size="30" maxlength="50" tabindex="5" /></div>
              </div><!-- #form-section-url .form-section -->



              <div id="form-section-comment" class="form-section">
                                                                <div class="form-label"><label for="comment"></label></div>
                                                                <div class="form-textarea"><textarea id="comment" name="comment" cols="45" rows="8" tabindex="6"></textarea></div>
              </div><!-- #form-section-comment .form-section -->
              
              <!-- <div id="form-allowed-tags" class="form-section">
                      <p><span></code></p>
              </div> -->
                                                        

                  
                                                        <div class="form-submit"><input id="submit" name="submit" type="submit" value="" /></div>

  

  

                                                </form><!-- #commentform -->                                                                            
                                        </div><!-- .formcontainer -->

                                </div><!-- #respond -->

                        </div><!-- #comments -->