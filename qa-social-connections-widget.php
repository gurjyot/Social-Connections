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
    	$fb = qa_opt('sc_facebook_id');
    	$tw = qa_opt('sc_twitter_id');
    	$goo = qa_opt('sc_google_id');
    	$ins = qa_opt('sc_instagram_id');
    	$pin = qa_opt('sc_pinterest_id');

        $themeobject->output('<div class= "sc1">
                    			<div class= "sc2">
                    			<div class= "sc3">
                       				<span>'.qa_lang_html('plugin_sc/widget_title').'</span>
                      			</div>
       	                		<div class= "sc4">
       							<table>
        							<tr>');

        if (qa_opt('enable_facebook')){
        	$themeobject->output('<td><a href="http://www.facebook.com/'.$fb.'" title="'.qa_lang_html('plugin_sc/facebook_tooltip').'"><div class="facebook-icon"></div></a></td>');
    	}

    	if (qa_opt('enable_twitter')){
    		$themeobject->output('<td><a href="http://www.twitter.com/'.$tw.'" title="'.qa_lang_html('plugin_sc/twitter_tooltip').'"><div class="twitter-icon"></div></a></td>');
    	}

    	if (qa_opt('enable_google')){
    		$themeobject->output('<td><a href="http://www.google.com/'.$goo.'" title="'.qa_lang_html('plugin_sc/google_tooltip').'"><div class="google-icon"></div></a></td>');
    	}

    	if (qa_opt('enable_instagram')){
    		$themeobject->output('<td><a href="http://www.instagram.com/'.$ins.'" title="'.qa_lang_html('plugin_sc/instagram_tooltip').'"><div class="instagram-icon"></div></a></td>');
    	}

    	if (qa_opt('enable_pinterest')){
    		$themeobject->output('<td><a href="http://www.pinterest.com/'.$pin.'" title="'.qa_lang_html('plugin_sc/pinterest_tooltip').'"><div class="pinterest-icon"></div></a></td>');
    	}
    				$themeobject->output('</tr>
    	 						</table>
                            </div>
                    </div>
                </div>');
    }

    function admin_form(&$qa_content)
	{

		$ok = null;
		if (qa_clicked('sc_save_button')) 
		{
			qa_opt('enable_facebook',(bool)qa_post_text('enable_facebook'));
			qa_opt('sc_facebook_id',qa_post_text('sc_facebook_id'));
			qa_opt('enable_twitter',(bool)qa_post_text('enable_twitter'));
			qa_opt('sc_twitter_id',qa_post_text('sc_twitter_id'));
			qa_opt('enable_google',(bool)qa_post_text('enable_google'));  
			qa_opt('sc_google_id',qa_post_text('sc_google_id'));
			qa_opt('enable_instagram',(bool)qa_post_text('enable_instagram'));
			qa_opt('sc_instagram_id',qa_post_text('sc_instagram_id'));
			qa_opt('enable_pinterest',(bool)qa_post_text('enable_pinterest'));
			qa_opt('sc_pinterest_id',qa_post_text('sc_pinterest_id'));
			
			$ok = qa_lang('admin/options_saved');
		}

		$fields = array();

		$fields[] = array(
			'label' => 'Enable Facebook',
			'type' => 'checkbox',
			'value' => qa_opt('enable_facebook'),
			'tags' => 'NAME="enable_facebook"',
		);

		$fields[] = array(
			'label' => 'Facebook ID',
			'type' => 'textarea',
			'value' => qa_opt('sc_facebook_id'),
			'suffix' => 'Name of page in URL (like Q2Answer in https://www.facebook.com/Q2Answer)',
			'tags' => 'NAME="sc_facebook_id"',
			'rows' => 1,
		);

		$fields[] = array(
			'type' => 'blank',
		);
		
		$fields[] = array(
			'label' => 'Enable Twitter',
			'type' => 'checkbox',
			'value' => qa_opt('enable_twitter'),
			'tags' => 'NAME="enable_twitter"',
		);

		$fields[] = array(
			'label' => 'Twitter ID',
			'type' => 'textarea',
			'value' => qa_opt('sc_twitter_id'),
			'suffix' => 'Name of page in URL (like Q2Answer in https://www.twitter.com/Q2Answer)',
			'tags' => 'NAME="sc_twitter_id"',
			'rows' => 1,
		);

		$fields[] = array(
			'type' => 'blank',
		);

		$fields[] = array(
			'label' => 'Enable Google',
			'type' => 'checkbox',
			'value' => qa_opt('enable_google'),
			'tags' => 'NAME="enable_google"',
		);

		$fields[] = array(
			'label' => 'Google ID',
			'type' => 'textarea',
			'value' => qa_opt('sc_google_id'),
			'suffix' => 'Name of page in URL (like +Q2Answer in https://www.plus.google.com/+Q2Answer)',
			'tags' => 'NAME="sc_google_id"',
			'rows' => 1,
		);

		$fields[] = array(
			'type' => 'blank',
		);

		$fields[] = array(
			'label' => 'Enable Instagram',
			'type' => 'checkbox',
			'value' => qa_opt('enable_instagram'),
			'tags' => 'NAME="enable_instagram"',
		);
		
		$fields[] = array(
			'label' => 'Instagram ID',
			'type' => 'textarea',
			'value' => qa_opt('sc_instagram_id'),
			'suffix' => 'Name of page in URL (like Q2Answer in https://www.instagram.com/Q2Answer)',
			'tags' => 'NAME="sc_instagram_id"',
			'rows' => 1,
		);

		$fields[] = array(
			'type' => 'blank',
		);

		$fields[] = array(
			'label' => 'Enable Pinterest',
			'type' => 'checkbox',
			'value' => qa_opt('enable_pinterest'),
			'tags' => 'NAME="enable_pinterest"',
		);
		
		$fields[] = array(
			'label' => 'Pinterest ID',
			'type' => 'textarea',
			'value' => qa_opt('sc_pinterest_id'),
			'suffix' => 'Name of page in URL (like Q2Answer in https://www.pinterest.com/Q2Answer)',
			'tags' => 'NAME="sc_pinterest_id"',
			'rows' => 1,
		);

		return array(           
			'ok' => ($ok && !isset($error)) ? $ok : null,
				
			'fields' => $fields,
		 
			'buttons' => array(
				array(
					'label' => qa_lang_html('main/save_button'),
					'tags' => 'NAME="sc_save_button"',
				)
			),
		);
	}
}