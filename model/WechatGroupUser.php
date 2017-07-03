<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "wechat_group_user".
 *
 * @property string $id
 * @property string $group_id
 * @property string $user_id
 * @property string $user_open_id
 * @property string $user_nickname
 * @property string $user_avartar
 */
class WechatGroupUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wechat_group_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'user_id', 'user_open_id'], 'required'],
            [['group_id', 'user_id'], 'integer'],
            [['user_open_id', 'user_nickname'], 'string', 'max' => 50],
            [['user_avartar'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增ID',
            'group_id' => '群组ID',
            'user_id' => '投顾ID',
            'user_open_id' => '用户微信ID',
            'user_nickname' => '用户昵称',
            'user_avartar' => '用户头像',
        ];
    }
}
