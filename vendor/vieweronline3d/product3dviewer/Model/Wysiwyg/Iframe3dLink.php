<?php

namespace Vieweronline3d\Product3DViewer\Model\Wysiwyg;

use Magento\Framework\DataObject;
use Magento\Framework\View\Asset\Repository;

class Iframe3dLink
{
    protected const PLUGIN_NAME = 'iframe3dlink';

    /**
     * @var Repository
     */
    protected $assetRepo;

    /**
     * Iframe3dLink constructor.
     *
     * @param Repository $assetRepo
     */
    public function __construct(
        Repository $assetRepo
    ) {
        $this->assetRepo = $assetRepo;
    }

    /**
     * Plugin settings
     *
     * @param DataObject $config
     * @return array
     */
    public function getPluginSettings(DataObject $config)
    {
        $plugins = $config->getData('plugins');
        $plugins[] = [
                'name' => self::PLUGIN_NAME,
                'src' => $this->getPluginJsSrc(),
                'options' => [
                    'title' => __('3D Viewer'),
                    'class' => '',
                    'css' => $this->getPluginCssSrc()
                ],
            ];

        return ['plugins' => $plugins];
    }

    /**
     * Plugin js src
     *
     * @return string
     */
    private function getPluginJsSrc()
    {
        return $this->assetRepo->getUrl(
            sprintf('Vieweronline3d_Product3DViewer::js/tiny_mce/plugins/%s/editor_plugin.js', self::PLUGIN_NAME)
        );
    }

    /**
     * Plugin css src
     *
     * @return string
     */
    private function getPluginCssSrc()
    {
        return $this->assetRepo->getUrl(
            sprintf('Vieweronline3d_Product3DViewer::css/tiny_mce/plugins/%s/content.css', self::PLUGIN_NAME)
        );
    }
}
