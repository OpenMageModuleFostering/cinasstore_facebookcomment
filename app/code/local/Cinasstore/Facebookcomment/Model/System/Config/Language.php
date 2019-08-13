<?php

class Cinasstore_Facebookcomment_Model_System_Config_Language
{
    public function toOptionArray()
    {
        $options = array(
					array('value'=>'ca_ES','label'=> Mage::helper('facebookcomment')->__('Catalan')),
					array('value'=>'cs_CZ','label'=> Mage::helper('facebookcomment')->__('Czech')),
					array('value'=>'cy_GB','label'=> Mage::helper('facebookcomment')->__('Welsh')),
					array('value'=>'da_DK','label'=> Mage::helper('facebookcomment')->__('Danish')),
					array('value'=>'de_DE','label'=> Mage::helper('facebookcomment')->__('German')),
					array('value'=>'eu_ES','label'=> Mage::helper('facebookcomment')->__('Basque')),
					array('value'=>'en_PI','label'=> Mage::helper('facebookcomment')->__('English (Pirate)')),
					array('value'=>'en_UD','label'=> Mage::helper('facebookcomment')->__('English (Upside Down)')),
					array('value'=>'ck_US','label'=> Mage::helper('facebookcomment')->__('Cherokee')),
					array('value'=>'en_US','label'=> Mage::helper('facebookcomment')->__('English (US)')),
					array('value'=>'es_LA','label'=> Mage::helper('facebookcomment')->__('Spanish')),
					array('value'=>'es_CL','label'=> Mage::helper('facebookcomment')->__('Spanish (Chile)')),
					array('value'=>'es_CO','label'=> Mage::helper('facebookcomment')->__('Spanish (Colombia)')),
					array('value'=>'es_ES','label'=> Mage::helper('facebookcomment')->__('Spanish (Spain)')),
					array('value'=>'es_MX','label'=> Mage::helper('facebookcomment')->__('Spanish (Mexico)')),
					array('value'=>'es_VE','label'=> Mage::helper('facebookcomment')->__('Spanish (Venezuela)')),
					array('value'=>'fb_FI','label'=> Mage::helper('facebookcomment')->__('Finnish (test)')),
					array('value'=>'fi_FI','label'=> Mage::helper('facebookcomment')->__('Finnish')),
					array('value'=>'fr_FR','label'=> Mage::helper('facebookcomment')->__('French (France)')),
					array('value'=>'gl_ES','label'=> Mage::helper('facebookcomment')->__('Galician')),
					array('value'=>'hu_HU','label'=> Mage::helper('facebookcomment')->__('Hungarian')),
					array('value'=>'it_IT','label'=> Mage::helper('facebookcomment')->__('Italian')),
					array('value'=>'ja_JP','label'=> Mage::helper('facebookcomment')->__('Japanese')),
					array('value'=>'ko_KR','label'=> Mage::helper('facebookcomment')->__('Korean')),
					array('value'=>'nb_NO','label'=> Mage::helper('facebookcomment')->__('Norwegian (bokmal)')),
					array('value'=>'nn_NO','label'=> Mage::helper('facebookcomment')->__('Norwegian (nynorsk)')),
					array('value'=>'nl_NL','label'=> Mage::helper('facebookcomment')->__('Dutch')),
					array('value'=>'pl_PL','label'=> Mage::helper('facebookcomment')->__('Polish')),
					array('value'=>'pt_BR','label'=> Mage::helper('facebookcomment')->__('Portuguese (Brazil)')),
					array('value'=>'pt_PT','label'=> Mage::helper('facebookcomment')->__('Portuguese (Portugal)')),
					array('value'=>'ro_RO','label'=> Mage::helper('facebookcomment')->__('Romanian')),
					array('value'=>'ru_RU','label'=> Mage::helper('facebookcomment')->__('Russian')),
					array('value'=>'sk_SK','label'=> Mage::helper('facebookcomment')->__('Slovak')),
					array('value'=>'sl_SI','label'=> Mage::helper('facebookcomment')->__('Slovenian')),
					array('value'=>'sv_SE','label'=> Mage::helper('facebookcomment')->__('Swedish')),
					array('value'=>'th_TH','label'=> Mage::helper('facebookcomment')->__('Thai')),
					array('value'=>'ku_TR','label'=> Mage::helper('facebookcomment')->__('Kurdish')),
					array('value'=>'zh_CN','label'=> Mage::helper('facebookcomment')->__('Simplified Chinese (China)')),
					array('value'=>'zh_HK','label'=> Mage::helper('facebookcomment')->__('Traditional Chinese (Hong Kong)')),
					array('value'=>'zh_TW','label'=> Mage::helper('facebookcomment')->__('Traditional Chinese (Taiwan)')),
					array('value'=>'fb_LT','label'=> Mage::helper('facebookcomment')->__('Leet Speak')),
					array('value'=>'af_ZA','label'=> Mage::helper('facebookcomment')->__('Afrikaans')),
					array('value'=>'sq_AL','label'=> Mage::helper('facebookcomment')->__('Albanian')),
					array('value'=>'hy_AM','label'=> Mage::helper('facebookcomment')->__('Armenian')),
					array('value'=>'az_AZ','label'=> Mage::helper('facebookcomment')->__('Azeri')),
					array('value'=>'be_BY','label'=> Mage::helper('facebookcomment')->__('Belarusian')),
					array('value'=>'bn_IN','label'=> Mage::helper('facebookcomment')->__('Bengali')),
					array('value'=>'bs_BA','label'=> Mage::helper('facebookcomment')->__('Bosnian')),
					array('value'=>'bg_BG','label'=> Mage::helper('facebookcomment')->__('Bulgarian')),
					array('value'=>'hr_HR','label'=> Mage::helper('facebookcomment')->__('Croatian')),
					array('value'=>'nl_BE','label'=> Mage::helper('facebookcomment')->__('Dutch (Belgie)')),
					array('value'=>'en_GB','label'=> Mage::helper('facebookcomment')->__('English (UK)')),
					array('value'=>'eo_EO','label'=> Mage::helper('facebookcomment')->__('Esperanto')),
					array('value'=>'et_EE','label'=> Mage::helper('facebookcomment')->__('Estonian')),
					array('value'=>'fo_FO','label'=> Mage::helper('facebookcomment')->__('Faroese')),
					array('value'=>'fr_CA','label'=> Mage::helper('facebookcomment')->__('French (Canada)')),
					array('value'=>'ka_GE','label'=> Mage::helper('facebookcomment')->__('Georgian')),
					array('value'=>'el_GR','label'=> Mage::helper('facebookcomment')->__('Greek')),
					array('value'=>'gu_IN','label'=> Mage::helper('facebookcomment')->__('Gujarati')),
					array('value'=>'hi_IN','label'=> Mage::helper('facebookcomment')->__('Hindi')),
					array('value'=>'is_IS','label'=> Mage::helper('facebookcomment')->__('Icelandic')),
					array('value'=>'id_ID','label'=> Mage::helper('facebookcomment')->__('Indonesian')),
					array('value'=>'ga_IE','label'=> Mage::helper('facebookcomment')->__('Irish')),
					array('value'=>'jv_ID','label'=> Mage::helper('facebookcomment')->__('Javanese')),
					array('value'=>'kn_IN','label'=> Mage::helper('facebookcomment')->__('Kannada')),
					array('value'=>'kk_KZ','label'=> Mage::helper('facebookcomment')->__('Kazakh')),
					array('value'=>'la_VA','label'=> Mage::helper('facebookcomment')->__('Latin')),
					array('value'=>'lv_LV','label'=> Mage::helper('facebookcomment')->__('Latvian')),
					array('value'=>'li_NL','label'=> Mage::helper('facebookcomment')->__('Limburgish')),
					array('value'=>'lt_LT','label'=> Mage::helper('facebookcomment')->__('Lithuanian')),
					array('value'=>'mk_MK','label'=> Mage::helper('facebookcomment')->__('Macedonian')),
					array('value'=>'mg_MG','label'=> Mage::helper('facebookcomment')->__('Malagasy')),
					array('value'=>'ms_MY','label'=> Mage::helper('facebookcomment')->__('Malay')),
					array('value'=>'mt_MT','label'=> Mage::helper('facebookcomment')->__('Maltese')),
					array('value'=>'mr_IN','label'=> Mage::helper('facebookcomment')->__('Marathi')),
					array('value'=>'mn_MN','label'=> Mage::helper('facebookcomment')->__('Mongolian')),
					array('value'=>'ne_NP','label'=> Mage::helper('facebookcomment')->__('Nepali')),
					array('value'=>'pa_IN','label'=> Mage::helper('facebookcomment')->__('Punjabi')),
					array('value'=>'rm_CH','label'=> Mage::helper('facebookcomment')->__('Romansh')),
					array('value'=>'sa_IN','label'=> Mage::helper('facebookcomment')->__('Sanskrit')),
					array('value'=>'sr_RS','label'=> Mage::helper('facebookcomment')->__('Serbian')),
					array('value'=>'so_SO','label'=> Mage::helper('facebookcomment')->__('Somali')),
					array('value'=>'sw_KE','label'=> Mage::helper('facebookcomment')->__('Swahili')),
					array('value'=>'tl_PH','label'=> Mage::helper('facebookcomment')->__('Filipino')),
					array('value'=>'ta_IN','label'=> Mage::helper('facebookcomment')->__('Tamil')),
					array('value'=>'tt_RU','label'=> Mage::helper('facebookcomment')->__('Tatar')),
					array('value'=>'te_IN','label'=> Mage::helper('facebookcomment')->__('Telugu')),
					array('value'=>'ml_IN','label'=> Mage::helper('facebookcomment')->__('Malayalam')),
					array('value'=>'uk_UA','label'=> Mage::helper('facebookcomment')->__('Ukrainian')),
					array('value'=>'uz_UZ','label'=> Mage::helper('facebookcomment')->__('Uzbek')),
					array('value'=>'vi_VN','label'=> Mage::helper('facebookcomment')->__('Vietnamese')),
					array('value'=>'xh_ZA','label'=> Mage::helper('facebookcomment')->__('Xhosa')),
					array('value'=>'zu_ZA','label'=> Mage::helper('facebookcomment')->__('Zulu')),
					array('value'=>'km_KH','label'=> Mage::helper('facebookcomment')->__('Khmer')),
					array('value'=>'tg_TJ','label'=> Mage::helper('facebookcomment')->__('Tajik')),
					array('value'=>'ar_AR','label'=> Mage::helper('facebookcomment')->__('Arabic')),
					array('value'=>'he_IL','label'=> Mage::helper('facebookcomment')->__('Hebrew')),
					array('value'=>'ur_PK','label'=> Mage::helper('facebookcomment')->__('Urdu')),
					array('value'=>'fa_IR','label'=> Mage::helper('facebookcomment')->__('Persian')),
					array('value'=>'sy_SY','label'=> Mage::helper('facebookcomment')->__('Syriac')),
					array('value'=>'yi_DE','label'=> Mage::helper('facebookcomment')->__('Yiddish')),
					array('value'=>'gn_PY','label'=> Mage::helper('facebookcomment')->__('Guarani')),
					array('value'=>'qu_PE','label'=> Mage::helper('facebookcomment')->__('Quechua')),
					array('value'=>'ay_BO','label'=> Mage::helper('facebookcomment')->__('Aymara')),
					array('value'=>'se_NO','label'=> Mage::helper('facebookcomment')->__('Northern Sami')),
					array('value'=>'ps_AF','label'=> Mage::helper('facebookcomment')->__('Pashto')),
					array('value'=>'tl_ST','label'=> Mage::helper('facebookcomment')->__('Klingon')),
				);
		return $options;
    }
}