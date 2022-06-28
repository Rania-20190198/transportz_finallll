function doSubmit() /*This function submits the order form once it has been completed*/

{
if (check() == false){
    alert("Oops! Validation failed!");

    return false;
}
if( checker() == false){
    alert("Oops! Validation failed!");

    return false;

}
else{
   window.location="driver_with_car.php";
    return true;
}


}