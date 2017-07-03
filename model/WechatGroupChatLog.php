<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "wechat_group_chat_log".
 *
 * @property string $id
 * @property string $nickname
 * @property string $avartar
 * @property integer $type
 * @property string $content
 * @property string $media_link
 * @property string $wechat_group_id
 * @property string $created_at
 */
class WechatGroupChatLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wechat_group_chat_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['avartar', 'type', 'wechat_group_id', 'created_at'], 'required'],
            [['type', 'wechat_group_id', 'created_at'], 'integer'],
            [['nickname'], 'string', 'max' => 50],
            [['avartar', 'media_link'], 'string', 'max' => 255],
            [['content'], 'string', 'max' => 1024],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增ID',
            'nickname' => '用户昵称',
            'avartar' => '头像HASH值',
            'type' => '0文本消息1图文消息2语音3视频4图片',
            'content' => '聊天内容',
            'media_link' => '媒体链接',
            'wechat_group_id' => '群聊关系ID',
            'created_at' => '聊天时间',
        ];
    }
}
