<?php

namespace mimicreative\assets;

class RespondAsset extends \yii\web\AssetBundle {
  
  /**
  * @inherit
  */
  public $sourcePath = '@bower/respond';
  
  /**
  * @inherit
  */
  public $js = [
    'dest/respond.min.js',
  ];
  
  public $jsOptions = [
    'condition' => 'lte IE10',
    'position' => \yii\web\View::POS_HEAD
  ];
  
  /**
  * Initializes the bundle.
  * Set publish options to copy only necessary files (in this case css and font folders)
  */
  public function init()
  {
     parent::init();

     $this->publishOptions['beforeCopy'] = function ($from, $to) {
         return preg_match('%(/|\\\\)dest%', $from);
     };
  }
}

