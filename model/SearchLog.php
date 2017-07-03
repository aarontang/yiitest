<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "search_log".
 *
 * @property string $id
 * @property string $uid
 * @property string $keyword
 * @property string $created_at
 */
class SearchLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'search_log';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'created_at'], 'integer'],
            [['created_at'], 'required'],
            [['keyword'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增ID',
            'uid' => '搜索的用户',
            'keyword' => '用户搜索的关键字',
            'created_at' => '创建时间戳',
        ];
    }
}
