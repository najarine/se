// function sendData(){
//     var username = document.getElementById('username').value;
//     var name = document.getElementById('fullname').value;
//     var email = document.getElementById('email').value;
//     var pwd = document.getElementById('pwd').value;
    
//     var url = "/regPost";
//     var data = {username: username, name: name, email: email, pwd: pwd};
//     let axiosConfig = {
//       headers: {
//           'Content-Type': 'application/json;charset=UTF-8',
//           "Access-Control-Allow-Origin": "*",
//       }
//     };


//     axios.post(url, data, axiosConfig)
//       .then(function (response) {
//         alert(response.data);
//       })
//       .catch(function (error) {
//         alert("failed!");
//       });
// }
function sendData(){
 let username= document.getElementById('username').value;
 let fullname= document.getElementById('fullname').value;
 let email= document.getElementById('email').value;
 let link_1= document.getElementById('link_1').value;
 let link_2= document.getElementById('link_2').value;
 let link_3= document.getElementById('link_3').value;
// alert(username+fullname+email+password);
  axios.post("/regPost",{username:username,fullname:fullname,email:email, link_1:link_1, link_2:link_2, link_3:link_3})
  .then(function(response){
    alert(response.data);
  }).catch(function(error){
    console.log(error);
  });
}