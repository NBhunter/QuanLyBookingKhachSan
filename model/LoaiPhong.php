<?php
class LOAIPHONG{

    public function layloaiphong(){// lấy những phòng đc sử dụng
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM loaiphong ";
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
    public function layloaiphongtheoid($id){// lấy tất cả phòng
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM loaiphong where id = :id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->execute();
            $result = $cmd->fetch();
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
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
     */
    public function setTrangthai($trangthai): self
    {
        $this->trangthai = $trangthai;

        return $this;
    }

    /**
     * Get the value of mota
     */
    public function getMota()
    {
        return $this->mota;
    }

    /**
     * Set the value of mota
     */
    public function setMota($mota): self
    {
        $this->mota = $mota;

        return $this;
    }

    /**
     * Get the value of motangan
     */
    public function getMotangan()
    {
        return $this->motangan;
    }

    /**
     * Set the value of motangan
     */
    public function setMotangan($motangan): self
    {
        $this->motangan = $motangan;

        return $this;
    }
    public function themPhong($tenphong,$gia,$mota,$motangan){// lấy tất cả phòng
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO `phong`(`id`, `loaiphong`, `TenPhong`, `gia`, `mota`, `motangan`, `hinhanh`, `trangthai`) VALUES(";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tenmathang", $tenmathang);
			$cmd->bindValue(":mota", $mota);
			$cmd->bindValue(":giagoc", $giagoc);
			$cmd->bindValue(":giaban", $giaban);
			$cmd->bindValue(":soluongton", $soluongton);
			$cmd->bindValue(":danhmuc_id", $danhmuc_id);
			$cmd->bindValue(":hinhanh", $hinhanh);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    
}
?>