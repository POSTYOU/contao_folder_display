<?

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