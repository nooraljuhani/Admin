<?php
$conn= mysqli_connect("localhost","root","","database 1");
class admin{
  public $Name;
  public $email;
  public $pass;

  public function insert($conn,$Name,$email,$pass)
      {
       $query="insert into admin(Full_name,Email,Password)
       values('$Name','$email','$pass')";
       $conn->query($query);
       }


  public function select($conn){
                $query = "select * from admin";
                $result=$conn->query($query);
                return $result;
            }       

public function selectadmin($conn,$id){
                $query = "select * from admin where Admin_ID=$id";
                $result=$conn->query($query);
                return $result;
            }   

  public  function delete($conn,$id)
    {
       $query ="delete from admin where Admin_ID= {$_GET['id']}";
        $conn->query($query);
    }
  public function edit($conn,$Name,$email,$pass,$id){
    $query = "update admin set
    Email   = '$email',
    Password = '$pass',
    Full_Name = '$Name'
    where Admin_ID =$id";
    $result=$conn->query($query);
                
              

  }
 
}
$x=new admin();

if(isset($_POST['submit'])){
$Name=$_POST['Full_Name'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$x->insert($conn,$Name,$email,$pass);
 }

?>