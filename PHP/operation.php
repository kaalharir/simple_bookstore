<?php
require_once("db.php");
require_once("component.php");


$con = Createdb();

// create button click
if (isset($_POST['create'])) {
    // createData(); // Assuming createData() is the function to create data in the database
    // echo "Create button clicked";
    createData();
}
function createData()
{
    // $bookname = $_POST['book_name'];
    $bookname = textboxValue("book_name");
    $bookpublisher = textboxValue("book_publisher");
    $bookprice = textboxValue("book_price");

    if ($bookname && $bookpublisher && $bookprice) {
        $sql = "INSERT INTO books (book_name, book_publisher, book_price) 
                        VALUES ('$bookname', '$bookpublisher', '$bookprice')";

        if (mysqli_query($GLOBALS['con'], $sql)) {
            // TextNode("success", "Record Successfully Inserted...!");
            echo "Record Successfully Inserted...!";
        } else {
            echo "Error";
        }
    } else {
        // TextNode("error", "Provide Data in the Textbox");
        echo "Provide Data in the Textbox";
    }
}
function textboxValue($value)
{
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if (empty($textbox)) {
        return false;
    } else {
        return $textbox;
    }
}
