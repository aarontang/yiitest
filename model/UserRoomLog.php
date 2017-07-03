<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "user_room_log".
 *
 * @property string $id
 * @property integer $admin_id
 * @property integer $optype
 * @property integer $user_id
 * @property integer $room_id
 * @property string $create_at
 */
class UserRoomLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_room_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'optype', 'user_id', 'room_id', 'create_at'], 'required'],
            [['admin_id', 'optype', 'user_id', 'room_id', 'create_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '用户关联房间记录ID',
            'admin_id' => '操作人ID',
            'optype' => '操作类型 1关联，2取消关联',
            'user_id' => '用户ID',
            'room_id' => '房间ID',
            'create_at' => '创建时候的时间戳',
        ];
    }
}
