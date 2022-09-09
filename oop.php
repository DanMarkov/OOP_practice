<?
abstract class smartphones {
    function camera() {
        echo "записываю звук и видео <br>";
    }

    function OS(){
        echo "операционная система <br>";
    }
}

class googlePixels extends smartphones {
    function camera() {
        echo "у меня 16МП разрешение камеры <br>";
    }

    function OS() {
        echo "У меня android 12 <br>";
    }
}

class iphones extends smartphones {
    function camera() {
        echo " у меня 12МП разрешение камеры <br>";
    }

    function OS() {
        echo "У меня IOS 16 <br>";
    }
}

$googlePhone = new googlePixels;
$googlePhone -> camera();
$googlePhone -> OS();

$iphone = new iphones;
$iphone -> camera();
$iphone -> OS();