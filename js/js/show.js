var masukanpass = document.getElementById('pswd'),
      chk  = document.getElementById('chk'),
      label = document.getElementById('showhide');


     chk.onclick = function () {

      if(chk.checked) {

           masukanpass.setAttribute('type', 'text');
           label.textContent = 'Sembunyikan Password';
       } else {

           masukanpass.setAttribute('type', 'password');
           label.textContent = 'Perlihatkan Password';
       }
 
     }