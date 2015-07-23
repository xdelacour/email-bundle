<?php

namespace Azine\EmailBundle\Entity;

/**
 * Notification
 */
class NotificationType
{
    const MESSAGE = 1;
    const IMPORTANCE_NORMAL = 2;
    const IMPORTANCE_HIGH = 3;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $label;
    /**
     * @var string
     */
    private $template;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }


}
