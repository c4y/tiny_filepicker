<?php 

namespace c4y;

/**
 * @copyright 4ward.media 2012 <http://www.4wardmedia.de>
 * @author Christoph Wiechert <wio@psitrax.de>
 */
 
class TinyFilepickerHelper extends \System
{

	public function TinyMCE_Customzier_getFilebrowser($arrBrowsers)
	{
		$arrBrowsers['tinyFilepicker'] = array
		(
			'label'	=> 'Tiny Filebrowser',
			'javascript' => '
    fileBrowserURL = "'.TL_PATH.'/contao/tinyfiles.php";
    tinyMCE.activeEditor.windowManager.open({
            title: "Contao File Browser",
            url: fileBrowserURL,
            width: 770,
            height: 580,
            inline: 0,
            maximizable: 1,
            close_previous: 0
        },
        {
            window : win,
            input : field_name
        }
    );'
		);

		return $arrBrowsers;
	}
}