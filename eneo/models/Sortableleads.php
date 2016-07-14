<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sortableleads".
 *
 * @property integer $id
 * @property string $col1
 * @property string $col2
 * @property string $col3
 * @property string $col4
 * @property string $col5
 */
class Sortableleads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sortableleads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['col1', 'col2', 'col3', 'col4', 'col5'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'col1' => 'Col1',
            'col2' => 'Col2',
            'col3' => 'Col3',
            'col4' => 'Col4',
            'col5' => 'Col5',
        ];
    }
}
