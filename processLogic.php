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
            $sql = "select description,mon_price,annual_price,sku from tbl_product_description where prod_id=$id";
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
        function createProduct($productDescription, $productValidity, $productCat)
        {
            $sqlquery = "select id from tbl_product where prod_name='$productCat'";
            $result = $GLOBALS['con']->query($sqlquery);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $productId = $row['id'];
                }
            } else {
                echo "<script>alert('Try again id')</script>";
            }
            $sql = "insert into tbl_product_description (id,prod_id,description,mon_price,annual_price,sku) values(NULL,'$productId','$productDescription','{$productValidity['Monthly Price']}','{$productValidity['Annual Price']}','{$productValidity['Sku']}')";
            if ($GLOBALS['con']->query($sql)) {
                echo "<script>alert('Product Added Successfully')</script>";
            } else {
                echo "<script>alert('Try again product')</script>";
            }
        }
        function viewProducts()
        {
            $sql = "select tbl_product.prod_name, tbl_product.prod_available, tbl_product.prod_launch_date, tbl_product_description.description, tbl_product_description.mon_price, tbl_product_description.annual_price, tbl_product_description.sku from tbl_product LEFT OUTER JOIN tbl_product_description ON tbl_product.id = tbl_product_description.prod_id";
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
    }
} else {
    echo '<script>alert("Try Again")</script>';
}
