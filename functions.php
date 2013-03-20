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
//add_action('pelham_below_the_content','seven_thirty_pelham');
add_action('pelham_below_the_title','seven_thirty_pelham');


function seven_thirty_pelham_closing_body(){
    if ( is_admin() || current_user_can('manage_options') ) return; ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39282110-1']);
  _gaq.push(['_setDomainName', 'zanematthew.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php }
add_action('pelham_above_closing_body', 'seven_thirty_pelham_closing_body');
