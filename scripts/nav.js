function navOpen() {

  const nav = document.getElementsByClassName('nav-container')[0];

  const navItem = document.getElementsByClassName('nav-item');
  const navItemBorder = document.getElementsByClassName('nav-item-border');
  const navButton = document.getElementsByClassName('menu-button')[0];

  navButton.style.visibility = 'hidden';


    nav.style.display = 'flex';

    for(let i = 0; i < navItem.length; i++){
    navItem[i].style.animation = 'menu-item-appear 0.5s 1';

    console.log(navItem[i].style.animation);
    console.log('animation');
  }
  for(let i = 0; i< navItemBorder.length; i++){
    navItemBorder[i].style.animation = 'nav-item-border 1s 1';
  }

    console.log('1');


}

function navClose(){
  const nav = document.getElementsByClassName('nav-container')[0];
  const navButton = document.getElementsByClassName('menu-button')[0];

  navButton.style.visibility = 'visible';
  nav.style.display = 'none';

}
