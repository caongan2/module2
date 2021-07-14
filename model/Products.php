<?php


namespace Model;


class Products
{
    public $id;
    public $name;
    public $category;
    public $price;
    public $quantity;
    public $description;
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->category = $data['category'];
        $this->price = $data['price'];
        $this->quantity = $data['quantity'];
        $this->description = $data['description'];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCategory(): mixed
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory(mixed $category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getPrice(): mixed
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice(mixed $price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getQuantity(): mixed
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity(mixed $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getDate(): mixed
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate(mixed $date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDescription(): mixed
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription(mixed $description): void
    {
        $this->description = $description;
    }


}