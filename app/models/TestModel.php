<?php

class TestModel extends Model 
{
    protected $table = 'users';

    /**
     * বর্তমান ডেটাবেসের নাম বের করার মেথড
     */
    public function getDatabaseName()
    {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->query("SELECT DATABASE()");
        return $stmt->fetchColumn();
    }

    /**
     * ডেটাবেসের সব টেবিলের তালিকা (List of Tables) বের করার মেথড
     */
    public function getTables()
    {
        $db = Database::getInstance()->getConnection();
        
        // SQL কোয়েরি রান করা
        $stmt = $db->query("SHOW TABLES");
        
        // FETCH_COLUMN ব্যবহার করা হয়েছে যাতে শুধু টেবিলের নামগুলো একটি সুন্দর Array হিসেবে আসে
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}