<nav class="col-12 pagination">
    
    <?php
    $menu = paginate_links(
        array(
            'prev_text'     => ' ',
            'next_text'     => '&nbsp',
            'type'          => 'list',
        )
    );
    echo $menu;
    ?>
    
</nav>