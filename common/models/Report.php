<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $username
 * @property string $subject
 * @property string $content
 * @property double $score
 * @property string $create_at
 * @property string $update_at
 * @property string $pic
 * @property integer $status
 */
class Report extends \yii\db\ActiveRecord
{
    const STATUS_AOLLOW=1;
    const SCORE_DEFAULT=0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'username', 'subject', 'score','start_at'], 'required'],
            [['user_id',  'status'], 'integer'],
            [['content', 'username', 'pic'], 'string'],
            [['score'], 'number'],
            [['score'],  'default', 'value'=>0],
            [['status'],  'default', 'value'=>self::SCORE_DEFAULT],
            [['create_at', 'update_at'], 'safe'],
            [['subject'], 'string', 'max' => 250],
            [['username'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'user_id' => Yii::t('common', 'User ID'),
            'username' => Yii::t('common', 'Username'),
            'subject' => Yii::t('common', 'Subject'),
            'content' => Yii::t('common', 'Content'),
            'score' => Yii::t('common', 'Score'),
            'start_at' => Yii::t('common', 'Start At'),
            'create_at' => Yii::t('common', 'Create At'),
            'update_at' => Yii::t('common', 'Update At'),
            'pic' => Yii::t('common', 'Pic'),
            'status' => Yii::t('common', 'Status'),
        ];
    }
}
