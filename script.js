// Get the modal
var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";

  }
  if (event.target == modal2) {
    
    modal2.style.display = "none";
  }
}












filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    var arr=x[i].className.split(" ");
    if (arr.indexOf("show") > -1) {
      arr.splice(arr.indexOf("show"), 1);     
    }
    x[i].className = arr.join(" ");
    
    
    if (x[i].className.indexOf(c) > -1) {
      if (arr.indexOf("show") == -1)
          x[i].className += " " +"show";
        
    }
    
    
  }
}



// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("btn active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";

    var current1 = document.getElementsByClassName("btn 1 active");
    current1[0].className = current1[0].className.replace(" active", "");
    this.className += " active";
  });
}















function sortSelection(c) {
  var x, i;
  x = document.getElementsByClassName("price");
  var l=x.length-1,k;
  
  if(c=="asc"){
    while(l>0){
      k=0;
      for (i=0;i<l;i++){
        var t=parseFloat(x[i].innerHTML);
        var r=parseFloat(x[i+1].innerHTML);
        
        if(t>r){
          document.getElementsByClassName("ro")[0].insertBefore(x[i + 1].parentNode.parentNode, x[i].parentNode.parentNode);
          
          k=i;
        }
      }
      if(k==0) break;
      l=k;
      
    }
  }
  else{
    while(l>0){
      k=0;
      for (i=0;i<l;i++){
        var t=parseFloat(x[i].innerHTML);
        var r=parseFloat(x[i+1].innerHTML);
        
        if(t<r){
          document.getElementsByClassName("ro")[0].insertBefore(x[i + 1].parentNode.parentNode, x[i].parentNode.parentNode);
          
          k=i;
        }
      }
      if(k==0) break;
      l=k;
      
    }

  }
    

}


