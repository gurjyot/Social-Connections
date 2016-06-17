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
    echo 	'<div class= "sc1"><div class= "sc2"><span>Connect with us:</span>
    		<div class= "sc3"><a href="http://www.facebook.com"><div class="facebook-icon"></div></a>
			<a href="http://www.twitter.com"><div class="twitter-icon"></div></a>
			<a href="http://www.google.com"><div class="google-icon"></div></a>
			<a href="http://www.instagram.com"><div class="instagram-icon"></div></a></div></div>';
}
}

