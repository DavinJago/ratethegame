function animateCount(id, target) {
    let count = 0;
    let speed = target / 80; // Adjusted speed for smoother feel
    let element = document.getElementById(id);

    let updateCount = () => {
        count += speed;
        if (count < target) {
            element.innerText = Math.ceil(count).toLocaleString() + "+";
            setTimeout(updateCount, 30);
        } else {
            element.innerText = target.toLocaleString() + "+";
        }
    };
    updateCount();
}

window.onload = () => {
    animateCount('count-games', 1500);
    animateCount('count-users', 8500);
    animateCount('count-reviews', 12000);
};