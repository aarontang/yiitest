<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "wechat_sign_log".
 *
 * @property string $id
 * @property string $sign_group_id
 * @property string $user_open_id
 * @property string $sign_date
 */
class WechatSignLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wechat_sign_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sign_group_id', 'user_open_id', 'sign_date'], 'required'],
            [['sign_group_id', 'sign_date'], 'integer'],
            [['user_open_id'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sign_group_id' => '签到群聊ID',
            'user_open_id' => '用户微信ID',
            'sign_date' => '签到时间',
        ];
    }
}
