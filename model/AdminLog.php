<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "admin_log".
 *
 * @property string $id
 * @property string $adminid
 * @property string $action
 * @property string $data
 * @property string $created_at
 */
class AdminLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'admin_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adminid', 'data', 'created_at'], 'required'],
            [['adminid', 'created_at'], 'integer'],
            [['action'], 'string', 'max' => 50],
            [['data'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增ID',
            'adminid' => '管理员ID',
            'action' => '操作的动作',
            'data' => '操作的数据',
            'created_at' => '记录产生的时间',
        ];
    }
}
