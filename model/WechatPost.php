<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "wechat_post".
 *
 * @property string $id
 * @property integer $admin_id
 * @property integer $type
 * @property string $content
 * @property string $media_link
 * @property string $created_at
 * @property string $updated_at
 */
class WechatPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wechat_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'type', 'created_at', 'updated_at'], 'required'],
            [['admin_id', 'type', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string', 'max' => 1024],
            [['media_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'admin_id' => '管理员ID',
            'type' => '1公告2资金流向3资料',
            'content' => '发布内容',
            'media_link' => '媒体链接地址',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
