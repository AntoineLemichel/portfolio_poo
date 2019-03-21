<?php

declare(strict_types=1);

/**
 * Class Production
 */
class Production
{
    protected
        $id,
        $title,
        $body,
        $image,
        $link1,
        $link2,
        $isOnline,
        $tags_id;

    public function __construct(array $array)
    {
        $this->hydrate($array);
    }

    /**
     * @param array $array
     */
    public function hydrate(array $array){
        foreach ($array as $key => $value){
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
    /**
     * @return $this
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return $this
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return $this
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return $this
     */
    public function getLink1()
    {
        return $this->link1;
    }

    /**
     * @return $this
     */
    public function getLink2()
    {
        return $this->link2;
    }

    /**
     * @return $this
     */
    public function getIsOnline()
    {
        return $this->isOnline;
    }

    /**
     * @return $this
     */
    public function getTags_id()
    {
        return $this->tags_id;
    }

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $id = (int) $id;
        if (is_int($id) and $id > 0) {
            $this->id = $id;

            return $this;
        }
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle(string $title)
    {
        if (is_string($title) and strlen($title) > 0) {
            $this->title = $title;

            return $this;
        }
    }

    /**
     * @param string $body
     *
     * @return $this
     */
    public function setBody(string $body)
    {
        if (is_string($body) and strlen($body) > 0) {
            $this->body = $body;

            return $this;
        }
    }

    /**
     * @param string $image
     *
     * @return $this
     */
    public function setImage(string $image)
    {
        if (is_string($image) and strlen($image) > 0) {
            $this->image = $image;

            return $this;
        }
    }

    /**
     * @param string $link1
     * @return $this
     */
    public function setLink1(string $link1){
        if (is_string($link1)){
            $this->link1 = $link1;

            return $this;
        }
    }

    /**
     * @param string $link2
     * @return $this
     */
    public function setLink2(string $link2){
        if (is_string($link2)){
            $this->link2 = $link2;

            return $this;
        }

    }

    /**
     * @param int $isOnline
     * @return $this
     */
    public function setIsOnline($isOnline){
        $isOnline = (int) $isOnline;
        if (is_int($isOnline) and ($isOnline >= 0 or $isOnline <= 1)){
            $this->isOnline = $isOnline;

            return $this;
        }
    }

    /**
     * @param int $tags_id
     * @return $this
     */
    public function setTagsId($tags_id){
        $tags_id = (int) $tags_id;
        if (is_int($tags_id) and $tags_id > 0){
            $this->tags_id = $tags_id;

            return $this;
        }
    }
}
