<?php

namespace app\model;

use Yii;

/**
 * This is the model class for table "quote_futu_master".
 *
 * @property string $symbol
 * @property string $trade_date
 * @property string $contract_mark
 * @property double $pre_settle_price
 * @property double $pre_close_price
 * @property double $open_price
 * @property double $highest_price
 * @property double $lowest_price
 * @property double $close_price
 * @property double $settle_price
 * @property string $turnover_vol
 * @property string $turnover_value
 * @property string $open_int
 * @property integer $main_con
 * @property integer $smain_con
 * @property string $updated_at
 */
class QuoteFutuMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quote_futu_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['symbol', 'trade_date'], 'required'],
            [['trade_date'], 'safe'],
            [['pre_settle_price', 'pre_close_price', 'open_price', 'highest_price', 'lowest_price', 'close_price', 'settle_price', 'turnover_value'], 'number'],
            [['turnover_vol', 'open_int', 'main_con', 'smain_con', 'updated_at'], 'integer'],
            [['symbol'], 'string', 'max' => 12],
            [['contract_mark'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'symbol' => '证券编码',
            'trade_date' => '交易日',
            'contract_mark' => '连续标记',
            'pre_settle_price' => '昨收盘',
            'pre_close_price' => '昨结算',
            'open_price' => '今开盘',
            'highest_price' => '最高价',
            'lowest_price' => '最低价',
            'close_price' => '今收盘',
            'settle_price' => '结算价',
            'turnover_vol' => '成交数量',
            'turnover_value' => '成交金额',
            'open_int' => '持仓量',
            'main_con' => '是否主力',
            'smain_con' => '是否次主力',
            'updated_at' => 'Updated At',
        ];
    }
}
