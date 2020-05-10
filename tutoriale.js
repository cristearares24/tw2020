
window.onload = function checkProgress(){
    let prog = document.getElementsByClassName('prog')
    let j;
    for(j=0; j<prog.length; j++)
    {
        let x = j+1;
        let allRead = JSON.parse(localStorage.getItem('allRead' + x));
        let inProgress = JSON.parse(localStorage.getItem('inProgress' + x));
        if(allRead)
        {
           document.getElementById(prog[j].id).style.color = 'green';
        }
        else if(inProgress)
        {
           document.getElementById(prog[j].id).style.color = 'rgb(212,180,0)';
        }
    }
}

