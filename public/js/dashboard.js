const records = [...document.querySelectorAll('.records-list tr')];
const navOptions = [...document.querySelectorAll('.menu-link')];

// navOptions.forEach((option, i) => {
//     if (option.classList.contains('active')) {
//         navOptions.splice(i, 1);
//     }
// });

records.forEach((record, i) => {
    record.style.animationDelay += 0.15 * i + "s";
});

navOptions.forEach((option, i) => {
    option.style.animationDelay += 0.15 * i + "s";
})
