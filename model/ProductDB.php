<?php


namespace Model;


use PDO;

class ProductDB
{
    public $connection;
    public function __construct()
    {
        $this->connection = new DBConnect();
    }

    public function create(object $product)
    {
        try {
            $sql = "INSERT INTO products(`name`, `category`, `price`, `quantity`, `description`) VALUES (?,?,?,?,?)";
            $stmt = $this->connection->connect()->prepare($sql);
            $stmt->bindParam(1, $product->name);
            $stmt->bindParam(2, $product->category);
            $stmt->bindParam(3, $product->price);
            $stmt->bindParam(4, $product->quantity);
            $stmt->bindParam(5, $product->description);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

        public function getAllProduct(): array
    {

        $sql = "SELECT * FROM products ORDER BY id ASC";
        $stmt = $this->connection->connect()->query($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        return $stmt->fetchAll();
    }

    public function updateProduct($id, $product)
    {
        $sql = "UPDATE products SET `name` = ?,`category` = ?, `price` = ?, `quantity` = ?, `description` = ? WHERE  id = ?";
        $stmt = $this->connection->connect()->prepare($sql);
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $product->category);
        $stmt->bindParam(3, $product->price);
        $stmt->bindParam(4, $product->quantity);
        $stmt->bindParam(5, $product->description);
        $stmt->bindParam(6, $id);
        return $stmt->execute();
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id = $id";
        $stmt = $this->connection->connect()->query($sql);
        $stmt->execute();
    }

    public function searchProduct($name): array
    {
        $products = [];
        $sql = "SELECT * FROM products WHERE `name` LIKE '%' '$name' '%'";
        $stmt = $this->connection->connect()->query($sql);
        $stmt ->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $item) {
            $product = new Products($item);
            $product->setName($item['name']);
            $product->setId($item['id']);
            $products[] = $product;
        }
        return $products;
    }

}