$(document).ready(function(){

    // set needed vars
    var everMusicPlayer = $('#ever_audio')[0];
    var play_pause_button = $('.ever-music-button');

    // check in session storage if the player must play
    if (sessionStorage.getItem('ever-music-pause') === 'true') {
        everMusicPlayer.pause();
        play_pause_button.html('<i class="icon-play"></i>');
    } else {
        everMusicPlayer.play();
        play_pause_button.html('<i class="icon-pause"></i>');
    }

    // bind the play/pause button
    play_pause_button.click(function() {
        if (everMusicPlayer.paused == false) {
            everMusicPlayer.pause();
            sessionStorage.setItem('ever-music-pause', 'true');
            play_pause_button.html('<i class="icon-play"></i>');
        } else {
            everMusicPlayer.play();
            sessionStorage.setItem('ever-music-pause', 'false');
            play_pause_button.html('<i class="icon-pause"></i>');
        }
    });
});
