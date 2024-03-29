<?php

class NGUOIDUNG{
   
    private $hoten;
    private $chucvu;
    private $mssv;
    private $email;
    private $matkhau;
    private $loainguoidung;
    private $trangthai;
    private $hinhanh;
    private $linkgithub;
    private $thongtin;

    
    private $id;
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of hoten
     */ 
    public function getHoten()
    {
        return $this->hoten;
    }

    /**
     * Set the value of hoten
     *
     * @return  self
     */ 
    public function setHoten($hoten)
    {
        $this->hoten = $hoten;

        return $this;
    }

    public function getChucvu()
    {
        return $this->chucvu;
    }

    /**
     * Set the value of hoten
     *
     * @return  self
     */ 
    public function setChucvu($chucvu)
    {
        $this->chucvu = $chucvu;

        return $this;
    }
  
    /**
     * Get the value of sodienthoai
     */ 
    public function getMssv()
    {
        return $this->mssv;
    }

    /**
     * Set the value of sodienthoai
     *
     * @return  self
     */ 
    public function setMssv($mssv)
    {
        $this->mssv =$mssv;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of matkhau
     */ 
    public function getMatkhau()
    {
        return $this->matkhau;
    }

    /**
     * Set the value of matkhau
     *
     * @return  self
     */ 
    public function setMatkhau($matkhau)
    {
        $this->matkhau = $matkhau;

        return $this;
    }

    /**
     * Get the value of loainguoidung
     */ 
    public function getLoainguoidung()
    {
        return $this->loainguoidung;
    }

    /**
     * Set the value of loainguoidung
     *
     * @return  self
     */ 
    public function setLoainguoidung($loainguoidung)
    {
        $this->loainguoidung = $loainguoidung;

        return $this;
    }

    /**
     * Get the value of trangthai
     */ 
    public function getTrangthai()
    {
        return $this->trangthai;
    }

    /**
     * Set the value of trangthai
     *
     * @return  self
     */ 
    public function setTrangthai($trangthai)
    {
        $this->trangthai = $trangthai;

        return $this;
    }

    /**
     * Get the value of hinhanh
     */ 
    public function getHinhanh()
    {
        return $this->hinhanh;
    }

    /**
     * Set the value of hinhanh
     *
     * @return  self
     */ 
    public function setHinhanh($hinhanh)
    {
        $this->hinhanh = $hinhanh;

        return $this;
    }

    /**
     * Get the value of linkgithub
     */ 
    public function getLinkgithub()
    {
        return $this->linkgithub;
    }

    /**
     * Set the value of linkgithub
     *
     * @return  self
     */ 
    public function setLinkgithub($linkgithub)
    {
        $this->linkgithub = $linkgithub;

        return $this;
    }
    // lấy danh sách ngừoi dùng mức 1
    public function laynguoidung(){
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM nguoidung WHERE loainguoidung = 1";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $result = $cmd->fetchAll();
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

    public function kiemtranguoidungbac1($email, $matkhau){
        $dbcon= DATABASE::connect();
        try{
            $sql= "SELECT * FROM nguoidung WHERE email=:email AND matkhau=:matkhau AND trangthai=1 AND loainguoidung= '1'";
            $cmd=$dbcon->prepare($sql);
            $cmd->bindValue(":email", $email);
            $cmd->bindValue(":matkhau", md5($matkhau));
             $cmd->execute(); 
             $result =($cmd->rowCount()==1);
             $cmd->closeCursor();           
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    public function kiemtranguoidungbac2($email, $matkhau){
        $dbcon= DATABASE::connect();
        try{
            $sql= "SELECT * FROM nguoidung WHERE email=:email AND matkhau=:matkhau AND trangthai=1 AND loainguoidung= '2'";
            $cmd=$dbcon->prepare($sql);
            $cmd->bindValue(":email", $email);
            $cmd->bindValue(":matkhau", md5($matkhau));
             $cmd->execute(); 
             $result =($cmd->rowCount()==1);
             $cmd->closeCursor();           
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    public function kiemtranguoidungdadk($email){
        $dbcon= DATABASE::connect();
        try{
            $sql= "SELECT * FROM nguoidung WHERE email=:email AND trangthai=1 AND loainguoidung= '2'";
            $cmd=$dbcon->prepare($sql);
            $cmd->bindValue(":email", $email);
             $cmd->execute(); 
             $result =($cmd->rowCount()==1);
             $cmd->closeCursor();           
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
        public function laythongtinnguoidunghople($email ){
            $dbcon= DATABASE::connect();
            try{
                $sql= "SELECT * FROM nguoidung WHERE email=:email ";
                $cmd=$dbcon->prepare($sql);
                $cmd->bindValue(":email", $email);
                
                 $cmd->execute(); 
                 $result =$cmd ->fetch();
            
                return $result;
            }
            catch(PDOException $e){
                $error_message = $e->getMessage();
                echo "<p>Lỗi truy vấn: $error_message</p>";
                exit();
            }
        }


    public function themnguoidung($id){
        
        $name="";
        $ngaysinh="";
        $tuoi = "";
        $cccd= "";
        $sdt = "";
        $email ="";
        $password="";
        $reset="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["txtname"])) { $name = $_POST["txtname"]; }
            if(isset($_POST["ngaysinh"])) { $ngaysinh = $_POST['ngaysinh']; $diff = date_diff(date_create(), date_create($ngaysinh));  $tuoi =  $diff->format('%Y');            }
            if(isset($_POST["txtcccd"])) { $cccd = $_POST["txtcccd"]; }
            if(isset($_POST["sdt"])) { $sdt = $_POST['sdt']; }
            if(isset($_POST["txtemail"])) { $email = $_POST["txtemail"]; }
            if(isset($_POST["password"])) { $password = $_POST['password']; }
            if(isset($_POST["reset"])) { $reset = $_POST['reset']; }
            if($password == $reset){ $password = md5($password);
            }
            // var_dump($id);
            $sql = "INSERT INTO `nguoidung`(`id`, `hoten`, `email`, `matkhau`, `loainguoidung`, `trangthai` ) 
            VALUES ('$id','$name','$email','$password',2,1)";
            $sql2 = "INSERT INTO `khachhang`(`id`, `idnguoidung`, `hoten`, `sodienthoai`, `cccd`, tuoi) 
            VALUES ('$id','$id','$name','$sdt','$cccd','$tuoi')";
       
$dbcon = DATABASE::connect();
try{
    
    $cmd = $dbcon->prepare($sql);
    $cmd->execute();
    $cmd = $dbcon->prepare($sql2);
    $cmd->execute();
    $result = $cmd->fetchAll();
    
    return $result;
}
catch(PDOException $e){
    $error_message = $e->getMessage();
    echo "<p>Lỗi truy vấn: $error_message</p>";
    exit();
}
$dbcon->close();
    }}

    /**
     * Get the value of thongtin
     */ 
    public function getThongtin()
    {
        return $this->thongtin;
    }

    /**
     * Set the value of thongtin
     *
     * @return  self
     */ 
    public function setThongtin($thongtin)
    {
        $this->thongtin = $thongtin;

        return $this;
    }
    public function suakhachhang($ten,$sdt,$id){
        $dbcon = DATABASE::connect();
        try{
            $sql = "UPDATE `khachhang` SET `hoten`=:ten,`sodienthoai`=:sdt WHERE `id`=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":ten", $ten);
            $cmd->bindValue(":sdt", $sdt);
            $cmd->bindValue(":id", $id);
            $result = $cmd->execute();   
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn3: $error_message</p>";
            exit();
        }
    }
}

?>