<?php
namespace Opencart\Admin\Model\Extension\PsImportantSecurityNotification\Other;
/**
 * Class PsImportantSecurityNotification
 *
 * @package Opencart\Admin\Model\Extension\PsImportantSecurityNotification\Other
 */
class PsImportantSecurityNotification extends \Opencart\System\Engine\Model
{
    /**
     * @param array $args
     *
     * @return array
     */
    public function replaceAdminViewCommonDashboarViews(array $args): array
    {
        $views = [];

        $views[] = [
            'search' => '{{ security }}',
            'replace' => ''
        ];

        return $views;
    }
}
