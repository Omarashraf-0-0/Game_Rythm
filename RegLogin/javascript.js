PersonData={
  username:"",
  password:"",
  dateofbirth:"",
}
function processForm() {
  PersonData.username= document.getElementById("username").value;
  PersonData.password= document.getElementById("password").value;
  change();
}
function change()
{
  let main=document.getElementById("main");
  main.innerHTML=`<span style="color:gold; display: flex;
  justify-content: center;"><h1>Welcome mr, ${PersonData.username}</h1></span>
  <a href="index.html">Go back</a>`;
}


