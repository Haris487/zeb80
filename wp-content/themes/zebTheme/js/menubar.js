/**
 * @author : Muhammad Haris Javed
 * @author_email : 'm.harisjaved487@gmail.com'
 */

/**
 * Menu Toggle button is that button which appears on mobile screen size
 * Display Menu When Clicked
 * @returns {MenuToggleButton}
 */
function getMenuToggleButton(){
    var toggleButton = document.getElementById('menu-toggle');
    console.log('getting menu toggle button');
    return toggleButton;
}

/**
 * 
 * @returns {navbar}
 */
function getNavBar(){
    var navbar = document.getElementById('nav');   
    console.log('getting nav bar');
    return navbar;
}

function menubar_toggle_listener(){
    console.log('menu bar toggled');
    menubar_toggle();
    
}

function menubar_show(){
    getNavBar().style.display = 'block';
}
function menubar_hide(){
    getNavBar().style.display = 'none';
}
function menubar_toggle(){
    if(getNavBar().style.display == 'block'){
        menubar_hide();
    }
    else{
        menubar_show();
    }
}



