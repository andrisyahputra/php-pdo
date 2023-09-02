<?php

namespace Repository {

    use Model\Comment;

    interface CommenRepository
    {
        function insert(Comment $comment): Comment;
        function findById(int $id): ?Comment;
        function findAll(): array;
    }

    class CommenRepositoryImp implements CommenRepository
    {
        public function __construct(private \PDO $connection)
        {
        }

        public function insert(Comment $comment): Comment
        {
            $sql = "INSERT INTO comment (nama, komentar) VALUES (?,?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$comment->getNama(), $comment->getKomentar()]);
            $id = $this->connection->lastInsertId();
            $comment->setId($id);

            return $comment;
        }

        public function findById(int $id): ?Comment
        {
            $sql = "SELECT * FROM comment WHERE id = ?";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$id]);
            $id = $this->connection->lastInsertId();

            if ($row = $statement->fetch()) {
                return new Comment(
                    id: $row["id"],
                    nama: $row["nama"],
                    komentar: $row["komentar"]
                );
            } else {
                return null;
            }
        }

        public function findAll(): array
        {
            $sql = "SELECT * FROM comment";
            $statement = $this->connection->query($sql);

            $array = [];
            while ($row = $statement->fetch()) {
                $array[] = new Comment(
                    id: $row["id"],
                    nama: $row["nama"],
                    komentar: $row["komentar"]
                );
            }

            return $array;
        }
    }
}
