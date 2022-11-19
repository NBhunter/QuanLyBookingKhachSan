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
}
?>