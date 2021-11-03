<?php

namespace Core\Model\View;

class Layout
{
    const LAYOUT_PATH = 'course\resources\layout';
    const BASE_LAYOUT = 'default.php';
    const ROOT_NODE = 'root';

    private $loadedLayout = [];

    /**
     * controller_action
     * default_default => default/default
     */
    public function loadLayout($page)
    {
        $pathToLayout = str_replace('_', DS, $page) . '.php';
        $filesToParse = [
            self::BASE_LAYOUT,
            $pathToLayout
        ];

        foreach ($filesToParse as $file) {
            $content = include BD . DS . self::LAYOUT_PATH . DS . $file;
            $this->loadedLayout = array_replace_recursive($this->loadedLayout, $content);
        }

        return $this;
    }

    private function buildTree($node)
    {
        $block = new $node['type'];
        /**
         * @var $block \Core\Block\Template
         */
        $block->setTemplate($node['template']);
        if (isset($node['children'])) {
            foreach ($node['children'] as $name => $child) {
                $block->addChild($name, $this->buildTree($child));
            }
        }

        return $block;
    }

    public function render()
    {
        $tree = $this->buildTree($this->loadedLayout[self::ROOT_NODE]);
        $tree->toHtml();
    }
}
