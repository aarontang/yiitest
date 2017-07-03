<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "wechat_user_post_log".
 *
 * @property string $id
 * @property string $user_open_id
 * @property string $post_id
 * @property string $created_at
 */
class WechatUserPostLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wechat_user_post_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_open_id', 'post_id', 'created_at'], 'required'],
            [['post_id', 'created_at'], 'integer'],
            [['user_open_id'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '文章ID',
            'user_open_id' => '用户个人微信ID',
            'post_id' => '观看的文章ID',
            'created_at' => '日志时间',
        ];
    }
}
