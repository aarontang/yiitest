<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "liveroom".
 *
 * @property integer $id
 * @property string $room_title
 * @property integer $room_id
 * @property string $vhall_id
 * @property integer $user_id
 * @property integer $status
 */
class LiveRoom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'liveroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_title', 'room_id', 'vhall_id', 'user_id', 'status'], 'required'],
            [['room_id', 'user_id', 'status'], 'integer'],
            [['room_title'], 'string', 'max' => 32],
            [['vhall_id'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '直播室ID',
            'room_title' => '直播间名称',
            'room_id' => '关联览益直播间',
            'vhall_id' => '微吼直播间ID',
            'user_id' => '直播间又有人UID',
            'status' => '直播间状态0关播，1开播',
        ];
    }
}
