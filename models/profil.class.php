<?php

class Profil
{
    const TABLENAME = '`profil`';
    private $data;

    public function __construct($id,$firstname, $lastname, $phone, $email, $adress, $createdAt, $updatedAt)
    {
        $this->data['id'] = $id;
        $this->data['firstname'] = $firstname;
        $this->data['lastname'] = $lastname;
        $this->data['phone'] = $phone;
        $this->data['email'] = $email;
        $this->data['adress'] = $adress;
        $this->data['createdAt'] = $createdAt;
        $this->data['updatedAt'] = $updatedAt;
    }

    public function __get($key)
    {
        if(isset($this->data[$key]))
        {
            return $this->data[$key];
        }
    }


    public static function find($where = '')
    {
        $db = $GLOBALS['db'];
        $result = null;

        try 
        {
            $sql = 'SELECT * FROM ' . self::TABLENAME;

            if(!empty($where))
            {
                $sql .= ' WHERE ' . $where . ';';
            }

            $result = $db->query($sql)->fetchAll();
        } 
        catch (PDOException $e)
        {
            die('Select statement failed: ' . $e->getMessage());
        }

        return $result;
    }

    public function insert()
    {
        $db = $GLOBALS['db'];

        try
        {
            $sql = 'INSERT INTO ' . self::TABLENAME . ' (id,adress,createdAt) VALUES (:id,:adress,:createdAt)';

            $statement = $db->prepare($sql);
            $statement->bindParam(':id', $this->id);
            $statement->bindParam(':adress', $this->adress);
            $statement->bindParam(':createdAt', $this->createdAt);

            $statement->execute();
            return true;
        }
        catch (\PDOException $e)
        {
            die('Error inserting profile: ' . $e->getMessage());
        }
        return false;
    }



    public function delete()
    {
        $db = $GLOBALS['db'];

        try 
        {
            $sql = 'DELETE FROM ' . self::TABLENAME . ' WHERE id = ' . $this->id;
            $db->exec($sql);
            return true;
        }
        catch(\PDOException $e)
        {
            die('Error deleting bike: '.$e->getMessage());
        }
        return false;
    }
}