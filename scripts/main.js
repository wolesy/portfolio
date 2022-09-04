



function pageLoad(){

  const main1 = document.getElementsByClassName('main-1')[0];





  main1.style.animationPlayState = "running";

  const main2Timer = setTimeout(main2Timeout, 500);
  const main3Timer = setTimeout(main3Timeout, 1000);
}

function main2Timeout(){
  const main2 = document.getElementsByClassName('main-2')[0];
  main2.style.animationPlayState = "running"
}

function main3Timeout(){
  const main3 = document.getElementsByClassName('main-3')[0];
  main3.style.animationPlayState = "running"
}
