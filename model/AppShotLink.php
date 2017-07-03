<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "app_shot_link".
 *
 * @property string $id
 * @property string $img_url
 * @property string $link
 * @property integer $weight
 * @property string $name
 * @property string $created_at
 * @property integer $update_at
 * @property integer $status
 */
class AppShotLink extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'app_shot_link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img_url', 'link', 'name', 'created_at', 'update_at', 'status'], 'required'],
            [['weight', 'created_at', 'update_at', 'status'], 'integer'],
            [['img_url', 'link'], 'string', 'max' => 255],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增ID',
            'img_url' => 'Img Url',
            'link' => '跳转地址',
            'weight' => '排序权重越大越靠前',
            'name' => '入口名称',
            'created_at' => '创建时间',
            'update_at' => '修改时间',
            'status' => '1启用 0不启用',
        ];
    }
}
