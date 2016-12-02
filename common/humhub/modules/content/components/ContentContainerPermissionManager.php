<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace common\humhub\modules\content\components;

use common\humhub\modules\user\components\PermissionManager;
use common\humhub\modules\content\models\ContentContainerPermission;
use common\humhub\libs\BasePermission;

/**
 * @inheritdoc
 */
class ContentContainerPermissionManager extends PermissionManager
{

    /**
     * @var ContentContainerActiveRecord
     */
    public $contentContainer = null;

    /**
     * @inheritdoc
     */
    public function can(BasePermission $permission)
    {
        $groupId = $this->contentContainer->getUserGroup();
        if ($this->getGroupState($groupId, $permission) == BasePermission::STATE_ALLOW) {
            return true;
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    protected function getModulePermissions(\yii\base\Module $module)
    {
        if ($module instanceof \common\humhub\components\Module) {
            return $module->getPermissions($this->contentContainer);
        }
        return [];
    }

    /**
     * @inheritdoc
     */
    protected function createPermissionRecord()
    {
        $permission = new ContentContainerPermission;
        $permission->contentcontainer_id = $this->contentContainer->contentcontainer_id;
        return $permission;
    }

    /**
     * @inheritdoc
     */
    protected function getQuery()
    {
        return \common\humhub\modules\content\models\ContentContainerPermission::find()->where(['contentcontainer_id' => $this->contentContainer->contentcontainer_id]);
    }

}
