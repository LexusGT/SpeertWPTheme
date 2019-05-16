<section class="comments">
    <div class="container">
        <div class="row">
            <div id="comments" class="col-lg-9">
                <div class="comments-title"><span><?php comments_number(); ?></span></div>
                <ol class="comment-list">
                    <?php wp_list_comments('type=comment&callback=speert_theme_comment&per_page=0&status=approve'); ?>
                </ol>
                <!-- .comment-list -->
                <div id="respond" class="comment-respond">
                    <?php

                    $defaults = array(
                        'comment_field'        => '<p class="comment-form-comment"><textarea id="comment" placeholder="White you comment here.." name="comment"  aria-required="true" required="required"></textarea></p>',
                         'fields'               => array(
                            'author' => '<p class="comment-form-author"><input id="author" placeholder="' . __( 'Name' ) . '" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" /></p>',
                            'email'  => '<p class="comment-form-email"><input id="email" placeholder="' . __( 'Email' ) . '" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" aria-describedby="email-notes" required="required" /></p>',
                        ),
                    );
                    
                    comment_form( $defaults );
                    ?>
                </div>
                <!-- #respond -->
            </div>
        </div>
    </div> 
</section>