function loggedOut(pos){
      //document.write(pos + ' ');
      var c = document.getElementById(pos);
      var x = c.width/2; 
      var y = c.height/2;
      var ctx = c.getContext('2d');
      //ctx.rect(x, y, 100, 100);
      ctx.arc(x,y,37,0,2*Math.PI);
      ctx.fillStyle = '#2ECC71';
      ctx.fill();
}

function loggedIn(pos){
      //window.alert(pos);
      var c = document.getElementById(pos);
      var ctx = c.getContext('2d');
      xx += 100;
      ctx.rect(xx, 0, 75, 75);
      ctx.fillStyle = '#E74C3C';
      ctx.fill();
}

function setValue(value){

var textVal=value;//here u will get the entered text

}