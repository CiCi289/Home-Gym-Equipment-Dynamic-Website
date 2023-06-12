<?php 
include('connect.php');

// $create="CREATE TABLE Customer
// (
// 	CustomerID int NOT NULL Primary Key AUTO_INCREMENT,
// 	CustomerFirstName varchar(150),
//    CustomerSurName varchar(150),
// 	CustomerPhone varchar(200),
// 	CustomerAddress varchar(255),
// 	CustomerEmail varchar(255),
// 	CustomerPassword varchar(255),
// 	CustomerProfile text,
//    ViewCount int
// )";

// $query=mysqli_query($connection,$create);
// 	if($query) 
// 	{
// 		echo "<p>Customer Register Successful!</p>";
// 	}



// $create ="CREATE TABLE ContactUs
// (
//    ContactID int NOT NULL Primary Key AUTO_INCREMENT,
//    ContactName varchar(150),
//    ContactEmail varchar(255),
//    ContactMessage text,
//    ContactTimestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
// )";

// $query=mysqli_query($connection,$create);
// 	if($query) 
// 	{
// 		echo "<p>ContactUs Table Successful!</p>";
// 	}



// $create="CREATE TABLE Product
// (
// 	ProductID int NOT NULL Primary Key AUTO_INCREMENT,
// 	ProductName varchar(255),
// 	ProductPrice Decimal(10,2),
// 	ProductQuantity int,
// 	ProductImage1 text, 
// 	ProductImage2 text,
// 	ProductDescription text,
// 	ProductTypeID int,
//    ProductCategoryID int,
// 	Foreign Key (ProductTypeID) references ProductType (ProductTypeID),
//    Foreign Key (ProductCategoryID) references ProductCategory (ProductCategoryID)
// )";

// 	$query=mysqli_query($connection,$create);
// 	if($query) 
// 	{
// 		echo "<p>Product Table Successful</p>";
// 	}



// $create="CREATE TABLE ProductType
// (
// 	ProductTypeID int NOT NULL Primary Key AUTO_INCREMENT,
// 	ProductTypeName varchar(30)
// )";

// 	$query=mysqli_query($connection,$create);
// 	if($query) 
// 	{
// 		echo "<p>Product Type Table Successful</p>";
// 	}




// $create="CREATE TABLE ProductCategory
// (
// 	ProductCategoryID int NOT NULL Primary Key AUTO_INCREMENT,
// 	ProductCategoryName varchar(40)
// )";

// 	$query=mysqli_query($connection,$create);
// 	if($query) 
// 	{
// 		echo "<p>ProductCategory Table Successful</p>";
// 	}



// $create ="CREATE TABLE ProductEnquiry
// (
//    ProductEnquiryID int NOT NULL Primary Key AUTO_INCREMENT,
//    ProductEnquiryName varchar(150),
//    ProductEnquiryEmail varchar(255),
//    ProductEnquiryMessage text,
//    ProductEnquiryTimestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
// )";

// $query=mysqli_query($connection,$create);
// 	if($query) 
// 	{
// 		echo "<p>ProductEnquiry Table Successful!</p>";
// 	}



// $create="CREATE TABLE Booking
// (
// 	BookingID int NOT NULL Primary Key AUTO_INCREMENT,
//    BookingName varchar(150),
//    BookingEmail varchar(255),
//    BookingMessage text,
//    BookingTimestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
//    BookingReasonID int,
//    Foreign Key (BookingReasonID) references BookingReason (BookingReasonID)
// )";

// 	$query=mysqli_query($connection,$create);
// 	if($query) 
// 	{
// 		echo "<p>Booking Table Successful</p>";
// 	}




// $create="CREATE TABLE BookingReason
// (
// 	BookingReasonID int NOT NULL Primary Key AUTO_INCREMENT,
// 	BookingReasonName varchar(40)
// )";

// 	$query=mysqli_query($connection,$create);
// 	if($query) 
// 	{
// 		echo "<p>BookingReason Table Successful</p>";
// 	}



////////////////////////////////////////////////////////////
// $create = "CREATE TABLE Orders
// (
//    OrderID varchar(30) NOT NULL Primary Key,
//    OrderDate date,
//    CustomerID int,
//    OrderTotalAmount int,
//    Tax int,
//    AllTotal int,
//    OrderQuantity int,
//    Remark varchar(30),
//    PaymentType varchar(30),
//    OrderLocation varchar(100),
//    OrderPhone varchar(30),
//    OrderStatus varchar(30),
//    Foreign Key (CustomerID) references Customer (CustomerID)
// )";

// $query = mysqli_query($connection,$create);
// if ($query)
//    {
//    	echo "<p>Orders Register Successful</p>";
//    }





// $create = "CREATE TABLE OrderDetails
// (
//    OrderID varchar(30) NOT NULL,
//    ProductID int NOT NUll,
//    ProductPrice int,
//    BuyQty int,
//    Primary Key (OrderID , ProductID),
//    Foreign Key (OrderID) references Orders (OrderID),
//    Foreign Key (ProductID) references Product (ProductID)
// )";

// $query = mysqli_query($connection,$create);
// if ($query)
//    {
//    	echo "<p>Order Details Register Successful</p>";
//    }




// $create = "CREATE TABLE Staff
// (
// 	StaffID int NOT NULL Primary Key AUTO_INCREMENT,
// 	StaffName varchar(70),
// 	StaffPosition varchar(50),
// 	StaffAge int,
// 	StaffEmail varchar(200),
//    StaffPassword varchar(255),
// 	StaffPhone varchar(200),
// 	StaffAddress varchar(255),
// 	StaffProfile text
// )";

// $query = mysqli_query($connection,$create);
// if ($query)
//    {
//    	echo "<p>Staff Register Successful</p>";
//    }


?>
