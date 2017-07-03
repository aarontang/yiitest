<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "wechat_post_relation".
 *
 * @property string $id
 * @property integer $admin_id
 * @property integer $wechat_group_id
 * @property string $wechat_post_id
 * @property string $created_at
 */
class WechatPostRelation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wechat_post_relation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'wechat_group_id', 'wechat_post_id', 'created_at'], 'required'],
            [['admin_id', 'wechat_group_id', 'wechat_post_id', 'created_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增id',
            'admin_id' => '管理员ID',
            'wechat_group_id' => '群聊自增关系ID',
            'wechat_post_id' => '文章自增ID',
            'created_at' => '关系创建时间',
        ];
    }
}
