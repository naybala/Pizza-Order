<?php
$viewPage = @$_REQUEST['page'];

switch ($viewPage) {
    
    case "registerProduct";
        $mainPage = "login-register/register/registerProduct.php";
        break;
    case "registerCategory";
        $mainPage = "login-register/register/registerCategory.php";
        break;
    case "home_page";
        $mainPage = "login-register/admin/admin-component/home_page.php";
        break;
    case "dashboard_page";
        $mainPage = "login-register/admin/admin-component/dashboard_page.php";
        break;
    case "employee_page";
        $mainPage = "login-register/admin/admin-component/employee_page.php";
        break;
    case "admin_home_page";
        $mainPage = "login-register/admin/admin-component/home_page.php";
        break;
    case "categories_page";
        $mainPage = "login-register/admin/admin-component/categories_page.php";
        break;
    case "products_page";
        $mainPage = "login-register/admin/admin-component/products_page.php";
        break;
    case "aboutme";
        $mainPage = "login-register/admin/admin-component/about_me.php";
        break;
    ///-------------------------------------------------------------

    ///--------------------------------------------------------------
    case "customer";
        $mainPage = "login-register/customer/customer.php";
        break;
    case "changePassword";
        $mainPage = "login-register/admin/employee-register/change_password.php";
        break;
    case "editEmployeePersonal";
        $mainPage = "login-register/admin/employee-register/editEmployeePersonal.php";
        break;
    case "editEmployee";
        $mainPage = "login-register/admin/employee-register/editEmployee.php";
        break;
    case "deleteEmployee";
        $mainPage = "login-register/admin/employee-register/deleteEmployee.php";
        break;
    case "deleteProduct";
        $mainPage = "login-register/admin/product-category-operation/deleteProduct.php";
        break;
    case "editProduct";
        $mainPage = "login-register/admin/product-category-operation/editProduct.php";
        break;
    case "deleteCategory";
        $mainPage = "login-register/admin/product-category-operation/deleteCategory.php";
        break;
    case "editCategory";
        $mainPage = "login-register/admin/product-category-operation/editCategory.php";
        break;
    case "ui";
        $mainPage = "indexui.php";
        break;
    case "login";
        $mainPage = "login-register/login/login.php";
        break;
    case "register";
        $mainPage = "login-register/register/register.php";
        break;
    case "employeeRegister";
        $mainPage = "login-register/admin/employee-register/employeeRegister.php";
        break;
    case "registerEmployeeRole";
        $mainPage = "login-register/admin/employee-register/employeeRoleRegister.php";
        break;
    case "customerDeatil";
        $mainPage = "login-register/customer/customerDetail.php";
        break;
    case "logout";
        $mainPage = "indexui.php";
        break;
    case "back";
        $mainPage = "indexui.php";
        break;
    /////////////////////////////////category+product///////////////////////////////////////
    case "pizzaCategoryDetail";
        $mainPage = "login-register/customer/customer-component/pizza_category_detail.php";
        break;
    case "pizzaProductDetail";
        $mainPage = "login-register/customer/customer-component/pizza_product_detail.php";
        break;
    case "cartPage";
        $mainPage = "login-register/customer/customer-component/cart_page.php";
        break;
    case "deleteCart";
        $mainPage = "login-register/customer/customer-component/delete_cart_page.php";
        break;
    case "checkout";
        $mainPage = "login-register/customer/customer-component/check_out.php";
        break;
    case "checkoutconfirm";
        $mainPage = "login-register/customer/customer-component/check_out_confirm_page.php";
        break;
    default:
        $mainPage = "indexui.php";

}