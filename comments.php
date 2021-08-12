<h2>Comments</h2>

<?php

$args = array(
    'walker'            => null,
    'max_depth'         => '',
    'style'             => 'ul',
    'callback'          => null,
    'end-callback'      => null,
    'type'              => 'all',
    'page'              => '',
    'per_page'          => '',
    'avatar_size'       => 32,
    'reverse_top_level' => null,
    'reverse_children'  => '',
    'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
    'short_ping'        => false,   // @since 3.6
    'echo'              => true     // boolean, default is true
);

?>

<?php wp_list_comments($args,$comments);?>


<?php

$comment_form = array(
    'fields' => array(
        'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
        '<label for="wp-comment-cookies-consent">' . __( 'Save my name, email, and website in this browser for the next time I comment.' ) . '</label></p>',
    ),
);
 
comment_form( $comment_form );

?>