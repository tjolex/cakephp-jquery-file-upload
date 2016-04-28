<?php
namespace CakephpJqueryFileUpload\View\Helper;

use Cake\View\Helper;

/**
 * JqueryFileUpload Helper
 *
 * @property \Cake\View\Helper\HtmlHelper $Html
 *
 */
class JqueryFileUploadHelper extends Helper
{

    public $helpers = [
        'Html'
    ];

    public function loadCss()
    {
        return $this->Html->css('CakephpJqueryFileUpload.jquery.fileupload-ui.css');
    }

    
    /** 
     * 
     * @param boolean $ui - if jquery ui is already included in the page - this can be skipped
     */
    public function loadScripts($ui = true)
    {
        $scripts = array(
            'CakephpJqueryFileUpload.jquery.iframe-transport.js',
            'CakephpJqueryFileUpload.jquery.fileupload.js',
        );
        
        if ($ui) {
            array_unshift($scripts, 'CakephpJqueryFileUpload.vendor/jquery.ui.widget.js');
        }

        return $this->Html->script($scripts);
    }
}
