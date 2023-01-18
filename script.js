function Upload(){
        alert("File Successfully Uploaded");   
        "<h1>"+greeting()+"</h1>"+document.getElementById("UpFile").innerHTML;
}
function greeting(){
    var name=document.getElementById("name").value;
    if(name==""){
        alert("Enter valid name");
    }
    
    else{
        alert("sign in successfull")
    }
    return name;
    
    
}