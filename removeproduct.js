function removeProduct() {
    var del = document.getElementById("selected-product");
    if(del){
        del.remove();
    }
    return alert('Removed successfully');
}