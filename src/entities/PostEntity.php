<?php
declare(strict_types=1);

class PostEntity
{
    private int $id;
    private string $title;
    private string $content;
    private string $category_id;
    private string $username;
    private string $date_time;
    private int $likes;
    private int $dislikes;
    private int $category_2;

    /**
     * @param int $id
     * @param string $title
     * @param string $content
     * @param string $category_id
     * @param string $username
     * @param string $date_time
     * @param int $likes
     * @param int $dislikes
     * @param int $category_2
     */
    public function __construct(int $id = 0, string $title = '', string $content = '', string $category_id = '', string $username = '', string $date_time = '', int $likes = 0,  int $dislikes = 0, int $category_2 = 0)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->category_id = $category_id;
        $this->username = $username;
        $this->date_time = $date_time;
        $this->likes = $likes;
        $this->dislikes = $dislikes;
        $this->category_2 = $category_2;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getCategoryId(): string
    {
        return $this->category_id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getDateTime(): string
    {
        return $this->date_time;
    }

    public function getLikes(): int
    {
        return $this->likes;
    }

    public function getDislikes(): int
    {
        return $this->dislikes;
    }

    public function getCategory2(): int
    {
        return $this->category_2;
    }


}