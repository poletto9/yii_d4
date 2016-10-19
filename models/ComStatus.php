<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "com_status".
 *
 * @property integer $com_status_id
 * @property string $com_status_name
 */
class ComStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'com_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['com_status_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'com_status_id' => 'Com Status ID',
            'com_status_name' => 'Com Status Name',
        ];
    }
}
