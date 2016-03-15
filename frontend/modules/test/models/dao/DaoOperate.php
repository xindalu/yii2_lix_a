<?php

namespace frontend\modules\test\models\dao;

use Yii;
use yii\mongodb\ActiveRecord;

/**
 * This is the model class for table "operate".
 *
 * @property integer $_id
 * @property string $operate
 * @property integer $operateTime
 */
class DaoOperate extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dao_operate';
    }
    
    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'operate',
            'operateTime',
        ];
    }
}
