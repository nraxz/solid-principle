<?

// Fish class implementing FlyableAndSwimmable
class Fish implements FlyableAndSwimmable {
    public function fly() {
        // Fish can't fly, so this method is irrelevant
        return "Sorry, I can't fly.";
    }

    public function swim() {
        return "Swimming...";
    }
}