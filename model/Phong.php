<?php
class PHONG{
    private $idphong;
    private $loaiphong;
    private $gia;
    private $mota;
    private $hinhanh;
    private $trangthai;
    private $motangan;

    /**
     * Get the value of idphong
     */
    public function getIdphong()
    {
        return $this->idphong;
    }

    /**
     * Set the value of idphong
     */
    public function setIdphong($idphong): self
    {
        $this->idphong = $idphong;

        return $this;
    }

    /**
     * Get the value of loaiphong
     */
    public function getLoaiphong()
    {
        return $this->loaiphong;
    }

    /**
     * Set the value of loaiphong
     */
    public function setLoaiphong($loaiphong): self
    {
        $this->loaiphong = $loaiphong;

        return $this;
    }

    /**
     * Get the value of gia
     */
    public function getGia()
    {
        return $this->gia;
    }

    /**
     * Set the value of gia
     */
    public function setGia($gia): self
    {
        $this->gia = $gia;

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
     */
    public function setHinhanh($hinhanh): self
    {
        $this->hinhanh = $hinhanh;

        return $this;
    }
    public function layphonghoatdong(){// lấy những phòng đc sử dụng
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM phong WHERE trangthai = 1";
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
    public function layphongtheoten($name){// lấy những phòng đc sử dụng
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM phong WHERE trangthai = 1 and `TenPhong` like :name";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":name", '%'.$name.'%');
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
    public function layphongtheoid($name){// lấy những phòng đc sử dụng
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM phong WHERE trangthai = 1 and `id` like :name";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":name", $name);
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
    public function layphongtheoadminid($name){// lấy những phòng đc sử dụng
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM phong WHERE `id` like :name";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":name", $name);
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
    public function layphongadmin(){// lấy tất cả phòng
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM phong";
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
    public function themPhong($tenphong,$gia,$mota,$motangan,$hinhanh,$loaiphong){// lấy tất cả phòng
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO `phong`(`loaiphong`, `TenPhong`, `gia`, `mota`, `motangan`, `hinhanh`, `trangthai`) VALUES(:loaiphong,:tenphong,:gia,:mota,:motangan,:hinhanh,1)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":loaiphong", $loaiphong);
			$cmd->bindValue(":tenphong", $tenphong);
			$cmd->bindValue(":gia", $gia);
			$cmd->bindValue(":mota", $mota);
			$cmd->bindValue(":motangan", $motangan);
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
    public function datphong($iddatphong,$id,$idphong,$checkin,$checkout){// lấy tất cả phòng
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO `datphong`(id, `id_nguoidung`, `id_khachhang`, `id_phong`, `trangthai`, `ngaynhanphong`, `ngaytraphong`) VALUES ( :id,:id_nguoidung, :id_nguoidung, :id_phong,'0', :ngaynhanphong, :ngaytraphong)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $iddatphong);
            $cmd->bindValue(":id_nguoidung", $id);
			$cmd->bindValue(":id_phong", $idphong);
			$cmd->bindValue(":ngaynhanphong", $checkin);
			$cmd->bindValue(":ngaytraphong", $checkout);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    public function datphongct($iddatphong,$id,$idphong,$tongngay,$gia,$thanhtien){// lấy tất cả phòng
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO `donphong_ct`( `id_datphong`,`id_khachhang`, `id_phong`, `dongia`, `songay`, `thanhtien`) 
            VALUES (:idphong,:id_nguoidung,  :id_phong,:gia, :tongngay, :tongtien)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":idphong", $iddatphong);
            $cmd->bindValue(":id_nguoidung", $id);
			$cmd->bindValue(":id_phong", $idphong);
			$cmd->bindValue(":gia", $gia);
            $cmd->bindValue(":tongngay", $tongngay);
			$cmd->bindValue(":tongtien", $thanhtien);
            $result = $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn dat phong: $error_message</p>";
            exit();
        }
    }
    public function ktphongtheoid($id,$checkin,$checkout){// lấy những phòng đc sử dụng
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT * FROM `datphong` WHERE id_phong = :id and 
            
            ngaynhanphong BETWEEN str_to_date(:checkin,'%Y-%m-%d') AND str_to_date(:checkout,'%Y-%m-%d')or
            
            ngaytraphong BETWEEN str_to_date(:checkin,'%Y-%m-%d') AND str_to_date(:checkout,'%Y-%m-%d');";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->bindValue(":checkin", $checkin);
            $cmd->bindValue(":checkout", $checkout);
            $cmd->execute();
            $result = $cmd->fetch();
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn dat phong: $error_message</p>";
            exit();
        }
}
        public function layphongtheongay($checkin,$checkout){// lấy những phòng đc sử dụng
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT p.* FROM phong p,`datphong` dp WHERE p.id not like dp.id_phong and p.trangthai like '1' and
            
            dp.ngaynhanphong BETWEEN str_to_date(:checkin,'%Y-%m-%d') AND str_to_date(:checkout,'%Y-%m-%d') or
            
            dp.ngaytraphong BETWEEN str_to_date(:checkin,'%Y-%m-%d') AND str_to_date(:checkout,'%Y-%m-%d')GROUP BY p.id;";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":checkin", $checkin);
            $cmd->bindValue(":checkout", $checkout);
            $cmd->execute();
            $result = $cmd->fetchAll();
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn dat phong: $error_message</p>";
            exit();
        }
}
        
    public function layphongdadatadmin(){// lấy tất cả phòng
        $dbcon = DATABASE::connect();
        try{
            $sql = "SELECT p.*,dp.*,dpct.*,kh.* FROM phong p, datphong dp, donphong_ct dpct,khachhang kh WHERE p.id = dp.id_phong and dp.id = dpct.id_datphong and dp.id_khachhang = kh.id";
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
}
?>