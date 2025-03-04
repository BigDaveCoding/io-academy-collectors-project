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