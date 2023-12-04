<?

// Duck class implementing both Flyable and Swimmable
class Duck implements Flyable, Swimmable {
    public function fly() {
        return "Flying...";
    }

    public function swim() {
        return "Swimming...";
    }
}