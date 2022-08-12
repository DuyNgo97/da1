<?php 
    class findModel extends db{
        // tim theo ten sp
        public function find(){
            if(isset($_POST['btn-fi'])){
                $ten_sp = $_POST['ten_sp'];
                $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet
                FROM `sanpham` a
                INNER JOIN `hinhanh` b
                ON a.id_hinhanh = b.id_hinhanh
                INNER JOIN `company` c
                ON a.id_company = c.id_company
                INNER JOIN `loai_sp_chi_tiet` d
                ON a.id_loaispct = d.id_loaispct
                WHERE a.ten_sp
                LIKE N'%$ten_sp%' ";
                $result = mysqli_query($this -> conn, $sql);
                if(mysqli_num_rows($result) == 0){
                    return false;
                }else{
                    $arr = mysqli_fetch_all($result);
                    return json_encode($arr);
                }
            }
        }
        // tim theo hang xe
        public function findNC1(){
            if(isset($_POST['btn-fi'])){
                $hangxe = $_POST['hangxe'];
                $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet
                        FROM `sanpham` a
                        INNER JOIN `hinhanh` b
                        ON a.id_hinhanh = b.id_hinhanh
                        INNER JOIN `company` c
                        ON a.id_company = c.id_company
                        INNER JOIN `loai_sp_chi_tiet` d
                        ON a.id_loaispct = d.id_loaispct
                        WHERE a.ten_sp
                        LIKE N'%$hangxe%' ";
                $result = mysqli_query($this -> conn, $sql);
                if(mysqli_num_rows($result) == 0){
                    return false;
                }else{
                    $arr = mysqli_fetch_all($result);
                    return json_encode($arr);
                }
            }
        }
        // tim theo loai sp
        public function findNC2(){
            if(isset($_POST['btn-fi'])){
                $loaisp = $_POST['loaisp'];
                $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                        FROM `sanpham` a
                        INNER JOIN `hinhanh` b
                        ON a.id_hinhanh = b.id_hinhanh
                        INNER JOIN `company` c
                        ON a.id_company = c.id_company
                        INNER JOIN `loai_sp_chi_tiet` d
                        ON a.id_loaispct = d.id_loaispct
                        INNER JOIN `loaisp` e
                        ON a.id_loaisp = e.id_loaisp
                        WHERE e.ten_loaisp
                        LIKE N'%loaisp%' ";
                $result = mysqli_query($this -> conn, $sql);
                if(mysqli_num_rows($result) == 0){
                    return false;
                }else{
                    $arr = mysqli_fetch_all($result);
                    return json_encode($arr);
                }
            }
        }
        // tim theo gia
        public function findNC3(){
            
        }

        // click oto
        public function click_oto(){
            $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                    FROM `sanpham` a
                    INNER JOIN `hinhanh` b
                    ON a.id_hinhanh = b.id_hinhanh
                    INNER JOIN `company` c
                    ON a.id_company = c.id_company
                    INNER JOIN `loai_sp_chi_tiet` d
                    ON a.id_loaispct = d.id_loaispct
                    INNER JOIN `loaisp` e
                    ON a.id_loaisp = e.id_loaisp
                    WHERE e.ten_loaisp
                    LIKE N'%xe ô tô%' ";
            $result = mysqli_query($this -> conn, $sql);
            if(mysqli_num_rows($result) == 0){
                return false;
            }else{
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
        }

        //click mer
        public function click_mer(){
            $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                    FROM `sanpham` a
                    INNER JOIN `hinhanh` b
                    ON a.id_hinhanh = b.id_hinhanh
                    INNER JOIN `company` c
                    ON a.id_company = c.id_company
                    INNER JOIN `loai_sp_chi_tiet` d
                    ON a.id_loaispct = d.id_loaispct
                    INNER JOIN `loaisp` e
                    ON a.id_loaisp = e.id_loaisp
                    WHERE c.ten_company
                    LIKE N'%Mercedes Benz%'";
            $result = mysqli_query($this -> conn, $sql);
            if(mysqli_num_rows($result) == 0){
                return false;
            }else{
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
        }
        //click BMW
        public function click_bmw(){
            $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                    FROM `sanpham` a
                    INNER JOIN `hinhanh` b
                    ON a.id_hinhanh = b.id_hinhanh
                    INNER JOIN `company` c
                    ON a.id_company = c.id_company
                    INNER JOIN `loai_sp_chi_tiet` d
                    ON a.id_loaispct = d.id_loaispct
                    INNER JOIN `loaisp` e
                    ON a.id_loaisp = e.id_loaisp
                    WHERE c.ten_company
                    LIKE N'%BMW%'";
            $result = mysqli_query($this -> conn, $sql);
            if(mysqli_num_rows($result) == 0){
                return false;
            }else{
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
        }
        //click AUDI
        public function click_audi(){
            $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                    FROM `sanpham` a
                    INNER JOIN `hinhanh` b
                    ON a.id_hinhanh = b.id_hinhanh
                    INNER JOIN `company` c
                    ON a.id_company = c.id_company
                    INNER JOIN `loai_sp_chi_tiet` d
                    ON a.id_loaispct = d.id_loaispct
                    INNER JOIN `loaisp` e
                    ON a.id_loaisp = e.id_loaisp
                    WHERE c.ten_company
                    LIKE N'%AUDI%'";
            $result = mysqli_query($this -> conn, $sql);
            if(mysqli_num_rows($result) == 0){
                return false;
            }else{
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
        }
        //click honda
        public function click_honda(){
            $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                    FROM `sanpham` a
                    INNER JOIN `hinhanh` b
                    ON a.id_hinhanh = b.id_hinhanh
                    INNER JOIN `company` c
                    ON a.id_company = c.id_company
                    INNER JOIN `loai_sp_chi_tiet` d
                    ON a.id_loaispct = d.id_loaispct
                    INNER JOIN `loaisp` e
                    ON a.id_loaisp = e.id_loaisp
                    WHERE c.ten_company
                    LIKE N'%HONDA%'";
            $result = mysqli_query($this -> conn, $sql);
            if(mysqli_num_rows($result) == 0){
                return false;
            }else{
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
        }
        //click phu tung
        public function click_phutung(){
            $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                    FROM `sanpham` a
                    INNER JOIN `hinhanh` b
                    ON a.id_hinhanh = b.id_hinhanh
                    INNER JOIN `company` c
                    ON a.id_company = c.id_company
                    INNER JOIN `loai_sp_chi_tiet` d
                    ON a.id_loaispct = d.id_loaispct
                    INNER JOIN `loaisp` e
                    ON a.id_loaisp = e.id_loaisp
                    WHERE e.ten_loaisp
                    LIKE N'%phụ kiện%'";
            $result = mysqli_query($this -> conn, $sql);
            if(mysqli_num_rows($result) == 0){
                return false;
            }else{
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
        }
        //click gương
        public function click_guong(){
            $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                    FROM `sanpham` a
                    INNER JOIN `hinhanh` b
                    ON a.id_hinhanh = b.id_hinhanh
                    INNER JOIN `company` c
                    ON a.id_company = c.id_company
                    INNER JOIN `loai_sp_chi_tiet` d
                    ON a.id_loaispct = d.id_loaispct
                    INNER JOIN `loaisp` e
                    ON a.id_loaisp = e.id_loaisp
                    WHERE d.name_chitiet
                    LIKE N'%guong%'";
            $result = mysqli_query($this -> conn, $sql);
            if(mysqli_num_rows($result) == 0){
                return false;
            }else{
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
        }
        //click đèn xe
        public function click_light(){
            $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                    FROM `sanpham` a
                    INNER JOIN `hinhanh` b
                    ON a.id_hinhanh = b.id_hinhanh
                    INNER JOIN `company` c
                    ON a.id_company = c.id_company
                    INNER JOIN `loai_sp_chi_tiet` d
                    ON a.id_loaispct = d.id_loaispct
                    INNER JOIN `loaisp` e
                    ON a.id_loaisp = e.id_loaisp
                    WHERE d.name_chitiet
                    LIKE N'%light%'";
            $result = mysqli_query($this -> conn, $sql);
            if(mysqli_num_rows($result) == 0){
                return false;
            }else{
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
        }
        //click camera
        public function click_cam(){
            $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                    FROM `sanpham` a
                    INNER JOIN `hinhanh` b
                    ON a.id_hinhanh = b.id_hinhanh
                    INNER JOIN `company` c
                    ON a.id_company = c.id_company
                    INNER JOIN `loai_sp_chi_tiet` d
                    ON a.id_loaispct = d.id_loaispct
                    INNER JOIN `loaisp` e
                    ON a.id_loaisp = e.id_loaisp
                    WHERE d.name_chitiet
                    LIKE N'%camera%'";
            $result = mysqli_query($this -> conn, $sql);
            if(mysqli_num_rows($result) == 0){
                return false;
            }else{
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
        }
        //click giá < 500tr
        public function click_N500(){
            $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                    FROM `sanpham` a
                    INNER JOIN `hinhanh` b
                    ON a.id_hinhanh = b.id_hinhanh
                    INNER JOIN `company` c
                    ON a.id_company = c.id_company
                    INNER JOIN `loai_sp_chi_tiet` d
                    ON a.id_loaispct = d.id_loaispct
                    INNER JOIN `loaisp` e
                    ON a.id_loaisp = e.id_loaisp
                    WHERE a.gia_sp
                    LIKE a.gia_sp < 500000000 ";
            $result = mysqli_query($this -> conn, $sql);
            if(mysqli_num_rows($result) == 0){
                return false;
            }else{
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
        }
        //click giá 500tr - 1t
        public function click_1t(){
            $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                    FROM `sanpham` a
                    INNER JOIN `hinhanh` b
                    ON a.id_hinhanh = b.id_hinhanh
                    INNER JOIN `company` c
                    ON a.id_company = c.id_company
                    INNER JOIN `loai_sp_chi_tiet` d
                    ON a.id_loaispct = d.id_loaispct
                    INNER JOIN `loaisp` e
                    ON a.id_loaisp = e.id_loaisp
                    WHERE a.gia_sp
                    LIKE a.gia_sp > 500000000 AND a.gia_sp < 1000000000 ";
            $result = mysqli_query($this -> conn, $sql);
            if(mysqli_num_rows($result) == 0){
                return false;
            }else{
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
        }
        //click giá > 1t
        public function click_L1t(){
            $sql = "SELECT a.*, b.url_main, c.ten_company, d.name_chitiet, e.ten_loaisp
                    FROM `sanpham` a
                    INNER JOIN `hinhanh` b
                    ON a.id_hinhanh = b.id_hinhanh
                    INNER JOIN `company` c
                    ON a.id_company = c.id_company
                    INNER JOIN `loai_sp_chi_tiet` d
                    ON a.id_loaispct = d.id_loaispct
                    INNER JOIN `loaisp` e
                    ON a.id_loaisp = e.id_loaisp
                    WHERE a.gia_sp
                    LIKE a.gia_sp > 1000000000 ";
            $result = mysqli_query($this -> conn, $sql);
            if(mysqli_num_rows($result) == 0){
                return false;
            }else{
                $arr = mysqli_fetch_all($result);
                return json_encode($arr);
            }
        }
    }
?>