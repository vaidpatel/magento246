<?php

namespace Vieweronline3d\Product3DViewer\Plugin\Wysiwyg;

use Magento\Cms\Model\Wysiwyg\Config as Subject;
use Magento\Framework\DataObject;
use Vieweronline3d\Product3DViewer\Model\Wysiwyg\Iframe3dLink;

class ConfigPlugin
{
    /**
     * @var Iframe3dLink
     */
    private $iframe3dLink;

    /**
     * ConfigPlugin constructor.
     *
     * @param Iframe3dLink $iframe3dLink
     */
    public function __construct(
        Iframe3dLink $iframe3dLink
    ) {
        $this->iframe3dLink = $iframe3dLink;
    }

    /**
     * Get config
     *
     * @param Subject $subject
     * @param DataObject $config
     * @return DataObject
     */
    public function afterGetConfig(Subject $subject, DataObject $config)
    {
        $iframe3dLinkPluginSettings = $this->iframe3dLink->getPluginSettings($config);
        $config->addData($iframe3dLinkPluginSettings);
        return $config;
    }
}
