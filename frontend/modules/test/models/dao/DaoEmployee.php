<?php

namespace frontend\modules\test\models\dao;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $num
 * @property string $sex
 * @property string $cname
 * @property string $ename
 * @property string $email
 * @property string $remark
 * @property integer $create_time
 * @property integer $update_time
 */
class DaoEmployee extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'num', 'sex', 'cname', 'ename', 'email'/* , 'create_time', 'update_time' */], 'required'],
            [['id', 'create_time', 'update_time'], 'integer'],
            [['sex'], 'string'],
            [['num'], 'string', 'max' => 6],
            [['cname'], 'string', 'max' => 10],
            [['ename'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 30],
            [['remark'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num' => '工号',
            'sex' => '性别',
            'cname' => '中文名',
            'ename' => '英文名',
            'email' => '邮箱',
            'remark' => '备注',
            'create_time' => '创建时间',
            'update_time' => '更新时间',
        ];
    }
}
