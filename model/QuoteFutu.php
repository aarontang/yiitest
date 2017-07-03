<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "quote_futu".
 *
 * @property string $symbol
 * @property string $list_date
 * @property string $sec_short_name
 * @property string $sec_full_name
 * @property string $ticker
 * @property string $exchange_cd
 * @property string $contract_type
 * @property string $contract_object
 * @property string $price_unit
 * @property double $min_chg_price_num
 * @property string $min_chg_price_unit
 * @property integer $price_valid_decimal
 * @property double $limit_up_num
 * @property string $limit_up_unit
 * @property double $limit_down_num
 * @property string $limit_down_unit
 * @property string $trans_curr_cd
 * @property double $cont_mult_num
 * @property string $cont_mult_unit
 * @property double $trade_margin_ratio
 * @property integer $deli_year
 * @property integer $deli_month
 * @property string $last_trade_date
 * @property string $first_deli_date
 * @property string $last_deli_date
 * @property string $deli_method
 * @property string $deli_grade
 * @property double $trade_commi_num
 * @property string $trade_commi_unit
 * @property double $deli_commi_num
 * @property string $deli_commi_unit
 * @property double $list_basis_price
 * @property string $sett_price_method
 * @property string $deli_price_method
 * @property string $contract_status
 * @property string $updated_at
 */
class QuoteFutu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quote_futu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['symbol', 'list_date'], 'required'],
            [['list_date', 'last_trade_date', 'first_deli_date', 'last_deli_date'], 'safe'],
            [['min_chg_price_num', 'limit_up_num', 'limit_down_num', 'cont_mult_num', 'trade_margin_ratio', 'trade_commi_num', 'deli_commi_num', 'list_basis_price'], 'number'],
            [['price_valid_decimal', 'deli_year', 'deli_month', 'updated_at'], 'integer'],
            [['symbol'], 'string', 'max' => 12],
            [['sec_short_name', 'ticker'], 'string', 'max' => 20],
            [['sec_full_name'], 'string', 'max' => 50],
            [['exchange_cd', 'limit_up_unit'], 'string', 'max' => 10],
            [['contract_type', 'contract_object', 'price_unit', 'min_chg_price_unit', 'limit_down_unit', 'trans_curr_cd', 'cont_mult_unit', 'trade_commi_unit', 'deli_commi_unit'], 'string', 'max' => 100],
            [['deli_method'], 'string', 'max' => 1],
            [['deli_grade'], 'string', 'max' => 512],
            [['sett_price_method', 'deli_price_method'], 'string', 'max' => 255],
            [['contract_status'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'symbol' => '合约内部编码',
            'list_date' => '合约上市日',
            'sec_short_name' => '合约简称',
            'sec_full_name' => '合约全称',
            'ticker' => '合约代码',
            'exchange_cd' => '市场编码',
            'contract_type' => '期货合约类型',
            'contract_object' => '期货合约标的',
            'price_unit' => '报价单位',
            'min_chg_price_num' => '最小变动价位(数值)',
            'min_chg_price_unit' => '最小变动价位(单位)',
            'price_valid_decimal' => '行情有效小数位',
            'limit_up_num' => '涨停板幅度(数值)',
            'limit_up_unit' => '涨停板幅度(单位)',
            'limit_down_num' => '跌停板幅度(数值)',
            'limit_down_unit' => '跌停板服务(单位)',
            'trans_curr_cd' => '交易货币',
            'cont_mult_num' => '合约乘数(数值)',
            'cont_mult_unit' => '合约乘数(单位)',
            'trade_margin_ratio' => '交易保证金(%)',
            'deli_year' => '交割年',
            'deli_month' => '交割月',
            'last_trade_date' => '最后交易日',
            'first_deli_date' => '开始交割日',
            'last_deli_date' => '最后交割日',
            'deli_method' => '交割方式',
            'deli_grade' => '交割品级',
            'trade_commi_num' => '交易手续费(数值)',
            'trade_commi_unit' => '交易手续费(单位)',
            'deli_commi_num' => '交割手续费(数值)',
            'deli_commi_unit' => '交割手续费(单位)',
            'list_basis_price' => '挂牌基准价',
            'sett_price_method' => '当日结算价计算方式',
            'deli_price_method' => '交割结算价计算方式	',
            'contract_status' => '期货合约状态',
            'updated_at' => '最后更新时间',
        ];
    }
}
