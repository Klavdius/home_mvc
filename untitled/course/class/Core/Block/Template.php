<?php

namespace Core\Block;

class Template
{
    const TEMPLATE_PATH = 'course/resources/templates';

    private $template;
    private $children = [];

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    public function toHtml()
    {
        if ($this->getTemplate()) {
            include str_replace('/', DS, BD . DS . self::TEMPLATE_PATH . DS . $this->getTemplate());
        }
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function getChild($name)
    {
        return isset($this->children[$name]) ? $this->children[$name] : null;
    }

    public function addChild($name, $child)
    {
        $this->children[$name] = $child;
        return $this;
    }
}
