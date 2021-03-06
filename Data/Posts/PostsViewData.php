<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.3.2017 г.
 * Time: 23:12 ч.
 */

namespace Data\Posts;


class PostsViewData
{
    private $id;
    private $authorId;
    private $author;
    private $picture;
    private $datePublished;
    private $townFrom;
    private $townTo;
    private $departureTime;
    private $price;
    private $seats;
    private $description;


    public function getId()
    {
        return $this->id;
    }

    public function getAuthorId()
    {
        return $this->authorId;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function getDatePublished()
    {
        return $this->datePublished;
    }

    public function getTownFrom()
    {
        return $this->townFrom;
    }

    public function getTownTo()
    {
        return $this->townTo;
    }

    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSeats()
    {
        return $this->seats;
    }

    public function getDescription()
    {
        return $this->description;
    }
    
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

}
