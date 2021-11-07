$(document).ready(function(){
    
});

function removeProduct(id){
    $.ajax({
        type: "POST",
        url: "system/removeProductCart.php",
        data: {
            id : id
        },
        success: function(data){
            if(data == 'done'){
                location.reload();
            }
            else{
                alert("Something went wrong!!!");
            }
        },
        error: function(e){
            alert("Something went wrong!!!");
        }
    });
}

function setQut(id){
    $.ajax({
        type: "POST",
        url: "system/setQutCart.php",
        data: {
            id : id,
            qut : $('.qut'+id).val()
        },
        success: function(data){
            location.reload();
        },
        error: function(e){
            alert("Something went wrong!!!");
        }
    });
}