<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "wechat_wonderful".
 *
 * @property string $id
 * @property integer $admin_id
 * @property string $wechat_group_id
 * @property integer $wechat_chatlog_id
 * @property string $title
 * @property string $created_at
 */
class WechatWonderful extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wechat_wonderful';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'wechat_group_id', 'wechat_chatlog_id', 'title', 'created_at'], 'required'],
            [['admin_id', 'wechat_group_id', 'wechat_chatlog_id', 'created_at'], 'integer'],
            [['title'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增ID',
            'admin_id' => '管理员ID',
            'wechat_group_id' => '群聊关系自增ID',
            'wechat_chatlog_id' => '聊天历史ID',
            'title' => '精华标题',
            'created_at' => '创建精华时间',
        ];
    }
}
