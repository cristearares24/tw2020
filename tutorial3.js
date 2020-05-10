let allRead = false;
let inProgress = false;

function myFunction(elem)
{
    document.getElementById(elem.id).style.background = "green";
    inProgress = true;
    localStorage.setItem('inProgress3', JSON.stringify(inProgress));
    let btn = document.getElementsByClassName('btn');
    let i;
    localStorage.setItem('btn3'+elem.id, JSON.stringify(true));
    for(i = 0; i < btn.length; i++)
    {
        if(btn[i].style.background != "green")
        {
            return;
        }
    }
    localStorage.setItem('allRead3', JSON.stringify(inProgress));
}

function startQuiz(){
    let allButtons = document.getElementsByClassName("btn");
    let i;
    for(i = 0; i < allButtons.length; i++)
    {
        if(allButtons[i].style.background != 'green')
        {
            alert('Trebuie sa cititi toti pasii inainte de a incepe quiz-ul');
            return;
        }
    }
    window.location.href = "quiz1.html";
}

window.onload = function(){
    let prog = document.getElementsByClassName('btn')
    let j;
    for(j = 0; j < prog.length; j++)
    {
        let btn = JSON.parse(localStorage.getItem('btn3' + prog[j].id));
        if(btn)
        {
            prog[j].style.background = 'green';
        }
    }
}