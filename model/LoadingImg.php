<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "loading_img".
 *
 * @property string $id
 * @property string $img_url
 * @property integer $position
 * @property string $created_at
 */
class LoadingImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loading_img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position', 'created_at'], 'required'],
            [['position', 'created_at'], 'integer'],
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
            'img_url' => '图片地址',
            'position' => '1启动loading图，2加载loading图',
            'created_at' => '创建时间',
        ];
    }
}
