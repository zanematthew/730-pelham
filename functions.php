<?php

function seven_thirty_pelham( $post_id ){

    $tweet_button = '<a href="https://twitter.com/share" class="twitter-share-button" data-via="zaneMATTHEW">Tweet</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>';
    print $tweet_button;

    if ( get_post_type( $post_id ) == 'plugins' ) {
        $github_url = get_post_meta( $post_id, 'plugins_github-url', true );
        $download_url = get_post_meta( $post_id,  'plugins_download-url', true );
        print '<div class="plugin-meta"><a href="' . $github_url . '" target="_blank" class="github-url">Repository</a> <a href="'.$download_url.'" target="_blank" class="download-url">Downloads</a></div>';
    }
}
add_action('pelham_below_the_title','seven_thirty_pelham');
