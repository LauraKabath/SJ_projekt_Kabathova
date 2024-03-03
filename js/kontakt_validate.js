/*formular alert nevyplnene polia*/
function validate(){
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const osobne_udaje = document.getElementById('check').checked;

    if (name.trim() === ''){
        return alert('Doplňte prosím vaše meno a prezvisko');
    };

    if(email.trim() === ''){
        return alert('Doplňte prosím vašu emailovú adresu');
    };

    if(!osobne_udaje){
        return alert('Súhlaste prosím so spracovaním osobných údajov');
    };
};
/*formular alert nevyplnene polia*/

/*alert close*/
function zavriet(){
    const alert = document.getElementById("Alert");
    alert.style.display = "none";
};
/*alert close*/