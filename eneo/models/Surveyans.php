<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "survey_ans".
 *
 * @property integer $id
 * @property string $q_id
 * @property string $ans
 * @property string $user_id
 */
class Surveyans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'survey_ans';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['q_id', 'ans', 'user_id'], 'required'],
            [['ans','q_id'], 'string'],
            [['user_id'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'q_id' => 'Q ID',
            'ans' => 'Ans',
            'user_id' => 'User ID',
        ];
    }
}
