var userName=document.getElementById("userName");
var email=document.getElementById("email");
var phoneNumber=document.getElementById("phoneNumber");
var picture=document.getElementById("picture");
var address=document.getElementById("address");
var pinCode=document.getElementById("pinCode");
var dateOfBirth=document.getElementById("dateOfBirth");
var password=document.getElementById("password");
var passConform=document.getElementById("passConform");
var passwordLabel=document.getElementById("passwordLabel");
var passConformLabel=document.getElementById("passConformLabel");
var dateOfBirthLabel=document.getElementById('dateOfBirthLabel');

var userEmailLog=document.getElementById("userEmailLog");
var passwordLog=document.getElementById("passwordLog");
var passwordLogLabel=document.getElementById('passwordLogLabel');

const name = /^([a-zA-Z][a-zA-Z0-9 _]*)$/;
const Email=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const phone= /^\d{10}$/;
const pin=/\d+/;

const arr=[[name,userName,"Name Invalied"],
[Email,email,"Invalied Email",email],
[phone,phoneNumber,"Invalied Phone Number"],
[pin,pinCode,"Invalied Pin Code"]
];

const passwordCheck=[
    [/^(?=.{8,})/," must be longer than 8 chars"],
    [/^(?=.*[a-z])/," must contain at least 1 lowercase letter"],
    [/(?=.*[A-Z])/," must contain at least 1 uppercase letter"],
    [/(?=.*[0-9])/," must contain at least 1 number"],
    [/^(?=.*[!@#\$%\^&\*])/," must contain at least 1 special character"],
    ];


function userLogIn(){
    let userData={uEmail:userEmailLog.value,
                  uPassword:passwordLog.value}

    if(!enterUserData(userData,"logIn")){
        passwordLogLabel.innerHTML="Incorrect UserName or Password";
        passwordLog.value="";
    }else{
        passwordLogLabel.innerHTML="";
    }
}    

function userLogOut(){
    $.ajax({  
        type:"POST",  
        url:"admin/Inc/dataEnter.php",  
        data:{enterData:"logOut"},  
        success:function(Data){  
                window.location.href ="index.php";
        }  
     });
}


function submitData(){
    var isValied=true;
    arr.forEach(element => {
        var check=checkData(element);
        isValied=isValied?check:false;
    }); 

    if(address.value.trim()==""){
        changeData([null,address,"Invalied Address"]);
        isValied=false;
    }else{
        address.classList.remove('placeholderColor');
    }

    if(dateOfBirth.value==""){
        isValied=false;
        dateOfBirth.value="";
        dateOfBirthLabel.innerHTML=' Select Date Of Birth';
    }else{
        dateOfBirthLabel.innerHTML='';
    }
    const newArr=[[password,passwordLabel],[passConform,passConformLabel]];
    newArr.forEach(pass => {
        for (let element of passwordCheck) {
            if(!element[0].test(pass[0].value)){
                isValied=false;
                pass[0].value="";
                pass[1].innerHTML=element[1];
                break;
            }
            else{
                pass[1].innerHTML="";
            } 
        }
    });
    if(isValied){
        if(password.value!=passConform.value){
            passConformLabel.innerHTML="password not same";   
            isValied=false
        }
        else{
          passConformLabel.innerHTML="";   
        }
    }
    if(isValied){
        $.ajax({  
            async:false,
            type:"POST",  
            url:"admin/Inc/dataEnter.php",  
            data:{userEmail:email.value,enterData:"emailCheck"},  
            success:function(Data){  
                // alert(Data);
                    if(Data!="succeed"){
                        changeData([null,email,"Email alrady Exist"])
                        isValied=false;
                    }else{
                        email.classList.remove('placeholderColor');
                    }
                } 
         }); 
    }
    
    if(isValied){   
    var userData={uName:userName.value,   //Enter Data to the dataBase
                   uEmail:email.value,
                   uPhone:phoneNumber.value,
                   uPicture:"#",
                   uAddress:address.value,
                   uDateOfBirth:dateOfBirth.value,
                   uPinCode:pinCode.value,
                   uPassword:password.value
               }
    enterUserData(userData,"register");    
    }
}
             
function checkData(element){
    if(!element[0].test(element[1].value)){
        changeData(element);
        return false;
    }
    else{
        element[1].classList.remove('placeholderColor');
        return true;
    } 
}

function changeData(element){
    element[1].value="";
    element[1].classList.add('placeholderColor');
    element[1].placeholder=element[2];
}


function enterUserData(userData,enterdata){
    let isValied=true;
    $.ajax({  
        async: false,
        type:"POST",  
        url:"admin/Inc/dataEnter.php",  
        data:{user:userData,enterData:enterdata},  
        success:function(Data){ 
            if(Data=="succeed"){
                window.location.href ="index.php";
            }else{
               isValied=false;
            }
        }  
     }); 
    return isValied;

}





// slider javascript
 
var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 35,
    loop: true,
    autoplay: {
        delay: 1300,
      },
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });




