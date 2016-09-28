<link rel="stylesheet" type="text/css" href="<?php echo qa_path_to_root() ?>/qa-plugin/Social-Connections/social-connections.css">

<?php

class qa_social_connections_widget {

    function allow_template($template)
    {
        return true;
    }

    function allow_region($region)
    {
        return true;
    }

    function output_widget($region, $place, $themeobject, $template, $request, $qa_content)
    {
        echo 	'<div class= "sc1">
                    <div class= "sc2">
                        <div class= "sc3">
                            <span>Connect with us:</span>
                        </div>
        	                <div class= "sc4">
                                <div class="facebook-icon"><a href="http://www.facebook.com" title="Like us on Facebook"></a></div>
    			                <div class="twitter-icon"><a href="http://www.twitter.com" title="Follow us on Twitter"></a></div>
    			                <div class="google-icon"><a href="http://www.google.com" title="Like us on Google+"></a></div>
    			                <div class="instagram-icon"><a href="http://www.instagram.com" title="Follow us on Instagram"></a></div>
                            </div>
                    </div>
                </div>';
    }
}

