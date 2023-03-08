const records = [...document.querySelectorAll('.records-list tr')];


records.forEach((record, i) => {
    record.style.animationDelay += 0.15 * i + "s";
});
