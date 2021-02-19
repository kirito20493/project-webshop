<?php
include_once './config/DBconnect.php';
class TransactionModel extends DBConnect
{
    //get data in transaction database
    public function getAllDataTransaction(){
        $sql = "SELECT * FROM transaction";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    //get data in transaction database by transactionID
    public function getDataTransactionByID($id){
        $sql = "SELECT * FROM transaction WHERE id = '$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Delete transaction
    public function deleteTransaction($id){
        $sql = "DELETE FROM `transaction` WHERE id = '$id'";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // check Isset transaction by userID with status = 0;
    public function checkIssetTransactionWithUserID($userID){
        $sql = "SELECT * FROM transaction WHERE user_id = '$userID' AND status = 0";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Update transaction's Amount when add new Order
    public function updateAmountTransaction($id,$amount){
        $sql = "UPDATE transaction SET amount = '$amount' WHERE id = '$id';";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Update transaction's Amount when delete Order
    public function updateAmountTransactionDEL($id,$amount){
        $sql = "UPDATE transaction SET amount = '$amount' WHERE id = '$id';";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Update transaction's status when payed
    public function updateStatusTransaction($id){
        $sql = "UPDATE transaction SET status = '1' WHERE id = '$id';";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
    // Creat new Transaction
    public function addTransaction($userID,$userEmail){
        $sql = "INSERT INTO transaction(`status`, `user_id`, `user_email`, `amount`) 
        VALUES ('0','$userID','$userEmail','0')";
        $result = mysqli_query($this->connect(),$sql);
        return $result;
    }
}
?>