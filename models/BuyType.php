<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "buy_type".
 *
 * @property integer $buy_type_id
 * @property string $buy_type_name
 */
class BuyType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'buy_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['buy_type_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'buy_type_id' => 'Buy Type ID',
            'buy_type_name' => 'Buy Type Name',
        ];
    }

    public static function GetList()
    {
        return ArrayHelper::map(self::find()->all(),'buy_type_id','buy_type_name');
    }
}
