<?php
class DB_driver
{
    // Biến lưu trữ kết nối
    private $__conn;
    function connect($host,$username,$password,$DB)
    {
       
        if (!$this->__conn){    
            $this->__conn = mysqli_connect($host, $username, $password,$DB)  or die ('Lỗi kết nối');
            mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
        }
    }
 
 
    function dis_connect($host,$username,$password,$DB){
        if ($this->__conn){
            mysqli_close($this->__conn);
        }
    }
 
    // Hàm Insert
    function insert($table, $data)
    {
        $this->connect('$host','$username','$password','$DB');
        $field_list = '';
        // Lưu trữ danh sách giá trị tương ứng với field
        $value_list = '';
 
        // Lặp qua data
        foreach ($data as $key => $value){
            $field_list .= ",$key";
            $value_list .= ",'".($value)."'";
        }
 
        // Vì sau vòng lặp các biến $field_list và $value_list sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'INSERT INTO '.$table. '('.trim($field_list, ',').') VALUES ('.trim($value_list, ',').')';
 
        return mysqli_query($this->__conn, $sql);
    }
 
    // Hàm Update
    function update($table, $data, $where)
    {
        // Kết nối
        $this->connect('$host','$username','$password','$DB');
        $sql = '';
        // Lặp qua data
        foreach ($data as $key => $value){
            $sql .= "$key = '".($value)."',";
        }
 
        // Vì sau vòng lặp biến $sql sẽ thừa một dấu , nên ta sẽ dùng hàm trim để xóa đi
        $sql = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where;
 
        return mysqli_query($this->__conn, $sql);
    }
 
    // Hàm delete
    function remove($table, $where){
        // Kết nối
        $this->connect('$host','$username','$password','$DB');
         
        // Delete
        $sql = "DELETE FROM $table WHERE $where";
        return mysqli_query($this->__conn, $sql);
    }
 
    // Hàm lấy danh sách
    function get_list($sql)
    {
        // Kết nối
        $this->connect('$host','$username','$password','$DB');
         
        $result = mysqli_query($this->__conn, $sql);
 
        if (!$result){
            die ('Câu truy vấn bị sai');
        }
 
        $return = array();
 
        // Lặp qua kết quả để đưa vào mảng
        while ($row = mysqli_fetch_assoc($result)){
            $return[] = $row;
        }
 
        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);
 
        return $return;
    }
 
    // Hàm lấy 1 record dùng trong trường hợp lấy chi tiết tin
    function get_row($sql)
    {
        // Kết nối
        $this->connect('$host','$username','$password','$DB');
         
        $result = mysqli_query($this->__conn, $sql);
 
        if (!$result){
            die ('Câu truy vấn bị sai');
        }
 
        $row = mysqli_num_rows($result);
 
        // Xóa kết quả khỏi bộ nhớ
        mysqli_free_result($result);
 
        if ($row){
            return $row;
        }
 
        return false;
    }
}
?>