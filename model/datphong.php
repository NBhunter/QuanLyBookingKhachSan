<?php
class DATPHONG{

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
    public function kiemtraphongtheoid($id,$checkin,$checkout){// lấy tất cả phòng
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

    public function datphong($id,$idphong,$checkin,$checkout){// lấy tất cả phòng
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO `datphong`( `id_nguoidung`, `id_khachhang`, `id_phong`, `trangthai`, `ngaynhanphong`, `ngaytraphong`) VALUES ( :id_nguoidung, :id_nguoidung, :id_phong,'0', :ngaynhanphong, :ngaytraphong)";
            $cmd = $dbcon->prepare($sql);
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
    public function datphongct($id,$idphong,$tongngay,$gia,$thanhtien){// lấy tất cả phòng
        $dbcon = DATABASE::connect();
        try{
            $sql = "INSERT INTO `donphong_ct`( `id_khachhang`, `id_phong`, `dongia`, `songay`, `thanhtien`) 
            VALUES (:id_nguoidung,  :id_phong,:gia, :tongngay, :tongtien)";
            $cmd = $dbcon->prepare($sql);
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
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    
}
?>