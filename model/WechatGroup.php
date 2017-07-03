<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "wechat_group".
 *
 * @property string $id
 * @property integer $user_id
 * @property string $robot_weixin
 * @property string $group_id
 * @property string $nickname
 * @property string $group_owner
 * @property integer $robot_status
 * @property string $group_username
 * @property string $created_at
 * @property string $updated_at
 */
class WechatGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wechat_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'robot_weixin', 'group_username', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'robot_status', 'created_at', 'updated_at'], 'integer'],
            [['robot_weixin', 'group_owner'], 'string', 'max' => 20],
            [['group_id'], 'string', 'max' => 100],
            [['nickname'], 'string', 'max' => 50],
            [['group_username'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '投顾ID',
            'robot_weixin' => '机器人微信号',
            'group_id' => '群聊id用群主微信号与昵称结合',
            'nickname' => '群聊名称',
            'group_owner' => '群主微信号',
            'robot_status' => '聊天机器人状态 0不可用，1可用',
            'group_username' => '群主用户名用于发消息这个会变',
            'created_at' => '增加时间',
            'updated_at' => '更新时间',
        ];
    }
}
