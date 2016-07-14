<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "leads".
 *
 * @property integer $id
 * @property string $title
 * @property string $detail
 * @property string $user_id
 */
class Leads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'leads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'detail', 'user_id'], 'required'],
            [['detail'], 'string'],
            [['title', 'user_id'], 'string', 'max' => 111]
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
            'user_id' => 'User ID',
        ];
    }
}
