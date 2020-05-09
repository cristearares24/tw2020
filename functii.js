var allRead = false;
var inProgress = false;

function myFunction(elem)
{
    document.getElementById(elem.id).style.background = "green";
}

function startQuiz(){
    var allButtons = document.getElementsByClassName("btn");
    var i;
    for(i = 0; i < allButtons.length; i++)
    {
        if(allButtons[i].style.background != 'green')
        {
            alert('Trebuie sa cititi toti pasii inainte de a incepe quiz-ul');
            return;
        }
        inProgress = true;
    }
    allRead = true;
    window.location.href = "quiz1.html";
}

//function checkProgress(elem){
   // alert(allRead);
    //if(allRead)
    //{
       // document.getElementById(elem.id).style.background = 'green';
    //}
    //else if(inProgress)
    //{
     //   document.getElementById(elem.id).style.background = 'yellow';
    //}
//}

