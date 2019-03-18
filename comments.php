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
                    <div id="reply-title" class="comment-reply-title">Leave a Reply<small><a rel="nofollow" id="cancel-comment-reply-link" href="/testovyj-post/#respond" style="display:none;">Leave a Reply</a></small></div>
                    <?php comment_form(); ?>
                </div>
                <!-- #respond -->
            </div>
        </div>
    </div> 
</section>