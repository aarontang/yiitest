<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "wechat_looknum".
 *
 * @property string $id
 * @property string $user_open_id
 * @property string $count_date
 * @property string $look_num
 * @property string $created_at
 * @property string $sign_num
 * @property string $call_num
 */
class WechatLooknum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wechat_looknum';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_open_id', 'count_date', 'look_num', 'created_at'], 'required'],
            [['count_date'], 'safe'],
            [['look_num', 'created_at', 'sign_num', 'call_num'], 'integer'],
            [['user_open_id'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增ID',
            'user_open_id' => '用户个人微信ID',
            'count_date' => '统计的天数',
            'look_num' => '观看文章数量',
            'created_at' => '创建时间',
            'sign_num' => 'Sign Num',
            'call_num' => 'Call Num',
        ];
    }
}
