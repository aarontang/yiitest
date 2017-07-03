<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "tm_summary".
 *
 * @property string $id
 * @property string $title
 * @property string $description
 * @property integer $inputtime
 * @property string $thumb
 * @property string $copyfrom
 * @property string $catname
 * @property integer $catid
 * @property integer $status
 * @property string $style
 * @property string $keywords
 * @property integer $posids
 * @property integer $islink
 * @property integer $updatetime
 * @property string $username
 * @property integer $sysadd
 * @property string $url
 */
class TmSummary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tm_summary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inputtime', 'catid', 'status', 'posids', 'islink', 'updatetime', 'sysadd'], 'integer'],
            [['status'], 'required'],
            [['title', 'copyfrom', 'catname', 'keywords', 'url'], 'string', 'max' => 255],
            [['description', 'thumb', 'style'], 'string', 'max' => 1024],
            [['username'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'description' => '描述',
            'inputtime' => '录入时间',
            'thumb' => '缩图',
            'copyfrom' => '来源',
            'catname' => '分类名称',
            'catid' => '栏目id',
            'status' => '状态',
            'style' => 'Style',
            'keywords' => 'Keywords',
            'posids' => 'Posids',
            'islink' => 'Islink',
            'updatetime' => 'Updatetime',
            'username' => 'Username',
            'sysadd' => 'Sysadd',
            'url' => 'Url',
        ];
    }
}
