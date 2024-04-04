function toggleMenu() {
    const information = document.querySelector('.information');
    const infor = document.querySelector('.infor');
    const liElements = infor.querySelectorAll('li');
    const back = document.querySelector('.back');

    back.style.display = "block";
    back.style.position = "fixed";
    back.style.top = "20px";
    back.style.right = "20px";
    back.style.fontSize = "30px";
    back.style.color = "white";  
    infor.style.display = "block";
    infor.style.padding = "0";
    information.style.transition = "all 0.5s ease"; 
    information.style.position = "fixed";
    information.style.top = "0";
    information.style.left = "0";
    information.style.right = "0";
    information.style.bottom = "0";
    information.style.zIndex = "1000";
    information.style.backgroundImage = "linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRK8CDU580NEtYkovwUsjFUT4dz6meEANB_A&usqp=CAU')";   
    information.style.backgroundSize = "cover"; 
    information.style.display = "flex"; 
    information.style.justifyContent = "center"; 
    information.style.alignItems = "center"; 

    liElements.forEach(li => {
        li.style.setProperty('text-align', 'center');
        li.style.margin = "20px";
        li.style.setProperty('padding-inline-start', '0');
        li.style.fontSize = "30px";
        li.style.fontWeight = "700";
    });
}



function handleResize() {
    resetMenu();
}
if (login() === false / Logoutview() === false) {
    // Lắng nghe sự kiện resize và gọi lại resetMenu()
    window.addEventListener('resize', handleResize);
}
// Gọi resetMenu() lần đầu tiên khi trang được tải
resetMenu();
function handleEnrolClick() {
    const register = document.querySelector('.register');
    if (window.innerWidth <= 768) {
        const information = document.querySelector('.information');
        information.style.display = "none";
    }
    register.style.display = "block";
    register.style.overflow = "auto";
}
function handleHome() {
    const register = document.querySelector('.register');
    const signin = document.querySelector('.signin');
    const logout2 = document.querySelector('.logout2');
    register.style.display = "none";
    signin.style.display = "none";
    logout2.style.display = "none";
}

function PassType() {
    const showBtn = document.querySelector("#show");
    const passField = document.querySelector(".pass");

    if (passField.type === "password") {
        passField.type = "text";
        showBtn.classList.remove("fa-eye");
        showBtn.classList.add("fa-eye-slash");
    } else {
        passField.type = "password";
        showBtn.classList.remove("fa-eye-slash");
        showBtn.classList.add("fa-eye");
    }
}
function PassType2() {
    const showBtn = document.querySelector("#show2");
    const passField = document.querySelector(".pass2");

    if (passField.type === "password") {
        passField.type = "text";
        showBtn.classList.remove("fa-eye");
        showBtn.classList.add("fa-eye-slash");
    } else {
        passField.type = "password";
        showBtn.classList.remove("fa-eye-slash");
        showBtn.classList.add("fa-eye");
    }
}
function Signin() {
    const signin = document.querySelector('.signin');
    const register = document.querySelector('.register');
    if (window.innerWidth <= 768) {
        const information = document.querySelector('.information');
        information.style.display = "none";
    }
    register.style.display = "none";
    signin.style.display = "block";
}

function Login() {
    const signin = document.querySelector('.signin');
    const register = document.querySelector('.register');
    register.style.display = "block";
    signin.style.display = "none";
}
function Logoutview() {
    const logout = document.querySelector('.logout');
    const caret = document.querySelector('.caret-down');
    const menu = document.querySelector('.menu-icon');
    const logout2 = document.querySelector('.logout2');
    if (window.innerWidth <= 768) {
        menu.style.display = "none";
        logout.style.display = "none";
        logout2.style.display = "block";     
    }
    else {
        // Kiểm tra trạng thái hiển thị của logout và thực hiện tương ứng
        if (logout.style.display === "block") {
            logout.style.display = "none";
            caret.style.transform = "rotate(0deg)"; 
        } else {
            logout.style.display = "block";
            caret.style.transform = "rotate(270deg)"; 
        }
    }
}


function Logout() {
    window.location.href = ""; 
}
function ClickHomePage() {
    const nav3 = document.querySelector('.nav3');
    const home = document.querySelector('.home');
    const change = document.querySelector('.change');
    nav3.style.display ="block";
    nav3.style.height = "100%";
    change.style.display = "block";
    home.style.display = "block";
    home.style.position = "fixed";
}