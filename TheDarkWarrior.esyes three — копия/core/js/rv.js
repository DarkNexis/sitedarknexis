var videoArray = [
'video.mp4',
'video1.mp4',
'video2.mp4',
'video3.mp4',
'video4.mp4'
];
var count = Math.floor(Math.random()  videoArray.length);
document.getElementsByTagName('source')[0].src = 'video' + videoArray[count];
var video = document.getElementById('bg_video');
video.load();
video.play();