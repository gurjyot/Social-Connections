<?php

class qa_html_theme_layer extends qa_html_theme_base
{

    function head_css() // add a Javascript file from plugin directory
    {
        $this-> output('<link rel="stylesheet" href="'.
            QA_HTML_THEME_LAYER_URLTOROOT.'social-connections.css'.'?<?php echo time(); ?>" TYPE="text/css">');

        parent::head_css();
    }
}