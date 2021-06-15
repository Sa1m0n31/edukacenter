/* Mobile menu */
const mobileMenu = document.querySelector(".mobileMenu");
const mobileMenuChildren = document.querySelectorAll(".mobileMenu>*");

const openMobileMenu = () => {
    mobileMenu.style.width = "100%";
    setTimeout(() => {
        mobileMenuChildren.forEach(item => {
            item.style.opacity = "1";
        });
    }, 500);
}

const closeMobileMenu = () => {
    mobileMenuChildren.forEach(item => {
        item.style.opacity = "0";
    });

    setTimeout(() => {
        mobileMenu.style.width = "0";
    }, 500);
}

/* FAQ toggle */
const faqToggle = (sec, n) => {
    const questionToToggle = document.querySelector(`.faq:nth-of-type(${sec})>.faq__item:nth-of-type(${n})>.faq__text`);
    const plusMinusToToggle = document.querySelector(`.faq:nth-of-type(${sec})>.faq__item:nth-of-type(${n})>.faq__question>.plusMinus`);
    console.log(questionToToggle);
    console.log(plusMinusToToggle);
    console.log(window.getComputedStyle(questionToToggle).getPropertyValue('height'));
    if(window.getComputedStyle(questionToToggle).getPropertyValue('height') === "0px") {
        /* Show question */
        plusMinusToToggle.textContent = "-";
        questionToToggle.style.height = "auto";
        questionToToggle.style.opacity = "1";
        questionToToggle.style.paddingTop = "30px";
    }
    else {
        /* Hide question */
        plusMinusToToggle.textContent = "+";
        questionToToggle.style.height = "0px";
        questionToToggle.style.opacity = "0";
        questionToToggle.style.paddingTop = "0";
    }
}