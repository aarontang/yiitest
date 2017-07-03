<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "tm_news_tag".
 *
 * @property string $id
 * @property integer $catid
 * @property string $tagid
 * @property string $module
 * @property integer $modelid
 * @property integer $thumb
 * @property string $data
 * @property integer $siteid
 * @property integer $listorder
 * @property integer $expiration
 * @property string $extention
 * @property integer $synedit
 */
class TmNewsTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tm_news_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'catid', 'modelid', 'thumb', 'siteid', 'listorder', 'expiration', 'synedit'], 'integer'],
            [['data'], 'string'],
            [['expiration'], 'required'],
            [['tagid'], 'string', 'max' => 8],
            [['module'], 'string', 'max' => 20],
            [['extention'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'catid' => 'Catid',
            'tagid' => 'Tagid',
            'module' => 'Module',
            'modelid' => 'Modelid',
            'thumb' => 'Thumb',
            'data' => 'Data',
            'siteid' => 'Siteid',
            'listorder' => 'Listorder',
            'expiration' => 'Expiration',
            'extention' => 'Extention',
            'synedit' => 'Synedit',
        ];
    }
}
