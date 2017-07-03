<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "wechat_chatnum".
 *
 * @property string $id
 * @property integer $chat_type
 * @property string $wechat_group_id
 * @property string $count_date
 * @property string $chat_num
 * @property string $created_at
 */
class WechatChatnum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wechat_chatnum';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chat_type', 'wechat_group_id', 'count_date', 'chat_num', 'created_at'], 'required'],
            [['chat_type', 'wechat_group_id', 'chat_num', 'created_at'], 'integer'],
            [['count_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增id',
            'chat_type' => '1全局聊天2管理员聊天',
            'wechat_group_id' => '群聊关系自增ID',
            'count_date' => '统计聊天时间',
            'chat_num' => '聊天数量',
            'created_at' => '创建时间',
        ];
    }
}
