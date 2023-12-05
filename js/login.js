$(document).ready(function(){
    const loginFrm = document.getElementById('loginForm');
    const btnCreateAcc = document.getElementById('btnCreateAcc');

    btnCreateAcc.addEventListener('click',function(){
      window.location.href = 'register.php';
    })

    loginFrm.addEventListener('submit', async (e) => {
      e.preventDefault();
    
      const formData = new FormData(loginFrm);
    
      try {
        const response = await fetch('checkLoginData.php', {
          method: 'POST',
          body: formData,
        });

        const returnBody = await response.text();

        console.log(returnBody);
    
        if (response.ok) {
          window.location.href="index.php";
        } else {
          const jsonObj = JSON.parse(returnBody)
          const paragraph = document.getElementById("errMessage");
          paragraph.innerHTML = jsonObj.message;
          paragraph.style.color="red";
        }
      } catch (error) {
        console.error('Error On Login', error);
      }
    });
});



  
