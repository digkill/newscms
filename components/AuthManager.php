<?php
/**
 * Created by PhpStorm.
 * User: digkill
 * Date: 09.11.17
 * Time: 13:27
 */

namespace app\components;

use app\modules\user\models\User;
use yii\rbac\Assignment;
use yii\rbac\PhpManager;
use Yii;

class AuthManager extends PhpManager
{
    public function getAssignments($userId)
    {
        if ($userId && $user = $this->getUser($userId)) {
            $assignment = new Assignment();
            $assignment->userId = $userId;
            $assignment->roleName = $user->role;
            return [$assignment->roleName => $assignment];
        }
        return [];
    }

    public function getAssignment($roleName, $userId)
    {
        if ($userId && $user = $this->getUser($userId)) {
            if ($user->role == $roleName) {
                $assignment = new Assignment();
                $assignment->userId = $userId;
                $assignment->roleName = $user->role;
                return $assignment;
            }
        }
        return null;
    }

    /**
     * @param integer $userId
     * @return null|\yii\web\IdentityInterface|User
     */
    private function getUser($userId)
    {
        $webUser = Yii::$app->get('user', false);
        if ($webUser && !$webUser->getIsGuest() && $webUser->getId() == $userId) {
            return $webUser->getIdentity();
        } else {
            return User::findOne($userId);
        }
    }

    public function getUserIdsByRole($roleName)
    {
        return User::find()->where(['role' => $roleName])->select('id')->column();
    }

    public function assign($role, $userId)
    {
        if ($userId && $user = $this->getUser($userId)) {
            $assignment = new Assignment([
                'userId' => $userId,
                'roleName' => $role->name,
                'createdAt' => time(),
            ]);
            $this->setRole($user, $role->name);
            return $assignment;
        }
        return null;
    }

    public function revoke($role, $userId)
    {
        if ($userId && $user = $this->getUser($userId)) {
            if ($user->role == $role->name) {
                $this->setRole($user, null);
                return true;
            }
        }
        return false;
    }

    public function revokeAll($userId)
    {
        if ($userId && $user = $this->getUser($userId)) {
            $this->setRole($user, null);
            return true;
        }
        return false;
    }

    /**
     * @param User $user
     * @param string $roleName
     */
    private function setRole(User $user, $roleName)
    {
        $user->role = $roleName;
        $user->updateAttributes(['role' => $roleName]);
    }
}