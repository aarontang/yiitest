<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "ad_img".
 *
 * @property string $id
 * @property string $position
 * @property string $img_url
 * @property integer $action_type
 * @property string $weight
 * @property string $created_at
 * @property string $update_at
 */
class AdImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['position', 'img_url', 'created_at', 'update_at'], 'required'],
            [['position', 'action_type', 'weight', 'created_at', 'update_at'], 'integer'],
            [['img_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增ID',
            'position' => '广告位置',
            'img_url' => '图片地址',
            'action_type' => '跳转类型0无操作1外部链接2内部跳转',
            'weight' => '权重越大越靠前',
            'created_at' => '创建时间',
            'update_at' => '修改时间',
        ];
    }
}
