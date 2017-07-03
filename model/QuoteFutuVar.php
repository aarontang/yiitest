<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "quote_futu_var".
 *
 * @property string $var_code
 * @property string $exchange_cd
 * @property string $var_uni_code
 * @property string $var_name
 * @property string $cont_mult
 * @property string $price_unit
 * @property string $min_chg_price
 * @property string $chg_pct_limit
 * @property string $cont_month
 * @property string $trade_time
 * @property string $last_tdate_desc
 * @property string $last_ttime_desc
 * @property string $deli_date_desc
 * @property string $deli_method
 * @property string $deli_addr
 * @property string $deli_grade
 * @property string $min_margin_ratio
 * @property string $trade_commi
 * @property string $min_deli_unit
 * @property string $updated_at
 * @property string $update_time
 */
class QuoteFutuVar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quote_futu_var';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['var_code', 'exchange_cd'], 'required'],
            [['updated_at'], 'integer'],
            [['update_time'], 'safe'],
            [['var_code', 'var_uni_code'], 'string', 'max' => 3],
            [['exchange_cd'], 'string', 'max' => 4],
            [['var_name'], 'string', 'max' => 30],
            [['cont_mult', 'min_deli_unit'], 'string', 'max' => 10],
            [['price_unit', 'min_chg_price', 'chg_pct_limit', 'cont_month'], 'string', 'max' => 50],
            [['trade_time', 'last_tdate_desc', 'last_ttime_desc', 'deli_date_desc', 'deli_addr', 'deli_grade', 'min_margin_ratio', 'trade_commi'], 'string', 'max' => 255],
            [['deli_method'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'var_code' => '品种交易代码',
            'exchange_cd' => '交易所',
            'var_uni_code' => '品种编码',
            'var_name' => '品种名称',
            'cont_mult' => '合约乘数',
            'price_unit' => '报价单位',
            'min_chg_price' => '最小变动单位',
            'chg_pct_limit' => '涨停盘幅度',
            'cont_month' => '合约年份',
            'trade_time' => '交易时间',
            'last_tdate_desc' => '最后交易日描述',
            'last_ttime_desc' => '最后交易日交易时间',
            'deli_date_desc' => '交割日期描述',
            'deli_method' => '交割方式',
            'deli_addr' => '交割地点',
            'deli_grade' => '交割品级',
            'min_margin_ratio' => '最低保证品质金率',
            'trade_commi' => '交易手续费',
            'min_deli_unit' => '最小交割单位',
            'updated_at' => '最后更新时间',
            'update_time' => 'datayes更新时间',
        ];
    }
}
