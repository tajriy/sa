<?php
    namespace app\models;

    use Yii;

    /**
     * This is the model class for table "rules".
     *
     * @property string $kd_rules
     * @property string $jika
     * @property string $maka
     */
    class Rules extends \yii\db\ActiveRecord{
        public $kodeRules;
        public $tmpGejala;

        /**
         * @inheritdoc
         */
        public static function tableName()
        {
            return 'rules';
        }

        /**
         * @inheritdoc
         */
        public function rules()
        {
            return [
                [
                    [
                        'kd_rules' ,
                        'jika',
                    ] ,
                    'required',
                ] ,
                [
                    ['kd_rules'] ,
                    'string' ,
                    'max' => 4,
                ] ,
                [
                    ['maka'] ,
                    'string' ,
                    'max' => 3,
                ] ,
            ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels()
        {
            return [
                'kd_rules' => 'Kd Rules' ,
                'jika' => 'Jika' ,
                'maka' => 'Maka' ,
            ];
        }

        public function getRecords()
        {
            $kf = new Kf();
            $data = $kf->runquery([
                "sql" => "SELECT * FROM rules" ,
                "fetch" => "fetchAll",
            ]);

            return $data;
        }

        function getRecord($index , array $data)
        {
            $data=$data[$index];
            return $data;
        }

        public function getControlIf($control)
        {
            $control=explode(" and ",$control);
            return $control;
        }

        public function getAskByKey($key)
        {
            $kf = new Kf();
            $data = $kf->runquery([
                "sql" => "SELECT * FROM gejala WHERE kd_gejala='$key'" ,
                "fetch" => "fetch",
            ]);
            $data = $data["pertanyaan"];

            return $data;
        }
    }
