<?php
    namespace app\models;

    use Yii;
    use yii\base\NotSupportedException;
    use yii\db\ActiveRecord;
    //    use yii\helpers\Security;
    use yii\web\IdentityInterface;

    /**
     * This is the model class for table "user".
     *
     * @property integer $id
     * @property string  $username
     * @property string  $password
     * @property string  $authKey
     * @property string  $accessToken
     */
    class User extends \yii\db\ActiveRecord implements IdentityInterface{
        /**
         * @inheritdoc
         */
        public static function tableName()
        {
            return 'user';
        }

        /**
         * @inheritdoc
         */
        public function rules()
        {
            return [
                [
                    [
                        'username' ,
                        'password' ,
                        'authKey' ,
                        'accessToken' ,
                    ] ,
                    'required' ,
                ] ,
                [
                    ['username'] ,
                    'string' ,
                    'max' => 25 ,
                ] ,
                [
                    [
                        'password' ,
                        'authKey' ,
                        'accessToken' ,
                    ] ,
                    'string' ,
                    'max' => 128 ,
                ] ,
            ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels()
        {
            return [
                'id'          => 'ID' ,
                'username'    => 'Username' ,
                'password'    => 'Password' ,
                'authKey'     => 'Auth Key' ,
                'accessToken' => 'Access Token' ,
            ];
        }

        /**
         * Finds an identity by the given ID.
         *
         * @param string|integer $id the ID to be looked for
         *
         * @return IdentityInterface the identity object that matches the given ID.
         * Null should be returned if such an identity cannot be found
         * or the identity is not in an active state (disabled, deleted, etc.)
         */
        public static function findIdentity($id)
        {
            // TODO: Implement findIdentity() method.
            return static::findOne($id);
        }

        /**
         * Finds an identity by the given token.
         *
         * @param mixed $token the token to be looked for
         * @param mixed $type  the type of the token. The value of this parameter depends on the implementation.
         *                     For example, [[\yii\filters\auth\HttpBearerAuth]] will set this parameter to be
         *                     `yii\filters\auth\HttpBearerAuth`.
         *
         * @return IdentityInterface the identity object that matches the given token.
         * Null should be returned if such an identity cannot be found
         * or the identity is not in an active state (disabled, deleted, etc.)
         */
        public static function findIdentityByAccessToken($token , $type = NULL)
        {
            // TODO: Implement findIdentityByAccessToken() method.
            return static::findOne(['accessToken' => $token]);
        }

        //------------------------------------------------------------
        /* removed
    public static function findIdentityByAccessToken($token)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }
*/
        /**
         * Finds user by username
         *
         * @param  string $username
         *
         * @return static|null
         */
        public static function findByUsername($username , $password)
        {
            return static::findOne([
                'username' => $username ,
                'password' => md5($password) ,
            ]);
        }

        /**
         * Finds user by password reset token
         *
         * @param  string $token password reset token
         *
         * @return static|null
         */
        //        public static function findByPasswordResetToken($token)
        //        {
        //            $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        //            $parts = explode('_', $token);
        //            $timestamp = (int) end($parts);
        //            if ($timestamp + $expire < time()) {
        //                // token expired
        //                return null;
        //            }
        //
        //            return static::findOne([
        //                'password_reset_token' => $token
        //            ]);
        //        }
        /**
         * @inheritdoc
         */
        public function getId()
        {
            return $this->getPrimaryKey();
        }

        /**
         * @inheritdoc
         */
        public function getAuthKey()
        {
            return $this->authKey;
        }

        /**
         * @inheritdoc
         */
        public function validateAuthKey($authKey)
        {
            return $this->getAuthKey() === $authKey;
        }

        /**
         * Validates password
         *
         * @param  string $password password to validate
         *
         * @return boolean if password provided is valid for current user
         */
        public function validatePassword($password)
        {
            return md5($password)==$this->password;
        }

        /**
         * Generates password hash from password and sets it to the model
         *
         * @param string $password
         */
        public function setPassword($password)
        {
            $this->password = md5($password);
        }

        /**
         * Generates "remember me" authentication key
         */
        public function generateAuthKey()
        {
            $this->authKey = Yii::$app->getSecurity()->generateRandomKey();
        }


        public function beforeSave($insert)
        {
            if(parent::beforeSave($insert)){
                if($this->isNewRecord){
                    $this->authKey = \Yii::$app->security->generateRandomString();
                }

                return TRUE;
            }

            return FALSE;
        }
    }
