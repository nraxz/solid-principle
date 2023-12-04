<?
// Bird class implementing FlyableAndSwimmable
class Bird implements FlyableAndSwimmable {
    public function fly() {
        return "Flying...";
    }

    public function swim() {
        // Birds generally don't swim, so this method is irrelevant
        return "Sorry, I can't swim.";
    }
}