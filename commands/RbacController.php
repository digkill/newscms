<?php
/**
 * Created by PhpStorm.
 * User: digkill
 * Date: 09.11.17
 * Time: 11:26
 */

namespace app\commands;

use app\modules\admin\rbac\Rbac as AdminRbac;
use Yii;
use yii\console\Controller;

/**
 * RBAC generator
 */
class RbacController extends Controller
{
    /**
     * Generates roles
     */
    public function actionInit()
    {
        $auth = Yii::$app->getAuthManager();


        $auth->removeAll();
        $adminPanel = $auth->createPermission(AdminRbac::PERMISSION_ADMIN_PANEL);
        $adminPanel->description = 'Admin panel';
        $auth->add($adminPanel);

        $user = $auth->createRole('user');
        $user->description = 'User';
        $auth->add($user);

        $admin = $auth->createRole('admin');
        $admin->description = 'Admin';
        $auth->add($admin);

        $manager = $auth->createRole('manager');
        $manager->description = 'Manager';
        $auth->add($manager);

        $auth->addChild($admin, $user);
        $auth->addChild($admin, $adminPanel);
        $auth->addChild($manager, $user);

        $this->stdout('Done!' . PHP_EOL);
    }
}