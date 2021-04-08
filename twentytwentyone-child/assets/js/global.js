document.addEventListener("DOMContentLoaded", function () {

    const bannerButtons = document.querySelector('.banner-buttons'),
        title = document.querySelector('.banner__title'),
        time = document.querySelector('.countdown');

    let showTimer = true;

    // Make Title different color

    bannerButtons.addEventListener('click', function (e) {

        let target = e.target;

        if (target.classList.contains('banner-buttons__item')) {
            title.style.color = target.getAttribute('data-color');

            showTimer ? showCounter() : '';
        }

    })

    // Counter

    function showCounter() {

        showTimer = false

        let currDay = moment().unix(),
            endDay = moment('30-04-2021 12:00:00', 'DD-MM-YYYY HH:mm:ss').unix(),
            diffTime = endDay - currDay;

        if (diffTime > 0) {
            let duration = moment.duration(diffTime * 1000, 'milliseconds'),
                interval = 1000;

            setInterval(function () {
                duration = moment.duration(duration.asMilliseconds() - interval, 'milliseconds');

                time.innerHTML = `
            ${Math.floor(duration.asWeeks())} weeks
            ${duration.days() % 7 ? duration.days() % 7 : ''} ${duration.days() % 7 ? 'days' : ''}
            ${duration.hours()} hours
            : ${duration.minutes()} min
            : ${duration.seconds()} sec`
            }, interval)
        }
    }
});
