let videos = document.querySelectorAll('.hover-play');

videos.forEach(video => {
    video.addEventListener('mouseover', function() {
        this.play();
    });

    video.addEventListener('mouseout', function() {
        this.pause();
    });
});