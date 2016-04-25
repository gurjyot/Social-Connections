<?php include '/social-connections.css'; ?>

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
    include 'qa-social-connections-html.php';

}
}

