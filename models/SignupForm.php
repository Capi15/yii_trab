<?php


namespace app\models;


use yii\base\Model;
use yii\helpers\VarDumper;

class SignupForm extends Model
{
    public $username;
    public $password;
    public $password_confirmation;

    public function rules()
    {
        return [
            [['username', 'password', 'password_confirmation'], 'required'],
            ['username', 'string', 'min' => 4, 'max' => 20],
            [['password', 'password_confirmation'], 'string', 'min' => 8],
            ['password_confirmation', 'compare', 'compareAttribute' => 'password']
        ];
    }

    public function signup(){
        $user = new Users();
        $user->username = $this->username;
        $user->password = \Yii::$app->security->generatePasswordHash($this->password);
        $user->access_token = \Yii::$app->security->generateRandomString();
        $user->auth_key = \Yii::$app->security->generateRandomString();

        if($user->save()){
            return true;
        }

        \Yii::error("The user could not be saved" . VarDumper::dumpAsString($user->errors));
        return false;
    }


}