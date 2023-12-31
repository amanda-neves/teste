<?php


namespace Custom\HrefLang\Model;

/**
 * Interface PropertyInterface
 * @package Custom\HrefLang\Api\Data
 * @api
 */
interface PropertyInterface
{
    /**
     * @param string $prefix
     * @return $this
     */
    public function setPrefix(string $prefix);

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setMetaAttributeName(string $attributeName);

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title);

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description);

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url);

    /**
     * @param string $image
     * @return $this
     */
    public function setImage(string $image);

    /**
     * @param string $imageAlt
     * @return $this
     */
    public function setImageAlt(string $imageAlt);

    /**
     * @param string $key
     * @param string|array $value
     * @param string $group
     * @return string
     */
    public function addProperty(string $key, $value, string $group = Property::DEFAULT_GROUP);

    /**
     * @param string $key
     * @param string $group
     * @return string
     */
    public function getProperty(string $key, string $group = Property::DEFAULT_GROUP);

    /**
     * @param string $key
     * @param string $group
     * @return $this
     */
    public function removeProperty(string $key, string $group = Property::DEFAULT_GROUP);

    /**
     * @param string $group
     * @return string
     */
    public function toHtml(string $group = Property::DEFAULT_GROUP);

    /**
     * @param string $group
     * @return bool
     */
    public function hasData(string $group = Property::DEFAULT_GROUP);
}
