<?
/**
 * Folderdisplay
 * Extension for Contao Open Source CMS (contao.org)
 *
 * Copyright (c) 2015 POSTYOU
 *
 * @package folder_display
 * @author  Gerald Meier
 * @link    http://www.postyou.de
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */
namespace postYou;


class FolderDisplay extends \ContentElement
{

    protected $strTemplate = "ce_folder_display_list";

    /**
     * Compile the content element
     */
    protected function compile()
    {
        $folder = \FilesModel::findByUuid($this->folder_display);
        $files = (\FilesModel::findMultipleFilesByFolder($folder->path));
        $this->Template->files = $files;
    }
}


?>