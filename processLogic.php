<?php
require 'connection.php';
if ($con) {

    class common
    {
        function mapVisitor($uname, $password)
        {
            $sql = "select * from tbl_user where email='$uname' and password='$password'";
            $result = $GLOBALS['con']->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($row['is_admin'] == '0') {
                        return 1;
                    } else {
                        return 2;
                    }
                }
            } else {
                return 0;
            }
        }
        function productDescription($id)
        {
            $sql = "select id, description,mon_price,annual_price,sku from tbl_product_description where prod_id=$id";
            $result = $GLOBALS['con']->query($sql);
            if ($result->num_rows > 0) {
                $i = 0;
                while ($row = $result->fetch_assoc()) {
                    $j = 0;
                    foreach ($row as $data) {
                        $arr[$i][$j] = $data;
                        $j++;
                    }
                    $i++;
                }
                return $arr;
            }
        }
        function signUp($name, $email, $mobile, $password, $sq, $sa)
        {
            $sql = "insert into tbl_user (email, name, mobile, email_approved, phone_approved, active, is_admin, password, security_question, security_answer) values ('$email','$name','$mobile','1','1','1','0','$password','$sq','$sa')";
            if ($GLOBALS['con']->query($sql)) {
                return 1;
            } else {
                return 0;
            }
        }
        function addProductInCart($id,$plan){
            $sql = "select description, $plan from tbl_product_description where id=$id";
            $result = $GLOBALS['con']->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    return $row;
                }
            }
        }
    }


    class admin
    {
        function addcategory($productName)
        {
            $sql = "INSERT INTO tbl_product (id, prod_parent_id, prod_name, prod_available, prod_launch_date) VALUES (NULL, '1', '$productName', '1', current_timestamp());";
            if ($GLOBALS['con']->query($sql)) {
                echo "<script>alert('Category Successfully Entered')</script>";
            } else {
                echo "<script>alert('Try again')</script>";
            }
        }
        function selectCategory()
        {
            $sql = "select id,prod_name from tbl_product where prod_parent_id='1' and prod_available='1'";
            $result = $GLOBALS['con']->query($sql);
            if ($result->num_rows > 0) {
                $i = 0;
                while ($row = $result->fetch_assoc()) {
                    $arr[$row['id']] = $row['prod_name'];
                    $i++;
                }
                return $arr;
            }
        }
        function createProduct($productDescription, $productValidity, $productCat, $productName)
        {
            $sqlquery = "select id from tbl_product where prod_name='$productCat'";
            $result = $GLOBALS['con']->query($sqlquery);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $productId = $row['id'];
                }
            } else {
                return 0;
            }
            $sql3 = "select prod_parent_id,prod_name from tbl_product where prod_parent_id='$productId' and prod_name='$productName'";
            $result2 = $GLOBALS['con']->query($sql3);
            if ($result2->num_rows > 0) {
                return 1;
            } else {
                $sql = "insert into tbl_product_description (id,prod_id,description,mon_price,annual_price,sku) values(NULL,'$productId','$productDescription','{$productValidity['Monthly Price']}','{$productValidity['Annual Price']}','{$productValidity['Sku']}')";
                $sql2 = "insert into tbl_product (prod_parent_id, prod_name, prod_available) values('$productId','$productName', '1')";
                if ($GLOBALS['con']->query($sql) && $GLOBALS['con']->query($sql2)) {
                    return 2;
                } else {
                    return 3;
                }
            }
        }
        function viewProducts()
        {
            $sql = "select id, description, mon_price, annual_price, sku from tbl_product_description order by prod_id";
            $result = $GLOBALS['con']->query($sql);
            if ($result->num_rows > 0) {
                $i = 0;
                while ($row = $result->fetch_assoc()) {
                    $j = 0;
                    foreach ($row as $data) {
                        $arr[$i][$j] = $data;
                        $j++;
                    }
                    $i++;
                }
                return $arr;
            }
        }
        function deleteProduct($id, $name)
        {
            $sql = "delete from tbl_product_description where id='$id'";
            $sql2 = "delete from tbl_product where prod_name='$name'";
            if ($GLOBALS['con']->query($sql) && $GLOBALS['con']->query($sql2)) {
                return 1;
            } else {
                return 0;
            }
        }
    }
} else {
    echo '<script>alert("Try Again")</script>';
}
