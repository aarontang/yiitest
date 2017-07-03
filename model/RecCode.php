<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "rec_code".
 *
 * @property string $id
 * @property string $var_code
 * @property integer $weight
 * @property string $created_at
 * @property string $update_at
 */
class RecCode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rec_code';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['var_code', 'created_at', 'update_at'], 'required'],
            [['weight', 'created_at', 'update_at'], 'integer'],
            [['var_code'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增ID',
            'var_code' => '合约代码',
            'weight' => '排序权重越大越靠前',
            'created_at' => '创建时间',
            'update_at' => '修改时间',
        ];
    }
}
