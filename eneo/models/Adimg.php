<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "ad_img".
 *
 * @property integer $id
 * @property string $title
 * @property string $detail
 * @property string $url
 * @property string $user_id
 * @property string $biz_id
 */
class Adimg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $imageFile;

    public static function tableName()
    {
        return 'ad_img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg','on'=>'create'],
            [['title', 'detail', 'user_id','biz_id'], 'required'],
            [['detail'], 'string'],
            [['title', 'url', 'user_id'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'detail' => 'Detail',
            'url' => 'Photo',
            'biz_id' => 'Business Name',
            'user_id' => 'User ID',
        ];
    }

    // this helps ignore img_path when updating
    // i.e. making it not required
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['update'] = ['title', 'detail'];//Scenario Values Only Accepted
        return $scenarios;
    }

    /**
     * Saves the uploaded image to the a folder
     * If upload is succesful it returns true
     */
    public function upload($img_name)
    {   
        // only validate two fields
        // because img_path is is not there 
        if ($this->validate(array('title', 'detail'))) {
            // upload the image
            $this->imageFile->saveAs('images/uploads/albums/' .$img_name. '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }

} // end class
